<!DOCTYPE html>
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Fav icon -->
		<link rel="shortcut icon" href="{{asset('/')}}front-end/img/favicon.ico">

		<!-- Font -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,900,700,700italic,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Cantata+One' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700' rel='stylesheet' type='text/css'>
		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

		<link rel="stylesheet" href="{{asset('/')}}front-end/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('/')}}front-end/css/flexslider.css" />
        <link rel="stylesheet" href="{{asset('/')}}front-end/css/image-light-box.css" />

		<!-- Magnific Popup -->
		<link href="{{asset('/')}}front-end/css/magnific-popup.css" rel="stylesheet">

		<link rel="stylesheet" href="{{asset('/')}}front-end/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('/')}}front-end/css/normalize.css">
		<link rel="stylesheet" href="{{asset('/')}}front-end/css/skin-lblue.css">

		<link rel="stylesheet" href="{{asset('/')}}front-end/css/ecommerce.css">

		<link rel="stylesheet" href="{{asset('/')}}front-end/layerslider/css/layerslider.css" type="text/css"><!-- Layer Slider -->

		<!-- Owl carousel -->
		<link href="{{asset('/')}}front-end/css/owl.carousel.css" rel="stylesheet">

		<link rel="stylesheet" href="{{asset('/')}}front-end/css/main.css">
		<link rel="stylesheet" href="{{asset('/')}}front-end/css/style.css">
        <link rel="stylesheet" href="{{asset('/')}}front-end/css/setting.css">
		<link rel="stylesheet" type="text/css" href="{{asset('/')}}front-end/css/revolutionslider_settings.css" media="screen" />
		<link rel="stylesheet" href="{{asset('/')}}front-end/css/responsive.css">
		<script src="{{asset('/')}}front-end/js/vendor/modernizr-2.6.2.min.js"></script>
	</head>

<body class="style-14 index-3">
<!-- start header -->
@include('front-end.includes.header')
<!-- end header -->

<!-- start main content -->
    @yield('bodyContent')
<!-- end main content -->






<!-- start footer area -->
@include('front-end.includes.footer')
<!-- footer area end -->


	<!-- All script -->
	<script src="{{asset('/')}}front-end/js/vendor/jquery-1.10.2.min.js"></script>
	<script src="{{asset('/')}}front-end/js/bootstrap.min.js"></script>
	<script src="{{asset('/')}}front-end/js/smoothscroll.js"></script>
	<!-- Scroll up js
	============================================ -->
	<script src="{{asset('/')}}front-end/js/jquery.scrollUp.js"></script>
	<script src="{{asset('/')}}front-end/js/menu.js"></script>


	<script src="{{asset('/')}}front-end/js/pluginse209e209.js?v=1.0.0"></script>

	<!-- Magnific Popup -->
	<script src="{{asset('/')}}front-end/js/jquery.magnific-popup.min.js"></script>

	<script src="{{asset('/')}}front-end/js/jquery.countdown.min.js"></script>


	<script src="{{asset('/')}}front-end/js/jquery.scrolly.js"></script>


	<!-- External libraries: jQuery & GreenSock -->
	<script src="{{asset('/')}}front-end/layerslider/js/greensock.js" type="text/javascript"></script>
	<!-- LayerSlider script files -->
	<script src="{{asset('/')}}front-end/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
	<script src="{{asset('/')}}front-end/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>

    <script src="{{asset('/')}}front-end/js/flexslider/jquery.flexslider-min.js"></script>
    <script src="{{asset('/')}}front-end/js/image-lightbox/imagelightbox.js"></script>

	<!-- Owl carousel -->
	<script src="{{asset('/')}}front-end/js/owl.carousel.min.js"></script>
	<script src="{{asset('/')}}front-end/js/main.js"></script>


