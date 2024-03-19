
jQuery(document).ready(function() {
    var firstNavItem = jQuery('.wp-block-navigation-link:first-child');
    firstNavItem.addClass('active');

    jQuery('#contact-form').submit(function(event) {
      event.preventDefault(); 
      var formData = jQuery(this).serialize(); 
      jQuery.ajax({
        type: 'POST',
        url: 'form.php', 
        data: formData,
        success: function(response) {
          jQuery('#form-alert').removeClass('alert-danger').addClass('alert-success').html(response).fadeIn();
          jQuery('#submit-btn').prop('disabled', true); 
		  setTimeout(function() {
            jQuery('#form-alert').css('display', 'none'); 
          }, 7000);
          setTimeout(function() {
            jQuery('#submit-btn').prop('disabled', false); 
          }, 60000);
        },
        error: function(xhr, status, error) {
          jQuery('#form-alert').removeClass('alert-success').addClass('alert-danger').html('Erreur : ' + error).fadeIn();
		  setTimeout(function() {
            jQuery('#form-alert').css('display', 'none'); 
          }, 7000);
        }
      });
    });
  });