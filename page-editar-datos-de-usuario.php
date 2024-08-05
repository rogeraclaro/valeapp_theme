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

function get_user_post_id() {
    if (is_user_logged_in()) {
        $current_user = wp_get_current_user();
        $user_role = "";
        $user_id = "";
        $post_id = "";

        if ($current_user->ID != 0) {
            $user_roles = $current_user->roles;
            $user_id = get_current_user_id();
        }

        foreach ($user_roles as $role) {
            $user_role = $role;
        }

        switch ($user_role) {
            case 'proveedorvaleapp':
                $rol = "proveedor";
                break;
            case 'clientevaleapp':
                $rol = "cliente";
                break;
            case 'administrator':
                $rol = "administrador";
                break;
            default:
                $rol = "";
        }

        $args = [
            'post_type' => $rol,
            'author' => $user_id,
            'posts_per_page' => 1,
        ];

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                $post_id = get_the_ID();
            endwhile;
            wp_reset_postdata();
        endif;

        return $post_id;
    }

    return false;
}

$post_id = get_user_post_id();
if($post_id) {
    if (current_user_can('proveedorvaleapp')) {
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