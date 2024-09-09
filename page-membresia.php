<?php

/**
 * Template Name: Membresia
 * @package ValeApp
 */

get_header();

$is_user_logged_in = is_user_logged_in();
$user_membership = get_user_active_subscription(); // Obtener la suscripción activa del usuario

// Validación de si el usuario está logueado
if (!$is_user_logged_in) {
    echo '<p>Debes iniciar sesión para ver esta página.</p>';
    get_footer();
    exit;
}

// Obtener todas las membresías
$memberships = get_all_memberships();

?>

<section class="Membership">
  <div class="Membership-frequency">
    <h2 class="Membership-frequency-title">Comença ara mateix!</h2>
  </div>
  <div class="Membership-plans">
    <div class="container">
      <div class="row justify-content-center align-items-start">
        <?php foreach ($memberships as $fields): ?>
        <div class="col-12 col-sm-4">
          <?php
            // Verificar si el plan es el mismo que la membresía activa del usuario
            $is_current_plan = ($user_membership && $fields['titulo'] === $user_membership['membership']['titulo']);

            // Definir la clase CSS para el estado del plan
            $membership_class = '';
            if ($is_user_logged_in) {
                $membership_class = $is_current_plan ? 'active-plan' : 'deactivate';
            }

            // Definir el texto y estilo del botón
            $button_text = $is_current_plan ? 'Cancelar' : 'Contractar';
            $button_style = $is_current_plan ? 'button-cancel' : '';

            // Generar la URL de la suscripción si es el plan activo
            $subscription_url = '';
            if ($is_current_plan && isset($user_membership['subscription_id'])) {
                $subscription_url = '/el-meu-compte/view-subscription/' . $user_membership['subscription_id'] . '/';
            }

            // Usar las variables globales
            global $membership_fields, $membership_class, $button_text, $button_style, $is_current_plan, $subscription_url;
            $membership_fields = $fields;
            $membership_class = $membership_class;
            $button_text = $button_text;
            $button_style = $button_style;
            $is_current_plan = $is_current_plan;
            $subscription_url = $subscription_url;

            // Llamar al partial para mostrar el plan
            get_template_part('template-parts/membership/membership', 'plan');
          ?>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>