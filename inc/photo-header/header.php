<?php

function add_photo_profile_header() {
    if(is_user_logged_in()) {
        $current_user = wp_get_current_user();
        $user_role = "";
        $rol = "";
        $user_id = "";
        $field_photo = "";
        $field_balance = "";

        if($current_user->ID !=0) {
            $user_roles = $current_user->roles;
            $user_id = get_current_user_id();
        };

        foreach($user_roles as $role) {
            $user_role = $role;
        };

        switch ($user_role) {
            case 'proveedorvaleapp':
                $rol = "proveedor";
                $field_photo = "field_64dcf553615dc";
                $field_balance = "field_65f167b6d716e";
            break;
            case 'clientevaleapp':
                $rol = "cliente";
                $field_photo = "field_64dcf7f7e9ebb";
                $field_balance = "field_65f1677e65100";
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
                $profile_photo = get_field($field_photo);
                $balance = get_field($field_balance);
                $id = get_the_ID();

                if($profile_photo){
                    if (is_page('preguntas-frecuentes')){
                    ?>                   
                    <button class="PreguntasFrecuentes-headerBtn" id="questionShowBtn">
                        <?php echo $balance; ?>
                        <div class="PreguntasFrecuentes-boxImg">
                            <img class="img-fluid PreguntasFrecuentes-iconHead" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeap-arrow-promociones.png" alt="valeapp">
                            <span class="PreguntasFrecuentes-question head">
                                ?
                            </span>
                        </div>
                    </button>
                    <?php
                    } else {
                        ?>
                        <button class="PreguntasFrecuentes-headerBtn" id="questionShowBtn">
                            <?php echo $balance; ?>
                            <div class="PreguntasFrecuentes-boxImg">
                                <img class="img-fluid PreguntasFrecuentes-iconHead" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeap-arrow-promociones.png" alt="valeapp">
                            </div>
                        </button>
                        <?php
                    }
                    ?>  
                        <a href="/<?php echo($rol); ?>/<?php echo($id); ?>">
                            <img class="image-profile-header" src="<?php echo($profile_photo['url']);?>" alt="<?php echo($profile_photo['alt']); ?>">
                        </a>
                    <?php
                }
                else{
                    ?>
                        <i class="bi bi-person-circle"></i>
                    <?php
                }
            endwhile;
            wp_reset_postdata();
        else :
        endif;
    }
        else{
        //No ha iniciado sesion
    }
}