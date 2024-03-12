import $ from 'jquery';
import 'jquery-datetimepicker'; 


document.addEventListener('DOMContentLoaded', function () {

    const date = new Date();
    const date_end = new Date();
    date_end.setDate(date.getDate() + 30); // Dodaje 30 dni do obecnej daty



//    $.datetimepicker.setLocale('pl');
    $('#date_start').datetimepicker({
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

