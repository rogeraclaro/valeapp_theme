<?php

if(!function_exists('search_user')){

function search_user($user_author, $id_publish, $id_request) {
    // $author = get_user_by('login', $user_author);
    // $author_id = $author->ID;
    $id_service_publish = $id_publish;
    $id_service_request = $id_request;
    $author_id = $user_author;
    $args_user = [
        'post_type' => 'proveedor',
        'author'    => $author_id,
        'posts_per_page' => -1,
    ];
    $custom_query = new WP_Query($args_user);
    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) : $custom_query->the_post();
            $provider_id = get_the_ID();
            load_script_email($id_service_publish, $id_service_request);
            ?>
            <div class="cards-item">
                <div class="cards-item-content">
                    <div class="cards-item-img">
                    <?php
                            $profile_photo = get_field('field_64dcf553615dc');
                            if($profile_photo) {
                                ?>
                                    <img class="img-fluid" src="<?php echo($profile_photo['url']);?>" alt="<?php echo($profile_photo['alt']); ?>">
                                <?php
                            }
                            else {
                                ?>
                                    <img class="image-profile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v3.png" alt="none photo">
                                <?php
                            }
                        ?>
                        <img class="cards-item-imgIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-profile-check.png" alt="ValeApp-Check">
                    </div>
                    <div class="cards-item-description">
                        <div class="cards-item-texts">
                            <p class="name">
                            <?php echo(get_field('field_64dcf1b4615ce')); ?>
                            </p>
                            <div class="cards-item-rate">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
                                <p class="rate">
                                    4,6
                                </p>
                            </div>
                        </div>
                        <span class="duration">
                            2 meses en Vale
                        </span>
                    </div>
                    <div class="contentButton">
                        <p class="price">
                            <?php echo("50"); ?><span>€/h</span>
                        </p>
                        <?php echo do_shortcode('[better_messages_pm_button text="Mensaje" user_id="78" message="Mensaje prueba" target="_self" class="button extra-class" fast_start="0" url_only="0"]'); ?>
                        <button class="button" id="btn_<?php echo($provider_id); ?>" type="submit" data-id="<?php echo($provider_id); ?>" >Contactar</button>
                    </div>
                </div>
            </div>

            <?php
        endwhile;
    else:
        echo 'No se encontraron posts.';
    endif;
    wp_reset_postdata();
}

}

?>