<?php
 /**
  * Title: 404 Header With Background
  * Slug: udesign/404-header-with-background
  * Categories: udesign, inner-page-banner
  */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"banner","layout":{"inherit":false}} -->
<div class="wp-block-group alignfull banner" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_parent_theme_file_uri( '/assets/images/banner.jpg' ) ); ?>","id":15972,"dimRatio":30,"overlayColor":"button-bg-color","className":"is-dark"} -->
<div class="wp-block-cover is-dark"><span aria-hidden="true" class="wp-block-cover__background has-button-bg-color-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-15972" alt="" src="<?php echo esc_url( get_parent_theme_file_uri( '/assets/images/banner.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
			<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"className":"alignwide"} -->
				<div class="wp-block-group alignwide">
					<!-- wp:heading {"textAlign":"center","level":1,"textColor":"foreground","className":"has-text-color-foreground"} -->
					<h1 class="wp-block-heading has-text-align-center has-text-color-foreground has-foreground-color has-text-color">404 Nothing Found</h1>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">Oops! That page can't be found</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->