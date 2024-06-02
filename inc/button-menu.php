<?php

function change_button_menu_header() {
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
    
    switch ($user_role) {
        case 'contributor':
            $rol = "proveedor";
        break;
        case 'ProveedorValeApp':
            $rol = "proveedor";
        break;
        case 'customer':
            $rol = "cliente";
        break;
        case 'ClienteValeApp':
            $rol = "cliente";
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
            if($rol) {
                if($rol == "cliente"){
                    ?>  
                        <div class="NavMenu-section">
                            <a class="HomeOffer-btn" href="/solicitar-servei">
                                Solicitar servicio
                            </a>
                        </div>
                    <?php
                }
                if($rol == "proveedor"){
                    ?>  
                        <div class="NavMenu-section">
                            <a class="HomeOffer-btn" href="/publicar-servei">
                                Publicar servicio
                            </a>
                        </div>
                    <?php
                }
                if($rol == "administrador"){
                    ?>  
                        <div class="NavMenu-section">
				            <a class="HomeOffer-btn" href="/servicios-generica">
				            	Ofrecer servicios
				            </a>
			            </div>
                    <?php
                }
            } else {
                ?>
                    <div class="NavMenu-section">
				        <a class="HomeOffer-btn" href="/servicios-generica">
				        	Ofrecer servicios
				        </a>
			        </div>
                <?php
            }
            
        endwhile;
        wp_reset_postdata();
    else :
    endif;
    }
}


function button_for_user() {
        if ( current_user_can( 'proveedorvaleapp' ) ) {
            ?>
            <div class="NavMenu-section">
                <a class="NavMenu-link" href="/publicar-servei">
            <?php
                echo 'Publicar servicio';
            ?>
                    </a>
	        </div>
            <?php
        } elseif ( current_user_can( 'clientevaleapp' ) ) {
            ?>
            <div class="NavMenu-section">
                <a class="NavMenu-link" href="/solicitar-servei">
            <?php
                echo 'Solicitar servicio';
            ?>
                    </a>
	        </div>
            <?php
        
      }
            ?>
		
    <?php
}
?>