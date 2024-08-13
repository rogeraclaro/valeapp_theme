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
$slug = get_query_var('name');
$post = get_page_by_path($slug, OBJECT, 'solicitudes');

function get_profile_data($profile_id, $post_id, $role)
{
    $profile_info = get_userdata($profile_id);
    $item_photo_field = "foto_de_perfil";
    if ($role === 'provider') {
        $item_photo_field = "fotos_de_perfil";
    }
    if (isset($profile_info)) {
        $profile_details = [
            'id' => $post_id,
            'name' => $profile_info->first_name . ' ' . $profile_info->last_name,
            'user_id' => $profile_info->ID,
            'photo' => get_field($item_photo_field, $post_id),
            'direction' => get_field('datos_personales', $post_id),
            'post_date_month' => get_post_time('F Y', true, $post_id)
        ];
    } else {
        $profile_details = [
            'id' => 0,
            'name' => 'Nombre no disponible',
            'user_id' => 0,
            'photo' => '',
            'direction' => [],
        ];
    }
    return $profile_details;
}

if (isset($post)) {
    $profile = [];
    if (current_user_can('proveedorvaleapp') || current_user_can('administrator')) {
        $client_post_id = get_field('cliente', $post->ID);
        $client_id = get_post_field('post_author', $client_post_id);
        $profile = get_profile_data($client_id, $client_post_id, 'client');
    } elseif (current_user_can('clientevaleapp') || current_user_can('administrator')) {
        $provider_post_id = get_field('proveedor', $post->ID);
        $provider_id = get_post_field('post_author', $provider_post_id);
        $profile = get_profile_data($provider_id, $provider_post_id, 'provider');
    } else {
        echo do_shortcode('[no_authorizatiojn_page]');
    }



    $solicitud = get_field('solicitud servicio', $post->ID);
    $status = get_field('estado', $post->ID);
    $ubication = get_field('ubicacion-card', $solicitud->ID);
    $date_data = get_field('programa_tu_tarea-card', $solicitud->ID);
    $prices = get_field('encuentra_tu_profesional-card', $solicitud->ID);
    $categories = get_field('servicio-card', $solicitud->ID);
    $description = get_field('cuentanos_tu_tarea-card', $solicitud->ID);
    $request_data = [
        'title' => $post->post_title,
        'profile' => $profile,
        'ubicacion' => $ubication,
        'date' => $date_data,
        'prices' => $prices,
        'status' => $status,
        'description' => $description,
    ];

    $solicitud_title = isset($request_data['title']) ? esc_html($request_data['title']) : 'Título no disponible';
    $profile_id = isset($profile['user_id']) ? esc_html($profile['user_id']) : '';
    $profile_photo = isset($profile['photo']) ? $profile['photo'] : null;
    $profile_name = isset($profile['name']) ? esc_html($profile['name']) : 'Nombre no disponible';
    $profile_photo_url = $profile_photo && isset($profile_photo['url']) ? esc_url($profile_photo['url']) : get_stylesheet_directory_uri() . '/img/valeapp-providers-ervice-user.png';
?>

    <section class="section2 Ayuda">
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
                        Solicitudes
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <div class="RequestsDetail">
        <div class="RequestsDetail-card">
            <div class="RequestsDetail-cardImg">
                <img class="img-fluid" src="<?php echo $profile_photo_url ?>" alt="ValeApp">
            </div>
            <div class="RequestsDetail-cardText">
                <span class="RequestsDetail-cardName"><?php echo $profile_name; ?></span>
                <span class="RequestsDetail-cardProfession"><?php echo $solicitud_title; ?></span>
            </div>
        </div>
        <hr />
        <div class="RequestsDetail-section">
            <div class="RequestsDetail-sectionHeader">
                <span class="RequestsDetail-sectionHeader-title">¿Cómo funciona?</span>
            </div>
            <div class="RequestsDetail-sectionBody RequestsDetail-sectionBody-text">
                Has recibido una solicitud de reserva de<br /> <?php echo $profile_name; ?> para la tarea <?php echo $solicitud_title; ?>. La<br />
                oferta caducará en dos semanas en<br /> caso de que no confirmes el servicio.
            </div>
        </div>
        <hr />
        <div class="RequestsDetail-section">
            <div class="RequestsDetail-sectionHeader">
                <span class="RequestsDetail-sectionHeader-title">Ubicación</span>
            </div>
            <div class="RequestsDetail-sectionBody">
                <div class="RequestsDetail-sectionBody-item">
                    <img class="RequestsDetail-sectionBody-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/ubication-icon.svg" alt="RequestsDetail-sectionBody-itemIcon">
                    <span class="RequestsDetail-sectionBody-itemName">
                        <?php echo esc_html($request_data['ubicacion']['direccion'] ?? 'Dirección no disponible'); ?>
                    </span>
                </div>
            </div>
        </div>
        <hr />
        <div class="RequestsDetail-section">
            <div class="RequestsDetail-sectionHeader">
                <span class="RequestsDetail-sectionHeader-title">Fecha y hora</span>
            </div>
            <div class="RequestsDetail-sectionBody">
                <div class="RequestsDetail-sectionBody-item">
                    <img class="RequestsDetail-sectionBody-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/ubication-icon.svg" alt="RequestsDetail-sectionBody-itemIcon">
                    <span class="RequestsDetail-sectionBody-itemName">
                        <!-- Miércoles, 29 de marzo -->
                        <?php echo esc_html($request_data['date']['fecha_de_tarea'] ?? 'Fecha no disponible'); ?>
                    </span>
                </div>
                <div class="RequestsDetail-sectionBody-item RequestsDetail-sectionBody-item-timeline">
                    <span class="RequestsDetail-sectionBody-itemStart">
                        Inicio: <?php echo esc_html($request_data['date']['hora_de_inicio'] ?? '--'); ?>
                    </span>
                    <span class="RequestsDetail-sectionBody-itemEnd">
                        Fin: <?php echo esc_html($request_data['date']['hora_finalizacion'] ?? '--'); ?>
                    </span>
                </div>
                <div class="RequestsDetail-sectionBody-item">
                    <img class="RequestsDetail-sectionBody-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/clock-icon.svg" alt="RequestsDetail-sectionBody-itemIcon">
                    <span class="RequestsDetail-sectionBody-itemName">
                        (Duración: <?php echo esc_html($request_data['date']['cantidad_de_horas_solicitadas'] ?? '--'); ?>h)
                    </span>
                </div>
            </div>
        </div>
        <hr />
        <div class="RequestsDetail-section">
            <div class="RequestsDetail-sectionHeader">
                <span class="RequestsDetail-sectionHeader-title">Detalles de tu tarea</span>
            </div>
            <div class="RequestsDetail-sectionBody RequestsDetail-sectionBody-text">
                <?php echo esc_html($request_data['description']['descripcion_de_tarea'] ?? '-sin descripcion-'); ?>
            </div>
        </div>
        <hr />
        <div class="RequestsDetail-section">
            <div class="RequestsDetail-sectionHeader">
                <span class="RequestsDetail-sectionHeader-title">Detalles del precio</span>
            </div>
            <div class="RequestsDetail-sectionBody details">
                <div class="RequestsDetail-sectionBody-item RequestsDetail-sectionBody-item-list">
                    <span class="RequestsDetail-sectionBody-itemName">
                        <?php echo $solicitud_title; ?>
                    </span>
                    <span class="RequestsDetail-sectionBody-itemValue">
                        <?php echo esc_html($request_data['prices']['precio_maximo_por_hora'] ?? '--'); ?> &euro;/h
                    </span>
                </div>
                <div class="RequestsDetail-sectionBody-item RequestsDetail-sectionBody-item-list">
                    <span class="RequestsDetail-sectionBody-itemName">
                        <?php echo esc_html($request_data['date']['tipo_de_servicio'] ?? '--'); ?>
                    </span>
                    <span class="RequestsDetail-sectionBody-itemValue"></span>
                </div>
                <div class="RequestsDetail-sectionBody-item RequestsDetail-sectionBody-item-list">
                    <span class="RequestsDetail-sectionBody-itemName">
                        Horas contratadas
                    </span>
                    <span class="RequestsDetail-sectionBody-itemValue">
                        <?php echo esc_html($request_data['date']['cantidad_de_horas_solicitadas'] ?? '--'); ?>h
                    </span>
                </div>
                <hr />
                <div class="RequestsDetail-sectionBody-item RequestsDetail-sectionBody-item-list RequestsDetail-sectionBody-item-total">
                    <span class="RequestsDetail-sectionBody-itemName">
                        Total
                    </span>
                    <span class="RequestsDetail-sectionBody-itemValue">
                        <?php
                        $precio_maximo_por_hora = $request_data['prices']['precio_maximo_por_hora'] ?? 0;
                        $cantidad_de_horas_solicitadas = $request_data['date']['cantidad_de_horas_solicitadas'] ?? 0;

                        if (is_numeric($precio_maximo_por_hora) && is_numeric($cantidad_de_horas_solicitadas)) {
                            $total = $precio_maximo_por_hora * $cantidad_de_horas_solicitadas;
                            echo esc_html(number_format($total, 2)) . ' &euro;';
                        } else {
                            echo '--';
                        }
                        ?>
                    </span>
                </div>
            </div>
        </div>
        <a class="RequestsDetail-btn" href="#">
            Confirmar reserva
        </a>
        <a class="RequestsDetail-deny" href="#">
            Denegar
        </a>
        <div class="RequestsDetail-rating">
            <div class="wrapper4">
                <h3 class="title">Valoraciones de Claudia (30)</h3>
                <div class="rating-content">
                    <div class="rating-wrapper">
                        <img class="img-fluid profile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-rating-photo.png" alt="ValeApp">
                        <div class="rating-info">
                            <p class="name">Jorge P</p>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-rating-modal.png" alt="ValeApp">
                        </div>
                        <div class="duration">Hace 2 dias</div>
                    </div>
                    <p class="message">
                        “Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut bore.”
                        et dol
                    </p>
                </div>
                <div class="rating-content">
                    <div class="rating-wrapper">
                        <img class="img-fluid profile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-rating-photo.png" alt="ValeApp">
                        <div class="rating-info">
                            <p class="name">Lorena P.</p>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-rating-modal.png" alt="ValeApp">
                        </div>
                        <div class="duration">Hace 3 semanas</div>
                    </div>
                    <p class="message">
                        “Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut bore.”
                        et dol
                    </p>
                </div>
                <div class="rating-content">
                    <div class="rating-wrapper">
                        <img class="img-fluid profile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-rating-photo.png" alt="ValeApp">
                        <div class="rating-info">
                            <p class="name">Isabel G. </p>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-rating-modal.png" alt="ValeApp">
                        </div>
                        <div class="duration">Hace 2 meses</div>
                    </div>
                    <p class="message">
                        “Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut bore.”
                        et dol
                    </p>
                </div>
                <button class="RequestsDetail-showMore"> + Ver mas</button>
            </div>
            <div class="wrapper5">
                <h3 class="title">Usuario</h3>
                <div class="wrapper">
                    <div class="information">
                        <p class="text">
                            De
                            <span><?php echo $profile['direction']['pais']; ?></span>
                        </p>
                        <p class="text">
                            Miembro desde
                            <span><?php echo $profile['post_date_month'] ?? '--'; ?></span>
                        </p>
                        <!-- <p class="text">
                            Idiomas
                            <span>Español/Inglés</span>
                        </p> -->
                    </div>
                    <div class="profile">
                        <img class="img-fluid" src="<?php echo $profile_photo_url ?>" alt="ValeApp">
                        <img class="profile-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-profile-check.png" alt="ValeApp-Check">
                    </div>
                </div>
                <div class="RequestsDetail-showMore">
                    <img class="img-fluid message" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-message-icon.png" alt="ValeApp">
                    <?php echo do_shortcode('[better_messages_pm_button text="Escribir a ' . $profile_name . '" user_id="' . $profile_id . '" message="Hola! Mucho Gusto!" class="RequestsDetail-showMore-link" target="_self" fast_start="0" url_only="0"]'); ?>
                </div>
            </div>
            <div class="wrapper6">
                <h3 class="title">Política de cancelación</h3>
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>Antelación al inicio</th>
                            <th>% penalización <br />comisión</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>No show</td>
                            <td>100% del importe</td>
                        </tr>
                        <tr>
                            <td>Menos de 24h</td>
                            <td>50% del importe</td>
                        </tr>
                        <tr>
                            <td>Mas de 24h</td>
                            <td>0% del importe</td>
                        </tr>
                    </tbody>
                </table>
                <p class="RequestsDetail-polices">
                    Ver <a href="#">política de cancelaciones</a>
                </p>
            </div>
        </div>
    </div>

<?php
} else {
    echo do_shortcode('[no_authorizatiojn_page]');
}
get_footer();
