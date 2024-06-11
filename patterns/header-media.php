<?php
 /**
  * Title: Header Media
  * Slug: udesign/header-media
  * Categories: udesign, featured
  */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_parent_theme_file_uri( '/assets/images/header-bg.png' ) ); ?>","id":921,"dimRatio":0,"overlayColor":"secondary-bg-color","align":"full","className":"header-media"} -->
<div class="wp-block-cover alignfull header-media header-banner">
	<span aria-hidden="true" class="wp-block-cover__background has-secondary-bg-color-background-color has-background-dim-0 has-background-dim"></span>
	<img class="wp-block-cover__image-background wp-image-921" alt="" src="<?php echo esc_url( get_parent_theme_file_uri( '/assets/images/header-bg.png' ) ); ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:columns {"verticalAlignment":"center","align":"full","className":"header-media-content"} -->
			<div class="wp-block-columns alignfull are-vertically-aligned-center header-media-content">
				<!-- wp:column {"verticalAlignment":"center","className":"media-content","layout":{"type":"default"}} -->
				<div class="wp-block-column is-vertically-aligned-center media-content">
						<!-- wp:heading {"fontSize":"normal","className":"sub-heading"} -->
						<h2 class="wp-block-heading has-normal-font-size sub-heading"><?php esc_html_e ( 'Hero tagline','udesign' ); ?>
						</h2>
						<!-- /wp:heading -->
						<!-- wp:heading {"fontSize":"big-heading"} -->
						<h2 class="wp-block-heading has-big-heading-font-size"><?php esc_html_e ( 'Attract your target audience.','udesign' ); ?>
						</h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p><?php esc_html_e ( 'Explore new products and future bestsellers along with our WordPress Theme.','udesign' ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:buttons -->
						<div class="wp-block-buttons">
							<!-- wp:button -->
							<div class="wp-block-button">
								<a class="wp-block-button__link wp-element-button" href="/contact"><?php esc_html_e ( 'Get a Free Consultation', 'udesign' ); ?></a>
							</div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
				<!-- /wp:column -->
					<!-- wp:column {"verticalAlignment":"center","className":"header-image","layout":{"type":"default"}} -->
					<div class="wp-block-column is-vertically-aligned-center header-image">
						</div>
						<!-- /wp:column -->
					</div>
				<!-- /wp:columns -->
				</div>
				<!-- /wp:group -->
			</div>
		</div>
		<!-- /wp:cover -->

		