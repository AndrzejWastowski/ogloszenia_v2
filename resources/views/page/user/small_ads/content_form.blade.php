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

                        <form id="form" name="form" class="row g-3" action="{{ route('page.user.small_ads.content_post') }}"  method="POST" role="form" >
                            <input type="hidden" name="id" value="{{ $content->id===null ? 0  : $content->id  }}">
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
                                                <option value={{ $category->id }} {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="small_ads_sub_categories_id"><strong>Podkategoria</strong></label>
                                    <select class="form-select" name="small_ads_sub_categories_id" id="small_ads_sub_categories_id" required>
                                        <option value="" diabled selected="">Wybierz najpierw kategorię</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"  for="date_start"><strong>Start ogłoszenia</strong></label>
                                    <input placeholder="Data publikacji" id="date_start" name="date_start" class="form-control" type="text"  value="{{ $content->date_start ?? ''}}" required>

                                <div class="col-md-6">
                                    <label class="form-label"  for="date_end"><strong>Na ile czasu</strong></label>
                                        <select class="form-select" id="date_end" name="date_end" >
                                            <option value=7  {{ old('date_end') == '7' || (isset($content) && $content->date_end == '7') ? 'checked' : '' }}>Tydzien</option>
                                            <option value=14 {{ old('date_end') == '14' || (isset($content) && $content->date_end == '14') ? 'checked' : '' }}>Dwa tygodnie</option>
                                            <option value=30 {{ old('date_end') == '30' || (isset($content) && $content->date_end == '30') ? 'checked' : '' }}>Miesiąc</option>
                                        </select>
                                </div>

                                <div class="col-md-12 mb-4">
                                    <label class="form-label" for="name"><strong>Nazwa</strong> <small>(min. 10 znaków max. 250)*</small></label>
                                    <input type="text" id="name" name="name" class="form-control rounded " minlength="10" maxlength="250" placeholder="Nazwa towaru / produktu" value="{{ old('name') ?? $content->name ?? '' }}" required >
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label class="form-label"  for="lead"><strong>Lid - krótki opis wyświetlany przy ogłoszeniu </strong> <small>(min. 30 znaków max. 250)*</small></label>
                                    <textarea class="form-control rounded-2 p-2" id="lead" name="lead" rows="3"  minlength="30" maxlength="250" placeholder="Opis skrócony (od 10 do 250znaków)" required>{{ old('lead') ?? $content->lead ?? '' }}</textarea>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label class="form-label"  for="description"><strong>Treść - pełny opis wyświetlany w  rozwinięciu ogłoszenia</strong> <small>(min. 35 znaków max. 2500)* </small></label>
                                    <textarea class="form-control rounded-2 p-2" id="description" name="description" rows="10" minlength="30" maxlength="2500"  placeholder="Treść ogłoszenia (od 30 do 3000 znaków)" required>{{ old('description') ?? $content->description ?? '' }} </textarea>
                                </div>

                                <div class="col-md-3 mb-4">
                                    <label class="form-label" for="price"><strong>Cena</strong></label>
                                    <input type="text" id="price" name="price" class="form-control" placeholder="Cena" value="{{ old('price') ?? $content->price ?? '' }}" required>
                                </div>

                                <div class="col-md-3 mb-4">
                                    <label class="form-label" for="items"><strong>Ile sztuk</strong></label>
                                    <input type="text" id="items" name="items" class="form-control" placeholder="sztuk" value="{{ old('items') ?? $content->items ?? '' }}" required>
                                </div>
                                 <div class="col-md-6 mb-4">
                                    <label for="invoices"><strong>Rodzaj wystawianego rachunku</strong></label>
                                    <select class="form-select mt-2" id="invoices" name="invoice" required>
                                        <option value="0" {{ old('invoice') == '0' || (isset($content) && $content->invoice == '0') ? 'selected' : '' }}>Wybierz rodzaj rachunku</option>
                                        <option value="Nie wystawiam faktury" {{ old('invoice') == 'Nie wystawiam faktury' || (isset($content) && $content->invoice == 'Nie wystawiam faktury') ? 'selected' : '' }}>Nie wystawiam faktury</option>
                                        <option value="Faktura VAT" {{ old('invoice') == 'Faktura VAT' || (isset($content) && $content->invoice == 'Faktura VAT') ? 'selected' : '' }}>Faktura z VAT</option>
                                        <option value="Faktura Vat-marża" {{ old('invoice') == 'Faktura Vat-marża' || (isset($content) && $content->invoice == 'Faktura Vat-marża') ? 'selected' : '' }}>Faktura Vat-marża</option>
                                        <option value="Faktura bez VAT" {{ old('invoice') == 'Faktura bez VAT' || (isset($content) && $content->invoice == 'Faktura bez VAT') ? 'selected' : '' }}>Faktura bez VAT</option>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <label class=""><strong>Rodzaj oferty</strong></label>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <input type="radio" class="form-check-input" id="conditionNew" name="condition" value="nowe" {{ old('condition') == '0' || (isset($content) && $content->condition == 'nowe') ? 'checked' : '' }} >
                                    <label class="form-check-label" for="conditionNew" >Produkt nowy</label>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <input type="radio" class="form-check-input" id="conditionUsed" name="condition" value="używane" {{ old('condition') == '0' || (isset($content) && $content->condition == 'używane') ? 'checked' : '' }} >
                                    <label class="form-check-label" for="conditionUsed">Produkt używany</label>
                                </div>

                                <div class="col-md-6">
                                    <label for="contact_phone" value=""><strong>Telefon kontaktowy</strong></label>
                                    <input name="contact_phone" class="form-control"  id="contact_phone"  value="{{ old('contact_phone') ?? $content->contact_phone ?? '' }} ">
                                </div>

                                <div class="col-md-6">
                                    <label for="contact_email" ><strong>Adres e-mail</strong></label><br>
                                    <input name="contact_email" class="form-control"  id="contact_email" value="{{ old('contact_email') ?? $content->contact_email ?? '' }} ">
                                </div>
                                <div class="mb-3">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Dalej') }}
                                        </button>
                                    </div>
                                </div>
                        </form>
                    </div>

                </div>
            </div>
        @endsection
        @section('script')   @vite(['resources/js/small_ads_script.js']) @endsection
