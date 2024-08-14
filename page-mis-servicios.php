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
get_header();
$all_services = [];

function get_my_services()
{
    global $all_services;
    $user_id = get_current_user_id();
    // $user_id = 84;

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

    $args = array(
        'post_type' => 'publicar-servicio',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'author'         => $user_id
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $detail = get_field('detalle_servicio');
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
            $all_services[] = [
                'id' => get_the_ID(),
                'title' => get_the_title(),
                'categories' => get_field('categorias'),
                'details' => $detail,
                'schedule' => $schedule
            ];
        }
    }
    wp_reset_postdata();
}

if (current_user_can('proveedorvaleapp') || current_user_can('administrator')) {
    get_my_services();
} else {
    echo do_shortcode('[no_authorizatiojn_page]');
}

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

function render_my_services()
{
    global $all_services;
    foreach ($all_services as $service) {
        $title = isset($service['categories']['categoria']) ? esc_html($service['categories']['categoria']) : 'Título no disponible';
        $subtitle = isset($service['categories'][strtolower($title)]) ? esc_html($service['categories'][strtolower($title)]) : 'Subtítulo no disponible';
        $description = isset($service['details']['detalles_del_servicio']) ? esc_html($service['details']['detalles_del_servicio']) : 'Sin descripcion';
    ?>
        <div class="col-12 col-md-6 my-2">
            <div class="JodRequests-item">
                <div class="JodRequests-item-header">
                    <p class="JodRequests-item-header-text">
                        <?php echo $title; ?>
                        <span>
                            <?php echo $subtitle;  ?>
                        </span>
                    </p>
                </div>
                <div class="JodRequests-item-body">
                    <div class="JodRequests-item-body-item">
                        <img class="JodRequests-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/ubication-icon.svg" alt="JodRequests-item-body-itemIcon">
                        <span class="JodRequests-item-body-itemName">
                            <?php echo esc_html($service['details']['zonas_de_trabajo'] ?? 'Dirección no disponible'); ?>
                        </span>
                    </div>
                    <div class="JodRequests-item-body-item">
                        <span class="JodRequests-item-body-itemName">
                            <?php echo $description; ?>
                        </span>
                    </div>
                    <div class="JodRequests-item-body-item">
                        <span class="JodRequests-item-body-itemName">
                            Tipo de servicio: <?php echo esc_html($service['details']['tipo_de_servicio']); ?>
                        </span>
                    </div>
                    <?php echo render_dates($service['schedule']) ?>
                    <div class="JodRequests-item-body-itemPrice">
                        <?php echo esc_html($service['details']['precio_por_hora'] ?? 'Precio no disponible'); ?>
                        <span>€/h</span>
                    </div>
                </div>
                <div class="JodRequests-item-footer">
                    <a type="button" href="/publicar-servicio/<?php echo $service['id'] ?>" class="JodRequests-item-footerBtn">
                        Editar <img class="img-fluid"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
                            alt="ValeApp">
                    </a>
                </div>
            </div>
        </div>
<?php
    }
}
?>
<section class="section2 servicio-generica">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Mi cuenta</a></li>
                        <li class="breadcrumb-item"><a href="#"></a></li>
                    </ol>
                </nav>
            </div>
            <div class="col-12">
                <h2 class="title">Mis servicios</h2>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <!-- <div class="col-12">Todos mis servicios</div> -->
        <?php echo render_my_services() ?>
    </div>

</div>
<?php
get_footer();
