@extends('layouts.app')

@section('content')
    <div class="page-content mt-3">
        <div class="row">
            <div class="col-12 col-lg-4 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                                <h6 class="mb-0 font-22 sidebar_topic ">Ogłoszenia drobne</h6>
                        </div>

                            @foreach ($categories as $category)
                            <a href="#submenu-{{ $category->id }}"
                                data-bs-toggle="collapse"
                                aria-expanded="false"
                                class="list-group-item list-group-item-action {{ $activeCategory->id == $category->id ? 'active' : '' }}">
                                {{ $category->name }}
                            </a>
                            <div class="collapse {{ $activeCategory->id == $category->id ? 'show' : '' }}" id="submenu-{{ $category->id }}">
                                <div class="list-group">
                                    @foreach ($category->SmallAdsSubCategories as $subcategory)
                                        <div class="row mb-1">
                                            <div class="col-2">
                                                <i>ikona</i>
                                            </div>
                                            <div class="col">
                                                <p class="mb-2 {{ $activeSubCategory->id == $subcategory->id ? 'submenu-bg-active' : '' }}">
                                                    <a href="{{ route('page.small_ads.subCategory', [$category, $subcategory]) }}"
                                                    class="list-group-item-action {{ $activeSubCategory->id == $subcategory->id ? 'active' : '' }}">
                                                        {{ $subcategory->name }}
                                                    </a>
                                                    <strong class="float-end">445</strong>
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="row">
                    <div class="card radius-10 w-100 ">
                        <div class="card-body ">
                            <div class="row mb-0 font-22 sidebar_topic">
                                    {{  $activeCategory->name }} \  {{  $activeSubCategory->name }}
                            </div>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card radius-10 w-100 ">
                        <div class="card-body ">
                            <div class="row mb-0 font-18 sidebar_topic text-muted">
                          PROMOWANE
                            </div>
                            </div>
                    </div>
                    @foreach ($contents_top as $small_ads)
                        <div class="card radius-10 w-100 {{ $small_ads->highlighted }}">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="thumbnail">
                                            <a class="image" href="{{ route('page.small_ads.show',['SmallAdsContent'=>$small_ads->id]) }}">
                                                @php
                                                $filename = $small_ads->photos->first()->name ?? 'default';
                                                $path = $small_ads->image_path.'/' . $small_ads->id . '/' . $filename . 'd.webp';

                                                if(file_exists($path)) {
                                                        $defaultImage = $path; // tutaj używamy ścieżki względnej, ponieważ asset() generuje URL na podstawie ścieżki publicznej
                                                    } else {
                                                        $defaultImage = '/resources/brak_zdjecia_350x350.webp'; // podobnie, ścieżka względna
                                                    }
                                                   // $defaultImage = $path; // tutaj używamy ścieżki względnej, ponieważ asset() generuje URL na podstawie ścieżki publicznej
                                                @endphp

                                                <img src="{{ asset($defaultImage) }}" alt="{{ $small_ads->name }}" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        @if ($small_ads->inscription === 'Promocja!') <span class="badge bg-danger p-2">{{ $small_ads->inscription }}<span data-role="remove"></span></span> @endif
                                        @if ($small_ads->inscription === 'Wyprzedaż') <span class="badge bg-success p-2">{{ $small_ads->inscription }}<span data-role="remove"></span></span> @endif
                                        @if ($small_ads->inscription === 'Bestseller') <span class="badge bg-primary p-2">{{ $small_ads->inscription }}<span data-role="remove"></span></span> @endif
                                        @if ($small_ads->inscription === 'Przecena') <span class="badge bg-gradient-lush p-2">{{ $small_ads->inscription }}<span data-role="remove"></span></span> @endif

                                        <div class="mb-0 float-end fw-bold">{{ $small_ads->date_end }}</div>
                                        <div class="mb-0 fw-bold"><h3>{{ $small_ads->name }}</h3></div>
                                        <div class="mb-0">{{ $small_ads->lead }}</div>
                                        <a class="btn btn-primary" href="{{ route('page.small_ads.show',['SmallAdsContent'=>$small_ads->id]) }}">Zobacz więcej</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="card radius-10 w-100 ">
                        <div class="card-body ">
                            <div class="row mb-0 font-18 sidebar_topic text-muted">
                                POZOSTAŁE OGŁOSZENIA
                                  </div>
                            </div>
                    </div>
                    @foreach ($contents as $small_ads)
                    <div class="card radius-10 w-100 {{ $small_ads->highlighted }}">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-2">
                                    <div class="thumbnail">
                                        <a class="image" href="{{ route('page.small_ads.show',['SmallAdsContent'=>$small_ads->id]) }}">
                                            @php
                                            $filename = $small_ads->photos->first()->name ?? 'default';
                                            $path = $small_ads->image_path.'/' . $small_ads->id . '/' . $filename . 'd.webp';

                                            if(file_exists($path)) {
                                                    $defaultImage = $path; // tutaj używamy ścieżki względnej, ponieważ asset() generuje URL na podstawie ścieżki publicznej
                                                } else {
                                                    $defaultImage = '/resources/brak_zdjecia_350x350.webp'; // podobnie, ścieżka względna
                                                }
                                               // $defaultImage = $path; // tutaj używamy ścieżki względnej, ponieważ asset() generuje URL na podstawie ścieżki publicznej
                                            @endphp

                                            <img src="{{ asset($defaultImage) }}" alt="{{ $small_ads->name }}" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    @if ($small_ads->inscription === 'Promocja!') <span class="badge bg-danger p-2">{{ $small_ads->inscription }}<span data-role="remove"></span></span> @endif
                                    @if ($small_ads->inscription === 'Wyprzedaż') <span class="badge bg-success p-2">{{ $small_ads->inscription }}<span data-role="remove"></span></span> @endif
                                    @if ($small_ads->inscription === 'Bestseller') <span class="badge bg-primary p-2">{{ $small_ads->inscription }}<span data-role="remove"></span></span> @endif
                                    @if ($small_ads->inscription === 'Przecena') <span class="badge bg-gradient-lush p-2">{{ $small_ads->inscription }}<span data-role="remove"></span></span> @endif

                                    <div class="mb-0 float-end fw-bold">{{ $small_ads->date_end }}</div>
                                    <div class="mb-0 fw-bold"><h3>{{ $small_ads->name }}</h3></div>
                                    <div class="mb-0">{{ $small_ads->lead }}</div>
                                    <button class="btn btn-primary" >Zobacz więcej</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--end wrapper-->
@endsection

@section('og_tags')
@endsection

@section('meta')
@endsection

@section('script')
@endsection
