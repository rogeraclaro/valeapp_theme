<?php 
// Template Name: Single Proveedores
?>

<?php get_header(); ?>

<div class="content">
            
<?php
	while ( have_post() ) {
		// the_post();
		// the_content();
		$post_id = get_the_ID();
		$type = get_post_type( get_the_ID() );
		if($type == "proveedores") {
?>

		<ul>
			
		<?php echo get_post_meta($post->ID, 'name', true); ?>

		</ul>

<?php
		}
	}
?>
                        
</div>

<?php get_footer(); ?>