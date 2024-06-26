<?php
 /**
  * Title: Blog Header With Background
  * Slug: udesign/blog-header-with-background
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
					<!-- wp:heading {"textAlign":"center","level":1,"className":"wp-block-post-title"} -->
						<h1 class="has-text-align-center wp-block-post-title">
							<?php esc_html_e ( 'Recent From Blog', 'udesign' ); ?>
						</h1>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->