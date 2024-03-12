$(function () {

    // Funkcja do obliczania sumy
    function calculateSum() {
        let sum = 0;
        const prices = window.price;
        // Pobierz wartość z selecta 'date_end' i przelicz cenę
        const promotionDuration = document.getElementById('date_end').value;
        if (document.getElementById('promoted').checked) {
            const promotionPrice = prices['promoted_' + promotionDuration].price / 100;
            sum += promotionPrice;
        }

        // Sprawdź, które radio 'highlighted' jest zaznaczone i dodaj jego cenę
        const highlightedValue = document.querySelector('input[name="highlighted"]:checked').value;
        if (highlightedValue !== '#ffffff') { // Załóżmy, że #ffffff to opcja bez kosztów
            const highlightedPrice = prices['highlighted_' + promotionDuration].price / 100;
            sum += highlightedPrice;
        }

        // Pobierz wartość z selecta 'inscription' i przelicz cenę
        const inscriptionValue = document.getElementById('inscription').value;
        console.log(inscriptionValue+ ' val');

            if (inscriptionValue !== 'none') { // Załóżmy, że 'none' to opcja bez kosztów
                const inscriptionPrice = prices['inscription_' + promotionDuration].price / 100;
            sum += inscriptionPrice;

    }
        // Aktualizuj sumę w divie
        document.getElementById('suma').innerHTML = `Suma promocji: <strong>${sum.toFixed(2)}</strong> pln`;  
    }

    // Dodaj event listener do elementów formularza
    document.getElementById('date_end').addEventListener('change', calculateSum);
    document.getElementById('promoted').addEventListener('change', calculateSum);
    document.getElementById('inscription').addEventListener('change', calculateSum);
    document.querySelectorAll('input[type=radio][name="highlighted"]').forEach(radio => {
        radio.addEventListener('change', calculateSum);
    });

    // Wywołaj funkcję calculateSum przy załadowaniu strony, aby pokazać początkową sumę
    calculateSum();
});