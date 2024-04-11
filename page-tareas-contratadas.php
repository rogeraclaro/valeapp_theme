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
                    Tareas contratadas
                </h2>
            </div>
        </div>
    </div>
</section>
<div class="contracted-tasks">
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
        <div class="contracted-tasks-pill-content tab-pane fade show active" id="pills-contracted-tasks-active" role="tabpanel" aria-labelledby="pills-contracted-tasks-tab-active">
            <div class="contracted-tasks-item">
                <div class="contracted-tasks-item-header">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-ervice-user.png" alt="ValeApp">
                    <p class="contracted-tasks-item-header-text">
                        Clases de tenis
                        <span>María</span>
                    </p>
                </div>
                <div class="contracted-tasks-item-body">
                    <div class="contracted-tasks-item-body-item">
                        <img class="contracted-tasks-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/ubication-icon.svg" alt="contracted-tasks-item-body-itemIcon">
                        <span class="contracted-tasks-item-body-itemName">
                            C/ Teodora Lamadrid, Local
                        </span>
                    </div>
                    <div class="contracted-tasks-item-body-item">
                        <img class="contracted-tasks-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/calendar-icon.svg" alt="contracted-tasks-item-body-itemIcon">
                        <span class="contracted-tasks-item-body-itemName">
                            Mie, 29 marzo a las 19:30
                        </span>
                    </div>
                    <div class="contracted-tasks-item-body-item p-0">
                        <img class="contracted-tasks-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/clock-icon.svg" alt="contracted-tasks-item-body-itemIcon">
                        <span class="contracted-tasks-item-body-itemName">
                            1h
                        </span>
                    </div>
                    <div class="contracted-tasks-item-body-itemPrice">
                        20
                        <span>€/h</span>
                    </div>
                    <div class="contracted-tasks-item-body-itemState">Confirmada</div>
                </div>
                <div class="contracted-tasks-item-footer">
                    <button type="button" class="contracted-tasks-item-footerBtn">
                        Editar reserva <img class="img-fluid"
							src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
							alt="ValeApp">
                    </button>
                    <a href="/preguntas-frecuentes/" type="button" class="contracted-tasks-item-footerBtn">
                    ¿Necesitas ayuda?  <img class="img-fluid"
							src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
							alt="ValeApp">
                    </a>
                </div>
            </div>
        </div>
        <div class="contracted-tasks-pill-content tab-pane fade" id="pills-contracted-tasks-passed" role="tabpanel" aria-labelledby="pills-contracted-tasks-tab-passed">
            <div class="contracted-tasks-item">
                <div class="contracted-tasks-item-header">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-ervice-user.png" alt="ValeApp">
                    <p class="contracted-tasks-item-header-text">
                        Clases de tenis
                        <span>María</span>
                    </p>
                    <button type="button" class="contracted-tasks-item-headerBtn">
                        <img class="cards-header-deleteIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/delete-icon.svg" alt="ValeApp-TrashIcon">
                    </button>
                </div>
                <div class="contracted-tasks-item-body">
                    <div class="contracted-tasks-item-body-item">
                        <img class="contracted-tasks-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/ubication-icon.svg" alt="contracted-tasks-item-body-itemIcon">
                        <span class="contracted-tasks-item-body-itemName">
                            C/ Teodora Lamadrid, Local
                        </span>
                    </div>
                    <div class="contracted-tasks-item-body-item">
                        <img class="contracted-tasks-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/calendar-icon.svg" alt="contracted-tasks-item-body-itemIcon">
                        <span class="contracted-tasks-item-body-itemName">
                            Mie, 29 marzo a las 19:30
                        </span>
                    </div>
                    <div class="contracted-tasks-item-body-item p-0">
                        <img class="contracted-tasks-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/clock-icon.svg" alt="contracted-tasks-item-body-itemIcon">
                        <span class="contracted-tasks-item-body-itemName">
                            1h
                        </span>
                    </div>
                    <div class="contracted-tasks-item-body-itemPrice">
                        20
                        <span>€/h</span>
                    </div>
                    <div class="contracted-tasks-item-body-itemState">Completadas</div>
                </div>
                <div class="contracted-tasks-item-footer">
                    <button type="button" class="contracted-tasks-item-footerBtn">
                        Valorar <img class="img-fluid"
							src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
							alt="ValeApp">
                    </button>
                    <button type="button" class="contracted-tasks-item-footerBtn contracted-tasks-item-footerBtn-border">
                        Volver a reservar <img class="img-fluid"
							src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
							alt="ValeApp">
                    </button>
                </div>
            </div>
        </div>
        <div class="contracted-tasks-pill-content tab-pane fade" id="pills-contracted-tasks-canceled" role="tabpanel" aria-labelledby="pills-contracted-tasks-tab-canceled">
            <div class="contracted-tasks-item">
                <div class="contracted-tasks-item-header">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-ervice-user.png" alt="ValeApp">
                    <p class="contracted-tasks-item-header-text">
                        Clases de tenis
                        <span>María</span>
                    </p>
                    <button type="button" class="contracted-tasks-item-headerBtn">
                        <img class="cards-header-deleteIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/delete-icon.svg" alt="ValeApp-TrashIcon">
                    </button>
                </div>
                <div class="contracted-tasks-item-body">
                    <div class="contracted-tasks-item-body-item">
                        <img class="contracted-tasks-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/ubication-icon.svg" alt="contracted-tasks-item-body-itemIcon">
                        <span class="contracted-tasks-item-body-itemName">
                            C/ Teodora Lamadrid, Local
                        </span>
                    </div>
                    <div class="contracted-tasks-item-body-item">
                        <img class="contracted-tasks-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/calendar-icon.svg" alt="contracted-tasks-item-body-itemIcon">
                        <span class="contracted-tasks-item-body-itemName">
                            Mie, 29 marzo a las 19:30
                        </span>
                    </div>
                    <div class="contracted-tasks-item-body-item p-0">
                        <img class="contracted-tasks-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/clock-icon.svg" alt="contracted-tasks-item-body-itemIcon">
                        <span class="contracted-tasks-item-body-itemName">
                            1h
                        </span>
                    </div>
                    <div class="contracted-tasks-item-body-itemPrice">
                        20
                        <span>€/h</span>
                    </div>
                    <div class="contracted-tasks-item-body-itemState-cancel">Cancelada</div>
                </div>
                <div class="contracted-tasks-item-footer">
                    <button type="button" class="contracted-tasks-item-footerBtn">
                        Reservar <img class="img-fluid"
							src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
							alt="ValeApp">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
