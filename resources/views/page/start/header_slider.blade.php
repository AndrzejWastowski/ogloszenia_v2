<div class="container">
<div class="row">
	<div class="header_slider">


@for ($pom=1;$pom<7;$pom++)
	<div class="card m-3">
        <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <span class="mb-0 text-start">2024-01-15</span>
                    </div>
                    <div class="col-6 text-end">
                        <span class="mb-0 text-end" >Kategoria</span>
                    </div>
                    <h5 class="mb-0 text-center mb-1">Nazwa Ogłoszenia</h5>
                </div>
                <div class="row">
                    <img class="img-fluid" src="{{ asset('resources/drobne/'.$pom.'kw.webp') }}" >
                </div>
        </div>
    </div>
@endfor

		<!-- więcej elementów -->
	</div>
</div>
</div>