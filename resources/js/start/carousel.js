
import $ from 'jquery';
import 'slick-carousel';

document.addEventListener('DOMContentLoaded', function () {
    $('.MyCarusel').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      centerMode: true,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      fade: false
    });


	$('.header_slider').slick({
		// opcje konfiguracji
		slidesToShow: 5, // Pokaż 5 slajdy na małych ekranach
		slidesToScroll: 1, // Domyślnie przewijaj po 1 slajdzie
		dots: true,
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
    
  });