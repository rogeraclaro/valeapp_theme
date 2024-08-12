<?php

if (isset($_POST['action']) && wp_verify_nonce($_POST['requests_nonce'], 'requests_action')) {
    if (!isset($_POST['solicitud_id'])) {
        wp_die('Solicitud inválida.');
    }
    if (!(current_user_can('clientevaleapp') || current_user_can('proveedorvaleapp') || current_user_can('administrator'))) {
        wp_die('No tienes permisos para realizar esta acción.');
    }
    $action = $_POST['action'];
    $post_id = sanitize_text_field($_POST['post_id']);
    $solicitud_id = sanitize_text_field($_POST['solicitud_id']);

    switch ($action) {
        case 'request_confirm_submit':
            if (intval($post_id)) {
                update_post_meta($post_id, 'estado', 'confirmado');
                update_post_meta($solicitud_id, 'estado', 'confirmado');
            } else {
                wp_die('Solicitud inválida.');
            }
            break;
        case 'request_cancel_submit':
            if (intval($post_id)) {
                update_post_meta($post_id, 'estado', 'cancelado');
            } else {
                wp_die('Solicitud inválida.');
            }
            break;

        case 'request_create_submit':
            $client_id = get_post_field('post_author', $solicitud_id);
            $post_client_id = get_user_post_id($client_id, 'cliente');
            $post_provider_id = get_current_user_post_id();
            $new_post = [
                'post_title'    => 'prueba',
                'estado'  => 'activo',
                'post_status'   => 'publish',
                'post_type'     => 'solicitudes',
                'post_author'   => get_current_user_id(),
            ];
            $new_request_post_id = wp_insert_post($new_post);
            if (is_wp_error($new_request_post_id)) {
                wp_die('Solicitud inválida.');
            } else {
                $creation_datetime = current_time('mysql');
                add_post_meta('cliente', $post_client_id, $new_request_post_id);
                add_post_meta('proveedor', $post_provider_id, $new_request_post_id);
                update_field('fecha_de_creacion', $creation_datetime, $new_request_post_id);
                add_post_meta('solicitud servicio', $solicitud_id, $new_request_post_id);
            }
            break;

        default:
            echo "<div class='reg-modal'>Acción no reconocida.</div>";
            break;
    }
}
