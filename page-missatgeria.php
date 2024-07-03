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
    <section class="section2 messages">
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
                        Mensajes
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section class="Messages">
        <div class="Messages-row">
            <div class="Messages-count">
                <p class="Messages-count-label">Nuevos</p>
                <span class="Messages-count-number">2</span>
            </div>
            <button class="Messages-action">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-message-edit-icon.png" alt="valeapp" class="Messages-action-edit">
                <p class="Messages-action-label">Editar</p>
            </button>
        </div>
        <ul class="Message-list">
            <li class="Message-item new">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-ervice-user.png" alt="valeapp" class="Message-item-image">
                <div class="Message-item-content">
                    <div class="Message-item-row">
                        <p class="Message-item-subject">Clases de tenis</p>
                        <p class="Message-item-date">
                            <span class="Message-item-day">Hoy,</span>
                            <span class="Message-item-hour">17:32</span>
                        </p>
                    </div>
                    <p class="Message-item-name">María</p>
                    <p class="Message-item-text">
                        Lorem ipsum dolor sit amet, <br class="xs-br" />
                        consectetur adipisicing elit, sed do.
                    </p>
                </div>
            </li>
            <li class="Message-item new">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-ervice-user.png" alt="valeapp" class="Message-item-image">
                <div class="Message-item-content">
                    <div class="Message-item-row">
                        <p class="Message-item-subject">Natacion</p>
                        <p class="Message-item-date">
                            <span class="Message-item-day">Hoy,</span>
                            <span class="Message-item-hour">17:32</span>
                        </p>
                    </div>
                    <p class="Message-item-name">Juan</p>
                    <p class="Message-item-text">
                        Lorem ipsum dolor sit amet, <br class="xs-br" />
                        consectetur adipisicing elit, sed do.
                    </p>
                </div>
            </li>
            <li class="Message-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-ervice-user.png" alt="valeapp" class="Message-item-image">
                <div class="Message-item-content">
                    <div class="Message-item-row">
                        <p class="Message-item-subject">Psicología</p>
                        <p class="Message-item-date">
                            <span class="Message-item-day">Hoy,</span>
                            <span class="Message-item-hour">17:32</span>
                        </p>
                    </div>
                    <p class="Message-item-name">Andrea</p>
                    <p class="Message-item-text">
                        Lorem ipsum dolor sit amet, <br class="xs-br" />
                        consectetur adipisicing elit, sed do.
                    </p>
                </div>
            </li>
            <li class="Message-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-ervice-user.png" alt="valeapp" class="Message-item-image">
                <div class="Message-item-content">
                    <div class="Message-item-row">
                        <p class="Message-item-subject">Psicología</p>
                        <p class="Message-item-date">
                            <span class="Message-item-day">Hoy,</span>
                            <span class="Message-item-hour">17:32</span>
                        </p>
                    </div>
                    <p class="Message-item-name">Andrea</p>
                    <p class="Message-item-text">
                        Lorem ipsum dolor sit amet, <br class="xs-br" />
                        consectetur adipisicing elit, sed do.
                    </p>
                </div>
            </li>
            <li class="Message-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-ervice-user.png" alt="valeapp" class="Message-item-image">
                <div class="Message-item-content">
                    <div class="Message-item-row">
                        <p class="Message-item-subject">Psicología</p>
                        <p class="Message-item-date">
                            <span class="Message-item-day">Hoy,</span>
                            <span class="Message-item-hour">17:32</span>
                        </p>
                    </div>
                    <p class="Message-item-name">Andrea</p>
                    <p class="Message-item-text">
                        Lorem ipsum dolor sit amet, <br class="xs-br" />
                        consectetur adipisicing elit, sed do.
                    </p>
                </div>
            </li>
            <li class="Message-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-ervice-user.png" alt="valeapp" class="Message-item-image">
                <div class="Message-item-content">
                    <div class="Message-item-row">
                        <p class="Message-item-subject">Psicología</p>
                        <p class="Message-item-date">
                            <span class="Message-item-day">Hoy,</span>
                            <span class="Message-item-hour">17:32</span>
                        </p>
                    </div>
                    <p class="Message-item-name">Andrea</p>
                    <p class="Message-item-text">
                        Lorem ipsum dolor sit amet, <br class="xs-br" />
                        consectetur adipisicing elit, sed do.
                    </p>
                </div>
            </li>
            <li class="Message-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-ervice-user.png" alt="valeapp" class="Message-item-image">
                <div class="Message-item-content">
                    <div class="Message-item-row">
                        <p class="Message-item-subject">Psicología</p>
                        <p class="Message-item-date">
                            <span class="Message-item-day">Hoy,</span>
                            <span class="Message-item-hour">17:32</span>
                        </p>
                    </div>
                    <p class="Message-item-name">Andrea</p>
                    <p class="Message-item-text">
                        Lorem ipsum dolor sit amet, <br class="xs-br" />
                        consectetur adipisicing elit, sed do.
                    </p>
                </div>
            </li>
            <li class="Message-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-ervice-user.png" alt="valeapp" class="Message-item-image">
                <div class="Message-item-content">
                    <div class="Message-item-row">
                        <p class="Message-item-subject">Psicología</p>
                        <p class="Message-item-date">
                            <span class="Message-item-day">Hoy,</span>
                            <span class="Message-item-hour">17:32</span>
                        </p>
                    </div>
                    <p class="Message-item-name">Andrea</p>
                    <p class="Message-item-text">
                        Lorem ipsum dolor sit amet, <br class="xs-br" />
                        consectetur adipisicing elit, sed do.
                    </p>
                </div>
            </li>
            <li class="Message-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-ervice-user.png" alt="valeapp" class="Message-item-image">
                <div class="Message-item-content">
                    <div class="Message-item-row">
                        <p class="Message-item-subject">Psicología</p>
                        <p class="Message-item-date">
                            <span class="Message-item-day">Hoy,</span>
                            <span class="Message-item-hour">17:32</span>
                        </p>
                    </div>
                    <p class="Message-item-name">Andrea</p>
                    <p class="Message-item-text">
                        Lorem ipsum dolor sit amet, <br class="xs-br" />
                        consectetur adipisicing elit, sed do.
                    </p>
                </div>
            </li>
            <li class="Message-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-ervice-user.png" alt="valeapp" class="Message-item-image">
                <div class="Message-item-content">
                    <div class="Message-item-row">
                        <p class="Message-item-subject">Psicología</p>
                        <p class="Message-item-date">
                            <span class="Message-item-day">Hoy,</span>
                            <span class="Message-item-hour">17:32</span>
                        </p>
                    </div>
                    <p class="Message-item-name">Andrea</p>
                    <p class="Message-item-text">
                        Lorem ipsum dolor sit amet, <br class="xs-br" />
                        consectetur adipisicing elit, sed do.
                    </p>
                </div>
            </li>
        </ul>
    </section>
<?php
get_footer();