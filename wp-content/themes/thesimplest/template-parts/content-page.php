<<<<<<< HEAD
<?php
/**
 * The template part for displaying single posts
 * @since TheSimplest 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">','</h1>' ); ?>
	</header>

	<?php thesimplest_post_thumbnail();  ?>

	<div class="entry-content">
		<?php

		the_content();

		wp_link_pages( array(
			'before'        =>  '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'thesimplest' ) . '</span>',
			'after'         =>  '</div>',
			'link_before'   =>  '<span>',
			'link_after'    =>  '</span>',
			'pagelink'      => '<span class="screen-reader-text">' . __( 'Page', 'thesimplest' ) . ' </span>%',
			'separator'     => '<span class="screen-reader-text">, </span>',
		) );

		?>
	</div><!-- .entry-content -->

	<?php
	edit_post_link(
		sprintf(
		/* translators: %s: Name of current post */
		__( 'Edit<span class="screen-reader-text"> "%s"', 'thesimplest' ),
		get_the_title()
		),
		'<footer class="entry-footer"><span class="edit-link">',
		'</span></footer><!-- .entry-footer -->'
	);
	?>

</article>
=======
<?php
/**
 * The template part for displaying single posts
 * @since TheSimplest 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">','</h1>' ); ?>
	</header>

	<?php thesimplest_post_thumbnail();  ?>

	<div class="entry-content">
		<?php

		the_content();

		wp_link_pages( array(
			'before'        =>  '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'thesimplest' ) . '</span>',
			'after'         =>  '</div>',
			'link_before'   =>  '<span>',
			'link_after'    =>  '</span>',
			'pagelink'      => '<span class="screen-reader-text">' . __( 'Page', 'thesimplest' ) . ' </span>%',
			'separator'     => '<span class="screen-reader-text">, </span>',
		) );

		?>
	</div><!-- .entry-content -->

	<?php
	edit_post_link(
		sprintf(
		/* translators: %s: Name of current post */
		__( 'Edit<span class="screen-reader-text"> "%s"', 'thesimplest' ),
		get_the_title()
		),
		'<footer class="entry-footer"><span class="edit-link">',
		'</span></footer><!-- .entry-footer -->'
	);
	?>

</article>
>>>>>>> 578a65f4f67aeca2da5fc027eeeb7a1f82cac450
