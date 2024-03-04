@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
         <div class="page-content mt-3">
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
                                            href="{{ route('page.small_ads.lists') }}">Dodaj ogłoszenie drobne</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><strong> Zdjęcia</strong></li>
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
                <div class="card p-3">
                    <div class="row justify-content-center">

                        <h3><strong>Ogłoszenia Drobne - Dodaj Zdjęcia</strong></h3>



                        <div class="bs-stepper">
                            <div class="bs-stepper-header" role="tablist">
                            <!-- your steps here -->
                                <div class="step " data-target="#tresc-part">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="tresc-part" id="tresc-part-trigger">
                                        <span class="bs-stepper-circle">1</span>
                                        <span class="bs-stepper-label "> Treść</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step active" data-target="#foto-part">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="tresc-part" id="tresc-part-trigger">
                                        <span class="bs-stepper-circle active">2</span>
                                        <span class="bs-stepper-label active">Zdjęcia</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#promocja-part">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="promocja-part" id="promocja-part-trigger">
                                        <span class="bs-stepper-circle">3</span>
                                        <span class="bs-stepper-label">Promowanie</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#podsumowanie-part">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="podsumowanie-part" id="podsumowanie-part-trigger">
                                        <span class="bs-stepper-circle">4</span>
                                        <span class="bs-stepper-label">Podsumowanie</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                      <!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->

                <div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Zdjęcia już dodane</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
                                @foreach($content->photos as $photo)
                                    <img class="m-2" src="{{ asset($path.'/'.$photo->name.'m.webp') }}">
                                @endforeach

							</div>
						</div>
					</div>
				</div>


				<!--end row-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Dodawanie zdjęć</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
                                <form id="file-upload-form" name="file-upload-form" method="POST" action="{{ route('page.user.small_ads.photo_send') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input id="image-uploadify" type="file" name="file[]" accept="image/*" multiple>
                                    <div class="row mt-3 p-3">
                                        <button type="submit" class="btn btn-primary ">Wyślij pliki</button>
                                    </div>
                                </form>

							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
		<!--end page wrapper -->

                                <div class="mb-3">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Dalej') }}
                                        </button>
                                    </div>
                                </div>
                        </form>
                    </div>

                </div>
            </div>
        @endsection
        @section('script')  @vite(['resources/js/small_ads_script.js'])  @endsection
