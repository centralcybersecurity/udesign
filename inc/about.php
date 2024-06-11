<?php
/**
 * Theme About Page
 *
 * @package uDesign
 * @since 1.0
 */

function udesign_theme_page_admin_style( $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'udesign-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
}
add_action( 'admin_enqueue_scripts', 'udesign_theme_page_admin_style' );

/**
 * Add theme page
 */
function udesign_menu() {
	add_theme_page( esc_html__( 'uDesign', 'udesign' ), esc_html__( 'uDesign', 'udesign' ), 'edit_theme_options', 'udesign-theme', 'udesign_theme_page_display' );
}
add_action( 'admin_menu', 'udesign_menu' );

/**
 * Display About page
 */
function udesign_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'udesign' ); ?></p>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with uDesign!', 'udesign' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! uDesign has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'udesign' ); ?></p>
							<a target="_blank" href="https://catchthemes.com/themes/udesign/#theme-instructions"><?php esc_html_e( 'Theme instructions', 'udesign' ); ?></a>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with uDesign Pro Theme', 'udesign' ); ?></h3>
							<p><?php esc_html_e( 'To get more beautiful block patterns and templates, we recommend you upgrade to uDesign Pro. With the pro theme installed, get more options, blocks, block patterns, templates and template parts.', 'udesign' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://catchthemes.com/themes/udesign-pro/"><?php esc_html_e( 'Buy uDesign Pro', 'udesign' ); ?></a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'udesign' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) ); ?>"><?php esc_html_e( 'Theme Info', 'udesign' ); ?></a>
						<a target="_blank" href="https://fse.catchthemes.com/udesign/"><?php esc_html_e( 'View Demo', 'udesign' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://catchthemes.com/fse-faq' ); ?>"><?php esc_html_e( 'FSE FAQs', 'udesign' ); ?></a>
						<a  target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#changelog' ); ?>"><?php esc_html_e( 'Change log', 'udesign' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://catchthemes.com/support-forum/forum/full-site-editing/' ); ?>"><?php esc_html_e( 'Support', 'udesign' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'udesign' ); ?></h3>
						<p><?php esc_html_e( 'Loved uDesign? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'udesign' ); ?></p>
						<a href="https://wordpress.org/support/theme/udesign/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'udesign' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
