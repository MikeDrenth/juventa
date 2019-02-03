jQuery(document).ready(function($){ 

	// Show the contact info after clicking the button
	$('.contact-info .button').on('click', function(){
  		$('.contact-info .info').toggleClass('showMore');
  	});

  	// Toggle show menu when clicking on the button
  	$('.menu-toggle').on('click', function(){
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

    particlesJS(
        "particles-js", 
        {"particles":
        {"number":
        {"value":160,
            "density": {
                "enable":true,
                "value_area":800
            }
        },
        "color":{
            "value":"#ffffff"
        },
        "shape":{
            "type":"circle",
            "stroke": {
                "width":0,
                "color":"#000000"
            },
            "polygon":{
                "nb_sides":5
            },
            "image":{
                "src":"img/github.svg",
                "width":100,
                "height":100
            }
        },
        "opacity":{
            "value":1,
            "random":true,
            "anim": {
                "enable":true,
                "speed":1,
                "opacity_min":0,
                "sync":false
            }
        },
        "size":{
            "value":3,
            "random":true,
            "anim": {
                "enable":false,
                "speed":4,
                "size_min":0.3,
                "sync":false
            }
        },
        "line_linked": {
            "enable":false,
            "distance":150,
            "color":"#ffffff",
            "opacity":0.4,
            "width":1
        },
        "move": {
            "enable":true,
            "speed":1,
            "direction": "none",
            "random":true,
            "straight":false,
            "out_mode":"out",
            "bounce":false,
            "attract":{
                "enable":false,
                "rotateX":600,
                "rotateY":600
            }
        }
    },
    "interactivity": {
        "detect_on":"canvas",
        "events":{
            "onhover":{
                "enable":true,
                "mode":"bubble"
            },
            "onclick":{
                "enable":true,
                "mode":"repulse"
            },
            "resize":true
        },
        "modes":{
            "grab":{
                "distance":400,
                "line_linked":{
                    "opacity":1
                }
            },
            "bubble":{
                "distance":250,
                "size":0,
                "duration":2,
                "opacity":0,
                "speed":3
            },
            "repulse":{
                "distance":400,
                "duration":0.4
            },
            "push":{
                "particles_nb":4
            },
            "remove":{
                "particles_nb":2
            }
        }
    },
    "retina_detect":true
});

});