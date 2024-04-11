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
                        <li class="breadcrumb-item"><a href="#"="#">Tareas contratadas</a></li>
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
<section class="NeedHelp">
    <a class="NeedHelp-goBack" href="/ayuda">
        <img class="Ayuda-iconArrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png" alt="ValeApp" /> ¿Necesitas Ayuda?
    </a>
    <div class="NeedHelp-card">
        <span class="NeedHelp-cardTitle">Selecciona</span>
        <div class="NeedHelp-cardSelect">
            <label class="NeedHelp-option">
                <input type="radio" name="NeedHelpOpt" checked />
                <span class="NeedHelp-optionLabel">
                    Tengo una pregunta
                </span>
            </label>
            <label class="NeedHelp-option">
                <input type="radio" name="NeedHelpOpt" />
                <span class="NeedHelp-optionLabel">
                    Quiero reportar un problema
                </span>
            </label>
            <label class="NeedHelp-option">
                <input type="radio" name="NeedHelpOpt" />
                <span class="NeedHelp-optionLabel">
                    Tengo sugerencias de mejora
                </span>
            </label>
        </div>
        <button class="HairSalon-btn" id="btnSubmit">Confirmar</button>
    </div>
</section>

<?php
get_footer();
