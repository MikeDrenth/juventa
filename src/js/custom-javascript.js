jQuery(document).ready(function($){ 

    // Show the contact info after clicking the button
    if ($(".contact-info .button").length) {
        $('.contact-info .button').on('click', function(){
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

    // //Full page scrolling initiate
	$('#page').pagepiling({
        direction: 'vertical',
        verticalCentered: true,
        scrollingSpeed: 700,
        easing: 'swing',
        loopBottom: false,
        loopTop: false,
        css3: true,
        navigation: {
            'textColor': '#FFF',
            'bulletsColor': '#FFF',
            'position': 'right',
            'tooltips': ['Juventa Online', 'Diensten', 'Ons werk', 'Wie we zijn', 'Contact']
        },
       	normalScrollElements: null,
        normalScrollElementTouchThreshold: 5,
        touchSensitivity: 5,
        keyboardScrolling: true,
        sectionSelector: '.section',
        animateAnchor: false,
    });

    // Adding classes to body when div is in view
    changeBackgroundClass('diensten', 'greenBackground');
    changeBackgroundClass('row3', 'redBackground');
    changeBackgroundClass('contact', 'redBackground');

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

    // Function: Add the background class to the body
    function addBackgroundClass (backgroundColor) {
        $('body').addClass(backgroundColor);
    }

    // // Function: Remove the current background class from the body
    function removeBackgroundClass (backgroundColor)  {
        $('body').removeClass(backgroundColor);
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

    // Function: Add classes to body when given div is in view after scrolling
    function changeBackgroundClass(divId, backgroundColor) {
        var getContent = document.getElementById(divId);
        // setting -200 to start the effect a bit sooner    
        var elementWatcher = scrollMonitor.create(getContent, {top: -200});
        // Add class to body when in viewport
        elementWatcher.enterViewport(function() {
            addBackgroundClass(backgroundColor);
        });
        // Remove the class when div is out the view
        elementWatcher.exitViewport(function() {
            removeBackgroundClass(backgroundColor);
        });
    }

    $(window).load(function() {
        // Function: Lazy load images after page load
        $('img.lazy').each(function() {
            $(this).attr('src', $(this).attr('data-src'));
        }); 
    });    
});