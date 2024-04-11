<?php

$current_user = wp_get_current_user();
$user = "";
$user_role = "";
$rol = "";
$user_id = "";
$field_photo = "";

if($current_user->ID !=0) {
    $user = $current_user->user_login;
    $user_roles = $current_user->roles;
    $user_id = get_current_user_id();
};

foreach($user_roles as $role) {
    $user_role = $role;
};

switch ($user_role) {
    case 'contributor':
        $rol = "proveedor";
        $field_photo = "field_64dcf553615dc";
    break;
    case 'customer':
        $rol = "cliente";
        $field_photo = "field_64dcf7f7e9ebb";
    break;
    case 'administrator':
        $rol = "administrador";
    break;
};

$args = [
    'post_type' => $rol,
    'author' => $user_id,
];

$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        the_title('<h2>', '</h2>');
        the_content();
        $profile_photo = get_field($field_photo);
        ?>
            <img class="image-profile" src="<?php echo($profile_photo['url']);?>" alt="<?php echo($profile_photo['alt']); ?>">
        <?php
    endwhile;
    wp_reset_postdata();
else :
    echo 'No se encontraron posts.';
endif;

?>
<p>Username: <?php echo($user); ?></p>
<p>Role: <?php echo($user_role); ?></p>
<p>rol en espanol: <?php echo($rol); ?></p>
<p>Id: <?php echo($user_id); ?></p>
