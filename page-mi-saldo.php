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
            <h2 class="title">Mi saldo</h2>
          </div>
        </div>
      </div>
    </section>
    <section class="MiSaldo">
      <div class="MiSaldo-container">
        <div class="MiSaldo-content">
          <p class="MiSaldo-saldoText">Tu saldo actual es de:</p>
          <div class=MiSaldo-saldoNum>
            <p class="MiSaldo-saldoNumText">0,00</p>
            <img class="MiSaldo-arrowIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeap-arrow-promociones.png">
          </div>
          <div class="MiSaldo-tokens">
            <button class="MiSaldo-addBtn">Añadir Saldo</button>
          </div>
          <div class="MiSaldo-payment">
            <div class="MiSaldo-paymentHead">
                <p class="MiSaldo-title">
                    Metodo de pago registrado
                </p>
                <button class="MiSaldo-editBtn">
                    <img class="MiSaldo-editIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-editIcon-miSaldo.png">
                    Editar
                </button>
            </div>
            <div class="MiSaldo-card">
                <p class="MiSaldo-cardType">
                    TARJETA VISA <span class="MiSaldo-icon1">?</span>
                </p>
                <p class="MiSaldo-cardNum">
                <img class="MiSaldo-icon2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-visalogo-mi-saldo.png">
                    494019******5587
                </p>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
get_footer();