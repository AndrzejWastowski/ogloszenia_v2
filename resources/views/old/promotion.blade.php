@extends('home.dashboard')
@section('step')


<div class="row justify-content-center">
    
    
                    <form action="{{ route('services_promotion_post') }}"  method="POST" enctype="multipart/form-data" role="form" name="formPromotion">
                            @csrf
                            <p class="h4 mb-4 text-center">Wybierz czas promocji ogłoszenia</p>
                            <div class="row">
                                <div class="col-3">
                                        
                                        <select class="browser-default custom-select mb-4" id="date_end_promotion" name="date_end_promotion" >
                                            <option value="7" selected="">Tydzien</option>
                                            <option value="14">Dwa tygodnie</option>
                                            <option value="30">Miesiąc</option>                                        
                                        </select>
                                </div>
                                <div class="col-8 pt-1">
                                <label for="select">Wybierz przez ile czasu chcesz promować ogłoszenie</label>
                                </div>
                            
                            </div>
                            <div class="row mt-3">                               
                                    <h3>Pojawiaj się w ramce na -   {{ config('NAME_MASTER_WWW', 'www.kutno.net.pl') }}</h3>
                            </div>

                        
                            <div class="row">                            
                                <div class="col-3  p-0">                                       
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="master_portal" id="master_portal" value="true">
                                        <label class="form-check-label" for="master_portal">{{ config('NAME_MASTER_WWW', 'www.kutno.net.pl') }} </label>
                                    </div>
                                </div>
                                <div class="col-9">                                       
                                    <div class="form-check">
                                        <p class="text-justify">Ogłoszenie będzie się pojawiać na głównym portalu w ramce "ogłoszenia". Ogłoszenia które się tam znajdują są rotujące. Czyli zmieniają przy każdym wejściu na stronę oraz gdy użytkownik przegląda stronę. Dzięki tej opcji masz dużo większe szanse trafić do dużego grona odbiorców, nawet jeśli nie wejdą na portal ogłoszeniowy. 
                                        
                                        Koszt <b>ogłoszenia promowanego</b> to:<br> <b>{{ $price['promotion_7']->price }} zł</b> / tydzień | <b>{{ $price['promotion_14']->price }} zł</b> / 2 tygodnie | <b>{{ $price['promotion_30']->price }} zł</b> / miesiąc
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">                               
                                    <h2>Wyświetlaj się nad zwykłymi ogłoszeniami</h2>
                            </div>
                            <div class="row">                            
                                <div class="col-3  p-0">                                       
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="promotion" id="promotion" value="true">
                                        <label class="form-check-label" for="promotion">w ogłoszeniach promowanych</label>
                                    </div>
                                </div>
                                <div class="col-9">                                       
                                    <div class="form-check">
                                        <p class="text-justify">Ogłoszenie <b>promowane</b> sprawi że Twoje ogłoszenie będzie się wyświetlało na początku listy ogłoszeń 
                                        <b>między innymi promowanymi</b>. Na kolejność wyświetlania będzie wpływała data dodania ogłoszenia, te najbliżej wygaśnięcia będą na początku listy.
                                        Jednak ci co nie wykupią promocji znajdą się na dalszych stronach portalu ogłoszeniowego.</p>
                                        Koszt <b>ogłoszenia promowanego</b> to:<br> <b>18zł</b> / tydzień | <b>32zł</b> / 2 tygodnie | <b>49zł</b> / miesiąc
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">                               
                                        <h2>Wyróżnienie tło kolorem</h2>
                            </div>
                            <div class="row">                            
                                <div class="col-3 p-0">                                      
                                
                                    <div class="form-check">
                                    <!-- Group of default radios - option 1 -->
                                            <div class="custom-control custom-radio mb-1 mt-1 p-1">                                            
                                                <input type="radio" class="custom-control-input" id="highlighted_0" value="#ffffff" name="highlighted"  checked>
                                                <label class="custom-control-label" for="highlighted_0" >Bez koloru</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-1 mt-1 p-1" style="background-color: #c8cdff" >                                           
                                                <input type="radio" class="custom-control-input" id="highlighted_1" value="#c8cdff" name="highlighted"  >
                                                <label class="custom-control-label" for="highlighted_1">Kolor niebieski</label>
                                            </div>
                                            
                                            <!-- Group of default radios - option 2 -->
                                            <div class="custom-control custom-radio mb-1 mt-1 p-1" style="background-color: #ffc8dd">
                                                <input type="radio" class="custom-control-input" id="highlighted_2" value="#ffc8dd" name="highlighted" >
                                                <label class="custom-control-label" for="highlighted_2">Kolor czerwony</label>
                                            </div>
                                            
                                            <!-- Group of default radios - option 3 -->
                                            <div class="custom-control custom-radio mb-1 mt-1 p-1" style="background-color: #c8ffdf">
                                                <input type="radio" class="custom-control-input" id="highlighted_3" value="#c8ffdf" name="highlighted" >
                                                <label class="custom-control-label" for="highlighted_3">Kolor zielony</label>
                                            </div>
                                            <!-- Group of default radios - option 3 -->
                                            <div class="custom-control custom-radio mb-1 mt-1 p-1" style="background-color: #eac8ff">
                                                    <input type="radio" class="custom-control-input" id="highlighted_4" value="#eac8ff" name="highlighted" >
                                                    <label class="custom-control-label" for="highlighted_4">Kolor fioletowy</label>
                                                </div>
                                                <div class="custom-control custom-radio mb-1 mt-1 p-1" style="background-color: #fff7c8">
                                                    <input type="radio" class="custom-control-input" id="highlighted_5" value="#fff7c8" name="highlighted" >
                                                    <label class="custom-control-label" for="highlighted_5">Kolor żółty</label>
                                                </div>
                                    </div>
                                </div>
                                <div class="col-9">                                       
                                    <div class="form-check">
                                        <p class="text-justify">Ogłoszenie <b>wyróżnienie</b> jak sama nazwa wskazuje - pozwoli Ci <strong>wyróżnić się z tłumu!</strong> nieważne czy będziesz na liście promowanych, czy rekomendowanych, twoje ogłoszenie będzie miało wybrane przez Ciebie tło.</p>
                                        Koszt <b>wyróżnienia kolorem</b> to <b>{{ $price['highlighted_7']->price }} zł</b> / tydzień | <b>{{ $price['highlighted_14']->price }} zł</b> / 2 tygodnie | <b>{{ $price['highlighted_30']->price }} zł</b> / miesiąc
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">                               
                                    <h3>Wyróżniający napis</h3>
                            </div>
                            <div class="row mb-3">                                
                                <div class="col-3 p-0">                                       
                                    <div class="md-form">
                                    <select class="browser-default custom-select mb-4" name="inscription" id="inscription" >                                            
                                            <option value="none" selected="selected">Bez rekomendacji</option>    
                                            <option value="Promocja!">Promocja</option>
                                            <option value="Bestseller">Bestseller</option>
                                            <option value="Wyprzedaż">wyprzedaż</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-9">                                       
                                    <div class="form-check">
                                        <p class="text-justify"><strong>Ogłoszenie promowane</strong> to najmocniejsza opcja wyróżnienia się z tłumu. Dzięki temu Twoje ogłoszenie pojawi się  Zarówno na portalu ogłoszeniowym jak i na KCI.
                                        To ogłoszenie będzie się wyświetlać losowo wśród rotujących ogłoszeń na pierwszej stronie portalu ogłoszeniowego,
                                        pojawi się również na portalu KCI w okienku ogłoszenia drobne.
                                        Po za tym przy każdym ogłoszeniu pojawi sie jeden wybrany przez ciebie tag: 
                                        <span class="badge badge-danger mb-2">Promocja!</span>
                                        <span class="badge badge-secondary mb-2">Bestseller</span>
                                        <span class="badge badge-success mb-2">Wyprzedaż!</span></p>
                                        Koszt <b>ogłoszenia rekomendowanego</b> to: <br><b>{{ $price['inscription_7']->price }}zł</b> / tydzień | <b>{{ $price['inscription_14']->price }}zł</b> / 2 tygodnie | <b>{{ $price['inscription_30']->price }}zł</b> / miesiąc
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">                               
                                <h3 class="text-primary">Zleć publikację w gazecie</h3> 
                                <div class="col-3 p-0"></div>
                                    <div class="col-9 p-0"><strong>{{ $price['newspaper_advertisement']->price }}zł za 1 ogłoszenie do 300 znaków <br>
                                        <i><span class="text-danger">(publikujemy w gazecie zawartość leadu)</span></i></strong>
                                    
                                
                            </div>

                            <div id="opcje_publikacji_w_gazecie" class="row mb-5">
                                    <div class="col-3 p-0"></div>
                                    <div class="col-9 p-0"><strong>DOSTĘPNE WYDANIA</strong>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="wydanie_gazety">
                                                <label class="form-check-label" for="wydanie_gazety"><span class="text-success"> [2021-12-01]</span> <strong>Magazyn KCI</strong> - wydanie standardowe</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="wydanie_gazety">
                                                <label class="form-check-label" for="wydanie_gazety"><span class="text-success"> [2021-12-01]</span> <strong>Magazyn KCI</strong> - wydanie standardowe</label>
                                            </div>
                                    </div>
                            </div>


                            <div class="row">  
                                <div class="col-9 mb-3">
                                    <h3> <div id="suma"> Suma promocji: <strong>0.00</strong> pln</div> </h3>
                                </div>


                            

                            <div class="mb-3">
                                <div class="offset-lg-9 offset-sm-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Dalej') }}
                                    </button>
                                </div>
                            </div>
                    </form>  
            </div> </div> </div>
    

