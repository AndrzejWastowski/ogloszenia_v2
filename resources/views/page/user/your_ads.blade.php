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
                                <li class="breadcrumb-item"><a class="link" href="{{ route('page.small_ads.lists') }}">
                                        <i class="bx bx-home-alt"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page"><a class="link"
                                        href="{{ route('page.small_ads.lists') }}">Ogłoszenia użytkownika</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><strong>{{ $user->name }}</strong>
                                </li>
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
                <div class="row g-0">
                    <div class="col-md-4 border-end">
                        <h4 class="card-title">{{ $user->name }}</h4>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <h4 class="card-title">{{ $user->name }}</h4>
                            <h6>Reputacja</h6>
                            <div class="mb-3">
                            </div>
                            <div class="d-flex gap-3 mt-3">
                                <a href="#" class="btn btn-primary">Obserwuj</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <h4 class="card-title">{{ $user->name }}</h4>
                            kolumna dwa
                        </div>
                    </div>
                    <hr />
                    <div class="card-body">
                        tu lista ogłoszeń
                    </div>

                </div>


                <h6 class="text-uppercase mb-0 "><strong>Inne produkty z tej kategorii</strong></h6>
                <hr />
                <div class="row row-cols-1 row-cols-lg-3">
                    <div class="col">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="assets/images/products/16.png" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-title">Light Grey Headphone</h6>
                                        <div class="cursor-pointer my-2">
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-secondary"></i>
                                        </div>
                                        <div class="clearfix">
                                            <p class="mb-0 float-start fw-bold"><span
                                                    class="me-2 text-decoration-line-through text-secondary">$240</span><span>$199</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="assets/images/products/17.png" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-title">Black Cover iPhone 8</h6>
                                        <div class="cursor-pointer my-2">
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                        </div>
                                        <div class="clearfix">
                                            <p class="mb-0 float-start fw-bold"><span
                                                    class="me-2 text-decoration-line-through text-secondary">$179</span><span>$110</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="assets/images/products/19.png" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-title">Men Hand Watch</h6>
                                        <div class="cursor-pointer my-2">
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-secondary"></i>
                                            <i class="bx bxs-star text-secondary"></i>
                                        </div>
                                        <div class="clearfix">
                                            <p class="mb-0 float-start fw-bold"><span
                                                    class="me-2 text-decoration-line-through text-secondary">$150</span><span>$120</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection


    @section('script')
        <script type="text/javascript">
            $(document).ready(function() {


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

                $("#date_start").datepicker({
                    dayNamesShort: ["Pn", "Wt", "Śr", "Czw", "Pt", "So", "Nd"],
                    dateFormat: 'yy-mm-dd',
                    setDate: date,
                    value: date
                });

                $(document).on('change', '#price', function(e) {

                    value = e.target.value;
                    var strReg = "^([0-9\.\-])";
                    var regex = new RegExp(strReg);
                    console.log(value);

                    console.log(regex.test(value));
                    return (regex.test(value));

                });

                $(document).on('change', '#small_ads_categories_id', function(e) {
                    //  console.log(e);
                    var cat_id = e.target.value;
                    $.get('/internal-api/add/subcat/' + cat_id, function(data) {
                        $('#small_ads_sub_categories_id').empty();
                        $.each(data, function(index, subCatObj) {
                            $('#small_ads_sub_categories_id').append('<option value="' +
                                subCatObj.id + '">' + subCatObj.name + '</option>');
                        });
                    });
                });
            });
        </script>
    @endsection
