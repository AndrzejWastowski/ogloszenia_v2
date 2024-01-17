<div class="row">
    <div class="col-12 col-lg-4 d-flex">
        <div class="card radius-10 w-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h6 class="mb-0">Popularne kategorie</h6>
                    </div>
                    <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
                    </div>
                </div>
            </div>
            <div class="dashboard-top-countries mb-3 p-3">

                <div class="row mb-1">
                    <div class="col-2">
                        <i >ikona</i>
                    </div>
                    <div class="col">
                        <p class="mb-2">Elektronika <strong class="float-end">445,85</strong></p>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-2">
                        <i >ikona</i>
                    </div>
                    <div class="col">
                        <p class="mb-2">Elektronika <strong class="float-end">445,85</strong></p>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <div class="col-12 col-lg-8 d-flex">
        <div class="card radius-10 w-100">
            <div class="card-body">
                <div class="row">
                    <div class="MyCarusel">
                            <!-- slider ogłoszenia drobne -->
                        @for ($pom = 1; $pom < 7; $pom++)
                            <div >
                                    <img class="img-fluid" src="{{ asset('resources/addons/header/' . $pom . '.jpg') }}">
                            </div>
                        @endfor
                            <!-- więcej elementów -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


