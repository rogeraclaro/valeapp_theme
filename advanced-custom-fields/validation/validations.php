<?php

if(! defined('ABSPATH')) exit;

//Validation so that the date of the appointment is not less than the current date
add_filter('acf/validate_value/key=field_64e3e82db5efd', 'validate_date_appointment', 10, 4);
add_filter('acf/validate_value/key=field_64e4c6040e2be', 'validate_date_appointment', 10, 4);
add_filter('acf/validate_value/key=field_64dd040e8b15b', 'validate_date_appointment', 10, 4);
function validate_date_appointment($valid, $value, $field, $input) {
    if(empty($value)) {
        return $valid;
    }

    $date_selected = new DateTime($value);
    $date = new DateTime();
    if ($date_selected < $date) {
        $valid = 'La fecha seleccionada no puede ser anterior a la fecha actual.';
    }
    return $valid;
}

//Validation of age so that clients are older than 18
add_filter('acf/validate_value/key=field_64dcf709e9eb2', 'validate_age', 10, 4);
function validate_age($valid, $value, $field, $input) {
    $date_born = new DateTime($value);
    $date = new DateTime();
    $age = $date_born->diff($date)->y;

    if ($age < 18) {
        $valid = 'Debes tener al menos 18 años.';
    }
    return $valid;
}

//Validation so that emails are not repeated
// add_filter('acf/validate_value/key=field_64dcf72be9eb3', 'duplicate_email', 10, 4);
// add_filter('acf/validate_value/key=field_64dcf20f615d0', 'duplicate_email', 10, 4);
function duplicate_email($valid, $value, $field, $input) {
    global $wpdb;

    $field_key = $field['field_64dcf72be9eb3'];

    $existing_email = $wpdb->get_var(
        $wpdb->prepare(
            "SELECT post_id FROM $wpdb->postmeta WHERE meta_key = %s AND meta_value = %s",
            $field_key,
            $value
        )
    );

    if ($existing_email) {
        $valid = 'Este correo electrónico ya ha sido utilizado';
    }

    return $valid;
}

// add_filter('wp_insert_post_data', 'limit_user_post', 10, 2);
// function limit_user_post($valid, $data) {
//     if ('publicar-servicio' === $data['post_type']) {
//         $max_posts = 3;
//         $current_user = wp_get_current_user();
//         $post_count = count_user_posts($current_user->ID, 'publicar-servicio'); 
//         if ($post_count >= $max_posts) {
//             $valid = new WP_Error('post_limit_exceeded', __("Has excedido el límite de publicaciones."));
//         }
//     }

//     return $valid;
// }

?>