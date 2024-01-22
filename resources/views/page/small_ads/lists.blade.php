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

                                                $path = $small_ads->imagePath.'/' . $small_ads->id . '/gallery/' . $filename . 'd.webp';

                                                public_path($path);


                                                if(file_exists(public_path($path))) {
                                                        $defaultImage = $path; // tutaj używamy ścieżki względnej, ponieważ asset() generuje URL na podstawie ścieżki publicznej
                                                    } else {
                                                        $defaultImage = '/resources/brak_zdjecia.webp'; // podobnie, ścieżka względna
                                                    }
                                                @endphp

                                                <img src="{{ asset($defaultImage) }}" alt="{{ $small_ads->name }}" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        {{ $small_ads->name }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="card radius-10 w-100 ">
                        <div class="card-body ">
                            <div class="row mb-0 font-18 sidebar_topic text-muted">
                                OGŁOSZENIA
                                  </div>
                            </div>
                    </div>
                    @foreach ($contents as $small_ads)
                        <div class="card radius-10 w-100 {{ $small_ads->highlighted }}">
                            <div class="card-body ">
                                <div class="row">
                                    {{ $small_ads->name }}
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
