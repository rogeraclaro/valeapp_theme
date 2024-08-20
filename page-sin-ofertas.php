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
                    <h2 class="title">
                        Les meves ofertes
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section class="SinOferta">
           <div class="SinOferta-container">
            <div class="SinOferta-content">
                <div class="SinOferta-icon">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-sin-oferta-icon.png" alt="valeApp" class="SinOferta-img"/>
                </div>
                <h4 class="SinOferta-title">
                    No s'han trobat ofertes
                </h4>
                <p class="SinOferta-text">
                    Publica una oferta i troba el servei que necessites amb els professionals que millor s'adacten a la teva cerca.
                </p>
                <button class="SinOferta-btn">
                    Publicar oferta
                </button>
            </div>
           </div>
    </section>
<?php
get_footer();