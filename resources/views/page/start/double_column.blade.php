<div class="row row-cols-1 row-cols-xl-2">
    <div class="col d-flex">
        <div class="card radius-10 w-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h6 class="mb-0">Sales Overview</h6>
                    </div>
                    <div class="dropdown ms-auto">
                        <button class="btn btn-white btn-sm radius-10 dropdown-toggle" type="button"
                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            This Month
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">This Week</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>
                </div>
                <div id="chart6"></div>
            </div>
        </div>
    </div>
    <div class="col d-flex">
        <div class="card radius-10 w-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h6 class="mb-0">Visitor Status</h6>
                    </div>
                    <div class="d-flex align-items-center ms-auto font-13 gap-2">
                        <span class="border px-1 rounded cursor-pointer"><i
                                class='bx bxs-circle text-primary me-1'></i>New Visitor</span>
                        <span class="border px-1 rounded cursor-pointer"><i
                                class='bx bxs-circle text-sky-light me-1'></i>Old Visitor</span>
                    </div>
                </div>
                <div id="chart7"></div>
            </div>
        </div>
    </div>
</div><!--end row-->