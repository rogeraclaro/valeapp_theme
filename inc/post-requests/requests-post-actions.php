<?php
function set_cancel_to_all_related_requests($solicitud_id, $post_id)
{
    $args = array(
        'post_type' => 'solicitudes',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'key' => 'solicitud servicio',
                'value' => $solicitud_id,
                'compare' => '='
            )
        ),
        'post__not_in' => array($post_id)
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $post_id = get_the_ID();
            update_post_meta($post_id, 'estado', 'eliminado');
        }
    }

    wp_reset_postdata();
}
function is_the_request_available($solicitud_id)
{
    $status = get_field('estado', $solicitud_id) ?? 'disponible';
    if ($status === "disponible") {
        $args = array(
            'post_type' => 'solicitudes',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'meta_query' => array(
                'relation' => 'AND',
                array(
                    'key' => 'solicitud servicio',
                    'value' => $solicitud_id,
                    'compare' => '='
                ),
                array(
                    'key' => 'estado',
                    'value' => 'activo',
                    'compare' => '='
                )
            )
        );
        $query = new WP_Query($args);
        wp_reset_postdata();
        if ($query->have_posts()) {
            return !($query->found_posts >= 3);
        } else {
            return true;
        }
    }
    return false;
}

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
    $title = sanitize_text_field($_POST['title']);
    switch ($action) {
        case 'request_confirm_submit':
            if (intval($post_id) && intval($solicitud_id)) {
                $post_state = get_field('estado', $post_id) ?? 'activo';
                $request_state = get_field('estado', $solicitud_id) ?? 'disponible';
                if ($post_state === 'activo' && $request_state === 'disponible') {
                    update_post_meta($post_id, 'estado', 'confirmado');
                    update_post_meta($solicitud_id, 'estado', 'confirmado');

                    set_cancel_to_all_related_requests($solicitud_id, $post_id);
                } else {
                    wp_die('La solicitud ya esta confirmada.');
                }
            } else {
                wp_die('Solicitud inválida.');
            }
            break;
        case 'request_finish_submit':
            if (intval($post_id)) {
                update_post_meta($post_id, 'estado', 'finalizado');
                update_post_meta($solicitud_id, 'estado', 'terminado');
            } else {
                wp_die('Solicitud inválida.');
            }
            break;
        case 'request_cancel_submit':
            if (intval($post_id)) {
                update_post_meta($post_id, 'estado', 'cancelado');
                update_post_meta($solicitud_id, 'estado', 'cancelado');
            } else {
                wp_die('Solicitud inválida.');
            }
            break;
        case 'request_denied_submit':
            if (intval($post_id)) {
                update_post_meta($post_id, 'estado', 'eliminado');
            } else {
                wp_die('Solicitud inválida.');
            }
            break;
        case 'request_appreciate_submit':
            if (intval($post_id)) {
                $stars_name = sanitize_text_field($_POST['stars_name']);
                $stars_value = '';
                if (isset($_POST[$stars_name])) {
                    $stars_value = sanitize_text_field($_POST[$stars_name]);
                }
                $start_text = sanitize_text_field($_POST['provider_rate_text']);
                update_field('provider_rate', $stars_value, $post_id);
                update_field('provider_rate_text', $start_text, $post_id);
            } else {
                wp_die('Solicitud inválida.');
            }
            break;
        case 'request_hire_submit':
            $post_provider_id = sanitize_text_field($_POST['provider_id']);
            $post_client_id = get_current_user_post_id();
            $author =  get_current_user_id();
            $new_post = [
                'post_title'    => $title,
                'estado'  => 'activo',
                'post_status'   => 'publish',
                'post_type'     => 'solicitudes',
                'post_author'   => $author,
            ];
            $new_request_post_id = wp_insert_post($new_post);
            if (is_wp_error($new_request_post_id)) {
                wp_die('Solicitud inválida.');
            } else {
                $creation_datetime = current_time('mysql');
                update_field('estado', 'activo', $new_request_post_id);
                update_field('cliente', $post_client_id, $new_request_post_id);
                update_field('proveedor', $post_provider_id, $new_request_post_id);
                update_field('fecha_de_creacion', $creation_datetime, $new_request_post_id);
                update_field('solicitud servicio', $solicitud_id, $new_request_post_id);

                wp_redirect(home_url('/solicituds'));
            }
            break;
        case 'request_create_submit':
            if (intval($solicitud_id)) {
                $is_available = is_the_request_available($solicitud_id);
                if ($is_available) {
                    $client_id = get_post_field('post_author', $solicitud_id);
                    $post_client_id = get_user_post_id($client_id, 'cliente');
                    $post_provider_id = get_current_user_post_id();
                    // $post_client_id = get_user_post_id(83, 'cliente');
                    // $post_provider_id = get_user_post_id(84, 'proveedor');
                    $author =  get_current_user_id();
                    // $author = get_userdata(84);
                    $new_post = [
                        'post_title'    => $title,
                        'estado'  => 'activo',
                        'post_status'   => 'publish',
                        'post_type'     => 'solicitudes',
                        'post_author'   => $author,
                    ];
                    $new_request_post_id = wp_insert_post($new_post);
                    if (is_wp_error($new_request_post_id)) {
                        wp_die('Solicitud inválida.');
                    } else {
                        $creation_datetime = current_time('mysql');
                        update_field('estado', 'activo', $new_request_post_id);
                        update_field('cliente', $post_client_id, $new_request_post_id);
                        update_field('proveedor', $post_provider_id, $new_request_post_id);
                        update_field('fecha_de_creacion', $creation_datetime, $new_request_post_id);
                        update_field('solicitud servicio', $solicitud_id, $new_request_post_id);
                    }
                } else {
                    wp_die('La solicitud ya tiene demasiadas ofertas!.');
                }
            } else {
                wp_die('Solicitud inválida.');
            }

            break;
        case 'request_duplicate_submit':
            // echo '';
            break;

        default:
            echo "<div class='reg-modal'>Acción no reconocida.</div>";
            break;
    }
}
