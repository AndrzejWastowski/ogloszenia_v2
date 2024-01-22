@extends('layouts.app')

@section('content')
    <div class="page-content mt-3">

        <div class="row">
            <div class="col-12 col-lg-4 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                                <h6 class="mb-0 font-22 sidebar_topic ">Ogłoszenia drobne</h6>
                            <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
                            </div>
                        </div>


                            @foreach ($categories as $category)
                            <a href="#submenu-{{ $category->id }}" data-bs-toggle="collapse"
                                aria-expanded="false"
                                class="list-group-item list-group-item-action  {{ $activeCategory->id == $category->id ? 'active' : '' }}">
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
            <div class="col-12 col-lg-8 d-flex">
                <div class="row">
                    @foreach ($content as $small_ads)
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="row">
                                    {{ $small_ads->name }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @foreach ($content as $small_ads)
                        <div class="card radius-10 w-100">
                            <div class="card-body">
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


@section('script')
@endsection
