

var images = $('.thumbnail').map(function () {
    return $(this).attr('src');
}).get();

var currentImageIndex = -1;

$('.thumbnail').on('click', function () {
    var src = $(this).attr('src');
    currentImageIndex = images.indexOf(src);
    showImageInFullscreen(src);
});

function showImageInFullscreen(src) {
    $('#fullscreen img').attr('src', src);
    $('#fullscreen').show();
}

$('#prev').on('click', function () {
    if (currentImageIndex > 0) {
        currentImageIndex--;
        showImageInFullscreen(images[currentImageIndex]);
    }
});

$('#next').on('click', function () {
    if (currentImageIndex < images.length - 1) {
        currentImageIndex++;
        showImageInFullscreen(images[currentImageIndex]);
    }
});
//skrypt do przełączanai obrazkow w produktach 
$('.thumbnail').on('click', function () {
    var src = $(this).attr('src');
    $('#current-image').attr('src', src);
});

$('#current-image').on('click', function () {
    var src = $(this).attr('src');
    $('body').append('<div id="fullscreen"><span id="prev" class="arrow">&#10094;</span> <!-- Strzałka w lewo --><img src="' + src + '" /><span id="next" class="arrow">&#10095;</span> <!-- Strzałka w prawo --><span id="close">Zamknij</span></div>');

    // Zamknięcie po kliknięciu na 'Zamknij'
    $('#close').on('click', function () {
        $('#fullscreen').remove();
    });

    // Reagowanie na klawisz Esc
    $(document).on('keydown', function (e) {
        if (e.key === "Escape") {
            $('#fullscreen').remove();
        }
    });
    // Zamknięcie po kliknięciu poza obrazkiem
    $('#fullscreen').on('click', function (e) {
        if (e.target.id === "fullscreen") {
            $('#fullscreen').remove();
        }
    });
});