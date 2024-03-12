@extends('layouts.app')
@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-12 col-lg-8">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a class="link" href="{{ route('page.small_ads.lists') }}"><i class="bx bx-home-alt"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page"><a class="link" href="{{ route('page.small_ads.lists') }}">Dodaj ogłoszenie drobne</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><strong>Promowanie</strong></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->
            </div>
        </div>
        <div class="row">
            @include('page.user.sidebar')
        </div>
        <div class="col-12 col-lg-9 d-flex">
            <div class="card">
                <div class="card p-3">
                    <div class="row justify-content-center">
                        <h3><strong>Ogłoszenia Drobne - wybór promocji</strong></h3>
                            <div class="bs-stepper">
                            <div class="bs-stepper-header" role="tablist">
                                <!-- your steps here -->
                                <div class="step" data-target="#tresc-part">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="tresc-part" id="tresc-part-trigger">
                                        <span class="bs-stepper-circle">1</span>
                                        <span class="bs-stepper-label"> Treść</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#foto-part">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="foto-part" id="foto-part-trigger">
                                        <span class="bs-stepper-circle">2</span>
                                        <span class="bs-stepper-label">Zdjęcia</span>
                                    </button>
                                </div>
                                        <div class="line"></div>
                                        <div class="step active" data-target="#promocja-part">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="promocja-part"
                                                id="promocja-part-trigger">
                                                <span class="bs-stepper-circle active">3</span>
                                                <span class="bs-stepper-label active">Promowanie</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#podsumowanie-part">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="podsumowanie-part"
                                                id="podsumowanie-part-trigger">
                                                <span class="bs-stepper-circle">4</span>
                                                <span class="bs-stepper-label">Podsumowanie</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                <div class="row  mt-3">
                    <form action="{{ route('page.user.small_ads.promotion_send') }}"  method="POST" enctype="multipart/form-data" role="form" name="formPromotion">
                        @csrf
                        <input type="hidden" id='id' name='id' value="{{ $content->id }}" >
                        <input type="hidden" id='date_start' name='date_start' value="{{ $content->date_start }}" >

                        <h4><strong>Czas trwania promocji</strong></h4>
                        <div class="row">
                            <div class="col-3">
                                <select class="browser-default custom-select mb-4" id="date_end" name="date_end" >
                                    <option value="7" selected="">Tydzien</option>
                                    <option value="14">Dwa tygodnie</option>
                                    <option value="30">Miesiąc</option>
                                </select>
                            </div>
                            <div class="col-9">
                                <div class="form-check">
                                    <p class="text-justify">
                                    Wybierz przez ile czasu chcesz promować ogłoszenie
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <h4><strong>Wyświetlaj przed zwykłymi ogłoszeniami</strong></h4>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="promoted" id="promoted" value="true">
                                    <label class="form-check-label" for="promoted">w ogłoszeniach promowanych</label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="form-check">
                                    <p class="text-justify">Ogłoszenie <b>promowane</b> sprawi że Twoje ogłoszenie będzie się wyświetlało na początku listy ogłoszeń 
                                    <b>między innymi promowanymi</b>. Na kolejność wyświetlania będzie wpływała data dodania ogłoszenia, te najbliżej wygaśnięcia będą na początku listy.
                                    Jednak ci co nie wykupią promocji znajdą się na dalszych stronach portalu ogłoszeniowego.</p>
                                    Koszt <b>ogłoszenia promowanego</b> to:<br> <b>{{ $price['promoted_7']['price']/100 }}zł</b> / tydzień | <b>{{ $price['promoted_14']['price']/100 }}zł</b> / 2 tygodnie | <b>{{ $price['promoted_30']['price']/100 }}zł</b> / miesiąc
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <h4><strong>Wyróżnienie tło kolorem</strong></h4>
                        </div>
                        <div class="row">
                            <div class="col-3 p-0">
                                <div class="form-check">
                                <!-- Group of default radios - option 1 -->
                                @foreach($highlighteds as $highlighted)

                                    <div class="custom-control custom-radio mb-1 mt-1 p-1" style="background-color: {{ $highlighted->value }}">
                                        <input type="radio" class="custom-control-input"  id="highlighted_{{ $loop->iteration }}" value="{{ $highlighted->value }}" name="highlighted"  {{ $loop->first ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="highlighted_0" >Kolor {{ $highlighted->name }}</label>
                                    </div>
                                @endforeach

                                </div>
                            </div>
                            <div class="col-9">
                                <div class="form-check">
                                    <p class="text-justify">Ogłoszenie <b>wyróżnienie</b> jak sama nazwa wskazuje - pozwoli Ci <strong>wyróżnić się z tłumu!</strong> nieważne czy będziesz na liście promowanych, czy rekomendowanych, twoje ogłoszenie będzie miało wybrane przez Ciebie tło.</p>
                                    Koszt <b>wyróżnienia kolorem</b> to <b>{{ $price['highlighted_7']['price']/100 }} zł </b> / tydzień | <b>{{ $price['highlighted_14']['price']/100 }} zł</b> / 2 tygodnie | <b>{{ $price['highlighted_30']['price']/100 }} zł</b> / miesiąc
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <h4><strong>Wyróżniający napis</strong></h4>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3">
                                <select class="browser-default custom-select mb-4" name="inscription" id="inscription" >
                                    @foreach($inscriptions as $inscription)
                                        <option value="{{  $inscription->value }}">{{ $inscription->value }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-9">
                                <div class="form-check">
                                    <p class="text-justify">Ogłoszenie <b>wyróżnienie</b> jak sama nazwa wskazuje - pozwoli Ci <strong>wyróżnić się z tłumu!</strong> nieważne czy będziesz na liście promowanych, czy rekomendowanych, twoje ogłoszenie będzie miało wybrane przez Ciebie tło.</p>
                                    Koszt <b>wyróżnienia kolorem</b> to <b>{{ $price['highlighted_7']['price']/100 }} zł </b> / tydzień | <b>{{ $price['highlighted_14']['price']/100 }} zł</b> / 2 tygodnie | <b>{{ $price['highlighted_30']['price']/100 }} zł</b> / miesiąc
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 pt-3 pb-3">
                            <div class="col-10 ">
                                <h4><strong><div id="suma"> Suma promocji: <strong>0.00</strong> pln</div></strong></h4>
                            </div>
                            <div class="col-2">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Dalej') }}
                                    </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
<script>
  window.price = @json($price);
</script>
  @vite(['resources/js/small_ads/promotion_form.js'])
@endsection
