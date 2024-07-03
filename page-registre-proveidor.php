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

require_once plugin_dir_path(__FILE__) . 'inc/register/provider.php';
get_header();

?>

<div class="container login mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-12">
                    <form method="post" action="" enctype="multipart/form-data">
                        <h2 class="title">Registro Proveedores</h2>
                        <input type="text" id="first_name" name="first_name" class="text-form" placeholder="Nombre" required>

                        <input type="text" id="last_name" name="last_name" class="text-form" placeholder="Apellidos" required>

                        <input type="email" id="email" name="email" class="text-form" placeholder="Email" required>

                        <input type="password" id="password" name="password" class="text-form" placeholder="Contraseña" required>
                        <i class="bi bi-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer; color:#d4d4d4"></i>

                        <input type="submit" name="register_provider_submit" value="Registrarse">
                    </form>
        </div>
    </div>
</div>

<?php

get_footer();