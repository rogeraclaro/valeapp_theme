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
include 'inc/post-requests/requests-main.php';

get_header();
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
                <?php render_available_requests() ?>
                <?php render_actived_requests() ?>
            </div>
            <div class="JodRequests-pill-content tab-pane fade" id="pills-JodRequests-passed" role="tabpanel" aria-labelledby="pills-JodRequests-tab-passed">
                <?php render_ended_requests() ?>
            </div>
            <div class="JodRequests-pill-content tab-pane fade" id="pills-JodRequests-canceled" role="tabpanel" aria-labelledby="pills-JodRequests-tab-canceled">
                <?php render_canceled_requests() ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
