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
  <section class="section2 Contacto">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">El meu compte</a></li>
                        <li class="breadcrumb-item"><a href="#">Centre de suport</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12">
                    <h2 class="title">
                        Contacte
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="Contacto">
        <div class="Contacto-container container">
            <div class="row">
                <div class="col-12">
                    <a href="/ajuda" class="Ayuda-link head">
                            Necessites ajuda?
                            <img class="Ayuda-iconArrowLeft "
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-chevron-bold.png"
                            alt="ValeApp"/>
                    </a>
                    <p class="Contacto-text">
                    Pots posar-te en contacte amb nosaltres perquè resolguem qualsevol dubte o problema que tinguis. Si la vostra consulta està relacionada amb alguna reserva, si us plau indica el número de la teva reserva.
                    </p>
                    <div class="Ayuda-footer">
                        <?php echo do_shortcode( '[contact-form-7 id="2f3db4f" title="Ajuda"]' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();