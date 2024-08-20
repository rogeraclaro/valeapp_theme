<?php

function breadcrumb_my_account() {
    if(is_user_logged_in()) {
        $current_user = wp_get_current_user();
        $user_role = "";
        $rol = "";
        $user_id = "";

        if($current_user->ID !=0) {
            $user_roles = $current_user->roles;
            $user_id = get_current_user_id();
        };

        foreach($user_roles as $role) {
            $user_role = $role;
        };

        switch($user_role) {
            case "proveedorvaleapp":
                $rol = "proveedor";
            break;
            case "clientevaleapp":
                $rol = "cliente";
            break;
        };

        $args = [
            'post_type' => $rol,
            'author' => $user_id,
        ];

        $query = new WP_Query($args);

        if($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                $id = get_the_ID();

                ?>
<a href="/<?php echo($rol); ?>/<?php echo($id); ?>">
  El meu compte
</a>
<?php
            endwhile;
            wp_reset_postdata();
        else:
            ?>
<a href="#">El meu compte</a>
<?php
        endif;
    }
}

?>