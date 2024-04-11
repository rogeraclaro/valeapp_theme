<?php 

function search_author_url($user_id, $price) {
    $author_id = $user_id;
    $args_user = [
        'post_type' => 'proveedor',
        'author'    => $author_id,
        'posts_per_page' => -1,
    ];

    $users = get_posts($args_user);
    if($users) {
        foreach($users as $user) {
            // $post_title = $user->post_title;
            $post_id = $user->ID;
            $name = get_field('field_64dcf1b4615ce', $post_id);
            $photo = get_field('field_64dcf553615dc', $post_id)['url'];
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
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
					<p class="rate"><?php echo ""; ?></p>
				</div>
				<span class="duration"><?php echo $months_diff; ?> meses en Vale</span>
				<p class="price"><?php echo $price; ?><span>€</span></p>
			</div> <?php
        }                
    }
};