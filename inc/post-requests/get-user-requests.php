<?php
require_once plugin_dir_path(__FILE__) . 'requests-post-actions.php';
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
            'title' => get_field('title', $service_request->ID),
            'provider' => $profile_details,
            'provider_photo' => get_field($item_photo_field, $post_id),
            'solicitud' => $service_request,
            'ubicacion' => $ubication,
            'date' => $date_data,
            'prices' => $prices,
            'status' => $status
        ];
    } else {
        $solicitud_detalles = [
            'id' => 0,
            'title' => 'Título no disponible',
            'provider' => [
                'id' => 0,
                'name' => 'Nombre no disponible',
                'user_id' => 0,
                'provider_photo' => null
            ],
            'solicitud' => 'Solicitud no disponible',
            'ubicacion' => 'Ubicación no disponible',
            'date' => 'Fecha no disponible',
            'prices' => 'Precios no disponibles',
            'status' => 'Estado no disponible'
        ];
    }
    return $solicitud_detalles;
}

function load_client_requests($post_id, &$all_requests)
{
    $args = array(
        'post_type' => 'solicitudes',
        'post_status' => 'publish',
        'meta_query' => array(
            array(
                'key' => 'cliente',
                'value' => $post_id,
                'compare' => '='
            )
        )
    );

    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $status = get_field('estado');
            $solicitud = get_field('solicitud servicio');
            $provider_request_data = get_field('proveedor');
            $request_data = build_request_detail($solicitud, $provider_request_data->post_author, $provider_request_data->ID, $status, 'provider', get_the_ID());

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

function load_provider_requests($post_id, &$all_requests)
{
    $requests_args = array(
        'post_type' => 'solicitudes',
        'post_status' => 'publish',
        'meta_query' => array(
            array(
                'key' => 'proveedor',
                'value' => $post_id,
                'compare' => '='
            ),
            array(
                'key' => 'estado',
                'value' => 'confirmado',
                'compare' => '!='
            )
        )
    );

    $query = new WP_Query($requests_args);
    $all_related_requests = [];
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $status = get_field('estado');
            $solicitud = get_field('solicitud servicio');
            $provider_request_data = get_field('cliente');
            $request_data = build_request_detail($solicitud, $provider_request_data->post_author, $provider_request_data->ID, $status, 'client', get_the_ID());
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


    $args = array(
        'post_type' => 'solicitar-servicio',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'meta_query' => array(
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
        )
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            if(!in_array(get_the_ID(), $all_related_requests)){
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

function render_requests($requests, $perms)
{
    foreach ($requests as $request) {
        $provider_photo = isset($request['provider_photo']) ? $request['provider_photo'] : null;
        $provider_name = isset($request['provider']['name']) ? esc_html($request['provider']['name']) : 'Nombre no disponible';
        $solicitud_title = isset($request['solicitud']->post_title) ? esc_html($request['solicitud']->post_title) : 'Título no disponible';
        $solicitud_id = isset($request['solicitud']->ID) ? ($request['solicitud']->ID) : 0;
        $provider_photo_url = $provider_photo && isset($provider_photo['url']) ? esc_url($provider_photo['url']) : get_stylesheet_directory_uri() . '/img/valeapp-providers-ervice-user.png';
        $btns = "";
        $footer_options = "";
        if ($perms) {
            //BUTTONS
            if (isset($perms['confirm'])) {
                $btns = $btns . '<button class="JodRequests-accept" type="submit" name="action" value="request_confirm_submit">
                        <span>
                            Confirmar
                        </span>
                    </button>';
            }
            if (isset($perms['delete'])) {
                $btns = $btns . '<button class="JodRequests-deny" type="submit" name="action" value="request_cancel_submit">
                        <span>
                            Denegar
                        </span>
                    </button>';
            }
            if (isset($perms['request'])) {
                $btns = $btns . '<button class="JodRequests-accept" type="submit" name="action" value="request_create_submit">
                        <span>
                            Postularse
                        </span>
                    </button>';
            }
            //FOOTER
            if (isset($perms['edit'])) {
                $footer_options = $footer_options . '<a type="button" href="/solicitar-servicio/' . $solicitud_id . '" class="JodRequests-item-footerBtn">
                    Editar reserva <img class="img-fluid"
                        src="' . get_stylesheet_directory_uri() . '/img/valeapp-providers-chevron-faq.png"
                        alt="ValeApp">
                </a>';
            }
            if (isset($perms['watch_detail'])) {
                $footer_options = $footer_options . '<a type="button" href="/solicitud/' . $request['id'] . '" class="JodRequests-item-footerBtn">
                    Ver detalles <img class="img-fluid"
                        src="' . get_stylesheet_directory_uri() . '/img/valeapp-providers-chevron-faq.png"
                        alt="ValeApp">
                </a>';
            }
            if (isset($perms['appreciate'])) {
                $footer_options = $footer_options . '<button type="button" class="contracted-tasks-item-footerBtn">
                        Valorar <img class="img-fluid"
							src="' . get_stylesheet_directory_uri() . '/img/valeapp-providers-chevron-faq.png"
							alt="ValeApp">
                    </button>';
            }
            if (isset($perms['repeat'])) {
                $footer_options = $footer_options . '<button type="button" class="contracted-tasks-item-footerBtn contracted-tasks-item-footerBtn-border">
                        Volver a reservar <img class="img-fluid"
							src="' . get_stylesheet_directory_uri() . '/img/valeapp-providers-chevron-faq.png"
							alt="ValeApp">
                    </button>';
            }
        }

?>
        <div class="JodRequests-item">
            <div class="JodRequests-item-header">
                <img class="img-fluid" src="<?php echo $provider_photo_url; ?>" alt="<?php echo esc_attr($provider_photo['alt'] ?? 'Foto del proveedor'); ?>">
                <p class="JodRequests-item-header-text">
                    <?php echo $solicitud_title; ?>
                    <span><?php echo $provider_name; ?></span>
                </p>
            </div>
            <div class="JodRequests-item-body">
                <div class="JodRequests-item-body-item">
                    <img class="JodRequests-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/ubication-icon.svg" alt="JodRequests-item-body-itemIcon">
                    <span class="JodRequests-item-body-itemName">
                        <?php echo esc_html($request['ubicacion']['direccion'] ?? 'Dirección no disponible'); ?>
                    </span>
                </div>
                <div class="JodRequests-item-body-item">
                    <img class="JodRequests-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/calendar-icon.svg" alt="JodRequests-item-body-itemIcon">
                    <span class="JodRequests-item-body-itemName">
                        <?php echo esc_html($request['date']['fecha_de_tarea'] ?? 'Fecha no disponible'); ?>
                    </span>
                </div>
                <div class="JodRequests-item-body-item p-0">
                    <img class="JodRequests-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/clock-icon.svg" alt="JodRequests-item-body-itemIcon">
                    <span class="JodRequests-item-body-itemName">
                        <?php echo esc_html($request['date']['hora_de_inicio'] ?? '--'); ?>
                        -
                        <?php echo esc_html($request['date']['hora_finalizacion'] ?? '--'); ?>
                    </span>
                </div>
                <div class="JodRequests-item-body-itemPrice">
                    <?php echo esc_html($request['prices']['precio_maximo_por_hora'] ?? 'Precio no disponible'); ?>
                    <span>€/h</span>
                </div>
                <div class="JodRequests-item-body-itemState">
                    <?php echo esc_html(ucfirst($request['status'] ?? 'estado no disponible')); ?>
                </div>
                <form method="post" action="" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="change_request_status">
                    <input type="hidden" name="post_id" value="<?php echo $request['id']; ?>">
                    <input type="hidden" name="solicitud_id" value="<?php echo $solicitud_id; ?>">
                    <input type="hidden" name="new_status" value="confirmado">
                    <div class="JodRequests-btnContent">
                        <?php echo $btns; ?>
                    </div>
                    <?php wp_nonce_field('requests_action', 'requests_nonce'); ?>
                </form>
            </div>
            <div class="JodRequests-item-footer">
                <?php echo $footer_options; ?>
                <a type="button" href="https://valeapp.com/ajuda/" class="JodRequests-item-footerBtn">
                    ¿Necesitas ayuda? <img class="img-fluid"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
                        alt="ValeApp">
                </a>
            </div>
        </div>
<?php
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
#    'repeat' => true
#];

function render_available_requests()
{
    if (current_user_can('proveedorvaleapp') || current_user_can('administrator')) {
        global $all_requests;
        $perms = [
            "request" => true,
            "watch_detail" => true
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
                "watch_detail" => true
            ];
        } else {
            $perms = [
                "watch_detail" => true,
                'appreciate' => true
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
                "delete" => true,
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
                'repeat' => true
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
                'repeat' => true
            ];
        }
        render_requests($all_requests['ended_requests'], $perms);
    }
}



?>