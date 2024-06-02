<?php 

function all_request(){
    $current_user_id = get_current_user_id();

    $args = [
        'post_type'      => 'solicitar-servicio', 
        'posts_per_page' => -1,      
        'author'         => $current_user_id,
    ];

    $consulta = new WP_Query($args);
    if ($consulta->have_posts()) {
        while ($consulta->have_posts()) {
            $consulta->the_post();
    
            $post_id = get_the_ID();
            $group_category = get_field('field_656f483c90876', $post_id);
            $post_info = get_post($post_id);
            $post_slug = $post_info->post_name;
    
            // Imprimir o trabajar con los datos del post
            ?>
            <a href="/solicitar-servei/<?php echo($post_slug) ?>">
                <span>Id Post: <?php echo($post_id) ?></span><br>
                <span>Categoria: <?php echo($group_category['categoria']) ?></span><br><br>
            </a>
            <?php
        }
    
        // Restaurar los datos originales del post
        wp_reset_postdata();
    } else {
        // No se encontraron posts
        echo 'No se encontraron posts para el autor actual.';
    }
}

?>