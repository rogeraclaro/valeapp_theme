<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ValeApp
 */

include "inc/category-filters/index.php";

get_header();
?>

<section class="section2 CategoryDetail">
    <div class="container">
		<div class="row">
			<div class="col-12">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="#">Inici</a></li>
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
<?php 
	if($field){
		render_filter($field);
	} else {
		render_users($items, $users);
	}
get_sidebar();
get_footer();