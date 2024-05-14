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
include 'inc/match-service/index.php';
 
get_header();
?>
  <section class="section2 Ayuda">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"="#">Mi cuenta</a></li>
                            <li class="breadcrumb-item"><a href="#"="#">Centro de soporte</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12">
                    <h2 class="title">
                        Ayuda
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section class="PreguntasFrecuentes">
        <div class="PreguntasFrecuentes-container">
            <h3 class=PreguntasFrecuentes-title>
                Preguntas frecuentes
            </h3>
            <div class="PreguntasFrecuentes-modal" id="questionTextBox">
            <div class="PreguntasFrecuentes-close" id="questionCloseBtn">
            <img class="img-fluid PreguntasFrecuentes-icon " src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-closeIcon.png">
            </div>
                <h5 class="">
                1€ = 1 Vale.
                </h5>
                <p>
                En esta plataforma,1 euro equivale a 1 Vale. En la sección "Mi Saldo," tendrás una visualización clara de la cantidad de vales disponibles.
                </p>
            </div>
            <div class="PreguntasFrecuentes-content">
                <button class="PreguntasFrecuentes-btn">
                <img class="img-fluid PreguntasFrecuentes-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-icon1-cards-help.png" alt="valeapp">
                Mi cuenta
                </button>
                <button class="PreguntasFrecuentes-btn">
                <div class="PreguntasFrecuentes-boxImg">
                    <img class="img-fluid PreguntasFrecuentes-icon icon2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeap-arrow-promociones.png" alt="valeapp">
                    <span class="PreguntasFrecuentes-question">
                        ?
                    </span>
                </div>
                Mis Vales
                </button>
                <button class="PreguntasFrecuentes-btn">
                <img class="img-fluid PreguntasFrecuentes-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-icon3-cards-help.png" alt="valeapp">
                Mis reservas
                </button>
                <button class="PreguntasFrecuentes-btn">
                <img class="img-fluid PreguntasFrecuentes-icon icon2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-icon4-cards-help.png" alt="valeapp">
                Importante
                </button>
                <button class="PreguntasFrecuentes-btn">
                <img class="img-fluid PreguntasFrecuentes-icon icon2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-icon5-cards-help.png" alt="valeapp">
                Qué pasa si?
                </button>
            </div>
            <div class="Ayuda-footer">
                <a class="Ayuda-help" href="/ayuda">
                    ¿Necesitas ayuda?
                </a>
                <a class="Ayuda-delete" href="/eliminar-cuenta">
                    Eliminar cuenta
                </a>
            </div>
        </div>
    </section>

<?php
get_footer();