<script type="text/javascript">
		$(document).ready(function() {

			"use strict";

			//** Slider  **//
			jQuery("#layerslider").layerSlider({
				responsive: true,
				responsiveUnder: 1170,
				layersContainer: 1170,
				skin: 'v5',
				hoverPrevNext: true,
				navPrevNext: true,
				navStartStop: false,
				navButtons: false,
				skinsPath: 'layerslider/skins/'
			});


			/*=================== Parallax ===================*/
			$('.parallax').scrolly({bgParallax: true});


			/* Owl carousel */
			$(".owl-carousel").owlCarousel({
				slideSpeed : 500,
				rewindSpeed : 1000,
				mouseDrag : true,
				stopOnHover : true
			});
			/* Own navigation */
			$(".owl-nav-prev").click(function(){
				$(this).parent().next(".owl-carousel").trigger('owl.prev');
			});
			$(".owl-nav-next").click(function(){
				$(this).parent().next(".owl-carousel").trigger('owl.next');
			});


		});
	</script>
    <script type="text/javascript">
        /*-----------------------------------------------------------------------------------*/
        /* Flex Slider
         /*-----------------------------------------------------------------------------------*/
        if (jQuery().flexslider) {

            // Product Page Flex Slider
            $('.product-slider').flexslider({
                animation: "slide",
                animationLoop: false,
                slideshow: false,
                prevText: '<i class="fa fa-angle-left"></i>',
                nextText: '<i class="fa fa-angle-right"></i>',
                animationSpeed: 250,
                controlNav: "thumbnails"
            });

        }


        /*-----------------------------------------------------------------------------------*/
        /* Product Carousel
         /*-----------------------------------------------------------------------------------*/
        if (jQuery().owlCarousel) {
            var productCarousel = $("#product-carousel");
            productCarousel.owlCarousel({
                loop: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    480: {
                        items: 2
                    },
                    900: {
                        items: 3
                    },
                    1100: {
                        items: 4
                    }
                }
            });

            // Custom Navigation Events
            $(".product-control-nav .next").on("click", function() {
                productCarousel.trigger('next.owl.carousel');
            });

            $(".product-control-nav .prev").on("click", function() {
                productCarousel.trigger('prev.owl.carousel');
            });
        }



        /*-----------------------------------------------------------------------------------*/
        /* Tabs
         /*-----------------------------------------------------------------------------------*/
        $(function() {
            var $tabsNav = $('.tabs-nav'),
                $tabsNavLis = $tabsNav.children('li');

            $tabsNav.each(function() {
                var $this = $(this);
                $this.next().children('.tab-content').stop(true, true).hide()
                    .first().show();
                $this.children('li').first().addClass('active').stop(true, true).show();
            });

            $tabsNavLis.on('click', function(e) {
                var $this = $(this);
                $this.siblings().removeClass('active').end()
                    .addClass('active');
                var idx = $this.parent().children().index($this);
                $this.parent().next().children('.tab-content').stop(true, true).hide().eq(idx).fadeIn();
                e.preventDefault();
            });

        });


        /*-----------------------------------------------------------------------------------*/
        /*	Tabs Widget
         /*-----------------------------------------------------------------------------------*/
        $('.footer .tabbed .tabs li:first-child, .tabbed .tabs li:first-child').addClass('current');
        $('.footer .block:first, .tabbed .block:first').addClass('current');


        $('.tabbed .tabs li').on("click", function() {
            var $this = $(this);
            var tabNumber = $this.index();

            /* remove current class from other tabs and assign to this one */
            $this.siblings('li').removeClass('current');
            $this.addClass('current');

            /* remove current class from current block and assign to related one */
            $this.parent('ul').siblings('.block').removeClass('current');
            $this.closest('.tabbed').children('.block:eq(' + tabNumber + ')').addClass('current');
        });



        /*-----------------------------------------------------------------------------------*/
        /*	Image Lightbox
         /*  http://osvaldas.info/image-lightbox-responsive-touch-friendly
         /*-----------------------------------------------------------------------------------*/
        if (jQuery().imageLightbox) {

            // ACTIVITY INDICATOR

            var activityIndicatorOn = function() {
                    $('<div id="imagelightbox-loading"><div></div></div>').appendTo('body');
                },
                activityIndicatorOff = function() {
                    $('#imagelightbox-loading').remove();
                },


                // OVERLAY

                overlayOn = function() {
                    $('<div id="imagelightbox-overlay"></div>').appendTo('body');
                },
                overlayOff = function() {
                    $('#imagelightbox-overlay').remove();
                },


                // CLOSE BUTTON

                closeButtonOn = function(instance) {
                    $('<button type="button" id="imagelightbox-close" title="Close"></button>').appendTo('body').on('click touchend', function() {
                        $(this).remove();
                        instance.quitImageLightbox();
                        return false;
                    });
                },
                closeButtonOff = function() {
                    $('#imagelightbox-close').remove();
                },

                // ARROWS

                arrowsOn = function(instance, selector) {
                    var $arrows = $('<button type="button" class="imagelightbox-arrow imagelightbox-arrow-left"></button><button type="button" class="imagelightbox-arrow imagelightbox-arrow-right"></button>');

                    $arrows.appendTo('body');

                    $arrows.on('click touchend', function(e) {
                        e.preventDefault();

                        var $this = $(this),
                            $target = $(selector + '[href="' + $('#imagelightbox').attr('src') + '"]'),
                            index = $target.index(selector);

                        if ($this.hasClass('imagelightbox-arrow-left')) {
                            index = index - 1;
                            if (!$(selector).eq(index).length)
                                index = $(selector).length;
                        } else {
                            index = index + 1;
                            if (!$(selector).eq(index).length)
                                index = 0;
                        }

                        instance.switchImageLightbox(index);
                        return false;
                    });
                },
                arrowsOff = function() {
                    $('.imagelightbox-arrow').remove();
                };

            // Lightbox for individual image
            var lightboxInstance = $('a[data-imagelightbox="lightbox"]').imageLightbox({
                onStart: function() {
                    overlayOn();
                    closeButtonOn(lightboxInstance);
                },
                onEnd: function() {
                    closeButtonOff();
                    overlayOff();
                    activityIndicatorOff();
                },
                onLoadStart: function() {
                    activityIndicatorOn();
                },
                onLoadEnd: function() {
                    activityIndicatorOff();
                }
            });

            // Lightbox for product gallery
            var gallerySelector = 'a[data-imagelightbox="gallery"]';
            var galleryInstance = $(gallerySelector).imageLightbox({
                quitOnDocClick: false,
                onStart: function() {
                    overlayOn();
                    closeButtonOn(galleryInstance);
                    arrowsOn(galleryInstance, gallerySelector);
                },
                onEnd: function() {
                    overlayOff();
                    closeButtonOff();
                    arrowsOff();
                    activityIndicatorOff();
                },
                onLoadStart: function() {
                    activityIndicatorOn();
                },
                onLoadEnd: function() {
                    activityIndicatorOff();
                    $('.imagelightbox-arrow').css('display', 'block');
                }
            });

        }



    </script>


</body>

</html>
