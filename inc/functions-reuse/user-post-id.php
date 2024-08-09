<?php
function get_user_post_id($user_id, $rol){
    if(is_user_logged_in()){
        $post_id = "";
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

function get_current_user_post_id()
{
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
        $post_id = get_user_post_id($user_id,$rol);
        return $post_id;
    }

    return false;
}
