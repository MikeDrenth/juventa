jQuery(document).ready(function($){ 

	// Show the contact info after clicking the button
	$('.contact-info .button').on('click', function(){
  		$('.contact-info .info').toggleClass('showMore');
  	});

  	// Toggle show menu when clicking on the button
  	$('.menu-toggle').on('click', function(){
  		console.log('123');
  		$(this).toggleClass('active');
  		$('.menu-wrapper').toggleClass('show');
  	});

    // Animation for fading in div when on scroll
    $('.fadeAnimation').each(function() {
      new Waypoint.Inview({
        element: this,
        enter: function(direction) {
          $(this.element).addClass('zoomInFadeIn');
        }
      });
    });

    // Fade in titles in highlights
    $('.fadeInOneByOne').each(function() {
      new Waypoint.Inview({
        element: this,
        enter: function(direction) {
          $(this.element).addClass('startAnimation');
        }
      });
    });

    // Set div to hide the loader after 2sec
    setTimeout(function(){
        $('body').addClass('loaded');
        $('.header-text').addClass('visible');
    }, 2000);

    // Show correct image with title on homepage on hover
    $('.items-title .title').on("hover", function() {
      var dataAttr = $(this).attr('data-id');
      console.log(dataAttr);
      $('.items-title .title').removeClass('active')
      $(this).addClass('active');
      $('.items-image .image').removeClass('active');
      $('.items-image .image[data-id = '+dataAttr+']').addClass('active');
    });
});