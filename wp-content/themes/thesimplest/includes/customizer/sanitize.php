<<<<<<< HEAD
<?php

if( ! function_exists( 'thesimplest_layout_option_sanitize' ) ) :
function thesimplest_layout_option_sanitize( $layout ) {

	if( ! in_array( $layout, array( 'right-sidebar', 'left-sidebar', 'no-sidebar' ) ) ) {
		$layout = 'right-sidebar';
	}

	return $layout;
}
endif;

if( ! function_exists( 'thesimplest_search_icon_sanitize' ) ) :
function thesimplest_search_icon_sanitize( $search_icon ) {

	if( ! in_array( $search_icon, array( 0, 1 ) ) ) {
		$search_icon = 1;
	}

	return $search_icon;
}
endif;

if( ! function_exists( 'thesimplest_gallery_carousel_sanitize' ) ) :
function thesimplest_gallery_carousel_sanitize( $carousel ) {

	if( ! in_array( $carousel, array( 0, 1 ) ) ) {
		$carousel = 0;
	}

	return $carousel;
}
=======
<?php

if( ! function_exists( 'thesimplest_layout_option_sanitize' ) ) :
function thesimplest_layout_option_sanitize( $layout ) {

	if( ! in_array( $layout, array( 'right-sidebar', 'left-sidebar', 'no-sidebar' ) ) ) {
		$layout = 'right-sidebar';
	}

	return $layout;
}
endif;

if( ! function_exists( 'thesimplest_search_icon_sanitize' ) ) :
function thesimplest_search_icon_sanitize( $search_icon ) {

	if( ! in_array( $search_icon, array( 0, 1 ) ) ) {
		$search_icon = 1;
	}

	return $search_icon;
}
endif;

if( ! function_exists( 'thesimplest_gallery_carousel_sanitize' ) ) :
function thesimplest_gallery_carousel_sanitize( $carousel ) {

	if( ! in_array( $carousel, array( 0, 1 ) ) ) {
		$carousel = 0;
	}

	return $carousel;
}
>>>>>>> 578a65f4f67aeca2da5fc027eeeb7a1f82cac450
endif;