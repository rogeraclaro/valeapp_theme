<?php

if (isset($_POST['registro_submit'])) {
    $username = sanitize_user($_POST['first_name'] . " " . $_POST['last_name']);
    $email = sanitize_email($_POST['email']);
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    if (username_exists($username) || email_exists($email)) {
        echo "<div class='reg-modal'>L'usuari o l'email ja existeixen. Si us plau, inicieu sessió.</div>";
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
            echo "<div class='reg-modal'>Error de registre. Si us plau, torneu-ho a intentar.</div>";
        } 
        else {
            wp_redirect(home_url('/iniciar-sessio-clients')); 
            exit;
        }
    }
}