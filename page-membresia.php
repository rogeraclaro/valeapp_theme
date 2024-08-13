<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ValeApp
 */

get_header();
acf_form_head();

// Verificación del usuario logueado
if (is_user_logged_in()) {
    $current_user = wp_get_current_user();
    $user_roles = $current_user->roles;

    // Verificación del rol del usuario
    if (in_array('proveedorvaleapp', $user_roles)) {

        // Obtener el post_id y la membresía seleccionada
        $post_id = get_current_user_post_id();
        $data = get_field('cuentanos_mas_sobre_ti', $post_id);
        $membership_data = $data['membresia'];
        $selected_membership = $membership_data->tipo_de_membresia; // Obtener el título de la membresía seleccionada

        // Configurar la consulta para obtener todas las membresías
        $args = array(
            'post_type' => 'membresia',
            'posts_per_page' => -1,
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            $memberships = array();

            // Almacenar los resultados en un array para ordenarlos
            while ($query->have_posts()) {
                $query->the_post();

                $fields = array(
                    'tipo_de_membresia' => get_field('tipo_de_membresia'),
                    'frecuencia_de_facturacion' => get_field('frecuencia_de_facturacion'),
                    'precio' => get_field('precio'),
                    'areas_de_trabajo' => get_field('areas_de_trabajo'),
                    'cantidad_de_trabajos' => get_field('cantidad_de_trabajos'),
                    'comision' => get_field('comision'),
                    'trabajos_sin_comision' => get_field('trabajos_sin_comision'),
                    'notificacion' => get_field('notificacion'),
                    'reporting' => get_field('reporting'),
                    'gold_vale_user_10' => get_field('gold_vale_user_10%')
                );

                // Añadir los resultados al array de membresías
                $memberships[] = $fields;
            }

            // Ordenar las membresías por precio de menor a mayor
            usort($memberships, function ($a, $b) {
                return $a['precio'] - $b['precio'];
            });

?>
<section class="Membership">
  <div class="Membership-frequency">
    <h2 class="Membership-frequency-title">La teva subscripció actual és:<?= $selected_membership ?></h2>
  </div>
  <div class="Membership-plans">
    <div class="container">
      <div class="row justify-content-center align-items-start">
        <?php
                            foreach ($memberships as $fields) {
                                // Determinar si la membresía es la seleccionada o no
                                $is_active = ($fields['tipo_de_membresia'] === $selected_membership);
                                $membership_class = $is_active ? '' : 'desactivate';
                            ?>
        <div class="col-12 col-sm-4">
          <div class="Membership-plan <?php echo esc_attr($membership_class); ?>">
            <div class="Membership-plan-name"><?php echo esc_html($fields['tipo_de_membresia']); ?></div>
            <div class="Membership-plan-price"><?php echo esc_html($fields['precio']); ?><span>€</span></div>

            <?php
                                        $plan_items = array(
                                            'Àrees' => $fields['areas_de_trabajo'],
                                            'Treballs' => $fields['cantidad_de_trabajos'],
                                            'Comissió' => $fields['comision'],
                                            'Treballs sense Comissió' => $fields['trabajos_sin_comision'],
                                            'Notificació' => $fields['notificacion'],
                                            'Informes' => $fields['reporting']
                                        );

                                        foreach ($plan_items as $label => $value) {
                                        ?>
            <div class="Membership-plan-row">
              <p class="Membership-plan-text"><?php echo esc_html($label); ?></p>
              <p class="Membership-plan-value"><?php echo esc_html($value); ?></p>
            </div>
            <?php
                                        }
                                        ?>

            <!-- Butlletí patrocinat HTML quemado -->
            <div class="Membership-plan-row">
              <p class="Membership-plan-text">Butlletí patrocinat</p>
              <p class="Membership-plan-cancel">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-membership-cancel.png"
                  alt="valeapp" />
              </p>
            </div>

            <?php //Manejar el checkbox de Gold Vale User (10%) 
                                        ?>
            <div class="Membership-plan-row">
              <p class="Membership-plan-text">Gold Vale user (10%)</p>
              <p class="Membership-plan-<?php echo is_array($fields['gold_vale_user_10']) ? 'success' : 'cancel'; ?>">
                <img
                  src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-membership-<?php echo is_array($fields['gold_vale_user_10']) ? 'success' : 'cancel'; ?>.png"
                  alt="valeapp" />
              </p>
            </div>
          </div>
        </div>
        <?php
                            }
                            ?>
      </div>
    </div>
  </div>
</section>
<?php
            wp_reset_postdata();
        } else {
            echo '<p>No se encontraron membresías.</p>';
        }
    } else {
        // Mensaje si el usuario no tiene el rol adecuado
        echo '<p>No tienes permiso para acceder a esta página.</p>';
    }
} else {
    // Mensaje si el usuario no está logueado
    echo '<p>Debes iniciar sesión para ver esta página.</p>';
}

get_footer();
?>