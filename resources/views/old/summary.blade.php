@extends('home.dashboard')
@section('step')

<div class="row justify-content-center">
<h3><strong>Usługi - Promocja</strong></h3>

<div class="bs-stepper">
    <div class="bs-stepper-header" role="tablist">
    <!-- your steps here -->
        <div class="step active" data-target="#tresc-part">
            <button type="button" class="step-trigger" role="tab" aria-controls="tresc-part" id="tresc-part-trigger">
                <span class="bs-stepper-circle">1</span>
                <span class="bs-stepper-label active"> Treść</span>
            </button>
        </div>
        <div class="line "></div>
        <div class="step active" data-target="#foto-part">
            <button type="button" class="step-trigger" role="tab" aria-controls="foto-part" id="foto-part-trigger">
                <span class="bs-stepper-circle">2</span>
                <span class="bs-stepper-label active">Zdjęcia</span>
            </button>
        </div>
        <div class="line"></div>
        <div class="step active" data-target="#promocja-part">
            <button type="button" class="step-trigger" role="tab" aria-controls="promocja-part" id="promocja-part-trigger">
                <span class="bs-stepper-circle">3</span>
                <span class="bs-stepper-label active">Promowanie</span>
            </button>
        </div>
        <div class="line"></div>
        <div class="step active" data-target="#podsumowanie-part">
            <button type="button" class="step-trigger" role="tab" aria-controls="podsumowanie-part" id="podsumowanie-part-trigger">
                <span class="bs-stepper-circle">4</span>
                <span class="bs-stepper-label">Podsumowanie</span>
            </button>
        </div>
    </div>
</div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Nieruchomości</li> 
            <li class="breadcrumb-item">{{ $categories->name }}</li>          
            <li class="breadcrumb-item active">{{ $content->name }}</li>                   
        </ol>
    </nav>  
    <div class="card m-1">

        <div class="card-body p-3" style="background-color: {{ $content->highlighted }};">  
            <div class="row mb-0 pb-0">
                <div class="col-xl-8"><h5 class="card-title"> <strong>{{ $content->name }} </strong></h5></div> 
                <div class="col-xl-4 text-right">
                    <ul class="list-unstyled">
                            <li><small>nr ogł.<strong> D/{{ $content->id }}</strong></small></li>            
                            <li><small>dodano: <strong>{{  $content->date_start  }}</strong></small></li>            
                            <li><small>autor: <strong>{{  $content->User->name }} </strong></small></li>            
                    </ul>          
                </div>
            </div>
           
            <div class="card-text black-text">                
                <div class="row">
                    <div class="col-3">
                        <!--Carousel Wrapper-->     
                        @php
                            $active = null;
                            $count = 0;
                            $HTML_PHOTO ='';
                            $HTML_THUMBS ='';
                        @endphp
                                    
                        @foreach ($photos as $photo)

                            @if ($active==null) @php($active = 'active') @else @php($active = ' ') @endif                            
                                
                            @php ($HTML_PHOTO .= '<div class="carousel-item '.$active.'"><img class="d-block w-100 "  src="'.$storage->url('public/services/'.$photo->name.'_kw.jpg').'" alt="'.$content->name.'" width="200"></div>')
                                    
                        @endforeach                            
                        
                        <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                            <div class="carousel-inner" role="listbox" name="karuzela_fotek">
                                {!! $HTML_PHOTO !!}
                            </div>                
                                <!--Controls-->
                            <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Poprzednie</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">następne</span>
                            </a>
                            <!--/.Controls-->
                                    
                            <ol class="carousel-indicators">
                                    <?php echo $HTML_THUMBS; ?>
                            </ol> 
                        </div>
                        <!--/.Carousel Wrapper--> 
                    </div>
                    <!--/.Slides-->
                    <!--Grid column-->
                    <div class="col-9">
                            <!--Excerpt-->                        
                            <h4 class="text-right">Cena: <strong>{{ $content->price }} </strong> pln</h4>
                            <p class="lead"><strong>{{ $content->lead }}.</strong></p>                            
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <label ><strong>OPIS</strong></label>
                        <p class="stopoverflow">{{ $content->description }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <div class="container">
        <div class="row mt-2 p-2">
            <div class="col-12">
                <label ><strong>PODSUMOWANIE</strong></label>
                <p>Sprzedawca: <a><strong>{{ $content->User->name }} </strong></a>,
                <p> Wystawiono od: <strong>{{  $content->date_start  }}</strong> do <strong>{{  $content->date_end  }}</strong></p>
                
                <label ><strong>OPCJE PROMOWANE</strong></label>
                <ul class="list-unstyled"> 
                    <li>Napis przy ogłoszeniu: <strong>{{ $content->recomended }}</strong></li>
                    <li>Tło ogłoszenia: <span class="color-block" style="background-color: {{ $content->highlighted }}"> text ogłoszenia</span></li>
                    <li>Ogłoszenie będzie wyświetlane od: <strong>{{ $content->date_start }}</strong> do <strong>{{ $content->date_end }}</strong></li>
                    <li>Kwota do zapłaty: <strong>{{ $payments }}</strong> pln</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">

                @if ($payments > 0)
                <form action="{{  route('AddPayments') }}"  class="p-5" method="POST" role="form" >
                    @csrf                    
                    <input type="hidden" name="section" value="{{ $section }}">
                    <input type="hidden" name="payment_id" value="{{ $payments->id }}">
                    <div class="row">  
                            <div class="col-12 col-lg-9">Przejdź do płatności</div>
                            <div class="col-12 col-lg-3">                                       
                                <div class="form-check">
                                    <button class="btn btn-info btn-block my-4 text-white" type="submit"><strong>do płatności</strong></button>
                                </div>
                            </div>                                      
                                                    </div>   
                </form>
                @else

                <form action="{{ route('services_success_post') }}"  class="p-5" method="POST" role="form" >
                    @csrf
                    
                    <input type="hidden" name="payment_id" value="{{ $payments }}">
                    <input type="hidden" name="section" value="{{ $section }}">
                    <div class="mb-3">
                                <div class="offset-lg-9 offset-sm-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Dalej') }}
                                    </button>
                                </div>
                            </div>
                </form>
                    
                @endif
            </div>
    </div>
</div>

@endsection    

@section('scripts')

@endsection
