<?php
        function new_page_home() {
            
            $page = get_page_by_title('home');
        
            if ($page) {
                
                $pagina_id = $page->ID;
        
                update_option('page_on_front', $pagina_id);
                update_option('show_on_front', 'page');
            }
        }
        
        add_action('after_setup_theme', 'new_page_home');
?>