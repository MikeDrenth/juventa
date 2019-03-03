jQuery(document).ready(function($){ 

    // Show the contact info after clicking the button
    if ($(".contact-info .button").length) {
        $('.contact-info .button, .contact-info .info').on('hover', function(){
            $('.contact-info .info').toggleClass('showMore');
            // Hide scroll down button when on smaller device
            if($(window).width() < 767) { 
                $('.scroll-down').toggleClass('hide');
            }
        });
    }

    // Function: Scrolldown button to 1st div in page
    if ($(".scroll-down").length) {
        $('.scroll-down').on('click', function(){
            $('html,body').animate({
                scrollTop: $("#row1").offset().top
            }, 'slow');
        });
    }

    // Function: Scroll cta button down to form in landingspage
    if ($(".cta-button").length) {
        $('.cta-button').on('click', function(){
            $('html, body').animate({
                scrollTop: $('.form').offset().top
            }, 2000);
        });

        // Function: Fade animation on diensten when in view
        var contactBlock = document.getElementById("contact-wrapper");
        var elementWatcher = scrollMonitor.create(contactBlock, -90);
        elementWatcher.enterViewport(function() {
            $(".cta-button").hide();
        });
        elementWatcher.exitViewport(function() {
            $(".cta-button").show();
        });
    }

    // Toggle show menu when clicking on the button
    if ($(".menu-toggle").length) {
        $('.menu-toggle').on('click', function(){
            $(this).toggleClass('active');
            $('.menu-wrapper').toggleClass('show');
            // Hide scroll down button
            $('.scroll-down').toggleClass('hide');
        });
    }

    if ($('body').hasClass('home')) {
        $("#main-menu a").click(function() {
            var id = $(this).attr('href');
            var id = id.replace('/','');
            $('.menu-wrapper').removeClass('show');
            $('html, body').animate({
                scrollTop: $(id).offset().top
            }, 2000);
        });
    }
    
    if($('#diensten').length) {
        // Function: Fade animation on diensten when in view
        var diensten = document.getElementById("diensten");
        var elementWatcher = scrollMonitor.create(diensten, -100);
        elementWatcher.enterViewport(function() {
            $(diensten).addClass('zoomInFadeIn');
        });
    }

    if($('#usps').length) {
        // Function: Fade animation on diensten when in view
        var usps = document.getElementById("usps");
        var elementWatcher = scrollMonitor.create(usps, -90);
        elementWatcher.enterViewport(function() {
            $(usps).addClass('zoomInFadeIn');
        });
    }

    if($('#highlights').length) {
        // Function: Fade animation on highlights when in view
        var highlights = document.getElementById("highlights");
        var elementWatcher = scrollMonitor.create(highlights, -100);
        elementWatcher.enterViewport(function() {
            $('#highlights .items-title').addClass('startAnimation');
        });
    }

    if($('#row3').length) {
        // Function: Fade animation on row3 when in view
        var row3 = document.getElementById("row3");
        var elementWatcher = scrollMonitor.create(row3, -200);
        elementWatcher.enterViewport(function() {
            $(row3).addClass('startAnimation');
        });
    }

    if($('.logo-wrapper').length) {
        // Function: Add class to logo wrapper div after scrolling, mobile only
        if($(window).width() < 991) { 
            $(window).scroll(function() {
                if ($(document).scrollTop() > 200) {
                //$('.logo-wrapper').addClass('fixed');
                }
            });
        }
    }

    if ($(".items-title .title").length) {
        // Add active to the 1st item to display after loading
        $('.items-title .title:first-child').addClass('active');
        $('.items-image .image:first-child').addClass('active');
        // Show correct image with title on homepage on hover
        $('.items-title .title').on("hover", function() {
        var dataAttr = $(this).attr('data-id');
        $('.items-title .title').removeClass('active');
        $(this).addClass('active');
        $('.items-image .image').removeClass('active');
        $('.items-image .image[data-id = '+dataAttr+']').addClass('active');
        });
    }

    $(function() {
        var prevScroll = $(document).scrollTop();
        $(window).scroll(function() {
            var newScroll = $(document).scrollTop();
            // Remove fixed when scrolling up
            if(newScroll < prevScroll) {
                $('.logo-wrapper').addClass('fixed');
            } else {
                $('.logo-wrapper').removeClass('fixed');
            }

            // Remove fixed when we are at the top again
            if (prevScroll < 10) {
                $('.logo-wrapper').removeClass('fixed');
            }
            prevScroll = newScroll;
        });
    });

    $(window).load(function() {
        // Function: Lazy load images after page load
        $('img.lazy').each(function() {
            $(this).attr('src', $(this).attr('data-src'));
        }); 
    });    
});