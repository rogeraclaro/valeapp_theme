<?php
        // function new_page_home() {            
        //     $page = get_page_by_title('home');        
        //     if ($page) {               
        //         $pagina_id = $page->ID;        
        //         update_option('page_on_front', $pagina_id);
        //         update_option('show_on_front', 'page');
        //     }
        // }
        
        function new_page_home() {
            $args = array(
                'post_type' => 'page',
                'title' => 'home',
                'posts_per_page' => 1,
                'post_status' => 'publish',
                'fields' => 'ids', // Només obté els IDs per optimitzar la consulta
            );
        
            $query = new WP_Query($args);
        
            if ($query->have_posts()) {
                $pagina_id = $query->posts[0]; // Obté l'ID de la primera pàgina trobada
        
                update_option('page_on_front', $pagina_id);
                update_option('show_on_front', 'page');
            }
        
            wp_reset_postdata(); // Reseteja l'objecte global de la consulta de WordPress
        }
        
        add_action('after_setup_theme', 'new_page_home');
?>