<<<<<<< HEAD
<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @since TheSimplest 1.0
 */

get_header();
?>


	<div id="primary" class="content-area row">
		<main id="main" class="site-main col-md-8 col-sm-12" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_attr_e( 'Oops! That page can&rsquo;t be found.', 'thesimplest' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_attr_e( 'It looks like nothing was found at this location. Maybe try a search?', 'thesimplest' ); ?></p>
				</div>

				<?php get_search_form(); ?>
			</section>

		</main><!-- .site-main -->
		<?php get_sidebar(); ?>
	</div><!-- content-area -->

=======
<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @since TheSimplest 1.0
 */

get_header();
?>


	<div id="primary" class="content-area row">
		<main id="main" class="site-main col-md-8 col-sm-12" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_attr_e( 'Oops! That page can&rsquo;t be found.', 'thesimplest' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_attr_e( 'It looks like nothing was found at this location. Maybe try a search?', 'thesimplest' ); ?></p>
				</div>

				<?php get_search_form(); ?>
			</section>

		</main><!-- .site-main -->
		<?php get_sidebar(); ?>
	</div><!-- content-area -->

>>>>>>> 578a65f4f67aeca2da5fc027eeeb7a1f82cac450
<?php get_footer(); ?>