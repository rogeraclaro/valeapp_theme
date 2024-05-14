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
acf_form_head();

get_header();


if (current_user_can('administrator') || current_user_can('proveedorvaleapp')) {

    require_once plugin_dir_path(__FILE__) . 'inc/membership/post-limits.php';

?>
<div class="PublishService">
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
            <h2 class="title">Catálogo de servicios</h2>
                <?php
                    acf_form([
                        'post_id'       => 'new_post',
                        'field_groups'  => ['group_64e3cd0b38f67'],
                        'new_post'      => [
                            'post_type'     => 'publicar-servicio', //Cambiar por "products"
                            'post_status'   => 'publish'
                        ],
                        'uploader' => 'wp',
                        'submit_value'  => 'Confirmar',
                        'updated_message' => '¡Formulario actualizado!',
                        'return' => '/home',
                    ]);
                ?>
            </div>
        </div>
    </div>
</div>

<?php
} 
    else {
    echo do_shortcode('[no_authorization_page]');

}

get_footer();