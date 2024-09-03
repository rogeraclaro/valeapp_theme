<?php

$current_user = wp_get_current_user();

if ($current_user->ID != 0) {
    $user = $current_user->user_login;
    $user_roles = $current_user->roles;
    $user_id = get_current_user_id();

    // Determinar el rol y otros valores asociados
    $rol = '';
    $field_photo = '';
    if (in_array('contributor', $user_roles)) {
        $user_role = 'contributor';
        $rol = "proveedor";
        $field_photo = "field_64dcf553615dc";
    } elseif (in_array('customer', $user_roles)) {
        $user_role = 'customer';
        $rol = "cliente";
        $field_photo = "field_64dcf7f7e9ebb";
    } elseif (in_array('administrator', $user_roles)) {
        $user_role = 'administrator';
        $rol = "administrador";
    }

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
            if ($profile_photo) {
                ?>
<img class="image-profile" src="<?php echo esc_url($profile_photo['url']); ?>"
  alt="<?php echo esc_attr($profile_photo['alt']); ?>">
<?php
            }
        endwhile;
        wp_reset_postdata();
    else :
        echo 'No se encontraron posts.';
    endif;

    // Mostrar información del usuario
    ?>
<p>Username: <?php echo esc_html($user); ?></p>
<p>Role: <?php echo esc_html($user_role); ?></p>
<p>rol en espanol: <?php echo esc_html($rol); ?></p>
<p>Id: <?php echo esc_html($user_id); ?></p>
<?php

} else {
    echo 'Usuario no encontrado.';
}
?>