<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ValeApp
 */
include 'inc/match-service/index.php';

get_header();

?>

<div class="cards">
    <div class="cards-title">
        A continuación encontrarás los profesionales que mejor se adaptan a tu búsqueda.
    </div>
    <div class="cards-items">
        <!-- Consulta -->
        <?php 
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $user = get_the_author();

                    search_user($user);
                }
                wp_reset_postdata();
            } else {
                echo 'No se encontraron resultados.';
            }
        ?>
    </div>
</div>

<?php
get_sidebar();
get_footer();

?>