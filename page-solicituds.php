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
include 'inc/match-service/index.php';

get_header();
$actived_requests = [];
$canceled_requests = [];
$ended_requests = [];
function load_client_requests($post_id, &$activedR, &$canceledR, &$endedR)
{
    // $current_user_id = get_current_user_id();

    $args = array(
        'post_type' => 'solicitudes',
        'meta_query' => array(
            array(
                'key' => 'cliente',
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

    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $status = get_field('estado');
            $solicitud = get_field('solicitud servicio');
            $ubication = get_field('ubicacion-card', $solicitud->ID);
            $date_data = get_field('programa_tu_tarea-card', $solicitud->ID);
            $prices = get_field('encuentra_tu_profesional-card', $solicitud->ID);

            $provider_request_data = get_field('proveedor');
            if ($provider_request_data) {
                $provider_info = get_userdata($provider_request_data->post_author);
                if ($provider_info) {
                    $provider_details = [
                        'id' => $provider_request_data->ID,
                        'name' => $provider_info->first_name . ' ' . $provider_info->last_name,
                        'user_id' => $provider_info->ID
                    ];
                } else {
                    $provider_details = [
                        'id' => 0,
                        'name' => 'Nombre no disponible',
                        'user_id' => 0
                    ];
                }
                $solicitud_detalles = [
                    'id' => get_the_ID(),
                    'title' => get_the_title(),
                    'provider' => $provider_details,
                    'provider_photo' => get_field('fotos_de_perfil', $provider_request_data->ID),
                    'solicitud' => $solicitud,
                    'ubicacion' => $ubication,
                    'date' => $date_data,
                    'prices' => $prices,
                    'status' => $status
                ];
            } else {
                // Proveer valores por defecto en caso de que no se obtenga $provider_request_data
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

            switch ($status) {
                case 'activo':
                    $activedR[] = $solicitud_detalles;
                    break;
                case 'cancelado':
                    $canceledR[] = $solicitud_detalles;
                    break;
                case 'eliminado':
                    $endedR[] = $solicitud_detalles;
                    break;
                default:
                    break;
            }
        }
    } else {
        echo 'No tienes solicitudes.';
    }
    wp_reset_postdata();
}

function load_provider_requests($post_id)
{
    $args = array(
        'post_type' => 'publicar-servicio',
        'posts_per_page' => -1,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        echo '<ul>';
        while ($query->have_posts()) {
            $query->the_post();
            $estado = get_field('categorias');
            echo '<li>';
            echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
            echo ' - Estado: ' . json_encode($estado);;
            echo '</li>';
        }
        echo '</ul>';
    } else {
        echo 'No tienes solicitudes.';
    }
    wp_reset_postdata();
}

function render_solicitudes($requests, $withOptions)
{
    foreach ($requests as $request) {
        $provider_photo = isset($request['provider_photo']) ? $request['provider_photo'] : null;
        $provider_name = isset($request['provider']['name']) ? esc_html($request['provider']['name']) : 'Nombre no disponible';
        $solicitud_title = isset($request['solicitud']->post_title) ? esc_html($request['solicitud']->post_title) : 'Título no disponible';
        $provider_photo_url = $provider_photo && isset($provider_photo['url']) ? esc_url($provider_photo['url']) : get_stylesheet_directory_uri() . '/img/valeapp-providers-ervice-user.png';
        $footer = "";
        if ($withOptions) {
            $footer = ' <div class="JodRequests-item-footer">
                <button type="button" class="contracted-tasks-item-footerBtn">
                    Editar reserva <img class="img-fluid" src="'. get_stylesheet_directory_uri() .'/img/valeapp-providers-chevron-faq.png" alt="ValeApp">
                </button>
                <a type="button" href="https://valeapp.com/ajuda/" class="JodRequests-item-footerBtn">
                    ¿Necesitas ayuda? <img class="img-fluid" src="'.get_stylesheet_directory_uri().'/img/valeapp-providers-chevron-faq.png" alt="ValeApp">
                </a>
            </div>';
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
                <?php echo $footer; ?>
            </div>


        </div>
<?php
    }
}

// $post_id_cliente = get_user_post_id(83, 'cliente');
// $post_id = 84;
$post_id = get_current_user_post_id();
if ($post_id) {
    if (current_user_can('proveedorvaleapp') || current_user_can('administrator')) {
        load_provider_requests(84);
    } elseif (current_user_can('clientevaleapp') || current_user_can('administrator')) {
        load_client_requests($post_id, $actived_requests, $canceled_requests, $ended_requests);
    } else {
        echo do_shortcode('[no_authorizatiojn_page]');
    }
} else {
    echo do_shortcode('[no_authorizatiojn_page]');
}
?>

<section class="section2 servicio-generica">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><?php breadcrumb_my_account(); ?></li>
                        <li class="breadcrumb-item"><a href="#"></a></li>
                    </ol>
                </nav>
            </div>
            <div class="col-12">
                <h2 class="title">
                    Solicituds
                </h2>
            </div>
        </div>
    </div>
</section>
<div class="JodRequests">
    <div class="container">
        <ul class="nav nav-pills JodRequests-pills " id="pills-tab-JodRequests" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="JodRequests-pill active" id="pills-JodRequests-tab-active" data-bs-toggle="pill" data-bs-target="#pills-JodRequests-active" type="button" role="tab" aria-controls="pills-JodRequests-active" aria-selected="true">Nuevas</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="JodRequests-pill" id="pills-JodRequests-tab-passed" data-bs-toggle="pill" data-bs-target="#pills-JodRequests-passed" type="button" role="tab" aria-controls="pills-JodRequests-passed" aria-selected="false">Pasadas</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="JodRequests-pill" id="pills-JodRequests-tab-canceled" data-bs-toggle="pill" data-bs-target="#pills-JodRequests-canceled" type="button" role="tab" aria-controls="pills-JodRequests-canceled" aria-selected="false">Canceladas</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tab-JodRequests">
            <div class="JodRequests-pill-content tab-pane fade show active" id="pills-JodRequests-active" role="tabpanel" aria-labelledby="pills-JodRequests-tab-active">
                <?php render_solicitudes($actived_requests, true) ?>
            </div>
            <div class="JodRequests-pill-content tab-pane fade" id="pills-JodRequests-passed" role="tabpanel" aria-labelledby="pills-JodRequests-tab-passed">
                <?php render_solicitudes($ended_requests, false) ?>
            </div>
            <div class="JodRequests-pill-content tab-pane fade" id="pills-JodRequests-canceled" role="tabpanel" aria-labelledby="pills-JodRequests-tab-canceled">
                <?php render_solicitudes($canceled_requests, false) ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
