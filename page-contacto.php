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
                        Ayuda
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section class="Contacto">
        <div class="Contacto-container">
            <a href="#" class="Ayuda-link head">
                        Contacto 
                        <img class="Ayuda-iconArrowLeft "
                        src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-chevron-bold.png"
                        alt="ValeApp"/>
            </a>
            <p class="Contacto-text">
            Mantén siempre tus datos actualizados para 
            poder ponernos en contacto tanto nosotros 
            como el proveedor del Servicio. Por favor no 
            compartas tu contraseña de acceso a tu perfil. 
            Sólo te pedimos tu nombre, teléfono y email para
             contactarte si fuera necesario y verificar tu perfil, 
             todos debemos estar seguros! Además si quieres
              buscar Servicios en la zona o a domicilio, tienes
               que decirnos dónde vives. 
            </p>
            <div class="Ayuda-footer">
                <a class="Ayuda-help">
                    ¿Necesitas ayuda?
                </a>
                <a class="Ayuda-delete">
                    Eliminar cuenta
                </a>
        </div>
        </div>

    </section>


<?php
get_footer();