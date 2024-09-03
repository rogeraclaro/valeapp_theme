<?php

function breadcrumb_my_account() {
    if (!is_user_logged_in()) {
        echo '<a href="#">El meu compte</a>';
        return;
    }

    $current_user = wp_get_current_user();
    $user_roles = $current_user->roles;
    $user_id = $current_user->ID;

    // Determinar el rol basado en la prioridad
    $rol = '';
    if (in_array('proveedorvaleapp', $user_roles)) {
        $rol = 'proveedor';
    } elseif (in_array('clientevaleapp', $user_roles)) {
        $rol = 'cliente';
    }

    if (empty($rol)) {
        echo '<a href="#">El meu compte</a>';
        return;
    }

    $args = [
        'post_type' => $rol,
        'author' => $user_id,
    ];

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $id = get_the_ID();
            ?>
<a href="/<?php echo esc_attr($rol); ?>/<?php echo esc_attr($id); ?>">
  El meu compte
</a>
<?php
        }
        wp_reset_postdata();
    } else {
        echo '<a href="#">El meu compte</a>';
    }
}
?>