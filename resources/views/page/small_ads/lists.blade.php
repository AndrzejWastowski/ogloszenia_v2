@extends('layouts.app')

@section('content')
    <div class="page-content mt-3">

        <div class="row">
            <div class="col-12 col-lg-4 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h6 class="mb-0">Kategorie</h6>
                            </div>
                            <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
                            </div>
                        </div>

                        @foreach ($categories as $category)
                            <a href="#submenu-{{ $category->id }}" data-bs-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bg-light">
                                {{ $category->name }}
                            </a>
                            <div class="collapse" id="submenu-{{ $category->id }}">
                                <div class="list-group">

                                    @foreach ($category->SmallAdsSubCategories as $subcategory)
                                        <div class="row mb-1">
                                            <div class="col-2">
                                                <i>ikona</i>
                                            </div>
                                            <div class="col">
                                                <p class="mb-2"><a href="#"
                                                        class="list-group-item-action">{{ $subcategory->name }}</a>
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
        </div>
        <div class="col-12 col-lg-8 d-flex">
            <div class="card radius-10 w-100">
                <div class="card-body">
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <!--end wrapper-->
@endsection


@section('script')
@endsection
