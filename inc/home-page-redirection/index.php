<?php
    function personalizar_pantalla_de_inicio() {
        // Reemplaza 'nombre-de-tu-pagina' con el slug o título de tu página personalizada
        $pagina_personalizada = get_page_by_title('home');
    
        if ($pagina_personalizada) {
            // Obtiene el ID de la página personalizada
            $pagina_id = $pagina_personalizada->ID;
    
            // Actualiza la opción de la página de inicio en WordPress
            update_option('page_on_front', $pagina_id);
            update_option('show_on_front', 'page');
        }
    }
    
    // Ejecuta la función al activar el tema
    add_action('after_setup_theme', 'personalizar_pantalla_de_inicio');
?>