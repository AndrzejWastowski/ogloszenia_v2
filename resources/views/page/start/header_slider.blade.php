<div class="container">
<div class="row">
	<div class="header_slider">

        @php $pom=1; @endphp

@for ($pom=1;$pom<7;$pom++)
	<div class="card m-3">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div>
                    <p class="mb-0">Kategoria</p>
                    <h5 class="mb-0">Nazwa Ogłoszenia</h5>
                </div>
                <div class="widgets-icons bg-light-primary text-primary ms-auto">
                    <i class="bx bxs-cookie"></i>
                </div>
                <div class="widgets-icons bg-light-primary text-primary ms-auto">
                    <img class="img-fluid" src="{{ asset('resources/drobne/'.$pom.'.webp') }}" >
                </div>
            </div>

        </div>
    </div>
@endfor

		<!-- więcej elementów -->
	</div>
</div>
</div>