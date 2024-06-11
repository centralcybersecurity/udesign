<?php
/**
 * Udesign functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Udesign
 * @since 1.0
 */

 


function force_theme_update_check() {
    delete_site_transient('update_themes');
    wp_update_themes();
}
add_action('admin_init', 'force_theme_update_check');

add_filter('pre_set_site_transient_update_themes', 'udesign_check_for_update');

function udesign_check_for_update($checked_data) {
    if (!isset($checked_data->checked) || !is_array($checked_data->checked)) {
        return $checked_data;
    }

    $theme_slug = 'udesign';
    $current_version = wp_get_theme($theme_slug)->get('Version');
    $update_api_url = 'https://unifiedloop.com/wpdev/themes/udesign/update-api.php';

    $request = wp_remote_get($update_api_url);
    if (is_wp_error($request)) {
        error_log('Update check failed: ' . $request->get_error_message());
        return $checked_data;
    }

    if (wp_remote_retrieve_response_code($request) !== 200) {
        error_log('Update check failed: HTTP ' . wp_remote_retrieve_response_code($request));
        return $checked_data;
    }

    $response = json_decode(wp_remote_retrieve_body($request), true);

    if (!isset($response['new_version']) || !isset($response['download_url'])) {
        error_log('Update check failed: Invalid response');
        return $checked_data;
    }

    error_log('Current version: ' . $current_version);
    error_log('New version: ' . $response['new_version']);

    if (version_compare($current_version, $response['new_version'], '<')) {
        $checked_data->response[$theme_slug] = [
            'new_version' => $response['new_version'],
            'package' => $response['download_url'],
            'slug' => $theme_slug,
        ];
        error_log('Update available: ' . $response['new_version']);
    } else {
        error_log('No update needed');
    }

    return $checked_data;
}



// Prevent renaming theme folder during installation
add_filter('upgrader_pre_install', 'my_theme_prevent_rename', 10, 3);

function my_theme_prevent_rename($return, $package, $wp_upgrader) {
    if ($wp_upgrader->skin->theme_info) {
        // Get the theme directory name from the package file path
        $theme_dir = get_theme_dir_from_package($package);
        // Set the 'destination_name' property to the theme directory name
        $wp_upgrader->skin->theme_info['destination_name'] = $theme_dir;
    }
    return $return;
}

// Get theme directory name from package file path
function get_theme_dir_from_package($package) {
    // Extract the theme folder name from the package file path
    $theme_dir = basename($package, '.zip');
    // Optionally, you can perform additional processing to sanitize the theme folder name if needed
    return $theme_dir;
}



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