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
                    Solicitudes
                </h2>
            </div>
        </div>
    </div>
</section>
<div class="JodRequests">
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
            <div class="JodRequests-item">
                <div class="JodRequests-item-header">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-ervice-user.png" alt="ValeApp">
                    <p class="JodRequests-item-header-text">
                        Clases de tenis
                        <span>María</span>
                    </p>
                </div>
                <div class="JodRequests-item-body">
                    <div class="JodRequests-item-body-item">
                        <img class="JodRequests-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/ubication-icon.svg" alt="JodRequests-item-body-itemIcon">
                        <span class="JodRequests-item-body-itemName">
                            C/ Teodora Lamadrid, Local
                        </span>
                    </div>
                    <div class="JodRequests-item-body-item">
                        <img class="JodRequests-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/calendar-icon.svg" alt="JodRequests-item-body-itemIcon">
                        <span class="JodRequests-item-body-itemName">
                            Mie, 29 marzo a las 19:30
                        </span>
                    </div>
                    <div class="JodRequests-item-body-item p-0">
                        <img class="JodRequests-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/clock-icon.svg" alt="JodRequests-item-body-itemIcon">
                        <span class="JodRequests-item-body-itemName">
                            1h
                        </span>
                    </div>
                    <div class="JodRequests-item-body-itemPrice">
                        20
                        <span>€/h</span>
                    </div>
                    <div class="JodRequests-item-body-itemState">Pendiente</div>
                    <div class="JodRequests-btnContent">
                            <button class="JodRequests-deny">
                                <span>
                                    Denegar
                                </span>
                            </button>
                            <button class="JodRequests-accept">
                                <span>
                                    Aceptar
                                </span>
                            </button>
                        </div>
                </div>
                <div class="JodRequests-item-footer">
                    <button type="button" class="JodRequests-item-footerBtn">
                        Ver detalles <img class="img-fluid"
							src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
							alt="ValeApp">
                    </button>
                    <a type="button" href="https://valeapp.com/ayuda/" class="JodRequests-item-footerBtn">
                    ¿Necesitas ayuda? <img class="img-fluid"
							src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
							alt="ValeApp">
                    </a>
                </div>
            </div>
        </div>
        <div class="JodRequests-pill-content tab-pane fade" id="pills-JodRequests-passed" role="tabpanel" aria-labelledby="pills-JodRequests-tab-passed">
            <div class="JodRequests-item">
                <div class="JodRequests-item-header">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-ervice-user.png" alt="ValeApp">
                    <p class="JodRequests-item-header-text">
                        Clases de tenis
                        <span>María</span>
                    </p>
                    <button type="button" class="JodRequests-item-headerBtn">
                        <img class="cards-header-deleteIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/delete-icon.svg" alt="ValeApp-TrashIcon">
                    </button>
                </div>
                <div class="JodRequests-item-body">
                    <div class="JodRequests-item-body-item">
                        <img class="JodRequests-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/ubication-icon.svg" alt="JodRequests-item-body-itemIcon">
                        <span class="JodRequests-item-body-itemName">
                            C/ Teodora Lamadrid, Local
                        </span>
                    </div>
                    <div class="JodRequests-item-body-item">
                        <img class="JodRequests-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/calendar-icon.svg" alt="JodRequests-item-body-itemIcon">
                        <span class="JodRequests-item-body-itemName">
                            Mie, 29 marzo a las 19:30h
                        </span>
                    </div>
                    <div class="JodRequests-item-body-item p-0">
                        <img class="JodRequests-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/clock-icon.svg" alt="JodRequests-item-body-itemIcon">
                        <span class="JodRequests-item-body-itemName">
                            1h
                        </span>
                    </div>
                    <div class="JodRequests-item-body-itemPrice">
                        20
                        <span>€/h</span>
                    </div>
                    <div class="JodRequests-item-body-itemState">Completadas</div>
                </div>
                <div class="JodRequests-item-footer">
                    <button type="button" class="JodRequests-item-footerBtn">
                        Valorar <img class="img-fluid"
							src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
							alt="ValeApp">
                    </button>
                    <button type="button" class="JodRequests-item-footerBtn JodRequests-item-footerBtn-border">
                        Volver a reservar <img class="img-fluid"
							src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
							alt="ValeApp">
                    </button>
                </div>
            </div>
        </div>
        <div class="JodRequests-pill-content tab-pane fade" id="pills-JodRequests-canceled" role="tabpanel" aria-labelledby="pills-JodRequests-tab-canceled">
            <div class="JodRequests-item">
                <div class="JodRequests-item-header">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-ervice-user.png" alt="ValeApp">
                    <p class="JodRequests-item-header-text">
                        Clases de tenis
                        <span>María</span>
                    </p>
                    <button type="button" class="JodRequests-item-headerBtn">
                        <img class="cards-header-deleteIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/delete-icon.svg" alt="ValeApp-TrashIcon">
                    </button>
                </div>
                <div class="JodRequests-item-body">
                    <div class="JodRequests-item-body-item">
                        <img class="JodRequests-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/ubication-icon.svg" alt="JodRequests-item-body-itemIcon">
                        <span class="JodRequests-item-body-itemName">
                            C/ Teodora Lamadrid, Local
                        </span>
                    </div>
                    <div class="JodRequests-item-body-item">
                        <img class="JodRequests-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/calendar-icon.svg" alt="JodRequests-item-body-itemIcon">
                        <span class="JodRequests-item-body-itemName">
                            Mie, 29 marzo a las 19:30
                        </span>
                    </div>
                    <div class="JodRequests-item-body-item p-0">
                        <img class="JodRequests-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/clock-icon.svg" alt="JodRequests-item-body-itemIcon">
                        <span class="JodRequests-item-body-itemName">
                            1h
                        </span>
                    </div>
                    <div class="JodRequests-item-body-itemPrice">
                        20
                        <span>€/h</span>
                    </div>
                    <div class="JodRequests-item-body-itemState-cancel">Cancelada</div>
                </div>
                <div class="JodRequests-item-footer">
                    <button type="button" class="JodRequests-item-footerBtn">
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