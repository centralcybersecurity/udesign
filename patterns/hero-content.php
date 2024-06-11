<?php
 /**
  * Title: Hero Content
  * Slug: udesign/hero-content	
  * Categories: udesign, featured
  */
?>

<!-- wp:group {"align":"full","className":"hero-section wp-block-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull hero-section wp-block-section">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%">
			<!-- wp:image {"id":941,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full">
				<img src="<?php echo esc_url( get_parent_theme_file_uri( '/assets/images/hero-content.png' ) ); ?>" alt="" class="wp-image-941"/>
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"100%","className":"hero-content"} -->
		<div class="wp-block-column is-vertically-aligned-center hero-content" style="flex-basis:100%">
			<!-- wp:heading {"textAlign":"left","fontSize":"large-section-title"} -->
			<h2 class="wp-block-heading has-text-align-left has-large-section-title-font-size"><?php esc_html_e ( 'The best and most popular service', 'udesign' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e ( 'Exploring Ideas of your own VR World ity own VR World Ideas of your own VR World ity own Reality own VR World.', 'udesign' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:list -->
			<ul><!-- wp:list-item -->
				<li>Benefit 1</li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li>Benefit 2</li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li>Benefit 3</li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button">
					<a class="wp-block-button__link wp-element-button" href="/contact"><?php esc_html_e ( 'Get Started', 'udesign' ); ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->