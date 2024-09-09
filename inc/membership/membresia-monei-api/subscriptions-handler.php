<?php

require_once WP_PLUGIN_DIR . '/monei/vendor/autoload.php'; // Asegúrate de que la ruta sea correcta

// Añadir precio personalizado al producto en el carrito
function valeapp_add_custom_price_to_cart_item($cart_item_data, $product_id)
{
  if (isset($_GET['membership_price'])) {
    $cart_item_data['membership_price'] = sanitize_text_field($_GET['membership_price']);
  }
  return $cart_item_data;
}
add_filter('woocommerce_add_cart_item_data', 'valeapp_add_custom_price_to_cart_item', 10, 2);

// Aplicar el precio personalizado en el carrito
function valeapp_apply_custom_price_to_cart_item($cart_object)
{
  foreach ($cart_object->get_cart() as $cart_item_key => $cart_item) {
    if (isset($cart_item['membership_price'])) {
      $cart_item['data']->set_price($cart_item['membership_price']);
    }
  }
}
add_action('woocommerce_before_calculate_totals', 'valeapp_apply_custom_price_to_cart_item');