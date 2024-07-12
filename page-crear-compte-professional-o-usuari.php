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
    <div class="CreateAccountUserOrProfessional">
        <div class="container">
            <div class="title">
                ¿Què vols fer a Vale?
            </div>
            <div class="CreateAccountUserOrProfessional-cards">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6">
                        <div class="CreateAccountUserOrProfessional-card">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-crear-cuenta-profesional-o-usuario/card2-img1.png" alt="valeapp" class="img-fluid CreateAccountUserOrProfessional-cardImg" />
                            <div class="CreateAccountUserOrProfessional-cardText">
                                <a href="/registre-client" class="CreateAccountUserOrProfessional-cardBtn">Demanar un servei</a>
                                <span class="CreateAccountUserOrProfessional-cardName">(Soc Client)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="CreateAccountUserOrProfessional-card">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-crear-cuenta-profesional-o-usuario/card2-img2.png" alt="valeapp" class="img-fluid CreateAccountUserOrProfessional-cardImg" />
                            <div class="CreateAccountUserOrProfessional-cardText">
                                <a href="/registre-proveidor" class="CreateAccountUserOrProfessional-cardBtn">Oferir serveis</a>
                                <span class="CreateAccountUserOrProfessional-cardName">(Soc Professional)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();