<?php

if (isset($_POST['registro_submit'])) {
    $username = sanitize_user($_POST['first_name'] . " " . $_POST['last_name']);
    $email = sanitize_email($_POST['email']);
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    if (username_exists($username) || email_exists($email)) {
        echo "El usuario o el correo electrónico ya existen. Por favor, inicia sesión.";
    } else {

        $user_id = wp_insert_user([
            'user_login' => $username,
            'user_pass' => $password,
            'user_email' => $email,
            'role' => 'clientevaleapp',
            'first_name' => $first_name,
            'last_name' => $last_name,
        ]);

        if (is_wp_error($user_id)) {
            echo "Hubo un error en el registro. Por favor, inténtalo de nuevo.";
        } 
        else {
            wp_redirect(home_url('/inicio-sesion-clientes')); 
            exit;
        }
    }
}