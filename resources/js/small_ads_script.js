
$(function () {
   
    const date = new Date();
    const date_end = new Date();
    date_end.setDate(date.getDate() + 30); // Dodaje 30 dni do obecnej daty


    $.datetimepicker.setLocale('pl');
    jQuery('#date_start').datetimepicker({
        i18n:{
         pl:{
          months:[
           'Styczeń','Luty','Marzec','Kwiecień','Maj','Czerwiec','Lipiec','Sierpień','Wrzesień','Październik','listopad','Grudzień',
          ],
          dayOfWeek:[
           "Nd", "Pn", "Wt", "Śr","Cz", "Pt", "Sb",
          ]
         }
        },
        timepicker:true,
        format:'Y-m-d H:i',
        mask:false,
        minDate:0, // today
        maxDate:date_end, // today
        startDate: date,
        defaultDate:date,
       });

    const form = document.querySelector("form");
    const input = form.querySelector("input");

    form.addEventListener("submit", e => {
        e.preventDefault();

        //jeżeli wszystko ok to wysyłamy
        if (input.value.length >= 3) {
            e.target.submit();
        } else {
            //jeżeli nie to pokazujemy jakieś błędy
            alert("Kolego wypełniłeś błędnie nasz super formularz");
        }
    })


    $('#image-uploadify').imageuploadify();

    $('#price').on("change", function (e) {

        value = e.target.value;
        var strReg = "^([0-9\.\-])";
        var regex = new RegExp(strReg);
        console.log(value);

        console.log(regex.test(value));
        return(regex.test(value));

    });
    $('#small_ads_categories_id').on("change", function (e) {
        var idKategorii = $(this).val();

        console.log(idKategorii);
        if(idKategorii) {
            $.ajax({
                url: '/drobne/getSubcategory/'+idKategorii,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    $('#small_ads_sub_categories_id').empty();
                    $.each(data, function(key, value) {
                        $('#small_ads_sub_categories_id').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                    });
                }
            });
        }else{
            $('#small_ads_sub_categories_id').empty();
        }
});


});


document.addEventListener('DOMContentLoaded', function() {

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
