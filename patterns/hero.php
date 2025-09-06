<?php
/**
 * Title: Hero — CTA (FI)
 * Slug: wpui-demo/hero
 * Categories: banner, featured
 * Keywords: hero, cta
 * Block Types: core/post-content
 * Inserter: true
 */
?>

<!-- wp:cover {"overlayColor":"muted","minHeight":50,"minHeightUnit":"vh","isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light" style="min-height:50vh">
  <span aria-hidden="true" class="wp-block-cover__background has-muted-background-color has-background"></span>
  <div class="wp-block-cover__inner-container">
    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
      <!-- wp:heading {"level":1,"fontSize":"xxl"} -->
      <h1 class="wp-block-heading has-xxl-font-size">Löydä inspiroiva UI</h1>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"fontSize":"lg"} -->
      <p class="has-lg-font-size">Saavutettava, responsiivinen ja viimeistelty — rakkaudella koodattu.</p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons -->
      <div class="wp-block-buttons">
        <!-- wp:button {"backgroundColor":"primary","textColor":"bg"} -->
        <div class="wp-block-button">
          <a class="wp-block-button__link has-bg-color has-primary-background-color has-text-color has-background wp-element-button" href="#cta" aria-label="Siirry esittelyyn">
            Aloita
          </a>
        </div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
  </div>
</div>
<!-- /wp:cover -->
