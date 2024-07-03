<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ValeApp
 */
include 'inc/match-service/index.php';
 
get_header();
?>

    <section class="section2 servicio-generica">
        <div class="container">
			<div class="row">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
						  <li class="breadcrumb-item"><a href="#">Mi cuenta</a></li>
						  <li class="breadcrumb-item"><a href="#"></a></li>
						</ol>
					  </nav>
				</div>
				<div class="col-12">
					<h2 class="title">
						Mis ofertas
					</h2>
				</div>
			</div>
		</div>
    </section>
    <div class="cards myOffers">
        <div class="cards-title">
            A continuación encontrarás los profesionales<br /> que mejor se adaptan a tus búsquedas. 
        </div>
    </div>

<?php

$author_id = get_current_user_id();

if ($author_id) {
    $custom_post_type = 'solicitar-servicio';

    $args = [
        'post_type' => $custom_post_type,
        'author' => $author_id,
        'posts_per_page' => -1,
        'post_status' => 'publish',
    ];

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) : $query->the_post();
        $post_id = get_the_ID();
        $group_category = get_field('field_656f483c90876', $post_id);
        $category = $group_category['categoria'];
        $subcategory = '';
        category_search_filter($category, $group_category, $subcategory);


        // Prueba
        ?>
        <div class="cards myOffers pt-0">
            <!-- Datos del cliente -->
            <div class="cards-header">
                <div class="cards-header-text">
                    <p class="cards-header-title">
                        <?php echo($category . ', ' . $subcategory); ?>
                    </p>
                    <p class="cards-header-time">
                        1 enero
                    </p>
                </div>
                <button type="button">
                    <img class="cards-header-deleteIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/delete-icon.svg" alt="ValeApp-TrashIcon">
                </button>
            </div>

            <!-- Datos del proveedor -->
            <div class="cards-items">
                <?php match_service($post_id); ?>
            </div>
        </div>

        <?php
        endwhile;
    } else {
        echo do_shortcode('[no_request]');
    }

    wp_reset_query();
} else {
  echo 'No se encuentra logueado';
}


?>



<?php
get_footer();