@endsection

@section('java_script')

<script type="text/javascript">

var highligted="#ffffff";
var master_portal = false;
var promotion = false;

$( document ).ready(function() {
    
    const date = new Date();

function summary()
{

    var date_end_promotion=document.getElementById('date_end_promotion').value;
    var inscription = document.getElementById('inscription').value;    

    if (inscription=="none") 
        inscription = false; 
    else 
        inscription = true; 

    if (highligted=="#ffffff") 
        highlighted = false; 
    else 
        highlighted = true;

    promotion_price = 0;    
    inscription_price = 0;
    master_portal_price = 0;    
    highlighted_price = 0;

    switch (date_end_promotion)
    {
        
        case '7':
            if (master_portal)  master_portal_price = {{ $price['master_portal_7']->price }};
            if (promotion)      promotion_price = {{ $price['promotion_7']->price }};
            if (highlighted)    highlighted_price = {{ $price['highlighted_7']->price }};
            if (inscription)    inscription_price = {{ $price['inscription_7']->price }};
        break;
        case '14':
            if (master_portal)  master_portal_price = {{ $price['master_portal_14']->price }}
            if (promotion)      promotion_price = {{ $price['promotion_14']->price }};
            if (highlighted)    highlighted_price = {{ $price['highlighted_14']->price }};
            if (inscription)    inscription_price = {{ $price['inscription_7']->price }};
        break;
        case '30':
            if (master_portal)  master_portal_price = {{ $price['master_portal_30']->price }}
            if (promotion)      promotion_price = {{ $price['promotion_30']->price }};
            if (highlighted)    highlighted_price = {{ $price['highlighted_30']->price }};
            if (inscription)    inscription_price = {{ $price['inscription_7']->price }};
            
        break;
    }

    var summary = inscription_price+master_portal_price+highlighted_price+promotion_price;
    console.log('znaczniki - inscription: '+ inscription + ', master_portal: ' + master_portal + ', highlighted: ' + highlighted + ', promotion '+ promotion + ' :suma ' + summary + ' + na ile czasu: '+date_end_promotion);
    console.log('ceny - inscription: '+ inscription_price + ', master_portal: ' + master_portal_price + ', highlighted: ' + highlighted_price + ', promotion '+ promotion_price + ' suma ' + summary + ' + na ile czasu: '+date_end_promotion);

    document.getElementById('suma').innerHTML = ' Suma promocji: <strong> ' + summary + '</strong> pln'
}



    $(document).on('change', '#date_end_promotion', function (e) {    
        summary();
    });     

    $(document).on('change', '#inscription', function (e) {    
        summary();
    }); 

    $(document).on('change', '#master_portal', function (e) {    
        
        if($(this).prop("checked") == true){
                console.log(" promo is checked.");
                master_portal = true;
            }
            else if($(this).prop("checked") == false){
                console.log(" promo is unchecked.");
                master_portal = false;
            }
        summary();
    });     

    $(document).on('change', '#promotion', function (e) {    
        
        if($(this).prop("checked") == true){
                console.log(" promotion is checked.");
                promotion = true;
            }
            else if($(this).prop("checked") == false){
                console.log(" promotion pis unchecked.");
                promotion = false;
            }
        summary();
    });     



    var radius = document.formPromotion.highlighted;
    var prev = null;
    for (var i = 0; i < radius.length; i++) {
        radius[i].addEventListener('change', function() {
            (prev) ? console.log(prev.value): null;
            if (this !== prev) {
                prev = this;
            }
            highligted = this.value;
            summary();
        });

}
var promotion_object = document.formPromotion.promotion;
    var master_portal_object = document.formPromotion.master_portal;
  
});
</script>

@endsection
