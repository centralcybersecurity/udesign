<?php
 /**
  * Title: 404 Header
  * Slug: udesign/404-header
  * Categories: udesign, inner-page-banner
  */
?>
<!-- wp:group {"align":"full","className":"no-margin-top banner-without-bg","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull no-margin-top banner-without-bg">
	<!-- wp:group {"align":"full","layout":{"inherit":false}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:group {"layout":{"inherit":true}} -->
		<div class="wp-block-group">
			<!-- wp:group {"className":"alignwide"} -->
			<div class="wp-block-group alignwide">
				<!-- wp:heading {"level":1,"className":"has-text-color-foreground"} -->
				<h1 class="has-text-color-foreground">
					<?php esc_html_e( '404 Nothing Found', 'udesign' ); ?>
				</h1>
				<!-- /wp:heading -->
				<!-- wp:paragraph {} -->
				<p>
					<?php esc_html_e( 'Oops! That page can\'t be found', 'udesign' ); ?>
				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->