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

include "inc/category-filters/index.php";
include "inc/category-filters/select-blog-category.php";

get_header();
?>

<!-- Banner -->
<section class="section2 CategoryDetail">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Inici</a></li>
						<li class="breadcrumb-item"><a href="#">Serveis</a></li>
						<li class="breadcrumb-item"><a href="#"><?php echo $title_cat; ?></a></li>
					</ol>
				</nav>
			</div>
			<div class="col-12">
				<h2 class="title">
					<?php echo $title_cat; ?>
				</h2>
			</div>
		</div>
	</div>
</section>

<!-- Content -->
<section class="section2 CategorySub">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<?php
			if ($field) {
				render_filter($field);
			} else {
				render_users($items, $users);
			}
			?>
		</div>
	</div>
</section>

<?php

$title = select_category($title_cat);
$args = array(
	'post_type' => 'blog-categorias',
	'name' => $title,
	'posts_per_page' => 3,
);

$query = get_posts($args);

if ($query) {
	foreach ($query as $post) {
		$title1 = get_field('title_1');
		$image1 = get_field('image_1');
		$description1 = get_field('description_1');
		$title2 = get_field('title_2');
		$image2 = get_field('image_2');
		$description2 = get_field('description_2');
		$title3 = get_field('title_3');
		$image3 = get_field('image_3');
		$description3 = get_field('description_3');
		$titleP = get_field('titulo');
		$textP = get_field('texto');
		$imatgeP = get_field('imagen');
		$botoP = get_field('texto_boton');
	}
}
?>

<section class="section3 Promo HomeOffer">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-12 col-sm-6">
				<img class="img-fluid offer" src="<?php echo ($imatgeP); ?>" alt="valeapp" />
			</div>
			<div class="col-12 col-sm-6 ps-sm-4">
				<h2 class="title"><?php echo $titleP; ?></h2>
				<p class="text">
					<?php echo ($textP); ?>
				</p>
				<a class="HomeOffer-btn" href="#"><?php echo ($botoP); ?></a>
			</div>
		</div>
	</div>
</section>

<section class="section4 Blog">
	<div class="title">Inspira't</div>
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-4">
				<div class="content">
					<img class="img-fluid tab" src="<?php echo ($image1['url']); ?>"
						alt="<?php echo ($image1['alt']); ?>" alt="valeapp" />
					<h3 class="subtitle"> <?php echo ($title1) ?></h3>
					<p class="text">
						<?php echo ($description1); ?>
					</p>
				</div>
			</div>
			<div class="col-12 col-sm-4">
				<div class="content">
					<img class="img-fluid tab" src="<?php echo ($image2['url']); ?>"
						alt="<?php echo ($image2['alt']); ?>" alt="valeapp" />
					<h3 class="subtitle"> <?php echo ($title2) ?></h3>
					<p class="text">
						<?php echo ($description2); ?>
					</p>
				</div>
			</div>
			<div class="col-12 col-sm-4">
				<div class="content">
					<img class="img-fluid tab" src="<?php echo ($image3['url']); ?>"
						alt="<?php echo ($image3['alt']); ?>" alt="valeapp" />
					<h3 class="subtitle"> <?php echo ($title3) ?></h3>
					<p class="text">
						<?php echo ($description3); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
	<?php
	wp_reset_postdata();
	?>
</section>

<section class="section5 Homecategories">
	<div class="Homecategories-content">
		<div class="container">
			<div class="title">Altres categories</div>
			<div class="row justify-content-center">
				<div class="firstrow">
					<!-- <a href="<?php echo home_url(); ?>/categoria/hogar" class="category">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category1-white.png"
							alt="valeapp" class="img-fluid category-icon" />
						<p class="category-name">Llar</p>
					</a> -->
					<?php
						$hero = get_field('hero-section', 153);
						$categor = $hero['category']; 
					?>
					<a href="<?php echo $categor['cat1_link']; ?>" class="category">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category1-white.png" alt="valeapp" class="img-fluid category-icon" />
						<p class="category-name"><?php echo $categor['cat1']; ?></p>
					</a>
					<a href="<?php echo $categor['cat2_link']; ?>" class="category">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category2-white.png" alt="valeapp" class="img-fluid category-icon" />
						<p class="category-name"><?php echo $categor['cat2']; ?></p>
					</a>
					<a href="<?php echo $categor['cat3_link']; ?>" class="category">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category3-white.png" alt="valeapp" class="img-fluid category-icon" />
						<p class="category-name"><?php echo $categor['cat3']; ?></p>
					</a>
					<a href="<?php echo $categor['cat4_link']; ?>" class="category">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category4-white.png" alt="valeapp" class="img-fluid category-icon" />
						<p class="category-name"><?php echo $categor['cat4']; ?></p>
					</a>
				</div>
				<div class="secondrow">
					<a href="<?php echo $categor['cat5_link']; ?>" class="category">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category5-white.png" alt="valeapp" class="img-fluid category-icon" />
						<p class="category-name"><?php echo $categor['cat5']; ?></p>
					</a>
					<a href="<?php echo $categor['cat6_link']; ?>" class="category">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category6-white.png" alt="valeapp" class="img-fluid category-icon" />
						<p class="category-name"><?php echo $categor['cat6']; ?></p>
					</a>
					<a href="<?php echo $categor['cat7_link']; ?>" class="category">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category7-white.png" alt="valeapp" class="img-fluid category-icon" />
						<p class="category-name"><?php echo $categor['cat7']; ?></p>
					</a>
					<a href="<?php echo $categor['cat8_link']; ?>" class="category">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category8-white.png" alt="valeapp" class="img-fluid category-icon" />
						<p class="category-name"><?php echo $categor['cat8']; ?></p>
					</a>
					<a href="<?php echo $categor['cat9_link']; ?>" class="category">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category9-white.png" alt="valeapp" class="img-fluid category-icon" />
						<p class="category-name"><?php echo $categor['cat9']; ?></p>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php

get_footer();

