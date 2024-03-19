<?php
/**
 * Title: Realisation
 * Slug: twentytwentyfour/block-realisation
 * Categories: realisations
 * Viewport width: 1400
 */
?>
<!-- wp:group -->
<!-- wp:html -->
<div id="realisations" class="carousel slide carousel-fade carousel-dark">
  <div class="carousel-indicators start-pauser">
    <button type="button" class="active indicator" data-bs-target="#realisations" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1">Projet1</button>
    <button type="button" class="indicator" data-bs-target="#realisations" data-bs-slide-to="1" aria-label="Slide 2">Projet2</button>
    <button type="button" class="indicator" data-bs-target="#realisations" data-bs-slide-to="2" aria-label="Slide 3">Projet3</button>
    <button type="button" class="indicator" data-bs-target="#realisations" data-bs-slide-to="3" aria-label="Slide 4">Projet4</button>
    <button id="carouselControlButton" type="button" class="indicator" data-bs-target="#realisations">

      <svg id="pauseIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="16" height="16" fill="white">
        <path d="M48 64C21.5 64 0 85.5 0 112V400c0 26.5 21.5 48 48 48H80c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H48zm192 0c-26.5 0-48 21.5-48 48V400c0 26.5 21.5 48 48 48h32c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H240z" />
      </svg>
      <svg id="playIcon" style="display:none;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="16" height="16" fill="white">
        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
      </svg>
    </button>
  </div>
  <div class="carousel-inner">
    <?php
    $args = array(
      'post_type' => 'product',
      'posts_per_page' => 4
    );
    $products = new WP_Query($args);
    if ($products->have_posts()) {
      while ($products->have_posts()) {
        $products->the_post();
        $budget = wc_get_product_terms(get_the_ID(), 'pa_budget', array('fields' => 'names'));
        $mission_terms = wc_get_product_terms(get_the_ID(), 'pa_missions');

        $missions = array();
        foreach ($mission_terms as $term) {
          $mission = array(
            'name' => $term->name,
            'description' => $term->description,
          );
          $missions[] = $mission;
        }
        $thumbnail_id = get_post_thumbnail_id(get_the_ID());
        $image_url    = wp_get_attachment_image_src($thumbnail_id, array(800, 600))[0];
    ?>
        <div class="carousel-item <?php echo $products->current_post === 0 ? 'active' : ''; ?>" style="min-height:100vh">
          <div class="gradient-div" style="position:absolute;z-index:1">

          </div>
          <div style="z-index:0;position:absolute;width:100%">
            <img src="<?php echo esc_url($image_url); ?>" class="d-block" alt="<?php the_title_attribute(); ?>" style="float:right;height:100vh">
          </div>

          <div class="carousel-caption caption-start-pauser">
            <h4>NOS RÉALISATIONS</h4>

            <p class="realisation-title"><img src="<?php echo esc_url(get_site_url() . '/wp-content/themes/' . get_template() . '/assets/images/ico-project.png'); ?>" height="25" width="26" alt="" />&nbsp; <?php the_title(); ?>
            <p>
            <div class="realisation-description"><?php echo wp_kses_post(wpautop(get_the_excerpt())); ?></div>
            <p class="realisation-title"><img src="<?php echo esc_url(get_site_url() . '/wp-content/themes/' . get_template() . '/assets/images/ico-budget.png'); ?>" height="25" width="26" alt="" />&nbsp; Budget:</p>
            <div class="realisation-description"><?php echo !empty($budget) ? $budget[0] : ''; ?></div>
            <p class="realisation-title"><img src="<?php echo esc_url(get_site_url() . '/wp-content/themes/' . get_template() . '/assets/images/ico-missions.png'); ?>" height="25" width="26" alt="" />&nbsp; Missions:</p>
            <div class="realisation-description"><?php if (!empty($missions)) {
                                                    $first_mission = $missions[0];
                                                    echo nl2br($first_mission['description']);
                                                  }  ?></div>
          </div>
        </div>
    <?php
      }
      wp_reset_postdata();
    } else {
      echo '<p>No products found</p>';
    }
    ?>
  </div>
</div>
<!-- /wp:html -->
<!-- /wp:group -->