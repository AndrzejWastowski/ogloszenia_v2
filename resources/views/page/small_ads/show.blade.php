@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="page-content">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Ogłoszenia drobne</li>
                        <li class="breadcrumb-item active" aria-current="page"><strong>{{ $content->name }} </strong> </li>
                    </ol>
                </nav>
            </div>
          </div>
        <!--end breadcrumb-->
 

         <div class="card">
            <div class="row g-0">
              <div class="col-md-4 border-end">
                @php
                    $filename = $content->topPhoto->first()->name ?? 'default';
                    $path = 'storage/drobne/'.$content->image_path.'/' . $content->id . '/' . $filename . '.webp';
                    if(file_exists($path)) {
                        $defaultImage = $path; // tutaj używamy ścieżki względnej, ponieważ asset() generuje URL na podstawie ścieżki publicznej
                        } else {
                    $defaultImage = '/resources/brak_zdjecia_350x350.webp'; // podobnie, ścieżka względna
                    }
                @endphp
    <div id="gallery">
          <div id="main-image">
            <img src="{{ asset($defaultImage) }}" id="current-image"  class="m-3 img-fluid text-center border rounded cursor-pointer" alt="{{ $content->name }}">
          </div>
                    <div class="row mb-3 row-cols-auto g-2 justify-content-center mt-3">
                        @foreach ($content->photos as $photo)
                            @php
                                $filename = $photo->name ?? 'default';
                                $path = 'storage/drobne/'.$content->image_path.'/' . $content->id . '/' . $filename . 'kw.webp';

                                if(file_exists($path)) {
                                    $defaultImage = $path; // tutaj używamy ścieżki względnej, ponieważ asset() generuje URL na podstawie ścieżki publicznej
                                    } else {
                                    $defaultImage = '/resources/brak_zdjecia_350x350.webp'; // podobnie, ścieżka względna
                                    }

                            @endphp
                            <div class="col">
                              <div id="thumbnails">
                                <img  class="thumbnail" src="{{ asset($defaultImage) }}" width="70" class="border rounded cursor-pointer" alt="">
                              </div>
                            </div>
                        @endforeach
                    </div>
    </div>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title">{{ $content->name }}</h4>
                  <div class="mb-3"> 
                    <span class="price h4"><strong>{{ $content->price }}</strong> <small>PLN</small></span> 
                   
                </div>
                  <p class="card-text fs-6">{{ $content->lead }}</p>
                  <dl class="row">
                    <dt class="col-sm-3">Model#</dt>
                    <dd class="col-sm-9">{{ $content->invoice }}</dd>
                  
                    <dt class="col-sm-3">Stan</dt>
                    <dd class="col-sm-9">{{ $content->condition }}</dd>
                  
                    <dt class="col-sm-3">Kontakt</dt>
                    <dd class="col-sm-9">tel: {{ $content->phone }} / mail: {{ $content->mail }}</dd>
                  </dl>
                  
                
                <div class="d-flex gap-3 mt-3">
                    <a href="#" class="btn btn-primary">Obserwuj</a>
                    <a href="#" class="btn btn-outline-primary"><span class="text">Dodaj do koszyka</span> <i class='bx bxs-cart-alt'></i></a>
                </div>
                </div>
              </div>
            </div>
            <hr/>
            <div class="card-body">
                <ul class="nav nav-tabs nav-primary mb-0" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-comment-detail font-18 me-1'></i>
                                </div>
                                <div class="tab-title"> Opis szczegółowy</div>
                            </div>
                        </a>
                    </li>

                </ul>
                <div class="tab-content pt-3">
                    <div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
                        {{ $content->description}}
                    </div>
 
                </div>
            </div>

          </div>


            <h6 class="text-uppercase mb-0 "><strong>Inne produkty z tej kategorii</strong></h6>
            <hr/>
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
                                <p class="mb-0 float-start fw-bold"><span class="me-2 text-decoration-line-through text-secondary">$240</span><span>$199</span></p>
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
                                <p class="mb-0 float-start fw-bold"><span class="me-2 text-decoration-line-through text-secondary">$179</span><span>$110</span></p>
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
                                <p class="mb-0 float-start fw-bold"><span class="me-2 text-decoration-line-through text-secondary">$150</span><span>$120</span></p>
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
<script>

  

</script>
@endsection
