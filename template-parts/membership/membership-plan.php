<?php
// Asegurarse de que las variables globales estén definidas
global $membership_fields, $membership_class, $button_text, $is_current_plan, $button_style, $subscription_url;
$is_user_logged_in = is_user_logged_in();

if (!is_array($membership_fields)) {
  return; // Si no es un array, no procesar
}
?>

<div class="Membership-plan <?php echo esc_attr($membership_class); ?>">
  <div class="Membership-plan-name"><?php echo esc_html($membership_fields['titulo']); ?></div>
  <div class="Membership-plan-price"><?php echo esc_html($membership_fields['precio']); ?><span>€</span></div>

  <?php
  // Definir los elementos del plan a mostrar
  $plan_items = [
    'Àrees' => $membership_fields['areas_de_trabajo'],
    'Treballs' => $membership_fields['cantidad_de_trabajos'],
    'Comissió' => $membership_fields['comision'],
    'Treballs sense Comissió' => $membership_fields['trabajos_sin_comision'],
    'Notificació' => $membership_fields['notificacion'],
    'Informes' => $membership_fields['reporting']
  ];

  // Mostrar los elementos del plan
  foreach ($plan_items as $label => $value): ?>
  <div class="Membership-plan-row">
    <p class="Membership-plan-text"><?php echo esc_html($label); ?></p>
    <p class="Membership-plan-value"><?php echo esc_html($value); ?></p>
  </div>
  <?php endforeach; ?>

  <div class="Membership-plan-row">
    <p class="Membership-plan-text">Butlletí patrocinat</p>
    <p
      class="Membership-plan-<?php echo (!empty($membership_fields['butlleti_patrocinat']) && is_array($membership_fields['butlleti_patrocinat'])) ? 'success' : 'cancel'; ?>">
      <img
        src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-membership-<?php echo (!empty($membership_fields['butlleti_patrocinat']) && is_array($membership_fields['butlleti_patrocinat'])) ? 'success' : 'cancel'; ?>.png"
        alt="valeapp" />
    </p>
  </div>

  <div class="Membership-plan-row">
    <p class="Membership-plan-text">Gold Vale user (10%)</p>
    <p
      class="Membership-plan-<?php echo (!empty($membership_fields['gold_vale_user_10']) && is_array($membership_fields['gold_vale_user_10'])) ? 'success' : 'cancel'; ?>">
      <img
        src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-membership-<?php echo (!empty($membership_fields['gold_vale_user_10']) && is_array($membership_fields['gold_vale_user_10'])) ? 'success' : 'cancel'; ?>.png"
        alt="valeapp" />
    </p>
  </div>

  <?php if (!$is_current_plan): ?>
  <?php if ($is_user_logged_in && $membership_fields['product_id']):
        $product_id = $membership_fields['product_id'];
        $add_to_cart_url = wc_get_cart_url() . '?add-to-cart=' . $product_id . '&membership_price=' . $membership_fields['precio'];
      ?>
  <a href="<?php echo esc_url($add_to_cart_url); ?>"
    class="Membership-plan-button"><?php echo esc_html($button_text); ?></a>
  <?php else: ?>
  <a href="/registre-proveidor" class="Membership-plan-button <?=$button_style;?>">Contractar</a>
  <?php endif; ?>
  <?php else: ?>
  <!-- Verificar si la URL de la suscripción está disponible antes de mostrar el botón -->
  <?php if (!empty($subscription_url)): ?>
  <a href="<?php echo esc_url($subscription_url); ?>" class="Membership-plan-button <?=$button_style;?>">
    <?php echo esc_html($button_text); ?>
  </a>
  <?php else: ?>
  <p>Error: No se pudo generar la URL para cancelar la suscripción.</p>
  <?php endif; ?>
  <?php endif; ?>
</div>