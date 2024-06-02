<?php

function search_author_url($user_id, $price)
{
    $author_id = $user_id;
    $args_user = [
        'post_type' => 'proveedor',
        'author' => $author_id,
        'posts_per_page' => -1,
    ];

    $users = get_posts($args_user);

    if ($users) {
        foreach ($users as $user) {
            // $post_title = $user->post_title;
            $post_id = $user->ID;
            $name = get_field('field_64dcf1b4615ce', $post_id);
            $photo = get_field('field_64dcf553615dc', $post_id)['url'];
            $rate = get_field('field_64dcf621615e0', $post_id);
            $post_created_date = get_the_date('Y-m-d', $post_id);
            $current_date = date('Y-m-d');
            $datetime1 = new DateTime($post_created_date);
            $datetime2 = new DateTime($current_date);
            $interval = $datetime1->diff($datetime2);
            $months_diff = $interval->format('%m');
            ?>
            <div class="card" id="modal01-button">
                <img class="img-fluid" src=<?php echo $photo; ?> alt="ValeApp">
                <div class="wrapper">
                    <p class="name"><?php echo $name ?></p>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp"
                        class="star">
                    <p class="rate"><?php echo $rate; ?></p>
                </div>
                <span class="duration"><?php echo $months_diff; ?> meses en Vale</span>
                <p class="price"><?php echo $price; ?><span>€</span></p>
            </div> <?php
        }
    }
}
;

function search_author_rate($servicio_id)
{

    $author_id = get_post_field('post_author', $servicio_id);
    $rate = "";
    $args_post = [
        'post_type' => 'proveedor',
        'author' => $author_id,
        'posts_per_page' => -1,
    ];

    $postByAuthors = get_posts($args_post);

    if (!empty($postByAuthors)) {
        foreach ($postByAuthors as $post) {
            $post_id = $post->ID;
            $rate = get_field('field_64dcf621615e0', $post_id);

        }
    }
    return $rate;
}
;