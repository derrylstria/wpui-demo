<?php
/**
 * Title: Cards — 3x grid (FI, list semantics)
 * Slug: wpui-demo/cards
 * Categories: featured
 * Keywords: cards, grid, list
 * Inserter: true
 */

$uri = get_stylesheet_directory_uri();
?>

<!-- wp:group {"tagName":"section","layout":{"type":"constrained"}} -->
<section class="wp-block-group" id="cta">
  <!-- wp:heading {"level":2,"fontSize":"xl"} -->
  <h2 class="wp-block-heading has-xl-font-size">Valikoidut nostot</h2>
  <!-- /wp:heading -->

  <!-- wp:list {"className":"cards-grid"} -->
  <ul class="cards-grid">

    <!-- wp:list-item -->
    <li>
      <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|24"},"border":{"radius":"12px"},"dimensions":{"minHeight":""},"elements":{"link":{"color":{"text":"var:preset|color|bg"}}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
      <div class="wp-block-group has-muted-background-color has-background" style="border-radius:12px;padding:var(--wp--preset--spacing--32)">
        <!-- wp:image {"linkDestination":"none"} -->
        <figure class="wp-block-image">
          <img
            src="<?php echo $uri; ?>/assets/img/card-1.jpg"
            alt="Vuoristojärvi"
            width="800" height="450"
            loading="eager" fetchpriority="high" decoding="async"
          />
        </figure>
        <!-- /wp:image -->

        <!-- wp:heading {"level":3} -->
        <h3 class="wp-block-heading">Kompakti ja selkeä</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Lyhyt kuvaus kortista. Selkeä typografia ja riittävä kontrasti.</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons">
          <!-- wp:button {"className":"is-style-outline"} -->
          <div class="wp-block-button is-style-outline">
            <a class="wp-block-button__link wp-element-button" href="#">Lue lisää</a>
          </div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
      </div>
      <!-- /wp:group -->
    </li>
    <!-- /wp:list-item -->

    <!-- wp:list-item -->
    <li>
      <div class="wp-block-group has-muted-background-color has-background" style="border-radius:12px;padding:var(--wp--preset--spacing--32)">
        <figure class="wp-block-image">
          <img
            src="<?php echo $uri; ?>/assets/img/card-2.jpg"
            alt="Kaupunki iltavalossa"
            width="800" height="450"
            loading="lazy" decoding="async"
          />
        </figure>
        <h3 class="wp-block-heading">Saavutettava</h3>
        <p>Näkyvä fokus, oikeat alt-tekstit ja looginen otsikkohierarkia.</p>

        <!-- wp:buttons -->
        <div class="wp-block-buttons">
          <!-- wp:button {"className":"is-style-outline"} -->
          <div class="wp-block-button is-style-outline">
            <a class="wp-block-button__link wp-element-button" href="#">Lue lisää</a>
          </div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
      </div>
    </li>
    <!-- /wp:list-item -->

    <!-- wp:list-item -->
    <li>
      <div class="wp-block-group has-muted-background-color has-background" style="border-radius:12px;padding:var(--wp--preset--spacing--32)">
        <figure class="wp-block-image">
          <img
            src="<?php echo $uri; ?>/assets/img/card-3.jpg"
            alt="Rantamaisema"
            width="800" height="450"
            loading="lazy" decoding="async"
          />
        </figure>
        <h3 class="wp-block-heading">Responsiivinen</h3>
        <p>Grid ilman kovia breakpointteja — joustava ja siisti.</p>

        <!-- wp:buttons -->
        <div class="wp-block-buttons">
          <!-- wp:button {"className":"is-style-outline"} -->
          <div class="wp-block-button is-style-outline">
            <a class="wp-block-button__link wp-element-button" href="#">Lue lisää</a>
          </div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
      </div>
    </li>
    <!-- /wp:list-item -->

  </ul>
  <!-- /wp:list -->
</section>
<!-- /wp:group -->
 