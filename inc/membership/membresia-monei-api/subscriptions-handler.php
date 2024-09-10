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



// Hook in WooCommerce Subscriptions to detect when a subscription becomes active
add_action('woocommerce_subscription_status_active', 'associate_membership_with_user_post_direct', 10, 1);

function associate_membership_with_user_post_direct($subscription) {
    // Get the user ID from the subscription
    $user_id = $subscription->get_user_id();

    // Check if the user already has an active subscription
    $active_subscription = check_user_has_active_subscription($user_id);
    
    if ($active_subscription) {
        // Cancel the previous active subscription if a new one is being activated
        $active_subscription->update_status('cancelled');
    }

    // Proceed with associating the new subscription
    associate_membership_with_provider($subscription, $user_id);
}

// Function to check if a user already has an active subscription
function check_user_has_active_subscription($user_id) {
    $subscriptions = wcs_get_users_subscriptions($user_id);

    foreach ($subscriptions as $subscription) {
        if ($subscription->has_status('active')) {
            return $subscription; // Return the active subscription if found
        }
    }

    return false; // Return false if no active subscription is found
}

// Function to associate membership with the provider profile (original logic)
function associate_membership_with_provider($subscription, $user_id) {
    // Use post_author to find the provider post associated with this user
    $provider_post_id = get_provider_post_by_user_id($user_id);
    if (!$provider_post_id) {
        return;
    }

    // Get the products associated with the subscription
    $items = $subscription->get_items();

    // Loop through the subscription items
    foreach ($items as $item) {
        $product_id = $item->get_product_id();

        // Find the membership associated with this product
        $membership_id = get_membership_by_product_id($product_id);
        if ($membership_id) {
            // Get the ACF group field "Cuéntanos más sobre ti" for the provider
            $tell_us_more = get_field('cuentanos_mas_sobre_ti', $provider_post_id);
            
            if (!$tell_us_more) {
                return;
            }

            // Use update_post_meta to update membership directly
            update_post_meta($provider_post_id, 'cuentanos_mas_sobre_ti_membresia', $membership_id);
        }
    }
}

// Custom function to find the provider post by user ID using post_author
function get_provider_post_by_user_id($user_id) {
    // Query to find the provider post associated with the given user ID as post_author
    $args = array(
        'post_type' => 'proveedor', // Custom Post Type for providers
        'author' => $user_id, // Use post_author to match the user ID
        'posts_per_page' => 1
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        $query->the_post();
        $post_id = get_the_ID();
        wp_reset_postdata();
        return $post_id;
    }

    return false;
}

// Function to find the membership associated with a product ID
function get_membership_by_product_id($product_id) {
    // Query to find the membership associated with this product
    $args = array(
        'post_type' => 'membresia',
        'meta_query' => array(
            array(
                'key' => 'producto_recurrente', // The ACF field for the recurring product
                'value' => $product_id,
                'compare' => '='
            )
        )
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        $query->the_post();
        $membership_id = get_the_ID();
        wp_reset_postdata();
        return $membership_id;
    }

    return false;
}