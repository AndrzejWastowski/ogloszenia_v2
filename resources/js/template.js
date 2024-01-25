
$(function () {


	// search bar
	$(".mobile-search-icon").on("click", function () {
		$(".search-bar").addClass("full-search-bar");
		$(".page-wrapper").addClass("search-overlay");
	});
	$(".search-close").on("click", function () {
		$(".search-bar").removeClass("full-search-bar");
		$(".page-wrapper").removeClass("search-overlay");
	});

	$(window).on("scroll", function () {
			if ($(this).scrollTop() > 300) {
				$('.back-to-top').fadeIn();
			} else {
				$('.back-to-top').fadeOut();
			}
		});

	$('.back-to-top').on("click", function () {
			$("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
		});

	$('.header_slider').slick({
			// opcje konfiguracji
			slidesToShow: 5, // Pokaż 5 slajdy na małych ekranach
			slidesToScroll: 1, // Domyślnie przewijaj po 1 slajdzie
			dots:true,
			centerMode: true,
			responsive: [
			{
				breakpoint: 1200, // Szerokość ekranu 1000px i mniej
			    settings: {
					slidesToShow: 3, // Pokaż 3 slajdy na małych ekranach
					slidesToScroll: 1 // Przewijaj po 1 slajdzie
				}
			},
			{
				breakpoint: 700, // Szerokość ekranu 500px i mniej
				settings: {
					slidesToShow: 1, // Pokaż 1 slajd na małych ekranach
					slidesToScroll: 1 // Przewijaj po 1 slajdzie
				}
		 },
			]
		});

	$('.MyCarusel').slick({
			// opcje konfiguracji
			slidesToShow: 1,
			slidesToScroll: 1, // Domyślnie przewijaj po 1 slajdzie
			dots:true,
			centerMode: true,
			autoplay: true,
			autoplaySpeed: 2000,
			arrows: false,
			fade: false
		});

	$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
		if (!$(this).next().hasClass('show')) {
		  $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
		}
		var $subMenu = $(this).next(".dropdown-menu");

		$subMenu.toggleClass('show');

		$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
		  $('.submenu .show').removeClass("show");
		});
		return false;
	  });

	  $('.myCarousel').carousel({
		interval: 2000
	  })

	  var images = $('.thumbnail').map(function() {
        return $(this).attr('src');
    }).get();

    var currentImageIndex = -1;

    $('.thumbnail').on('click', function() {
        var src = $(this).attr('src');
        currentImageIndex = images.indexOf(src);
        showImageInFullscreen(src);
    });

    function showImageInFullscreen(src) {
        $('#fullscreen img').attr('src', src);
        $('#fullscreen').show();
    }

    $('#prev').on('click', function() {
        if (currentImageIndex > 0) {
            currentImageIndex--;
            showImageInFullscreen(images[currentImageIndex]);
        }
    });

    $('#next').on('click', function() {
        if (currentImageIndex < images.length - 1) {
            currentImageIndex++;
            showImageInFullscreen(images[currentImageIndex]);
        }
    });
//skrypt do przełączanai obrazkow w produktach 
$('.thumbnail').on('click', function() {
	var src = $(this).attr('src');
	$('#current-image').attr('src', src);
});

$('#current-image').on('click', function() {
	var src = $(this).attr('src');
	$('body').append('<div id="fullscreen"><span id="prev" class="arrow">&#10094;</span> <!-- Strzałka w lewo --><img src="' + src + '" /><span id="next" class="arrow">&#10095;</span> <!-- Strzałka w prawo --><span id="close">Zamknij</span></div>');
	
	// Zamknięcie po kliknięciu na 'Zamknij'
	$('#close').on('click', function() {
		$('#fullscreen').remove();
	});

	// Reagowanie na klawisz Esc
	$(document).on('keydown', function(e) {
		if (e.key === "Escape") {
			$('#fullscreen').remove();
		}
	});
	// Zamknięcie po kliknięciu poza obrazkiem
	$('#fullscreen').on('click', function(e) {
		if (e.target.id === "fullscreen") {
			$('#fullscreen').remove();
		}
	});
});

});


