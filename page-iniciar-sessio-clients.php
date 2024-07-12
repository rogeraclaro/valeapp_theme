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

<div class="container login mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-12">
            <form method="POST" id="" action="/wp-login.php">
                <h2 class="title">Inici de sessió Client</h2>
                <input value="" type="text" id="user_login" name="log" class="text-form" placeholder="Email" required>
                <input value="" type="password" id="user_pass" name="pwd" class="text-form" placeholder="Contraseña"
                    required>
                <i class="bi bi-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer; color:#d4d4d4"></i>
                <button type="submit" name="save" id="publish2" class="btn btn-brand">Enviar</button>
            </form>
        </div>
    </div>
</div>

<?php
get_footer();