<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Ogłoszenia XYZ') }}</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css'])
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<div class="header-wrapper">
            @include('layouts.header')
			@include('layouts.navbar')
		</div>

		<!--start page wrapper -->
		<div class="page-wrapper mt-5 pt-5">
            @yield('content')
		</div>
		<!--end page wrapper -->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
        @include('layouts.footer')
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
    @vite(['resources/js/app.js'])
	
</body>
@yield('script')
</html>