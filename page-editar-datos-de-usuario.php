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

if (current_user_can('proveedorvaleapp')) {
    mostrar_formulario_proveedor_acf();
} elseif (current_user_can('clientevaleapp') || current_user_can('administrator')) {
    mostrar_formulario_cliente_acf();
} else {
    echo do_shortcode('[no_authorizatiojn_page]');
}

get_footer();

function mostrar_formulario_proveedor_acf()
{
    $current_user = wp_get_current_user();
?>
    <div class="Providers-form">
        <div class="container login mt-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <h2 class="title">El meu compte</h2>
                    <?php
                    acf_form([
                        'post_id'       => 'user_' . $current_user->ID,
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

function mostrar_formulario_cliente_acf()
{
    $current_user = wp_get_current_user();
?>
    <div class="container login mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h2 class="title">El meu compte</h2>
                <?php
                acf_form([
                    'post_id'       => 'user_' . $current_user->ID,
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