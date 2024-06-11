<?php
/**
 * Udesign functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Udesign
 * @since 1.0
 */

if ( ! function_exists( 'udesign_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function udesign_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'udesign_support' );

if ( ! function_exists( 'udesign_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */

	function udesign_styles() {
		// Enqueue theme stylesheet.
		wp_enqueue_style(
			'udesign-style',
			get_template_directory_uri() . '/style.css',
			array(),
			filemtime( get_theme_file_path( 'style.css' ) )
		);
		
		wp_enqueue_script(
            'udesign-script',
            get_theme_file_uri( 'assets/js/custom.js' ),
            array(),
            filemtime( get_theme_file_path( 'assets/js/custom.js' ) ),
            true
        );
	}

endif;

add_action( 'wp_enqueue_scripts', 'udesign_styles' );

if ( ! function_exists( 'udesign_block_editor_styles' ) ) :
    
    /**
     * Enqueue rtl editor styles
     */
    
     function udesign_block_editor_styles() {
        if( is_rtl() ){
            wp_enqueue_style(
                'udesign-rtl',
                get_theme_file_uri( 'rtl.css' ),
                array(),
                filemtime( get_theme_file_path( 'rtl.css' ) )
            );
        }
    }

endif;

add_action( 'enqueue_block_editor_assets', 'udesign_block_editor_styles' );


if ( ! function_exists( 'udesign_custom_block_editor_styles' ) ) :

	/**
	 * Enqueue custom editor styles for the block editor.
	 */
	function udesign_custom_block_editor_styles() {
	  $stylesheet_uri = get_stylesheet_directory_uri() . '/custom.css';
  
	  // Use wp_enqueue_style for compatibility with older WordPress versions
	  wp_enqueue_style(
		'udesign-custom',
		$stylesheet_uri,
		array(),
		filemtime( get_stylesheet_directory() . '/custom.css' ) // Get version from file modification time
	  );
	}
  
  endif;
  
  add_action( 'wp_enqueue_scripts', 'udesign_custom_block_editor_styles' );
  


// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Theme About Page
require get_template_directory() . '/inc/about.php';