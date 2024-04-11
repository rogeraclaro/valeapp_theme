<?php

add_action('delete_user', 'eliminar_usuario_y_su_contenido');

function eliminar_usuario_y_su_contenido($user_id) {

    //Delete Customer
    $args_customer = [
        'post_type'      => 'cliente',
        'posts_per_page' => -1,
        'author'         => $user_id
    ];
    $posts_customer = get_posts($args_customer);

    foreach ($posts_customer as $post) {
        wp_delete_post($post->ID, true);
    }

    //Delete Provider
    $args_provider = [
        'post_type'      => 'proveedor',
        'posts_per_page' => -1,
        'author'         => $user_id
    ];
    $posts_provider = get_posts($args_provider);

    foreach ($posts_provider as $post) {
        wp_delete_post($post->ID, true);
    }

    //Delete all posts Provider
    $args_posts_service = [
        'post_type'      => 'publicar-servicio',
        'posts_per_page' => -1,
        'author'         => $user_id
    ];
    $posts_service = get_posts($args_posts_service);

    foreach ($posts_service as $post) {
        wp_delete_post($post->ID, true);
    }

    //Delete all posts Customer
    $args_request_service = [
        'post_type'      => 'solicitar-servicio',
        'posts_per_page' => -1,
        'author'         => $user_id
    ];
    $posts_request_service = get_posts($args_request_service);

    foreach ($posts_request_service as $post) {
        wp_delete_post($post->ID, true);
    }
}
