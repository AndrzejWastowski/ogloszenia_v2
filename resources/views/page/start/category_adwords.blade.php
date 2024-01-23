<div class="row">
    <div class="col-12 col-lg-4 d-flex">
        <div class="card radius-10 w-100">

            <div class="dashboard mb-3 p-3">

                <div class="row mb-1">

                    <div class="d-flex align-items-center mb-1">
                        <div class="product-img">
                            <img src="assets/images/icons/elektronika.png" class="p-1" alt="">
                        </div>
                        <div class="ps-3">
                            <h6 class="mb-0 font-weight-bold">Elektronika</h6>
                        </div>
                        <p class="ms-auto mb-0"><i class="bx bxs-star text-warning mr-1"></i> 5.00</p>
                    </div>

                    <div class="d-flex align-items-center mb-1">
                        <div class="product-img">
                            <img src="assets/images/icons/nieruchomosci.png" class="p-1" alt="">
                        </div>
                        <div class="ps-3">
                            <h6 class="mb-0 font-weight-bold">Mieszkania i nieruchomości</h6>
                        </div>
                        <p class="ms-auto mb-0"><i class="bx bxs-star text-warning mr-1"></i> 5.00</p>
                    </div>

                    <div class="d-flex align-items-center mb-1">
                        <div class="product-img">
                            <img src="assets/images/icons/samochody.png" class="p-1" alt="">
                        </div>
                        <div class="ps-3">
                            <h6 class="mb-0 font-weight-bold">Samochody / Motoryzacja</h6>
                        </div>
                        <p class="ms-auto mb-0"><i class="bx bxs-star text-warning mr-1"></i> 5.00</p>
                    </div>


                    <div class="d-flex align-items-center mb-1">
                        <div class="product-img">
                            <img src="assets/images/icons/uslugi.png" class="p-1" alt="">
                        </div>
                        <div class="ps-3">
                            <h6 class="mb-0 font-weight-bold">Usługi</h6>
                        </div>
                        <p class="ms-auto mb-0"><i class="bx bxs-star text-warning mr-1"></i> 5.00</p>
                    </div>

                    <div class="d-flex align-items-center mb-1">
                        <div class="product-img">
                            <img src="assets/images/icons/moda.png" class="p-1" alt="">
                        </div>
                        <div class="ps-3">
                            <h6 class="mb-0 font-weight-bold">Moda / Ubrania</h6>
                        </div>
                        <p class="ms-auto mb-0"><i class="bx bxs-star text-warning mr-1"></i> 5.00</p>
                    </div>


                    <div class="d-flex align-items-center mb-1">
                        <div class="product-img">
                            <img src="assets/images/icons/telephone.png" class="p-1" alt="Dom i ogród - ogłoszenia">
                        </div>
                        <div class="ps-3">
                            <h6 class="mb-0 font-weight-bold">Dom i ogród</h6>
                        </div>
                        <p class="ms-auto mb-0"><i class="bx bxs-star text-warning mr-1"></i> 5.00</p>
                    </div>


                    <div class="d-flex align-items-center mb-1">
                        <div class="product-img">
                            <img src="assets/images/icons/telephone.png" class="p-1" alt="">
                        </div>
                        <div class="ps-3">
                            <h6 class="mb-0 font-weight-bold">Dziecko</h6>
                        </div>
                        <p class="ms-auto mb-0"><i class="bx bxs-star text-warning mr-1"></i> 5.00</p>
                    </div>

                    <div class="d-flex align-items-center mb-1">
                        <div class="product-img">
                            <img src="assets/images/icons/telephone.png" class="p-1" alt="">
                        </div>
                        <div class="ps-3">
                            <h6 class="mb-0 font-weight-bold">Zdrowie i odżywianie</h6>
                        </div>
                        <p class="ms-auto mb-0"><i class="bx bxs-star text-warning mr-1"></i> 5.00</p>
                    </div>
                    
                    <div class="d-flex align-items-center mb-1">
                        <div class="product-img">
                            <img src="assets/images/icons/telephone.png" class="p-1" alt="">
                        </div>
                        <div class="ps-3">
                            <h6 class="mb-0 font-weight-bold">Antyki / Kolekcje / Sztuka</h6>
                        </div>
                        <p class="ms-auto mb-0"><i class="bx bxs-star text-warning mr-1"></i> 5.00</p>
                    </div>

                    <div class="d-flex align-items-center mb-1">
                        <div class="product-img">
                            <img src="assets/images/icons/telephone.png" class="p-1" alt="">
                        </div>
                        <div class="ps-3">
                            <h6 class="mb-0 font-weight-bold">Artykuły biurowe</h6>
                        </div>
                        <p class="ms-auto mb-0"><i class="bx bxs-star text-warning mr-1"></i> 5.00</p>
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


