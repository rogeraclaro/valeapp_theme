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

//  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $first_name_customer = sanitize_text_field($_POST['first_name_customer']);
//     $last_name_customer = sanitize_text_field($_POST['last_name_customer']);
//     $date_customer = sanitize_text_field($_POST['date_customer']);
//     $email_customer = sanitize_text_field($_POST['user_email_customer']);
//     $password_customer = sanitize_text_field($_POST['user_password_customer']);
//     $phone_number_customer = sanitize_text_field($_POST['phone_number_customer']);
//     $address_customer = sanitize_text_field($_POST['address_customer']);
//     $cd_postal_customer = sanitize_text_field($_POST['cd_postal_customer']);
//     $city_customer = sanitize_text_field($_POST['city_customer']);
//     $country_customer = sanitize_text_field($_POST['country_customer']);
//     $interests_customer = sanitize_text_field($_POST['interests_customer']);
//     $profile_photo_customer = sanitize_text_field($_FILES['profile_photo_customer']);
//     $description_customer = sanitize_text_field($_POST['description_customer']);

//     if (function_exists('add_customer_front_metaboxes')) {
//         $result = add_customer_front_metaboxes($first_name_customer, $last_name_customer, $date_customer, $email_customer, $password_customer, $phone_number_customer, $address_customer, $cd_postal_customer, $city_customer, $country_customer, $interests_customer, $profile_photo_customer, $description_customer);

//         if($result === true) {
//             wp_redirect('/inicio-sesion-clientes');
//             exit;
//         }
//         else {
//             $error_message = $result;
//         }
//     }
    
// }

get_header();
?>

<div class="container login mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-12">
            <form method="POST" id="form_customer" action="" enctype="multipart/form-data">
                <h2 class="title">Registro Cliente</h2>
                <input type="text" id="first_name_customer" name="first_name_customer" class="text-form" placeholder="Nombre"
                    required>
                <input type="text" id="last_name_customer" name="last_name_customer" class="text-form"
                    placeholder="Apellidos" required>
                <input type="date" id="date_customer" name="date_customer" class="text-form"
                    placeholder="Fecha nacimiento" required>
                <input type="email" id="user_email_customer" name="user_email_customer" class="text-form" placeholder="Email"
                    required>
                <input type="password" id="user_password_customer" name="user_password_customer" class="text-form" placeholder="Contraseña"
                    required>
                <!-- <input type="password" id="password_customer" name="password_customer" class="text-form" placeholder="Contraseña" required> -->
                <i class="bi bi-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer; color:#d4d4d4"></i>
                <input type="tel" id="phone_number_customer" name="phone_number_customer" class="text-form"
                    placeholder="Teléfono" required>
                <input type="text" id="address_customer" name="address_customer" class="text-form"
                    placeholder="Dirección" required>
                <input type="number" id="cd_postal_customer" name="cd_postal_customer" class="text-form"
                    placeholder="CP">
                <input type="text" id="city_customer" name="city_customer" class="text-form" placeholder="Población">
                <input type="text" id="country_customer" name="country_customer" class="text-form" placeholder="País">
                <input type="text" id="interests_customer" name="interests_customer" class="text-form"
                    placeholder="Intereses">
                <div class="text text-form">Fotografía de perfil:</div>
                <input type="file" id="profile_photo_customer" name="profile_photo_customer" class="text-form"
                    accept="image/png,image/jpeg" multiple>
                <textarea type="text" id="description_customer" name="description_customer" class="text-form"
                    placeholder="Descripción"></textarea>
                <?php wp_nonce_field(basename(__FILE__), 'customers_register_nonce'); ?>
                <button type="submit" name="save" id="publish" class="btn btn-brand">Enviar</button>
            </form>
        </div>
    </div>
</div>

<?php

get_footer();