<?php

/**
 * Template Name: Membresia
 * @package ValeApp
 */

get_header();
$is_user_logged_in = is_user_logged_in();

// Verificación del usuario y obtención de membresías
if ($is_user_logged_in) {
  $selected_membership = get_user_selected_membership();
  $memberships = get_all_memberships();
} else {
  echo '<p>Debes iniciar sesión para ver esta página.</p>';
  get_footer();
  exit;
}
?>

<section class="Membership">
  <div class="Membership-frequency">
    <h2 class="Membership-frequency-title">La teva subscripció actual és: <?= esc_html($selected_membership) ?></h2>
  </div>
  <div class="Membership-plans">
    <div class="container">
      <div class="row justify-content-center align-items-start">
        <?php foreach ($memberships as $fields): ?>
        <div class="col-12 col-sm-4">
          <?php
            // Verificar si el plan es el actual del usuario
            $is_current_plan = ($fields['titulo'] === $selected_membership);
            if ($is_user_logged_in) {
              $membership_class = $is_current_plan ? 'active-plan' : 'desactivate';
            } else {
              $membership_class = ''; // No agregar ninguna clase si el usuario no está logueado
            }
            $button_text = $is_current_plan ? 'Membresía Activa' : 'Contractar';

            // Usar las variables globales
            global $membership_fields, $membership_class, $button_text, $is_current_plan;
            $membership_fields = $fields;
            $membership_class = $membership_class;
            $button_text = $button_text;
            $is_current_plan = $is_current_plan;

            // Llamar al partial
            get_template_part('template-parts/membership/membership', 'plan');
            ?>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>