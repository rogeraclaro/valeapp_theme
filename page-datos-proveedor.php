<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 *
 * @package ValeApp
 */

acf_form_head();

get_header();

if(current_user_can('proveedorvaleapp') || current_user_can('administrator')) {

?>
<div class="Providers-form">
    <div class="container login mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h2 class="title">Mi cuenta</h2>
                <?php
                    acf_form([
                        'post_id'       => 'new_post',
                        'field_groups'  => ['group_64dcf1b40cfd3'],
                        'new_post'      => [
                            'post_type'     => 'proveedor',
                            'post_status'   => 'publish'
                        ],
                        'form' => true,
                        'fields' => [
                            'field_64dcf553615dc',
                            'field_655e768e7108f',
                            'field_655e77ad71090',
                            'field_655e783771091'
                        ],
                        'uploader' => 'wp',
                        'submit_value'  => 'Continuar',
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
    else{
        echo do_shortcode('[no_authorizatiojn_page]');
    }
get_footer();