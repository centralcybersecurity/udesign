<?php
 /**
  * Title: Header With Lead Form
  * Slug: udesign/header-with-lead-form
  * Categories: udesign, inner-page-banner
  */
?>

<!-- wp:cover {"overlayColor":"cyan-bluish-gray","isUserOverlayColor":true,"minHeight":338,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|80","right":"var:preset|spacing|80"},"margin":{"top":"0px","bottom":"0px"}},"border":{"radius":"0px"}},"className":"is-style-tw-shadow"} -->
<div class="wp-block-cover alignfull is-light is-style-tw-shadow" style="border-radius:0px;margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--80);min-height:338px"><span aria-hidden="true" class="wp-block-cover__background has-cyan-bluish-gray-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"66.66%","style":{"spacing":{"padding":{"top":"2.8rem","bottom":"2.8rem","left":"3rem","right":"3rem"},"blockGap":"var:preset|spacing|20"}}} -->
    <div class="wp-block-column" style="padding-top:2.8rem;padding-right:3rem;padding-bottom:2.8rem;padding-left:3rem;flex-basis:66.66%"><!-- wp:heading {"style":{"typography":{"fontSize":"32px"},"color":{"text":"#000000"}}} -->
    

        <h2 class="wp-block-heading has-text-color" style="color:#000000;font-size:32px">
            <!-- wp:post-title {"textAlign":"left","level":1} /-->
          </h2>
        <!-- /wp:heading -->


    <!-- wp:paragraph {"style":{"typography":{"fontSize":"17px"},"color":{"text":"#000000"}}} -->
    <p class="has-text-color" style="color:#000000;font-size:17px">
      <!-- wp:post-excerpt {"textAlign":"left","level":1} /-->
    </p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%"} -->
    <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:html -->
      <iframe src="/quickform/contact-form.php?site_url=<?php echo rawurlencode( get_site_url() ); ?>&amp;page_url=<?php echo rawurlencode( get_permalink() ); ?>" width="400" height="450" frameborder="0"></iframe>

    <!-- /wp:html --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
</div>
<!-- /wp:cover -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
