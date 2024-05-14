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
                            <li class="breadcrumb-item"><a href="#">Mi cuenta</a></li>
                            <li class="breadcrumb-item"><a href="#">Centro de soporte</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12">
                    <h2 class="title">
                        Contacto
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="Contacto">
        <div class="Contacto-container container">
            <div class="row">
                <div class="col-12">
                    <a href="/ayuda" class="Ayuda-link head">
                            Ayuda
                            <img class="Ayuda-iconArrowLeft "
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-chevron-bold.png"
                            alt="ValeApp"/>
                    </a>
                    <p class="Contacto-text">
                    Mantén siempre tus datos actualizados para 
                    poder ponernos en contacto tanto nosotros 
                    como el proveedor del Servicio.</p> 
                    <p class="Contacto-text">
                    Por favor no 
                    compartas tu contraseña de acceso a tu perfil. 
                    Sólo te pedimos tu nombre, teléfono y email para
                    contactarte si fuera necesario y verificar tu perfil, 
                    todos debemos estar seguros!</p> 
                    <p class="Contacto-text">
                    Además si quieres
                    buscar Servicios en la zona o a domicilio, tienes
                    que decirnos dónde vives. 
                    </p>
                    <div class="Ayuda-footer">
                        <?php echo do_shortcode( '[contact-form-7 id="a1f8f59" title="contacto"]' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();