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







// proceso de suscripción con MONEI
// add_action('woocommerce_checkout_order_processed', 'valeapp_create_subscription', 10, 1);

// function valeapp_create_subscription($order_id)
// {
//   error_log('valeapp_create_subscription');
//   $order = wc_get_order($order_id);
//   $logger = wc_get_logger();

//   // Obtener la configuración de MONEI desde la base de datos
//   $monei_settings = get_option('woocommerce_monei_settings');

//   // Asegurarse de que la configuración fue obtenida y contiene la API Key
//   if ($monei_settings && isset($monei_settings['apikey'])) {
//     $api_key = $monei_settings['apikey'];

//     $configuration = new \OpenAPI\Client\Configuration();
//     $configuration->setApiKey('Authorization', 'Bearer ' . $api_key);

//     $client = new \OpenAPI\Client\Api\SubscriptionsApi(
//       new GuzzleHttp\Client(),
//       $configuration
//     );

//     foreach ($order->get_items() as $item_id => $item) {
//       $product_id = $item->get_product_id();

//       // Verifica si el producto comprado es una membresía (ajusta según tu lógica)
//       error_log('ANTES DEL IFFFF   product_id: ' . $product_id);
//       if (has_term('membresias', 'product_cat', $product_id)) {
//         $price = $item->get_total(); // Precio del producto
//         $customer_id = $order->get_user_id(); // ID del cliente
//         $customer_email = $order->get_billing_email(); // Email del cliente
//         $customer_name = $order->get_billing_first_name() . ' ' . $order->get_billing_last_name(); // Nombre completo del cliente
//         error_log('DENTRO DEL IFFFF   customer_id: ' . $customer_id);

//         // Definir las URLs de callback basadas en los webhooks configurados
//         $callback_url = home_url('/monei-webhook'); // URL para eventos de la suscripción
//         $payment_callback_url = home_url('/monei-webhook'); // URL para eventos de pago

//         // Crear una solicitud para crear una suscripción en MONEI
//         $subscription_request = new \OpenAPI\Client\Model\CreateSubscriptionRequest([
//           'customer' => [
//             'name' => $customer_name,
//             'email' => $customer_email
//           ],
//           'amount' => $price * 100, // Convierte a centavos
//           'currency' => 'EUR',
//           'interval' => 'day', // Puedes ajustar el intervalo según tu lógica day, week, month, year
//           'interval_count' => 1, // Cada cuánto se cobrará la suscripción
//           'description' => 'MoonMail Lite Monthly',
//           'callbackUrl' => $callback_url,
//           'paymentCallbackUrl' => $payment_callback_url
//         ]);

//         try {
//           // Crear la suscripción en MONEI
//           $subscription = $client->create($subscription_request);

//           error_log('subscription: ' . $subscription);

//           // Guardar el ID de la suscripción en los metadatos del pedido
//           update_post_meta($order_id, '_monei_subscription_id', $subscription->getId());
//           $logger->info('Suscripción creada exitosamente: ' . $subscription->getId(), array('source' => 'valeapp'));
//         } catch (\Exception $e) {
//           // Manejo de errores si la suscripción no se crea correctamente
//           $logger->error('Error creando la suscripción en MONEI: ' . $e->getMessage(), array('source' => 'valeapp'));
//         }
//       }
//     }
//   } else {
//     $logger->error('Error: No se pudo obtener la API Key de MONEI.');
//   }
// }

// add_action('init', 'valeapp_monei_webhook_init');

// function valeapp_monei_webhook_init()
// {
//   add_rewrite_rule('^monei-webhook/?$', 'index.php?monei_webhook=1', 'top');
//   add_rewrite_tag('%monei_webhook%', '1');
// }

// add_action('template_redirect', 'valeapp_handle_monei_webhook');

// function valeapp_handle_monei_webhook()
// {
//   if (get_query_var('monei_webhook') == 1) {
//     $input = @file_get_contents("php://input");
//     $event_json = json_decode($input, true);

//     if ($event_json) {
//       // Verifica el tipo de evento
//       $event_type = $event_json['type'];
//       $subscription_id = $event_json['data']['object']['id'];

//       switch ($event_type) {
//         case 'subscription.payment_succeeded':
//           valeapp_handle_successful_payment($subscription_id);
//           break;
//         case 'subscription.payment_failed':
//           valeapp_handle_failed_payment($subscription_id);
//           break;
//         case 'subscription.cancelled':
//           valeapp_handle_subscription_cancelled($subscription_id);
//           break;
//           // Agrega otros casos si es necesario
//       }
//     }
//     exit; // Termina la ejecución para no cargar la página completa de WordPress
//   }
// }

// function valeapp_handle_successful_payment($subscription_id)
// {
//   $orders = wc_get_orders(array(
//     'meta_key' => '_monei_subscription_id',
//     'meta_value' => $subscription_id,
//   ));

//   if (!empty($orders)) {
//     $order = $orders[0];
//     $order->update_status('completed', 'Pago de suscripción completado.');
//   }
// }

// function valeapp_handle_failed_payment($subscription_id)
// {
//   $orders = wc_get_orders(array(
//     'meta_key' => '_monei_subscription_id',
//     'meta_value' => $subscription_id,
//   ));

//   if (!empty($orders)) {
//     $order = $orders[0];
//     $order->update_status('failed', 'Pago de suscripción fallido.');
//   }
// }

// function valeapp_handle_subscription_cancelled($subscription_id)
// {
//   $orders = wc_get_orders(array(
//     'meta_key' => '_monei_subscription_id',
//     'meta_value' => $subscription_id,
//   ));

//   if (!empty($orders)) {
//     $order = $orders[0];
//     $order->update_status('cancelled', 'Suscripción cancelada.');
//   }
// }