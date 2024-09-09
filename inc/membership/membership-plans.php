<?php

/**
 * Función para obtener todos los planes de membresía desde ACF
 */
function get_all_memberships()
{
  $args = [
    'post_type' => 'membresia',
    'posts_per_page' => -1,
  ];

  $query = new WP_Query($args);
  $memberships = [];

  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();

      // Verificar si el campo 'producto_recurrente' existe antes de obtenerlo
      $product = get_field('producto_recurrente');
      $product_id = $product ? $product->ID : null;
      error_log($product_id);

      $memberships[] = [
        'titulo' => get_the_title(),
        'tipo_de_membresia' => get_field('tipo_de_membresia'),
        'frecuencia_de_facturacion' => get_field('frecuencia_de_facturacion'),
        'precio' => get_field('precio'),
        'areas_de_trabajo' => get_field('areas_de_trabajo'),
        'cantidad_de_trabajos' => get_field('cantidad_de_trabajos'),
        'comision' => get_field('comision'),
        'trabajos_sin_comision' => get_field('trabajos_sin_comision'),
        'notificacion' => get_field('notificacion'),
        'reporting' => get_field('reporting'),
        'gold_vale_user_10' => get_field('gold_vale_user_10%'),
        'butlleti_patrocinat' => get_field('butlleti_patrocinat'),
        'product_id' => $product_id, // Validar que el producto esté disponible
      ];
    }
    wp_reset_postdata();

    // Ordenar las membresías por precio
    usort($memberships, function ($a, $b) {
      return $a['precio'] - $b['precio'];
    });
  }

  return $memberships;
}

/**
 * Función para obtener la suscripción activa del usuario logueado
 */
function get_user_active_subscription()
{
    if (!is_user_logged_in()) {
        return null;
    }

    $user_id = get_current_user_id();

    // Obtener todas las suscripciones del usuario
    $subscriptions = wcs_get_users_subscriptions($user_id);

    foreach ($subscriptions as $subscription) {
        if ($subscription->has_status('active')) {
            // Obtener los productos vinculados a la suscripción
            $items = $subscription->get_items();

            foreach ($items as $item) {
                $product_id = $item->get_product_id();

                // Verificar si el producto está vinculado con una membresía
                $linked_membership = find_membership_by_product($product_id);

                if ($linked_membership) {
                    return [
                        'subscription_id' => $subscription->get_id(),
                        'membership' => $linked_membership
                    ];
                }
            }
        }
    }

    return null;
}

/**
 * Función para encontrar una membresía vinculada a un producto
 */
function find_membership_by_product($product_id)
{
    $args = [
        'post_type' => 'membresia',
        'posts_per_page' => -1,
    ];

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();

            // Obtener el campo 'producto_recurrente', que es un objeto WP_Post
            $linked_product = get_field('producto_recurrente');

            // Verificar si 'producto_recurrente' devuelve un objeto WP_Post y obtener el ID
            if ($linked_product && isset($linked_product->ID)) {
                $linked_product_id = $linked_product->ID;

                // Comparar el ID del producto
                if ($linked_product_id == $product_id) {
                    return [
                        'titulo' => get_the_title(),
                        'precio' => get_field('precio'),
                        'frecuencia_de_facturacion' => get_field('frecuencia_de_facturacion')
                    ];
                }
            }
        }
        wp_reset_postdata();
    }

    return null;
}