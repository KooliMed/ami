<?php
/**
 * Title: Domaines
 * Slug: twentytwentyfour/block-domaines
 * Categories: banner, featured
 * Viewport width: 1400
 */
?>
<!-- wp:group -->
<div class="wp-block-group block-domaines" id="domaines">
  <!-- wp:paragraph -->
  <p>
    <!-- wp:heading -->
  <h2 class="wp-block-heading" style="text-align:center;"><span class="metier-title-span">DOMAINES D'INTERVENTION ET D'EXPERTISE</span></h2>
  <!-- /wp:heading -->
  </p>
  <!-- /wp:paragraph -->
  <!-- wp:columns -->
  <div class="wp-block-columns owl-carousel owl2-carousel owl-theme">
    <?php
    $image_dir = get_template_directory() . '/assets/images/domaines/';
    $files = glob($image_dir . '*.{jpg,png,webp}', GLOB_BRACE);
    ob_start();
    foreach ($files as $index => $file) {
      $image_name = pathinfo($file, PATHINFO_FILENAME);
      $text_file = $image_dir . $image_name . '.txt';
      $text = '';
      if (file_exists($text_file)) {
        $text = file_get_contents($text_file);
      }
    ?>
      <!-- wp:column -->
      <div class="wp-block-column item">
        <!-- wp:group -->
        <div class="wp-block-group image-container">
          <!-- wp:group -->
          <div class="wp-block-group overlay">
            <!-- wp:paragraph -->
            <p><?php echo htmlspecialchars($text); ?></p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
          <!-- wp:image -->
          <figure class="wp-block-image">
            <img src="<?php echo esc_url(get_parent_theme_file_uri('assets/images/domaines/' . $image_name . '.webp')); ?>" alt="<?php echo esc_attr($image_name); ?>" loading="lazy">
          </figure>
          <!-- /wp:image -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->
    <?php
    }
    echo ob_get_clean();
    ?>
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->