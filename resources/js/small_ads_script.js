
$(function () {

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

    const date = new Date();

   
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
                        $('#small_ads_sub_categories_id').append('<option value="'+ value.small_ads_categories_id +'">'+ value.name +'</option>');
                    });
                }
            });
        }else{
            $('#small_ads_sub_categories_id').empty();
        }


        
    });
});