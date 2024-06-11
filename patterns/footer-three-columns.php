<?php
 /**
  * Title: Footer Three Columns
  * Slug: udesign/footer-three-columns
  * Categories: udesign, footer
  */
?>
<!-- wp:group {"align":"full","className":"footer three-columns","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull footer three-columns">
	<!-- wp:columns {"align":"wide","className":"upper-footer"} -->
<div class="wp-block-columns alignwide upper-footer">
	<!-- wp:column {"width":"33.333%"} -->
	<div class="wp-block-column" style="flex-basis:33.333%">
		<!-- wp:paragraph {"className":"footer-title footer-site-title"} -->
		<p class="footer-title footer-site-title"><?php esc_html_e("Brand", 'udesign'); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p><?php esc_html_e("Our experts are available 24/7:", 'udesign'); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:media-text {"mediaId":15976,"mediaLink":"#","mediaType":"image","isStackedOnMobile":false} -->
				<div class="wp-block-media-text">
					<figure class="wp-block-media-text__media">
						<img src="<?php echo esc_url( get_parent_theme_file_uri( '/assets/images/phone.png' ) ); ?>" alt="" class="wp-image-15976 size-full"/>
					</figure>
					<div class="wp-block-media-text__content">
						<!-- wp:paragraph {"placeholder":"Content…"} -->
						<p><?php esc_html_e("+91-9876543210", 'udesign'); ?></p>
						<!-- /wp:paragraph -->
					</div>
				</div>
				<!-- /wp:media-text -->
				<!-- wp:media-text {"mediaId":15976,"mediaLink":"#","mediaType":"image","isStackedOnMobile":false} -->
				<div class="wp-block-media-text">
					<figure class="wp-block-media-text__media">
						<img src="<?php echo esc_url( get_parent_theme_file_uri( '/assets/images/message.png' ) ); ?>" alt="" class="wp-image-15976 size-full"/>
					</figure>
					<div class="wp-block-media-text__content">
						<!-- wp:paragraph {"placeholder":"Content…"} -->
						<p><?php esc_html_e("www.", 'udesign'); ?></p>
						<!-- /wp:paragraph -->
					</div>
				</div>
				<!-- /wp:media-text -->
			</div>
			<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column {"width":"33.333%"} -->
	<div class="wp-block-column" style="flex-basis:33.333%">
		<!-- wp:columns -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column footer-text-color">
				<!-- wp:paragraph {"className":"footer-title","fontSize":"upper-heading"} -->
				<p class="footer-title has-upper-heading-font-size"><?php esc_html_e("Useful Links", 'udesign'); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:navigation {"overlayMenu":"never"} /-->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column {"width":"33.333%"} -->
	<div class="wp-block-column" style="flex-basis:33.333%">
		<!-- wp:paragraph {"className":"footer-title","fontSize":"upper-heading"} -->
		<p class="footer-title has-upper-heading-font-size"><?php esc_html_e("Let's Connect", 'udesign'); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:social-links {"className":"is-style-default footer-social-icons"} -->
		<ul class="wp-block-social-links is-style-default footer-social-icons">
			<!-- wp:social-link {"url":"#","service":"twitter"} /-->
			<!-- wp:social-link {"url":"#","service":"facebook"} /-->
			<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
			<!-- wp:social-link {"url":"#","service":"instagram"} /-->
			<!-- wp:social-link {"url":"#","service":"youtube"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
	<!-- wp:group {"align":"full","className":"wp-block-footer  wp-block-site-generator bottom-footer","layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group alignfull wp-block-footer wp-block-site-generator bottom-footer">
		<!-- wp:group {"align":"wide","className":"wp-block-site-info","layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal"}} -->
		<div class="wp-block-group alignwide wp-block-site-info">
				<!-- wp:paragraph -->
				<p><?php printf( 
						_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL, 3: Privacy Policy Link', 'udesign' ), 
						esc_attr( date_i18n( __( 'Y', 'udesign' ) ) ), 
						'<a href="'. esc_url( home_url( '/' ) ) .'">'. esc_attr( get_bloginfo( 'name', 'display' ) ) . '</a><span class="sep"> | </span>Udesign' ); ?></p>
					<!-- /wp:paragraph -->
			
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->