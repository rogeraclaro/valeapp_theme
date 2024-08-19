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
        'product_id' => get_field('producto_recurrente'),
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
 * Función para obtener la membresía seleccionada del usuario logueado
 */
function get_user_selected_membership()
{
  if (!is_user_logged_in()) return null;

  $post_id = get_current_user_post_id();
  $data = get_field('cuentanos_mas_sobre_ti', $post_id);

  return $data['membresia']->post_title ?? null;
}
