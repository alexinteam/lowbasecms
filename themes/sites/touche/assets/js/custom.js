/**
 * Custom JS
 */

$(window).load(function() {


	/**
	 * Preloader
	 */

	$(function() {

		$(".preloader").addClass("fadeout");

		setTimeout(function() {
			$(".preloader").hide();
		}, 1700)

	});



	/**
	 * Smooth scroll to anchor
	 */

	$(function() {

	  	$('a[href*="#"]:not([href="#"])').click(function() {

	    	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	    		
	      	var target = $(this.hash);
	      	target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

		      	if (target.length) {
		        	$('html, body').animate({
		          	scrollTop: target.offset().top
		        	}, 1000);
		        	return false;
		      	}

	    	}
	  	});

	});


	/**
	 * Navbar class toggle
	 */

	$(function() {

		// Toggle navbar on page load if needed
		var scrollTop = $(window).scrollTop();

		if (scrollTop > 0) {
			$(".navbar").toggleClass("navbar-default navbar-inverse");
		}

		// Toggle navbar on scroll
		$(window).scroll(function() {

			scrollTop = $(window).scrollTop();

			if (scrollTop > 0 && $(".navbar-default").length) {
				$(".navbar").removeClass("navbar-default").addClass("navbar-inverse");
			} else if (scrollTop == 0) {
				$(".navbar").removeClass("navbar-inverse").addClass("navbar-default");
			}

		});

		// Toggle navbar on collapse
		$(".navbar-collapse").on("show.bs.collapse", function() {
			$(this).parents(".navbar").removeClass("navbar-default").addClass("navbar-inverse");
		});
		$(".navbar-collapse").on("hidden.bs.collapse", function() {
			var scrollTop = $(window).scrollTop();

			if (scrollTop == 0) { 
				$(this).parents(".navbar").removeClass("navbar-inverse").addClass("navbar-default");
			}
		});

		// Close collapsed navbar on click
		$(".navbar-nav > li > a").click(function() {
		    $(".navbar-collapse").collapse('hide');
		});

	});


	/**
	 * Welcome parallax
	 */

	$(function() {

		var elem = $(".section_welcome"),
			offsetTop = elem.offset().top,
			elemHeight = elem.height();
			parallaxRate = 2;

		$(window).scroll(function() {

			var scrollTop = $(window).scrollTop(),
				elementOffsetTop = scrollTop - offsetTop,
				parallaxOffset = elementOffsetTop / parallaxRate;
			
			if (elementOffsetTop <= elemHeight) {
				$(".welcome__bg").css({
					"-webkit-transform": "translateY(" + parallaxOffset + "px)",
							"transform": "translateY(" + parallaxOffset + "px)"
				});
			}

		});

	});


	/**
	 * Menu (filtering)
	 */

	$(function() {

		// Init Isotope
		var $menuPage = $(".menu__page").isotope({
			itemSelector: ".menu-page__item"
		});

		// Set ititial filtering
		$menuPage.isotope({ filter: ".menu_mains" });

		// Filrter items on click
		$(".menu__nav > li > a").click(function(e) {

			// Filter items 
			var filterValue = $(this).attr('data-filter');
			$menuPage.isotope({ filter: filterValue });

			// Change active button
			$(this).parents("li").addClass("active").siblings("li").removeClass("active");

			e.preventDefault();
		});

	});


	/**
	 * Events
	 */

	$(function() {

		$(".event__items").on('click', ".event__item:not(.active)", function(e) {

			var elem = $(this);

			// Toggle contents of an active item
			elem.siblings(".active").removeClass("active").find(".collapse").each(function() {
				$(this).collapse("toggle");
			});

			// Toggle contents of the clicked item
			elem.addClass("active").find(".collapse").each(function() {
				$(this).collapse("toggle");
			});

			e.preventDefault();

		});

	});


	/**
	 * Gallery (layout)
	 */

	$(function() {

		// Init Isotope
		var $gallery = $(".gallery__grid").isotope({
			itemSelector: ".gallery__item",
			percentPosition: true,
			layoutMode: "masonry"
		});

		$gallery.imagesLoaded().progress( function() {
		  $gallery.isotope('layout');
		});

	});

});