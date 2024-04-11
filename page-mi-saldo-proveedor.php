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
                <li class="breadcrumb-item"><a href="#">Mi cuenta</a></li>
                <li class="breadcrumb-item"><a href="#"></a></li>
              </ol>
            </nav>
          </div>
          <div class="col-12">
            <h2 class="title">Mi saldo</h2>
          </div>
        </div>
      </div>
    </section>
    <section class="miSaldoProveedor">
      <div class="miSaldoProveedor-container">
        <div class="miSaldoProveedor-content">
          <p class="miSaldoProveedor-saldoText">Tu saldo actual es de:</p>
          <div class="miSaldoProveedor-saldoNum">
            <p class="miSaldoProveedor-saldoNumText">0,00</p>
          <img class="miSaldoProveedor-arrowIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeap-arrow-promociones.png">
          </div>
          <div class="miSaldoProveedor-tokens">
            <button class="miSaldoProveedor-addBtn">Retirar Saldo</button>
          </div>
          <div class="miSaldoProveedor-payment">
            <div class="miSaldoProveedor-paymentHead">
                <p class="miSaldoProveedor-title">
                    Metodo de pago registrado
                </p>
                <button class="miSaldoProveedor-editBtn">
                    <img class="miSaldoProveedor-editIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-editIcon-miSaldo.png">
                    Editar
                </button>
            </div>
            <div class="miSaldoProveedor-card">
                <p class="miSaldoProveedor-cardType">
                    TARJETA VISA <span class="miSaldoProveedor-icon1">?</span>
                </p>
                <p class="miSaldoProveedor-cardNum">
                <img class="miSaldoProveedor-icon2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-visalogo-mi-saldo.png">
                    494019******5587
                </p>
            </div>
          </div>
        </div>
        <div class="miSaldoProveedor-contentModal">
          <button type="button" class="miSaldoProveedor-filter" data-bs-toggle="modal" data-bs-target="#clientFilter">
          <img class="miSaldoProveedor-filterIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-filter-icon.png">
            Filtrar
        </button>
          <div class="modal fade miSaldoProveedor-modal" id="clientFilter" tabindex="-1" aria-labelledby="CustomeFilterLabel" aria-hidden="true">
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
            Últimos 30 días
        </span>
    </label>
    <label class="miSaldoProveedor-item">
        <input type="checkbox" id="month" class="miSaldoProveedor-input">
        <span class="miSaldoProveedor-itemLabel">
            Últimos 3 meses
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
    <button id="confirmarBtn" class="miSaldoProveedor-addBtn" data-bs-dismiss="modal" aria-label="Close">Confirmar</button>
</div>
            </div>
        </div>
    </div>
        </div>
      </div>
    </section>
<?php
get_footer();