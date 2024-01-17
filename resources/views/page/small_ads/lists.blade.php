@extends('layouts.app')

@section('content')

    <div class="page-content">
        @include('page.start.header')
        @include('page.start.category_adwords')
        <div class="container-fluid">
            <div class="section-wrapper section-ads_small">
                <h3 class="text-white">OGŁOSZENIA DROBNE</h3>
            </div>
        </div>
        @include('page.start.header_slider')
        @include('page.start.double_column')

        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
            <div class="col-12 col-lg-4  d-flex">
                <div class="card radius-10 p-0 w-100 bg-transparent shadow-none">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">New Sessions</p>
                                    <h5 class="mb-0">54.6%</h5>
                                </div>
                                <div class="widgets-icons bg-light-primary text-primary ms-auto"><i
                                        class="bx bxs-cookie"></i></div>
                            </div>
                            <div id="chart8"></div>
                        </div>
                    </div>
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Average Pages</p>
                                    <h5 class="mb-0">38.5%</h5>
                                </div>
                                <div class="widgets-icons bg-light-danger text-danger ms-auto"><i
                                        class="bx bxs-bookmark-alt-plus"></i></div>
                            </div>
                            <div id="chart9"></div>
                        </div>
                    </div>
                    <div class="card radius-10 mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Cloud Download</p>
                                    <h5 class="mb-0">24.5K</h5>
                                </div>
                                <div class="widgets-icons bg-light-success text-success ms-auto"><i
                                        class="bx bxs-cloud-download"></i></div>
                            </div>
                            <div id="chart10"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4  d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h6 class="mb-0">Goal Statistics</h6>
                            </div>
                            <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
                            </div>
                        </div>
                        <div id="chart11"></div>
                        <div class="row align-items-center py-2">
                            <div class="col-auto">
                                <p class="mb-0">Sales</p>
                            </div>
                            <div class="col-auto">
                                <p class="mb-0">1580</p>
                            </div>
                            <div class="col-auto">
                                <p class="mb-0">875</p>
                            </div>
                            <div class="col">
                                <div class="progress radius-10 mb-0" style="height:6px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 85%"></div>
                                </div>
                            </div>
                        </div><!--end row-->

                        <div class="row align-items-center py-2">
                            <div class="col-auto">
                                <p class="mb-0">Users</p>
                            </div>
                            <div class="col-auto">
                                <p class="mb-0">1852</p>
                            </div>
                            <div class="col-auto">
                                <p class="mb-0">356</p>
                            </div>
                            <div class="col">
                                <div class="progress radius-10 mb-0" style="height:6px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 65%"></div>
                                </div>
                            </div>
                        </div><!--end row-->

                        <div class="row align-items-center py-2">
                            <div class="col-auto">
                                <p class="mb-0">Visits</p>
                            </div>
                            <div class="col-auto">
                                <p class="mb-0">1280</p>
                            </div>
                            <div class="col-auto">
                                <p class="mb-0">867</p>
                            </div>
                            <div class="col">
                                <div class="progress radius-10 mb-0" style="height:6px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 45%"></div>
                                </div>
                            </div>
                        </div><!--end row-->
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 d-flex">
                <div class="card radius-10 p-0 w-100 p-3">
                    <div class="card radius-10 shadow-none bg-transparent border">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-center justify-content-lg-start">
                                <div id="chart12"></div>
                                <div class="">
                                    <p class="mb-0 d-flex align-items-center"><i
                                            class='bx bx-male text-danger fs-4'></i><span
                                            class="mx-2">Male</span><span>65%</span></p>
                                    <p class="mb-0 d-flex align-items-center"><i
                                            class='bx bx-female text-primary fs-4'></i><span
                                            class="mx-2">Male</span><span>35%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card radius-10 mb-0 shadow-none bg-transparent mb-0 border">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <div>
                                    <h6 class="mb-0">Device Type</h6>
                                </div>
                                <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
                                </div>
                            </div>
                            <div class="row row-cols-3 g-3">
                                <div class="col">
                                    <div class="d-flex gap-2">
                                        <h4 class="mb-1 d-flex">61 <span class="align-self-start fs-6">%</span></h4>
                                        <p class="mb-0 align-self-center text-success">(+8.4%)</p>
                                    </div>
                                    <p class="mb-0 d-flex align-items-center"><i
                                            class='bx bxs-circle text-info fs-6'></i><span class="mx-2">Android</span>
                                    </p>
                                </div>
                                <div class="col">
                                    <div class="d-flex gap-2">
                                        <h4 class="mb-1 d-flex">28 <span class="align-self-start fs-6">%</span></h4>
                                        <p class="mb-0 align-self-center text-danger">(-1.9%)</p>
                                    </div>
                                    <p class="mb-0 d-flex align-items-center"><i
                                            class='bx bxs-circle text-success fs-6'></i><span class="mx-2">iOS</span>
                                    </p>
                                </div>
                                <div class="col">
                                    <div class="d-flex gap-2">
                                        <h4 class="mb-1 d-flex">11 <span class="align-self-start fs-6">%</span></h4>
                                        <p class="mb-0 align-self-center text-success">(+6.8%)</p>
                                    </div>
                                    <p class="mb-0 d-flex align-items-center"><i
                                            class='bx bxs-circle text-warning fs-6'></i><span class="mx-2">Other</span>
                                    </p>
                                </div>
                            </div>

                            <div class="progress radius-10 mt-4" style="height: 10px">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 45%"
                                    aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-success" role="progressbar" style="width: 30%"
                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->

        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card radius-10">
                    <div class="card-body">
                        <div id="chart13"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card radius-10">
                    <div class="card-body">
                        <div id="chart14"></div>
                    </div>
                </div>
            </div>
        </div><!--end row-->
    </div>

    <!--end wrapper-->
@endsection


@section('script')

@endsection
