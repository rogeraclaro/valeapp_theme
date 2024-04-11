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

$post_id = get_the_ID();
$group_promotion = get_field('field_65b1694f5abe3');
$title = $group_promotion['titulo'];
$subtitle = $group_promotion['subtitulo'];
$description = $group_promotion['descripcion'];

?>

<section class="section2 interiorPromociones">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><?php breadcrumb_my_account(); ?></li>
                        <li class="breadcrumb-item"><a href="#"></a></li>
                    </ol>
                </nav>
            </div>
            <div class="col-12">
                <h2 class="title">
                    Promociones
                </h2>
            </div>
        </div>
    </div>
</section>
<section class="interiorPromociones">
    <div class="interiorPromociones-container">
    <a class="interiorPromociones-card" href="#">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeap-arrow-promociones.png" alt="valeapp" class="interiorPromociones-arrow">
            <div class="interiorPromociones-cardContent">
                <h4 class="interiorPromociones-title">
                    <?php echo($title); ?>
                </h4>
                <p class="interiorPromociones-subtitle">
                    <?php echo($subtitle); ?>
                </p>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-promociones-icon.png" alt="valeapp" class="interiorPromociones-icon">
        </a>
        <p class="interiorPromociones-text">
            <?php echo($description); ?>
        </p>
        <a class="interiorPromociones-button" href="#">
            Añadir Saldo
        </a>
    </div>
</section>

<?php
get_footer();