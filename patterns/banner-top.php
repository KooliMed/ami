<?php

/**
 * Title: Banner Top
 * Slug: twentytwentyfour/banner-top
 * Categories: banner, call-to-action, featured
 * Viewport width: 1400
 */
?>
<!-- wp:group -->
<div class="wp-block-group banner-top">
	<!-- wp:group -->
	<div class="wp-block-group gradient-div-top">
		<!-- wp:group -->
		<div class="wp-block-group banner-top-title">
			<!-- wp:paragraph -->
			<p>SOCIÉTÉ D'INGÉNIERIE & DE MANAGEMENT DE PROJET</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group -->
		<div class="wp-block-group banner-top-description">
			<!-- wp:paragraph -->
			<p>AMI REALISATIONS est une société d'ingénierie et de
				management de projet dans les domaines de la construction, de
				l'infrastructure et de l'environnement</p>
			<!-- /wp:paragraph -->
			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline">
				<a class="wp-block-button__link wp-element-button">En savoir plus <span class="custom-arrow">&rarr;</span></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group -->
	<div class="wp-block-group banner-top-image-container">
		<!-- wp:image -->
		<figure class="wp-block-image d-block banner-top-image">
			<img src="<?php echo get_parent_theme_file_uri('assets/images/ami-realisation.webp') ?>" alt="<?php the_title_attribute(); ?>">
		</figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->