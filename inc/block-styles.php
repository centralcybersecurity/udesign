<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package Udesign
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function udesign_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'udesign-padding-0',
				'label' => esc_html__( 'No Padding', 'udesign' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'udesign-post-author-card',
				'label' => esc_html__( 'Theme Style', 'udesign' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'udesign-button',
				'label'        => esc_html__( 'Plain', 'udesign' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'udesign-post-comments',
				'label'        => esc_html__( 'Theme Style', 'udesign' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'udesign-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'udesign' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'udesign-wp-table',
				'label'        => esc_html__( 'Theme Style', 'udesign' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'udesign-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'udesign' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'udesign-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'udesign' ),
			)
		);
	}
	add_action( 'init', 'udesign_register_block_styles' );
}
