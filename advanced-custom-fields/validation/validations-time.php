<?php

// if(! defined('ABSPATH')) exit;

// //Validation to determine that the final hour is not greater than the initial one

// add_filter('acf/validate_value/key=field_64e3d893ec7b5', 'custom_validate_time_range_monday', 10, 4);
// add_filter('acf/validate_value/key=field_64e3e0fb93bbe', 'custom_validate_time_range_tuesday', 10, 4);
// add_filter('acf/validate_value/key=field_64e3e1b7cbd96', 'custom_validate_time_range_wednesday', 10, 4);
// add_filter('acf/validate_value/key=field_64e3e22fcbd98', 'custom_validate_time_range_thursday', 10, 4);
// add_filter('acf/validate_value/key=field_64e3e268cbd9b', 'custom_validate_time_range_friday', 10, 4);
// add_filter('acf/validate_value/key=field_64e3e297cbd9d', 'custom_validate_time_range_saturday', 10, 4);
// add_filter('acf/validate_value/key=field_64e3e2c8cbd9f', 'custom_validate_time_range_sunday', 10, 4);
// add_filter('acf/validate_value/key=field_64dd04d28b15d', 'custom_validate_time_range_ss', 10, 4);

// function custom_validate_time_range_monday($valid, $value) {
//     $start_time = isset($_POST['acf']['field_64e3d7270f3be']) ? $_POST['acf']['field_64e3d7270f3be'] : '';
//     $end_time = $value;

//     if(empty($start_time)) {
//         return $valid = "El valor de la hora inicial esta vacío";
//     }

//     if(empty($end_time)) {
//         return $valid = "El valor de Hora final es obligatorio";
//     }

//     if ($start_time >= $end_time) {
//         $valid = __("La hora final no puede ser menor o igual que la hora inicial.", "acf");
//     }

//     return $valid;
// }

// function custom_validate_time_range_tuesday($valid, $value) {
//     $start_time = isset($_POST['acf']['field_64e3e0f593bbd']) ? $_POST['acf']['field_64e3e0f593bbd'] : '';
//     $end_time = $value;

//     if(empty($start_time)) {
//         return $valid = "El valor de la hora inicial esta vacío";
//     }

//     if(empty($end_time)) {
//         return $valid = "El valor de Hora final es obligatorio";
//     }

//     if ($start_time >= $end_time) {
//         $valid = __("La hora final no puede ser menor o igual que la hora inicial.", "acf");
//     }

//     return $valid;
// }

// function custom_validate_time_range_wednesday($valid, $value) {
//     $start_time = isset($_POST['acf']['field_64e3e1b4cbd95']) ? $_POST['acf']['field_64e3e1b4cbd95'] : '';
//     $end_time = $value;

//     if(empty($start_time)) {
//         return $valid = "El valor de la hora inicial esta vacío";
//     }

//     if(empty($end_time)) {
//         return $valid = "El valor de Hora final es obligatorio";
//     }

//     if ($start_time >= $end_time) {
//         $valid = __("La hora final no puede ser menor o igual que la hora inicial.", "acf");
//     }

//     return $valid;
// }

// function custom_validate_time_range_thursday($valid, $value) {
//     $start_time = isset($_POST['acf']['field_64e3e22acbd97']) ? $_POST['acf']['field_64e3e22acbd97'] : '';
//     $end_time = $value;

//     if(empty($start_time)) {
//         return $valid = "El valor de la hora inicial esta vacío";
//     }

//     if(empty($end_time)) {
//         return $valid = "El valor de Hora final es obligatorio";
//     }

//     if ($start_time >= $end_time) {
//         $valid = __("La hora final no puede ser menor o igual que la hora inicial.", "acf");
//     }

//     return $valid;
// }

// function custom_validate_time_range_friday($valid, $value) {
//     $start_time = isset($_POST['acf']['field_64e3e262cbd9a']) ? $_POST['acf']['field_64e3e262cbd9a'] : '';
//     $end_time = $value;

//     if(empty($start_time)) {
//         return $valid = "El valor de la hora inicial esta vacío";
//     }

//     if(empty($end_time)) {
//         return $valid = "El valor de Hora final es obligatorio";
//     }

//     if ($start_time >= $end_time) {
//         $valid = __("La hora final no puede ser menor o igual que la hora inicial.", "acf");
//     }

//     return $valid;
// }

// function custom_validate_time_range_saturday($valid, $value) {
//     $start_time = isset($_POST['acf']['field_64e3e293cbd9c']) ? $_POST['acf']['field_64e3e293cbd9c'] : '';
//     $end_time = $value;

//     if(empty($start_time)) {
//         return $valid = "El valor de la hora inicial esta vacío";
//     }

//     if(empty($end_time)) {
//         return $valid = "El valor de Hora final es obligatorio";
//     }

//     if ($start_time >= $end_time) {
//         $valid = __("La hora final no puede ser menor o igual que la hora inicial.", "acf");
//     }

//     return $valid;
// }

// function custom_validate_time_range_sunday($valid, $value) {
//     $start_time = isset($_POST['acf']['field_64e3e2c5cbd9e']) ? $_POST['acf']['field_64e3e2c5cbd9e'] : '';
//     $end_time = $value;

//     if(empty($start_time)) {
//         return $valid = "El valor de la hora inicial esta vacío";
//     }

//     if(empty($end_time)) {
//         return $valid = "El valor de Hora final es obligatorio";
//     }

//     if ($start_time >= $end_time) {
//         $valid = __("La hora final no puede ser menor o igual que la hora inicial.", "acf");
//     }

//     return $valid;
// }

// function custom_validate_time_range_ss($valid, $value) {
//     $start_time = isset($_POST['acf']['field_64dd04688b15c']) ? $_POST['acf']['field_64dd04688b15c'] : '';
//     $end_time = $value;

//     if(empty($start_time)) {
//         return $valid = "El valor de la hora inicial esta vacío";
//     }

//     if(empty($end_time)) {
//         return $valid = "El valor de Hora final es obligatorio";
//     }

//     if ($start_time >= $end_time) {
//         $valid = __("La hora final no puede ser menor o igual que la hora inicial.", "acf");
//     }

//     return $valid;
// }

?>