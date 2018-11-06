<<<<<<< HEAD
<?php

// Includes
include( get_template_directory() . '/includes/setup.php' );
include( get_template_directory() . '/includes/widgets.php' );
include( get_template_directory() . '/includes/template-tags.php' );
include( get_template_directory() . '/includes/front/enqueue.php' );

include( get_template_directory() . '/includes/theme-customizer.php' );
include( get_template_directory() . '/includes/customizer/sanitize.php' );
include( get_template_directory() . '/includes/customizer/default.php' );
include( get_template_directory() . '/includes/customizer/layout.php' );
include( get_template_directory() . '/includes/customizer/misc.php' );
include( get_template_directory() . '/includes/customizer/social.php' );


// Hooks
add_action( 'after_setup_theme', 'thesimplest_theme_setup' );
add_action( 'widgets_init', 'thesimplest_widgets_init' );
add_action( 'wp_enqueue_scripts', 'thesimplest_theme_enqueue' );
=======
<?php

// Includes
include( get_template_directory() . '/includes/setup.php' );
include( get_template_directory() . '/includes/widgets.php' );
include( get_template_directory() . '/includes/template-tags.php' );
include( get_template_directory() . '/includes/front/enqueue.php' );

include( get_template_directory() . '/includes/theme-customizer.php' );
include( get_template_directory() . '/includes/customizer/sanitize.php' );
include( get_template_directory() . '/includes/customizer/default.php' );
include( get_template_directory() . '/includes/customizer/layout.php' );
include( get_template_directory() . '/includes/customizer/misc.php' );
include( get_template_directory() . '/includes/customizer/social.php' );


// Hooks
add_action( 'after_setup_theme', 'thesimplest_theme_setup' );
add_action( 'widgets_init', 'thesimplest_widgets_init' );
add_action( 'wp_enqueue_scripts', 'thesimplest_theme_enqueue' );
>>>>>>> 578a65f4f67aeca2da5fc027eeeb7a1f82cac450
add_action( 'customize_register', 'thesimplest_customize_register' );