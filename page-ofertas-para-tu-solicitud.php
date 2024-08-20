<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ValeApp
 */

include 'inc/post-requests/requests-post-actions.php';
get_header();

function get_last_post_by_user($user_id)
{
    $args = array(
        'post_author'         => $user_id,  // ID del autor
        'post_type'      => 'solicitar-servicio',     // Tipo de post, 'any' para cualquier tipo de post
        'post_status'    => 'publish', // Solo posts publicados
        'posts_per_page' => 1,         // Solo el último post
        'orderby'        => 'date',    // Ordenar por fecha
        'order'          => 'DESC'     // Orden descendente
    );
    $id = 0;
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $id = get_the_ID();
        }
    }
    return $id; 
}
// $request_id = isset($_GET['solicitud_id']) ? intval($_GET['solicitud_id']) : 0;
$current_user_id = get_current_user_id();
$request_id = get_last_post_by_user($current_user_id);
$all_available_providers = [];
$all_available_providers_id = [];
$all_available_providers_id_post_id = [];

function render_dates($schedule)
{
    foreach ($schedule as $date) {
?>
        <div class="JodRequests-item-body-item">
            <img class="JodRequests-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/calendar-icon.svg" alt="JodRequests-item-body-itemIcon">
            <span class="JodRequests-item-body-itemName">
                <?php echo esc_html($date['label'] ?? 'Fecha no disponible'); ?>
            </span>
        </div>
        <div class="JodRequests-item-body-item">
            <img class="JodRequests-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/clock-icon.svg" alt="JodRequests-item-body-itemIcon">
            <span class="JodRequests-item-body-itemName">
                <?php echo esc_html($date['init'] ?? '--'); ?>
                -
                <?php echo esc_html($date['end'] ?? '--'); ?>
            </span>
        </div>
    <?php
    }
}

function get_provider_data($profile_id)
{
    $item_photo_field = "fotos_de_perfil";
    $profile_details = (object)[
        'id' => 0,
        'name' => 'Nombre no disponible',
        'user_id' => 0,
        'photo' => ''
    ];
    if ($profile_id) {
        $profile_info = get_userdata($profile_id);
        $post_id = get_user_post_id($profile_id, 'proveedor');
        if ($profile_info) {
            $profile_photo = get_field($item_photo_field, $post_id);
            $profile_photo_url = $profile_photo && isset($profile_photo['url']) ? esc_url($profile_photo['url']) : get_stylesheet_directory_uri() . '/img/valeapp-providers-ervice-user.png';
            $profile_details = (object)[
                'id' => $post_id,
                'name' => $profile_info->first_name . ' ' . $profile_info->last_name,
                'user_id' => $profile_info->ID,
                'photo' =>  $profile_photo_url,
            ];
        }
    }
    return $profile_details;
}

