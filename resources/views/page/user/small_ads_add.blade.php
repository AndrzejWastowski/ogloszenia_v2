@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
         <div class="page-content mt-3">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!--breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a class="link" href="{{ route('page.small_ads.lists') }}">
                                            <i class="bx bx-home-alt"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page"><a class="link"
                                            href="{{ route('page.small_ads.lists') }}">Dodaj ogłoszenie drobne</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><strong> Treść</strong></li>
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
                <div class="card p-3">
                    <div class="row justify-content-center">

                        <h3><strong>Ogłoszenia Drobne - Dodaj Treść</strong></h3>



                        <div class="bs-stepper">
                            <div class="bs-stepper-header" role="tablist">
                            <!-- your steps here -->
                                <div class="step active" data-target="#tresc-part">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="tresc-part" id="tresc-part-trigger">
                                        <span class="bs-stepper-circle">1</span>
                                        <span class="bs-stepper-label active"> Treść</span>
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
                                <div class="step" data-target="#promocja-part">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="promocja-part" id="promocja-part-trigger">
                                        <span class="bs-stepper-circle">3</span>
                                        <span class="bs-stepper-label">Promowanie</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#podsumowanie-part">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="podsumowanie-part" id="podsumowanie-part-trigger">
                                        <span class="bs-stepper-circle">4</span>
                                        <span class="bs-stepper-label">Podsumowanie</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <form id="form" name="form" class="row g-3" action="{{ route('page.user.small_ads_content_post') }}"  method="POST" role="form" >
                            <input type="hidden" name="id" value="{{ $content->id==null ? 0  : $content->id  }}">
                            @csrf
                            @if ($errors->any())
                                <label for="category"><strong>Uwaga - błędy w formularzu</strong></label>
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li> {!! $error !!} </li>
                                        @endforeach
                                    </ul>
                                Jeśli nie wiesz jak dodać ogłoszenie skorzystaj z <a href="{{ route('help') }}"><strong>pomocy<strong></a>
                            @endif
                                <strong>{{ session('komunikat') }}</strong> 

                                <div class="col-12">
                                    <label class="category"><strong>Rodzaj ogłoszenia:</strong></label>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="sprzedam">Sprzedam</label>
                                    <input type="radio" class="form-check-input" id="sprzedam" name="small_ads_classified_enum" value="sprzedam" checked>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="kupie">Kupię</label>
                                    <input type="radio" class="form-check-input" id="kupie" name="small_ads_classified_enum" value="kupię" >
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="oddam">Oddam</label>
                                    <input type="radio" class="form-check-input" id="oddam" name="small_ads_classified_enum" value="oddam" >
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="zamienie">Zamienię</label>
                                    <input type="radio" class="form-check-input" id="zamienie" name="small_ads_classified_enum" value="zamienie" >
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="wypozycze">Wypożyczę</label>
                                    <input type="radio" class="form-check-input" id="wypozycze" name="small_ads_classified_enum" value="wypozycze" >
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" for="small_ads_categories_id"><strong>Kategoria</strong></label>
                                    <select class="form-select" name="small_ads_categories_id" id="small_ads_categories_id" required>
                                        <option value="" diabled selected="">Wybierz kategorię</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{ ($category->id == $content->small_ads_categories_id ? 'selected' : '') }} >{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="small_ads_sub_categories_id"><strong>Podkategoria</strong></label>
                                    <select class="form-select" name="small_ads_sub_categories_id" id="small_ads_sub_categories_id" required>
                                        <option value="" diabled selected="">Wybierz najpierw kategorię</option>
                                        @foreach($subcategories as $subcategory)
                                        <option value="{{$subcategory->id}}" {{ ($subcategory->id == $content->small_ads_sub_categories_id ? 'selected' : '') }} >{{$subcategory->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                                
                                <div class="col-md-6">
                                    <label class="form-label"  for="date_start"><strong>Start ogłoszenia</strong></label>
                                    <input placeholder="Data publikacji" type="text" id="date_start" name="date_start" value='{{ $content->date_start ?? ''}}' class="form-control datepicker" data-provide="datepicker" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"  for="date_end"><strong>Na ile czasu</strong></label>
                                        <select class="form-select" id="date_end" name="date_end" >
                                            <option value="7" selected="">Tydzien</option>
                                            <option value="14">Dwa tygodnie</option>
                                            <option value="30">Miesiąc</option>
                                        </select>
                                </div>

                                <div class="col-md-12 mb-4">
                                        <label class="form-label" for="name"><strong>Nazwa</strong> <small>(min. 15 znaków max. 250)*</small></label>
                                        <input type="text" id="name" name="name" class="form-control rounded " minlength=15 maxlength=250 placeholder="Nazwa towaru / produktu" value="{{ $content->name ?? '' }}" required >
                                </div>

                                <div class="col-md-12 mb-4">
                                    <label class="form-label"  for="lead"><strong>Lid - krótki opis wyświetlany przy ogłoszeniu </strong> <small>(min. 30 znaków max. 250)*</label><br>
                                    <textarea class="form-control rounded-2 p-2" id="lead" name="lead" rows="3"  minlength=30 maxlength=250 placeholder="Opis skrócony (od 10 do 250znaków)" required>{{ $content->lead ?? '' }}</textarea>                
                                </div>

                                <div class="col-md-12 mb-4">
                                    <label class="form-label"  for="description"><strong>Treść - pełny opis wyświetlany w  rozwinięciu ogłoszenia</strong> <small>(min. 35 znaków max. 2500)* </label><br>
                                    <textarea class="form-control rounded-2 p-2" id="description" name="description" rows="10" placeholder="Treść ogłoszenia (od 30 do 3000 znaków)" required>{{ $content->description ?? ''}}</textarea>
                                </div>
                    
                                <div class="col-md-3 mb-4">
                                    <label class="form-label" for="price"><strong>Cena</strong></label>
                                    <input type="text" id="price" name="price" class="form-control" placeholder="Cena" value="{{ $content->price ?? ''}}" required>
                                </div>
                                
                                <div class="col-md-3 mb-4">
                                    <label class="form-label" for="items"><strong>ile sztuk</strong></label>
                                    <input type="text" id="items" name="items" class="form-control" placeholder="sztuk" value="{{ $content->items ?? '' }}" required>
                                </div>   
                                 <div class="col-md-6">
                                    <label for="invoice"><strong>Rodzaj wystawianego rachunku</strong></label>
                                    <select class="form-select" id="invoices" name="invoice" required> 
                                        <option value="0" diabled selected="">Wybierz rodzaj rachunku</option>
                                        <option value="Nie wystawiam faktury" >Nie wystawiam faktury</option>
                                        <option value="Faktura VAT">Faktura z VAT</option>
                                        <option value="Faktura Vat-marża">Faktura Vat-marża</option>
                                        <option value="Faktura bez VAT">Faktura bez VAT</option>                              
                                    </select>                                 
                                </div>
                                                
                                <div class="col-md-12">                 
                                    <label class=""><strong>Rodzaj oferty</strong></label>                
                                </div>
                                <div class="col-md-4 mb-4">                
                                    <input type="radio" class="form-check-input" id="conditionNew" name="condition" value="nowe" checked>
                                    <label class="form-check-label" for="condition_new">Produkt nowy</label>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <input type="radio" class="form-check-input" id="conditionUsed" name="condition" value="używane" >
                                    <label class="form-check-label" for="conditionUsed">Produkt używany</label>
                                </div>
                                
                                <div class="col-md-6">          
                                    <label for="contact_phone" value=""><strong>Telefon kontaktowy</strong></label>
                                    <input name="contact_phone" class="form-control"  id="contact_phone"  value="{{ $user->phone ?? '' }}">
                                </div>
                                
                                <div class="col-md-6">                 
                                    <label for="contact_email" ><strong>Adres e-mail</strong></label><br>
                                    <input name="contact_email" class="form-control"  id="contact_email" value="{{ $user->email ?? '' }}">
                                </div>
                                <div class="mb-3">
                                    <div class="offset-lg-8 offset-sm-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Dalej') }}
                                        </button>
                                    </div>
                                </div>
                    
                    </div> 

                </div>
            </div>
        @endsection


        @section('script')
            <script></script>
        @endsection
