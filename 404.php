<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ValeApp
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<!-- <header class="page-header" style="text-align:center; justify-content: center;">
				<p>
				<h3 class="page-title"><?php esc_html_e( '404. Pàgina no trobada.', 'valeapp' ); ?></h3>
				</p>
			</header> -->

			<div class="page-content" style="display: flex;align-items: center;justify-content: center;height:50vh;">
				<p>
					<h3 class="page-title"><?php esc_html_e( 'Error 404. Pàgina no trobada.', 'valeapp' ); ?></h3>
				</p>
				<!-- <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'valeapp' ); ?></p>

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'valeapp' ); ?></h2>
						<ul>
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
						</ul>
					</div> -->

					<!-- <?php
					$valeapp_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'valeapp' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$valeapp_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?> -->

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
