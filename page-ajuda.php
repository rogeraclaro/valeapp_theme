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
                            <li class="breadcrumb-item"><a href="#">El meu compte</a></li>
                            <li class="breadcrumb-item"><a href="#">Centre de suport</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12">
                    <h2 class="title">
                        Ajuda
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section class="Ayuda">
        <div class="Ayuda-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul>
                        <li class="Ayuda-item">
                        <a href="#" class="Ayuda-link head">
                            El meu compte 
                            <img class="Ayuda-iconArrowLeft "
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-chevron-bold.png"
                            alt="ValeApp"/>
                        </a>
                        </li>
                        <li class="Ayuda-item">
                        <a href="/contacte" class="Ayuda-link">
                            Contacte 
                            <img class="Ayuda-iconArrow"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
                            alt="ValeApp"/>
                        </a>
                        </li>
                        <li class="Ayuda-item">
                        <a href="#" class="Ayuda-link">
                            Puntuacions 
                            <img class="Ayuda-iconArrow"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
                            alt="ValeApp"/>
                        </a>
                        </li>
                        <li class="Ayuda-item">
                            <a href="#" class="Ayuda-link">
                            Les meves reserves 
                            <img class="Ayuda-iconArrow"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
                            alt="ValeApp"/>
                        </a>
                        </li>
                        <li class="Ayuda-item">
                        <a href="/solicituds" class="Ayuda-link">
                            Les meves solicituds 
                            <img class="Ayuda-iconArrow"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
                            alt="ValeApp"/>
                        </a>
                        </li>
                    </ul>
                    <div class="Ayuda-footer">
                        <a class="Ayuda-help" href="/contacte">
                            ¿Necessites ajuda?
                        </a>
                        <a class="Ayuda-delete" href="/esborrar-compte">
                            Eliminar compte
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();