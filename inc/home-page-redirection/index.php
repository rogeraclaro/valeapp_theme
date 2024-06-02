<?php
function personalizar_pantalla_de_inicio() {
    
    $titulo_pagina = 'home';

    
    $args = [
        'post_type' => 'page',
        'title' => $titulo_pagina,
        'posts_per_page' => 1,
    ];

    
    $query = new WP_Query($args);

    
    if ($query->have_posts()) {
        $query->the_post();
        $pagina_id = get_the_ID();

        
        update_option('page_on_front', $pagina_id);
        update_option('show_on_front', 'page');
        
        
        wp_reset_postdata();
    }
}


add_action('after_setup_theme', 'personalizar_pantalla_de_inicio');
?>