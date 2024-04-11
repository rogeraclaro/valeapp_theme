<?php

add_action('wp_login', 'custom_login_redirect', 10, 3);

function custom_login_redirect($user_login, $user) {

    if (is_a($user, 'WP_User')) {
        $user_roles = $user->roles;
        
        switch(true) {
            case in_array('administrator', $user_roles):
                wp_redirect(admin_url());
                break;
            case in_array('clientevaleapp', $user_roles):
                wp_redirect('/datos-cliente');
                break;
            case in_array('proveedorvaleapp', $user_roles):
                wp_redirect('/datos-proveedor');
                break;
            default:
                wp_redirect(home_url());
                break;
        }
        
        exit;
    }
}


