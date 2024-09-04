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
    if (!is_user_logged_in()) {
        return false;
    }

    $current_user = wp_get_current_user();
    $user_id = $current_user->ID;

    if ($user_id === 0) {
        return false;
    }

    $user_roles = $current_user->roles;
    $rol = '';

    // Priorizar el rol 'proveedorvaleapp' si está presente
    if (in_array('proveedorvaleapp', $user_roles)) {
        $rol = 'proveedor';
    } elseif (in_array('clientevaleapp', $user_roles)) {
        $rol = 'cliente';
    } elseif (in_array('administrator', $user_roles)) {
        $rol = 'administrador';
    }

    // Si no se encontró un rol válido
    if (empty($rol)) {
        return false;
    }

    // Obtener el ID del post del usuario basado en su ID y rol
    $post_id = get_user_post_id($user_id, $rol);

    return $post_id ? $post_id : false;
}