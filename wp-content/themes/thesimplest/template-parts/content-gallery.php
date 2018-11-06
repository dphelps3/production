<<<<<<< HEAD
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
		<?php the_title( sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

        <div class="entry-info">
			<?php thesimplest_entry_meta(); ?>
        </div>
    </header>

    <div class="entry-content">
        <?php if( get_post_gallery() ) : ?>
        <div class="entry-gallery">
            <?php echo get_post_gallery( get_the_ID(), true ); ?>
        </div>
        <?php endif; ?>

        <?php thesimplest_excerpt(); ?>
    </div><!-- .entry-content -->

	<?php thesimplest_entry_footer(); ?>

=======
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
		<?php the_title( sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

        <div class="entry-info">
			<?php thesimplest_entry_meta(); ?>
        </div>
    </header>

    <div class="entry-content">
        <?php if( get_post_gallery() ) : ?>
        <div class="entry-gallery">
            <?php echo get_post_gallery( get_the_ID(), true ); ?>
        </div>
        <?php endif; ?>

        <?php thesimplest_excerpt(); ?>
    </div><!-- .entry-content -->

	<?php thesimplest_entry_footer(); ?>

>>>>>>> 578a65f4f67aeca2da5fc027eeeb7a1f82cac450
</article>