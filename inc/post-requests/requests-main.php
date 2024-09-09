<?php
require_once plugin_dir_path(__FILE__) . 'requests-post-actions.php';
require_once plugin_dir_path(__FILE__) . 'requests-render.php';
$all_requests = [
    'confirmed_requests' => [],
    'available_requests' => [],
    'actived_requests' => [],
    'ended_requests' => [],
    'canceled_requests' => [],
];

function build_request_detail($service_request, $profile_id, $post_id, $status, $role, $request_id)
{
    $ubication = get_field('ubicacion-card', $service_request->ID);
    $date_data = get_field('programa_tu_tarea-card', $service_request->ID);
    $prices = get_field('encuentra_tu_profesional-card', $service_request->ID);
    $categories = get_field('servicio-card', $service_request->ID);
    $provider_rate = get_field('provider_rate', $request_id);
    $provider_rate_text = get_field('provider_rate_text', $request_id);
    $detail_link = '';
    if ($request_id) {
        $detail_link = get_permalink($request_id);
    }
    $item_photo_field = "foto_de_perfil";
    if ($role === 'provider') {
        $item_photo_field = "fotos_de_perfil";
    }
    if ($profile_id) {
        $profile_info = get_userdata($profile_id);
        if ($profile_info) {
            $profile_details = [
                'id' => $post_id,
                'name' => $profile_info->first_name . ' ' . $profile_info->last_name,
                'user_id' => $profile_info->ID
            ];
        } else {
            $profile_details = [
                'id' => 0,
                'name' => 'Nombre no disponible',
                'user_id' => 0
            ];
        }
        $solicitud_detalles = [
            'id' => $request_id,
            'title' => $categories['categoria'],
            'profile' => $profile_details,
            'profile_photo' => get_field($item_photo_field, $post_id),
            'solicitud' => $service_request,
            'ubicacion' => $ubication,
            'date' => $date_data,
            'prices' => $prices,
            'status' => $status,
            'detail_link' => $detail_link,
            'rate' => [
                'provider_rate' => $provider_rate,
                'provider_rate_text' => $provider_rate_text,
            ]
        ];
    } else {
        $solicitud_detalles = [
            'id' => 0,
            'title' => 'Título no disponible',
            'profile' => [
                'id' => 0,
                'name' => 'Nombre no disponible',
                'user_id' => 0,
            ],
            'profile_photo' => null,
            'solicitud' => 'Solicitud no disponible',
            'ubicacion' => 'Ubicación no disponible',
            'date' => 'Fecha no disponible',
            'prices' => 'Precios no disponibles',
            'status' => 'Estado no disponible',
            'detail_link' => '',
            'rate' => [
                'provider_rate' => 0,
                'provider_rate_text' => '',
            ]
        ];
    }
    return $solicitud_detalles;
}

function get_request_query($post_id, $post_type)
{
    $args = array(
        'post_type' => 'solicitudes',
        'post_status' => 'publish',
        'meta_query' => array(
            array(
                'key' => $post_type,
                'value' => $post_id,
                'compare' => '='
            )
        )
    );
    return $args;
}

function load_client_requests($post_id, &$all_requests)
{
    $args = get_request_query($post_id, 'cliente');
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $status = get_field('estado');
            $solicitud = get_field('solicitud servicio');
            $provider_post_id = get_field('proveedor');
            $provider_id = get_post_field('post_author', $provider_post_id);
            $request_data = build_request_detail($solicitud, $provider_id, $provider_post_id, $status, 'provider', get_the_ID());
            switch ($status) {
                case 'activo':
                    $all_requests['actived_requests'][] = $request_data;
                    break;
                case 'cancelado':
                    $all_requests['canceled_requests'][] = $request_data;
                    break;
                case 'finalizado':
                    $all_requests['ended_requests'][] = $request_data;
                    break;
                case 'confirmado':
                    $all_requests['confirmed_requests'][] = $request_data;
                    break;
                default:
                    break;
            }
        }
    }
    wp_reset_postdata();
}

function get_provider_services()
{
    $service_categories = [];
    $user_id = get_current_user_id();
    if (is_user_logged_in()) {
        $args = [
            'post_type' => 'publicar-servicio',
            'author' => $user_id,
            'posts_per_page' => -1,
        ];

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                $service_categories[] = get_field('categorias_categoria');
            endwhile;
            wp_reset_postdata();
        endif;

        return $service_categories;
    }
    return false;
}

