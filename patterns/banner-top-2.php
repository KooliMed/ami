<?php
/**
 * Title: Banner Top 2
 * Slug: twentytwentyfour/banner-top-2
 * Categories: banner, call-to-action, featured
 * Viewport width: 1400
 */
?>
<!-- wp:group -->
<div class="wp-block-group banner-top-2-container" id="who">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column banner-top-2-column-1">
			<!-- wp:image -->
			<figure class="wp-block-image d-block">
				<img src="<?php echo get_parent_theme_file_uri('assets/images/logo.png') ?>" alt="<?php the_title_attribute(); ?>">
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column banner-top-2-column-2">
			<!-- wp:paragraph -->
			<p>
				AMI RÉALISATIONS est une société d'ingénierie et de management de<br>
				projet spécialisée dans les secteurs du bâtiment et de l'environnement
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->