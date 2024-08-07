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
$post_id = get_current_user_post_id();

if($post_id) {
    if (current_user_can('proveedorvaleapp') || current_user_can('administrator')) {
        mostrar_formulario_proveedor_acf($post_id);
    } elseif (current_user_can('clientevaleapp') || current_user_can('administrator')) {
        mostrar_formulario_cliente_acf($post_id);
    } else {
        echo do_shortcode('[no_authorizatiojn_page]');
    }
}else{
    echo do_shortcode('[no_authorizatiojn_page]');
}

get_footer();

function mostrar_formulario_proveedor_acf($post_id)
{
?>
    <div class="Providers-form">
        <div class="container login mt-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <h2 class="title">El meu compte</h2>
                    <?php
                    acf_form([
                        'post_id'       => $post_id,
                        'field_groups'  => ['group_64dcf1b40cfd3'],
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
    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('image_preview');
                output.src = reader.result;
                output.style.display = 'block';
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
<?php
}

function mostrar_formulario_cliente_acf($post_id)
{
?>
    <div class="container login mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h2 class="title">El meu compte</h2>
                <?php
                acf_form([
                    'post_id'       => $post_id,
                    'field_groups'  => ['group_64dcf6cf78620'],
                    'form' => true,
                    'fields' => [
                        'field_64dcf7f7e9ebb',
                        'field_6557a1351db96'
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
    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('image_preview');
                output.src = reader.result;
                output.style.display = 'block';
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
<?php
}

?>