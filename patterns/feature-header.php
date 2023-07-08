<?php
/**
 * Title: Feature Header
 * Slug: vcrlike/feature-header
 * 
 * @since 0.1.0
 *
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri('screenshot.png')); ?>","hasParallax":true,"dimRatio":30,"overlayColor":"black","minHeight":40,"minHeightUnit":"vh","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-parallax" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:30vh"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-30 has-background-dim"></span><div role="img" class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url(get_theme_file_uri('screenshot.png')); ?>)"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"tagName":"header","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group"><!-- wp:query-title {"type":"archive","showPrefix":false} /-->

<!-- wp:site-title {"level":4,"isLink":false,"fontSize":"small"} /--></header>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->