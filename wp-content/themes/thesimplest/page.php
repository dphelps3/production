<<<<<<< HEAD
<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @since TheSimplest 1.0
 */
get_header(); ?>

<?php
/**
 * TheSimplest Layout Options
 */
$thesimplest_site_layout    =   get_theme_mod( 'thesimplest_layout_options_setting' );
$thesimplest_layout_class   =   'col-md-8 col-sm-12';

if( $thesimplest_site_layout == 'left-sidebar' && is_active_sidebar( 'sidebar-1' ) ) :
	$thesimplest_layout_class = 'col-md-8 col-sm-12  site-main-right';
elseif( $thesimplest_site_layout == 'no-sidebar' || !is_active_sidebar( 'sidebar-1' ) ) :
	$thesimplest_layout_class = 'col-md-8 col-sm-12 col-md-offset-2';
endif;

?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main <?php echo esc_attr($thesimplest_layout_class); ?>" role="main">



			<?php
			// Start the loop
			while( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if( comments_open() || get_comments_number() ) {
					comments_template();
				}

				// End of the loop.
			endwhile;

			?>


		</main><!-- .site-main -->
		<?php get_sidebar(); ?>
	</div><!-- content-area -->

=======
<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @since TheSimplest 1.0
 */
get_header(); ?>

<?php
/**
 * TheSimplest Layout Options
 */
$thesimplest_site_layout    =   get_theme_mod( 'thesimplest_layout_options_setting' );
$thesimplest_layout_class   =   'col-md-8 col-sm-12';

if( $thesimplest_site_layout == 'left-sidebar' && is_active_sidebar( 'sidebar-1' ) ) :
	$thesimplest_layout_class = 'col-md-8 col-sm-12  site-main-right';
elseif( $thesimplest_site_layout == 'no-sidebar' || !is_active_sidebar( 'sidebar-1' ) ) :
	$thesimplest_layout_class = 'col-md-8 col-sm-12 col-md-offset-2';
endif;

?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main <?php echo esc_attr($thesimplest_layout_class); ?>" role="main">



			<?php
			// Start the loop
			while( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if( comments_open() || get_comments_number() ) {
					comments_template();
				}

				// End of the loop.
			endwhile;

			?>


		</main><!-- .site-main -->
		<?php get_sidebar(); ?>
	</div><!-- content-area -->

>>>>>>> 578a65f4f67aeca2da5fc027eeeb7a1f82cac450
<?php get_footer(); ?>