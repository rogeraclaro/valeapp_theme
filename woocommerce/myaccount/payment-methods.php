<?php
/**
 * Payment methods
 *
 * Shows customer payment methods on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/payment-methods.php.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.9.0
 */

defined( 'ABSPATH' ) || exit;

$saved_methods = wc_get_customer_saved_methods_list( get_current_user_id() );
$has_methods   = (bool) $saved_methods;
$types         = wc_get_account_payment_methods_types();

do_action( 'woocommerce_before_account_payment_methods', $has_methods ); ?>

<?php if ( $has_methods ) : ?>
<table class="payment-methods-table">
  <thead>
    <tr>
      <th class="payment-methods-header">Tipo de Tarjeta</th>
      <th class="payment-methods-header">Número</th>
      <th class="payment-methods-header">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ( $saved_methods as $type => $methods ) : ?>
    <?php foreach ( $methods as $method ) : ?>
    <tr class="payment-methods-row">
      <td class="payment-methods-card-type">
        <?php
                            $brand = strtolower( $method['method']['brand'] );
                            if ( $brand == 'visa' ) {
                                echo '<img class="payment-methods-icon MiSaldo-icon2" src="' . get_stylesheet_directory_uri() . '/img/payment-method-brands/valeapp-visa.png" alt="Visa">';
                            } elseif ( $brand == 'mastercard' ) {
                                echo '<img class="payment-methods-icon MiSaldo-icon2" src="' . get_stylesheet_directory_uri() . '/img/payment-method-brands/valeapp-mastercard.png" alt="Mastercard">';
                            } elseif ( $brand == 'amex' ) {
                                echo '<img class="payment-methods-icon MiSaldo-icon2" src="' . get_stylesheet_directory_uri() . '/img/payment-method-brands/valeapp-american-express.png" alt="American Express">';
                            } else {
                                echo esc_html( wc_get_credit_card_type_label( $method['method']['brand'] ) );
                            }
                        ?>
      </td>
      <td class="payment-methods-card-num">
        <?php echo esc_html( '**** **** **** ' . substr( $method['method']['last4'], -4 ) ); ?>
      </td>
      <td class="payment-methods-actions">
        <?php foreach ( $method['actions'] as $key => $action ) : ?>
        <a href="<?php echo esc_url( $action['url'] ); ?>"
          class="button payment-methods-button <?php echo sanitize_html_class( $key ); ?>">
          <?php echo esc_html( $action['name'] ); ?>
        </a>
        <?php endforeach; ?>
      </td>
    </tr>
    <?php endforeach; ?>
    <?php endforeach; ?>
  </tbody>
</table>
<?php else : ?>
<?php wc_print_notice( esc_html__( 'No saved methods found.', 'woocommerce' ), 'notice' ); ?>
<?php endif; ?>

<?php do_action( 'woocommerce_after_account_payment_methods', $has_methods ); ?>

<?php if ( WC()->payment_gateways->get_available_payment_gateways() ) : ?>
<a class="button payment-methods-add-button"
  href="<?php echo esc_url( wc_get_endpoint_url( 'add-payment-method' ) ); ?>">
  <?php esc_html_e( 'Add payment method', 'woocommerce' ); ?>
</a>
<?php endif; ?>