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

    // Function: Fade animation on row1 when in view
    var row1 = document.getElementById("row1");
    var elementWatcher = scrollMonitor.create(row1, -100);
    elementWatcher.enterViewport(function() {
        $(row1).addClass('zoomInFadeIn');
    });

    // Function: Fade animation on highlights when in view
    var highlights = document.getElementById("highlights");
    var elementWatcher = scrollMonitor.create(highlights, -100);
    elementWatcher.enterViewport(function() {
        $('#highlights .items-title').addClass('startAnimation');
    });

    // Function: Fade animation on row3 when in view
    var row3 = document.getElementById("row3");
    var elementWatcher = scrollMonitor.create(row3, -50);
    elementWatcher.enterViewport(function() {
        $(row3).addClass('startAnimation');
    });

    // Function: Add class to logo wrapper div after scrolling 100px
    if($(window).width() < 991) { 
      $(window).scroll(function() {
        if ($(document).scrollTop() > 100) {
          $('.logo-wrapper').addClass('fixed');
        }
      });
    }

    // Set div to hide the loader after 2sec
    setTimeout(function(){
        $('body').addClass('loaded');
        $('.header-text').addClass('visible');
    }, 2000);

    // Show correct image with title on homepage on hover
    $('.items-title .title').on("hover", function() {
      var dataAttr = $(this).attr('data-id');
      $('.items-title .title').removeClass('active')
      $(this).addClass('active');
      $('.items-image .image').removeClass('active');
      $('.items-image .image[data-id = '+dataAttr+']').addClass('active');
    });
});