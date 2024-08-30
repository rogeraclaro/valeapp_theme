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
?>
<section class="section2 servicio-generica">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">El meu compte</a></li>
            <li class="breadcrumb-item"><a href="#"></a></li>
          </ol>
        </nav>
      </div>
      <div class="col-12">
        <h2 class="title">El meu saldo</h2>
      </div>
    </div>
  </div>
</section>
<section class="miSaldoProveedor">
  <div class="miSaldoProveedor-container">
    <div class="miSaldoProveedor-content">
      <p class="miSaldoProveedor-saldoText">El teu saldo actual és de:</p>
      <div class="miSaldoProveedor-saldoNum">
        <p class="miSaldoProveedor-saldoNumText">0,00</p>
        <img class="miSaldoProveedor-arrowIcon"
          src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeap-arrow-promociones.png">
      </div>
      <div class="miSaldoProveedor-tokens">
        <a href="#" class="Membership-plan-button">Comprar Saldo</a>
      </div>
      <div class="miSaldoProveedor-payment">
        <div class="miSaldoProveedor-paymentHead">
          <p class="miSaldoProveedor-title">
            Mètode de pagament registrat
          </p>
        </div>

        <!-- End custom ShortCode -->
        <?php echo do_shortcode('[custom_payment_methods]'); ?>
        <!-- End custom ShortCode -->


      </div>
    </div>
    <div class="miSaldoProveedor-contentModal">
      <div class="modal fade miSaldoProveedor-modal" id="clientFilter" tabindex="-1"
        aria-labelledby="CustomeFilterLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content miSaldoProveedor-content">
            <div class="modal-header miSaldoProveedor-header">
              <h5 class="modal-title miSaldoProveedor-title " id="CustomeFilterLabel">Filtrar por fecha</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body miSaldoProveedor-body">
              <label class="miSaldoProveedor-item">
                <input type="checkbox" id="days" class="miSaldoProveedor-input">
                <span class="miSaldoProveedor-itemLabel">
                  Últims 30 dies
                </span>
              </label>
              <label class="miSaldoProveedor-item">
                <input type="checkbox" id="month" class="miSaldoProveedor-input">
                <span class="miSaldoProveedor-itemLabel">
                  Últims 3 mesos
                </span>
              </label>
              <label class="miSaldoProveedor-item">
                <input type="checkbox" id="year" class="miSaldoProveedor-input">
                <span class="miSaldoProveedor-itemLabel">
                  2024
                </span>
              </label>
            </div>
            <div class="modal-footer miSaldoProveedor-footer">
              <button id="confirmarBtn" class="miSaldoProveedor-addBtn" data-bs-dismiss="modal"
                aria-label="Close">Confirmar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();