if ((current_user_can('clientevaleapp') || current_user_can('administrator')) && $request_id > 0) {
    $date_labels = [];
    for ($i = 0; $i < 7; $i++) {
        switch ($i) {
            case 0:
                $date_labels[] = (object)[
                    'label' => 'domingo',
                    'value' => 'horario_dormingo',
                    'end' => '_d'
                ];
                break;
            case 1:
                $date_labels[] = (object)[
                    'label' => 'lunes',
                    'value' => 'horario_lunes',
                    'end' => '_l'
                ];
                break;
            case 2:
                $date_labels[] = (object)[
                    'label' => 'martes',
                    'value' => 'horario_martes',
                    'end' => '_m'
                ];
                break;
            case 3:
                $date_labels[] = (object)[
                    'label' => 'miercoles',
                    'value' => 'horario_miercoles',
                    'end' => '_mm'
                ];
                break;
            case 4:
                $date_labels[] = (object)[
                    'label' => 'jueves',
                    'value' => 'horario_jueves',
                    'end' => '_j'
                ];
                break;
            case 5:
                $date_labels[] = (object)[
                    'label' => 'viernes',
                    'value' => 'horario_viernes',
                    'end' => '_v'
                ];
                break;
            case 6:
                $date_labels[] = (object)[
                    'label' => 'sabado',
                    'value' => 'horario_sabado',
                    'end' => '_s'
                ];
                break;
        }
    }

    $category = get_field('servicio-card_categoria', $request_id);

    // GET ALL AVAILABLE PROVIDERS
    $args = array(
        'post_type' => 'publicar-servicio',
        'post_status' => 'publish',
        'meta_query' => array(
            array(
                'key' => 'categorias_categoria',
                'value' => $category,
                'compare' => '='
            )
        )
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $detail = get_field('detalle_servicio');
            $provider_user_id = get_post_field('post_author');
            $schedule = [];
            for ($i = 0; $i < 7; $i++) {
                $labels = $date_labels[$i];
                if ($detail[$labels->label]) {
                    $schedule[] = [
                        'label' => $labels->label,
                        'init' => $detail[$labels->value]['hora_de_inicio' . $labels->end],
                        'end' => $detail[$labels->value]['hora_final' . $labels->end],
                    ];
                }
            }
            $service_data = (object)[
                'id' => get_the_ID(),
                'title' => get_the_title(),
                'categories' => get_field('categorias'),
                'details' => $detail,
                'schedule' => $schedule,
                'author_id' => $provider_user_id
            ];
            $services = [];
            if (isset($all_available_providers[$provider_user_id])) {
                $services = $all_available_providers[$provider_user_id]->services;
                $provider_data = $all_available_providers[$provider_user_id]->provider_data;
                $services[] = $service_data;
                $all_available_providers[$provider_user_id] = (object) [
                    'services' => $services,
                    'provider_data' => $provider_data,
                ];
            } else {
                $services[] = $service_data;
                $provider_data = get_provider_data($provider_user_id);
                if (isset($provider_data) && $provider_data->id) {
                    $all_available_providers_id[] = $provider_data->id;
                    $all_available_providers_id_post_id[$provider_data->id] = $provider_user_id;
                }
                $all_available_providers[$provider_user_id] = (object) [
                    'services' => $services,
                    'provider_data' => $provider_data,
                ];
            }
        }
    }

    //GET THE PROVIDER RATE
    if (!empty($all_available_providers_id)) {
        $args_requests = array(
            'post_type' => 'solicitudes',
            'post_status' => 'publish',
            'meta_query' => array(
                'relation' => 'AND',
                array(
                    'key' => 'proveedor',
                    'value' => $all_available_providers_id,
                    'compare' => 'IN'
                ),
                array(
                    'key' => 'estado',
                    'value' => 'confirmado',
                    'compare' => '='
                ),
                array(
                    'key'     => 'provider_rate',
                    'compare' => 'EXISTS'
                ),
            )
        );
        $query = new WP_Query($args_requests);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $rate = get_field('provider_rate');
                $rate_text = get_field('provider_rate_text');
                $request_provider_id = get_field('proveedor');
                $request_client_id = get_field('cliente');
                $new_request = (object)[
                    'rate' => intval(preg_replace('/[^0-9]/', '', $rate ?? '')),
                    'rate_text' => $rate_text,
                    'client_id' => $request_client_id,
                ];
                $provider_user_id = $all_available_providers_id_post_id[$request_provider_id];
                $requests = [];
                if (isset($all_available_providers[$provider_user_id]->requests)) {
                    $requests = $all_available_providers[$provider_user_id]->requests;
                }
                $requests[] = $new_request;
                $services = $all_available_providers[$provider_user_id]->services;
                $provider_data = $all_available_providers[$provider_user_id]->provider_data;

                $all_available_providers[$provider_user_id] = (object) [
                    'services' => $services,
                    'provider_data' => $provider_data,
                    'requests' => $requests
                ];
            }
        }
    }


    wp_reset_postdata();
    // echo json_encode($all_available_providers);
    ?>
    <section class="section2 servicio-generica">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">El meu compte</a></li>
                            <li class="breadcrumb-item"><a href="#"></a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12">
                    <h2 class="title">
                        Les meves ofertes
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <div class="container my-2">
        <div class="cards-title">
            A continuació trobaràs els professionals<br /> que millor s'adapten a les teves cerques.
        </div>
        <div class="row">
            <?php
            foreach ($all_available_providers as $provider) {
                $profile = $provider->provider_data;
                $average_rate = 0;
                $requests = [];
                if (isset($provider->requests) && count($provider->requests) > 0) {
                    $requests = $provider->requests;
                    foreach ($requests as $request) {
                        $average_rate = $average_rate + $request->rate;
                    }
                    $average_rate = $average_rate / count($requests);
                }
            ?>
                <div class="col-12 col-md-6 my-2">
                    <div class="JodRequests-item">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="JodRequests-item-header">
                                <img class="img-fluid" src="<?php echo $profile->photo; ?>" alt="<?php echo esc_attr($profile->name ?? 'Foto del proveedor'); ?>">
                                <p class="JodRequests-item-header-text">
                                    <?php echo $profile->name ?? 'Nombre no disponible'; ?>
                                    <span>Proveïdor relacionat al vostre servei</span>
                                    <span>Valoració de <?php echo esc_html(number_format($average_rate, 2)); ?></span>
                                </p>
                            </div>
                            <div class="JodRequests-item-body">
                                <?php
                                if (isset($provider->services) && count($provider->services) > 0) {
                                    $services = $provider->services;
                                    foreach ($services as $service) {
                                        $service_title = isset($service->categories['categoria']) ? esc_html($service->categories['categoria']) : 'Título no disponible';
                                        $service_subtitle = isset($service->categories[strtolower($service_title)]) ? esc_html($service->categories[strtolower($service_title)]) : 'Subtítulo no disponible';
                                ?>
                                        <div class="JodRequests-item-body-item">
                                            <span class="JodRequests-item-body-itemName">
                                                <?php echo $service_title . ' - ' . $service_subtitle; ?>
                                                <?php echo render_dates($service->schedule) ?>
                                            </span>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                                <button class="JodRequests-accept my-2 w-auto" type="submit" name="action" value="request_hire_submit">
                                    <span>
                                        Contratar
                                    </span>
                                </button>
                            </div>
                            <input type="hidden" name="title" value="<?php echo $category; ?>">
                            <input type="hidden" name="post_id" value="0">
                            <input type="hidden" name="solicitud_id" value="<?php echo $request_id; ?>">
                            <input type="hidden" name="provider_id" value="<?php echo $profile->id; ?>">
                            <?php wp_nonce_field('requests_action', 'requests_nonce'); ?>
                        </form>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

    </div>
<?php
} else {
    echo do_shortcode('[no_authorization_page]');
}
get_footer();
