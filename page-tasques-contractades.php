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
                    Tasques contractades
                </h2>
            </div>
        </div>
    </div>
</section>
<div class="contracted-tasks">
    <div class="container">
        <ul class="nav nav-pills contracted-tasks-pills mb-3" id="pills-tab-contracted-tasks" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="contracted-tasks-pill active" id="pills-contracted-tasks-tab-active" data-bs-toggle="pill" data-bs-target="#pills-contracted-tasks-active" type="button" role="tab" aria-controls="pills-contracted-tasks-active" aria-selected="true">Activas</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="contracted-tasks-pill" id="pills-contracted-tasks-tab-passed" data-bs-toggle="pill" data-bs-target="#pills-contracted-tasks-passed" type="button" role="tab" aria-controls="pills-contracted-tasks-passed" aria-selected="false">Pasadas</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="contracted-tasks-pill" id="pills-contracted-tasks-tab-canceled" data-bs-toggle="pill" data-bs-target="#pills-contracted-tasks-canceled" type="button" role="tab" aria-controls="pills-contracted-tasks-canceled" aria-selected="false">Canceladas</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tab-contracted-tasksContent">
            <div class="JodRequests-pill-content tab-pane fade show active" id="pills-contracted-tasks-active" role="tabpanel" aria-labelledby="pills-JodRequests-tab-active">
                <?php render_confirmed_requests() ?>
            </div>
            <div class="JodRequests-pill-content tab-pane fade" id="pills-contracted-tasks-passed" role="tabpanel" aria-labelledby="pills-JodRequests-tab-passed">
                <?php render_ended_requests() ?>
            </div>
            <div class="JodRequests-pill-content tab-pane fade" id="pills-contracted-tasks-canceled" role="tabpanel" aria-labelledby="pills-JodRequests-tab-canceled">
                <?php render_canceled_requests() ?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
