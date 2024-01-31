@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="authentication-header"></div>
    <div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                <div class="col mx-auto">
                    <div class="my-4 text-center">
                        <img src="assets/images/logo-img.png" width="180" alt="" />
                    </div>
                    <div class="card rounded-4">
                        <div class="card-body">
                            <div class="p-4 rounded">
                                <div class="text-center">
                                    <h3 class="">{{ __('passwords.Sign Up') }}</h3>
                                    <p>{{ __('passwords.Already have an account?') }} <a href="/login">{{ __('passwords.Sign in here') }}</a>
                                    </p>
                                </div>
                                <div class="d-grid">
                                    <a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
                      <img class="me-2" src="assets/images/icons/search.svg" width="16" alt="Image Description">
                      <span>{{ __('passwords.Sign Up with Google') }}</span>
                                        </span>
                                    </a> <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>{{ __('passwords.Sign Up with Facebook') }}</a>
                                </div>
                                <div class="login-separater text-center mb-4"> <span>{{ __('passwords.OR SIGN UP WITH EMAIL') }}</span>
                                    <hr/>
                                </div>
                                <div class="form-body">
                                    <form class="row g-3" method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="col-sm-6">
                                            <label for="inputFirstName" class="form-label">{{ __('passwords.First Name') }}</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Jhon" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inputLastName" class="form-label">{{ __('passwords.Last Name') }}</label>
                                            <input type="text" class="form-control" id="inputLastName" placeholder="Deo">
                                        </div>
                                        <div class="col-12">
                                            <label for="email" class="form-label">{{  __('passwords.Email Address')  }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="example@user.com">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">{{  __('passwords.Password')  }}</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                            </div>
                                        </div>
                                        <div class="col-12">
                                         
                                            <label for="password-confirm"
                                            class="col-md-12 col-form-label">{{ __('passwords.Confirm Password') }}</label>
    
                                        <div class="col-12">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                                <label class="form-check-label" for="flexSwitchCheckChecked">{{  __('passwords.I read and agree to Terms & Conditions')  }}</label>

                                            </div>
                                        </div>
                                        <div class='col-12 text-center'>
                                            <a href="{{ route('page.regulamin') }}">{{  __('passwords.Terms & Conditions')  }}</a> i <a href="{{ route('page.polityka_prywatnosci') }}">{{  __('passwords.Privacy policy')  }}</a>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary"><i class='bx bx-user'></i>{{  __('passwords.Sign Up')  }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
</div>

@endsection
