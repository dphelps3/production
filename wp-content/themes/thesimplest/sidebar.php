<<<<<<< HEAD
<?php

if( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}

/**
 * TheSimplest Layout Options
 */
$thesimplest_site_layout    =   get_theme_mod( 'thesimplest_layout_options_setting' );

if( $thesimplest_site_layout == 'no-sidebar' ) {
	return;
}
?>

<aside id="secondary" class="sidebar widget-area col-md-4 col-sm-12" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- .sidebar .widget-area -->
=======
<?php

if( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}

/**
 * TheSimplest Layout Options
 */
$thesimplest_site_layout    =   get_theme_mod( 'thesimplest_layout_options_setting' );

if( $thesimplest_site_layout == 'no-sidebar' ) {
	return;
}
?>

<aside id="secondary" class="sidebar widget-area col-md-4 col-sm-12" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- .sidebar .widget-area -->
>>>>>>> 578a65f4f67aeca2da5fc027eeeb7a1f82cac450
