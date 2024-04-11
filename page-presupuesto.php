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

<div class="cards">
        <div class="cards-title">
            A continuación encontrarás los profesionales que mejor se adaptan a tu búsqueda.
        </div>
        <div class="cards-items">
            <div class="cards-item">
                <div class="cards-item-content">
                    <div class="cards-item-img">
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-ervice-user.png" alt="ValeApp">
                        <img class="cards-item-imgIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-profile-check.png" alt="ValeApp-Check">
                    </div>
                    <div class="cards-item-texts">
                        <p class="name">Maria</p>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
                        <p class="rate">4,9</p>
                    </div>
                    <span class="duration">3 meses en Vale</span>
                    <p class="price">20 <span>€/h</span></p>
                </div>
            </div>
            <div class="cards-item">
                <div class="cards-item-content">
                    <div class="cards-item-img">
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-ervice-user.png" alt="ValeApp">
                        <img class="cards-item-imgIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-profile-check.png" alt="ValeApp-Check">
                    </div>
                    <div class="cards-item-texts">
                        <p class="name">Juan</p>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
                        <p class="rate">4,6</p>
                    </div>
                    <span class="duration">2 meses en Vale</span>
                    <p class="price">19 <span>€/h</span></p>
                </div>
            </div>
            <div class="cards-item">
                <div class="cards-item-content">
                    <div class="cards-item-img">
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-ervice-user.png" alt="ValeApp">
                        <img class="cards-item-imgIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-profile-check.png" alt="ValeApp-Check">
                    </div>
                    <div class="cards-item-texts">
                        <p class="name">Andrea</p>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
                        <p class="rate">4,6</p>
                    </div>
                    <span class="duration">2 meses en Vale</span>
                    <p class="price">18 <span>€/h</span></p>
                </div>
            </div>

        </div>
    </div>


<?php
get_footer();