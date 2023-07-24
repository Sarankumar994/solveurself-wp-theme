<?php
/**
 * Title: front-page
 * Slug: solveurself/front-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:cover {"dimRatio":30,"overlayColor":"pale-cyan-blue","minHeight":580,"minHeightUnit":"px","contentPosition":"top center","isDark":false} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-center" style="min-height:580px"><span aria-hidden="true" class="wp-block-cover__background has-pale-cyan-blue-background-color has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:site-title /-->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:navigation {"ref":31,"layout":{"type":"flex","justifyContent":"center"}} /--></div>
<!-- /wp:group -->

<!-- wp:cover {"dimRatio":20,"overlayColor":"white","isDark":false} -->
<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-white-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>My name is Saran Kumar Reddy Kotimreddy. I love programming. As a hobby i developed some applications in various programming languages and i would like to share the experience and tips through this platform. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Follow page on</p>
<!-- /wp:paragraph -->

<!-- wp:social-links -->
<ul class="wp-block-social-links"><!-- wp:social-link {"url":"https://www.facebook.com/profile.php?id=100094658297749","service":"facebook","label":"Facebook Page Link"} /-->

<!-- wp:social-link {"url":"https://twitter.com/solveurselfblog","service":"twitter","label":"Twitter Profile Link"} /-->

<!-- wp:social-link {"url":"https://www.youtube.com/@solveurself","service":"youtube","label":"Youtube Channel Link"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph -->
<p>Follow me on</p>
<!-- /wp:paragraph -->

<!-- wp:social-links -->
<ul class="wp-block-social-links"><!-- wp:social-link {"url":"https://twitter.com/sarankotimreddy","service":"twitter"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:image {"id":6,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-style-rounded"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/profile.jpg" alt="<?php echo esc_attr_e( 'Saran Profile Image', 'Solve Ur Self' ); ?>" class="wp-image-6" title="Saran Kumar Profile Image"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading">Recent Posts</h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"black","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background wp-element-button" href="http://localhost:8080/blog/">View All</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":44,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"minHeight":309,"minHeightUnit":"px","contentPosition":"center center","isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:309px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center","isLink":true} /--></div></div>
<!-- /wp:cover -->

<!-- wp:post-excerpt /-->

<!-- wp:read-more /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->