function load_provider_requests($post_id, &$all_requests)
{
    $requests_args = get_request_query($post_id, 'proveedor');
    $query = new WP_Query($requests_args);
    $all_related_requests = [];
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $status = get_field('estado');
            $solicitud = get_field('solicitud servicio');
            $client_post_id = get_field('cliente');
            $client_id = get_post_field('post_author', $client_post_id);
            // $provider_request_data = get_field('cliente');
            $request_data = build_request_detail($solicitud, $client_id, $client_post_id, $status, 'client', get_the_ID());
            $all_related_requests[] = $solicitud->ID;
            switch ($status) {
                case 'activo':
                    $all_requests['actived_requests'][] = $request_data;
                    break;
                case 'cancelado':
                    $all_requests['canceled_requests'][] = $request_data;
                    break;
                case 'finalizado':
                    $all_requests['ended_requests'][] = $request_data;
                    break;
                case 'confirmado':
                    $all_requests['confirmed_requests'][] = $request_data;
                    break;
                default:
                    break;
            }
        }
    }
    $services_category = get_provider_services();
    // $today = current_time('Y-m-d');
    $args = array(
        'post_type' => 'solicitar-servicio',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'relation' => 'OR',
                array(
                    'key' => 'estado',
                    'value' => 'disponible',
                    'compare' => '='
                ),
                array(
                    'key' => 'estado',
                    'compare' => 'NOT EXISTS'
                ),
                array(
                    'key' => 'estado',
                    'value' => '',
                    'compare' => '='
                )
            ),
            array(
                'relation' => 'AND',
                array(
                    'key' => 'servicio-card_categoria',
                    'value' => $services_category,
                    'compare' => 'IN'
                ),
            )
        ),
        // 'date_query' => array(
        //     array(
        //         'column' => 'post_date',
        //         'after'  => $today,
        //         'inclusive' => true
        //     )
        // )
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            if (!in_array(get_the_ID(), $all_related_requests)) {
                $custom_request = (object) [
                    'post_title' => get_the_title(),
                    'ID' => get_the_ID(),
                    'author' => get_the_author_meta('ID')
                ];
                $client_id = get_the_author_meta('ID');
                $client_post_id = get_user_post_id($client_id, 'cliente');
                $status = get_field('estado') ?? 'disponible';
                $request_data = build_request_detail($custom_request, $client_id, $client_post_id, $status, 'client', 0);
                $all_requests['available_requests'][] = $request_data;
            }
        }
    }
    wp_reset_postdata();
}

function get_requests()
{
    global $all_requests;
    // $post_id = get_user_post_id(83, 'cliente');
    // $post_id = get_user_post_id(84, 'proveedor');
    $post_id = get_current_user_post_id();
    if ($post_id) {
        if (current_user_can('proveedorvaleapp') || current_user_can('administrator')) {
            load_provider_requests($post_id, $all_requests);
        } elseif (current_user_can('clientevaleapp') || current_user_can('administrator')) {
            load_client_requests($post_id, $all_requests);
        } else {
            echo do_shortcode('[no_authorizatiojn_page]');
        }
    } else {
        echo do_shortcode('[no_authorizatiojn_page]');
    }
}

##Available perms
#$perms = [
#    "edit" => true, 
#    "confirm" => true,
#    "delete" => true,
#    "request" => true,
#    "watch_detail" => true,
#    'appreciate' => true,
#    'repeat' => true,
#    'message' => true,
#    'finish' => true,
#    'cancel' => true,
#];

function render_available_requests()
{
    if (current_user_can('proveedorvaleapp') || current_user_can('administrator')) {
        global $all_requests;
        $perms = [
            "request" => true,
        ];
        render_requests($all_requests['available_requests'], $perms);
    }
}
function render_confirmed_requests()
{
    if (current_user_can('proveedorvaleapp') || current_user_can('clientevaleapp') || current_user_can('administrator')) {
        global $all_requests;
        if (current_user_can('proveedorvaleapp')) {
            $perms = [
                "watch_detail" => true,
                'message' => true,
                'finish' => true,
                'cancel' => true,
            ];
        } else {
            $perms = [
                "watch_detail" => true,
                'appreciate' => true,
                'message' => true,
                'cancel' => true,
            ];
        }
        render_requests($all_requests['confirmed_requests'], $perms);
    }
}
function render_actived_requests()
{
    if (current_user_can('proveedorvaleapp') || current_user_can('clientevaleapp') || current_user_can('administrator')) {
        global $all_requests;
        if (current_user_can('proveedorvaleapp')) {
            echo '<hr />';
            echo 'Solicitudes Pendientes De Confirmar Por El Cliente';
            $perms = [
                "watch_detail" => true,
            ];
        } else {
            $perms = [
                "edit" => true,
                "confirm" => true,
                "delete" => true
            ];
        }
        render_requests($all_requests['actived_requests'], $perms);
    }
}
function render_canceled_requests()
{
    if (current_user_can('proveedorvaleapp') || current_user_can('clientevaleapp') || current_user_can('administrator')) {
        global $all_requests;
        if (current_user_can('proveedorvaleapp')) {
            $perms = [
                "watch_detail" => true,
            ];
        } else {
            $perms = [
                "watch_detail" => true,
                'repeat' => false
            ];
        }
        render_requests($all_requests['canceled_requests'], $perms);
    }
}
function render_ended_requests()
{
    if (current_user_can('proveedorvaleapp') || current_user_can('clientevaleapp') || current_user_can('administrator')) {
        global $all_requests;
        if (current_user_can('proveedorvaleapp')) {
            $perms = [
                "watch_detail" => true
            ];
        } else {
            $perms = [
                "watch_detail" => true,
                'appreciate' => true,
                'repeat' => false
            ];
        }
        render_requests($all_requests['ended_requests'], $perms);
    }
}
