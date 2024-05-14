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
        <div class="CreateAccountUserOrProfessional-title">
            ¿Cómo deseas iniciar tu sesión?
        </div>
        <div class="CreateAccountUserOrProfessional-cards">
            <div class="CreateAccountUserOrProfessional-card">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-crear-cuenta-profesional-o-usuario/card2-img1.png" alt="valeapp" class="img-fluid CreateAccountUserOrProfessional-cardImg" />
                <div class="CreateAccountUserOrProfessional-cardText">
                    <a href="/inicio-sesion-clientes" class="CreateAccountUserOrProfessional-cardBtn">Iniciar como Cliente</a>
                </div>
            </div>
            <div class="CreateAccountUserOrProfessional-card">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-crear-cuenta-profesional-o-usuario/card2-img2.png" alt="valeapp" class="img-fluid CreateAccountUserOrProfessional-cardImg" />
                <div class="CreateAccountUserOrProfessional-cardText">
                    <a href="/inicio-sesion-proveedores" class="CreateAccountUserOrProfessional-cardBtn">Iniciar como Profesional</a>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();