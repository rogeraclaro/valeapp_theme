<?php
    $user_id = get_current_user_id();
    $args = [
        'post_type' => 'proveedor',
        'author' => $user_id,
        'posts_per_page' => -1,
    ];
    $posts = get_posts($args);
    $membership_count = null;

    foreach ($posts as $post){
        $membership = get_field('field_655e783771091');
        $count = $membership['membresia'];

        if($membership) {
            $membership_count = get_field('field_64de518b855a7', $count);
        }
    }
    
    $args_posts_service = [
        'post_type' => 'publicar-servicio',
        'author' => $user_id,
        'posts_per_page' => -1,
    ];

    $count_posts = null;
    $posts_service = get_posts($args_posts_service);

    foreach($posts_service as $post) {
        $count_posts += 1;
    }


    if($membership_count != "Ilimitado") {
        if($membership_count <= $count_posts) {
            echo do_shortcode('[service_limits]');
            get_footer();
            exit();
        }
    }
    

?>