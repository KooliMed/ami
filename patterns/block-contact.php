<?php
/**
 * Title: Contact
 * Slug: twentytwentyfour/block-contact
 * Keywords: quote, review, about
 * Categories: text
 * Viewport width: 1300
 */
?>
<!-- wp:group -->
<div class="wp-block-group alignfull contact-container" style="margin-top:0;margin-bottom:0;" id="contact">
  <!-- wp:group {"metadata":{"name":"<?php echo esc_html_x('Contact', 'Contact form', 'twentytwentyfour'); ?>"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|60","left":"var:preset|spacing|10","right":"var:preset|spacing|10"},"margin":{"top":"0","bottom":"0"}}},"textColor":"base","layout":{"type":"constrained","contentSize":""}} -->
  <div class="wp-block-group alignfull contact-container-overlay" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--10)">
    <!-- wp:paragraph -->
    <p>
      <!-- wp:heading -->
    <h2 class="wp-block-heading" style="text-align:center;"><span class="contact-title-span">Contact</span></h2>
    <!-- /wp:heading -->
    </p>
    <!-- /wp:paragraph -->
    <!-- wp:group -->
    <div class="wp-block-group form-pad">
      <div class="form-container">
        <div id="form-alert" class="alert" style="display: none;"></div>
        <form id="contact-form">
          <div class="form-row">
            <div class="form-group">
              <label for="name">Nom & Prénom<span class="required">*</span></label>
              <input class="form-control" type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="email">Email<span class="required">*</span></label>
              <input class="form-control" type="email" id="email" name="email" required value="younes.yahmed@zerda.digital">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="subject">Objet<span class="required">*</span></label>
              <select class="form-control" id="subject" name="subject" required>
                <option value="" selected disabled>Sélectionner un objet</option>
                <option value="Question générale">Question générale</option>
                <option value="Demande de devis">Demande de devis</option>
                <option value="Support technique">Support technique</option>
              </select>
            </div>
            <div class="form-group">
              <label for="phone">Téléphone<span class="required">*</span></label>
              <input class="form-control" type="tel" id="phone" name="phone" required>
            </div>
          </div>
          <div class="form-group" style="width:100%">
            <label for="message">Message<span class="required">*</span></label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
          </div>
          <button type="submit">Soumettre</button>
        </form>
      </div>
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->