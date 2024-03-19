document.addEventListener("DOMContentLoaded", function() {
    const myCarouselElement = document.querySelector('#realisations');

    const carousel = new bootstrap.Carousel(myCarouselElement, {
        interval: 4000,
        touch: true,
        pause: false,
        ride: true,
        wrap:true
    });

    carousel.cycle();

    jQuery('#playIcon').click(function () {
        carousel.cycle(); 
        jQuery('#pauseIcon').show(); 
        jQuery('#playIcon').hide(); 
    });

    jQuery('#pauseIcon').click(function () {
        carousel.pause(); 
        jQuery('#playIcon').show();
        jQuery('#pauseIcon').hide();
    });
});
