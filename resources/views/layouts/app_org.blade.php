
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ogłoszenia XYZ') }}</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css'])
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
</head>
<body>
    <!--wrapper-->
<div class="wrapper">
	<!--start header wrapper-->	
	<div class="header-wrapper">
		<!--start header -->
		@include('layouts.header')
	
	 <!--end navigation-->
	</div>
    @yield('content')
	<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
	<!--End Back To Top Button-->

    @include('layouts.footer')
	
</div>
    @vite(['resources/js/app.js'])
</body>
</html>