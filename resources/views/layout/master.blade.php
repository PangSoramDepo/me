
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="LeMars : Blog HTML Template" />
	<meta property="og:title" content="LeMars : Blog HTML Template" />
	<meta property="og:description" content="LeMars : Blog HTML Template" />
	<meta property="og:image" content="http://lemars.dexignzone.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

	<!-- PAGE TITLE HERE -->
	<title>LeMars : Blog HTML Template</title>

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/plugins.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/line-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/themify-icons.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/style.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/templete.min.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{url('assets/css/skin-1.min.css')}}">

	<!-- Google Font -->
	<style>
	    @import url('https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Playfair+Display:400,400i,700,700i,900,900i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap');
	</style>

</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-area"></div>

        <!-- header -->
        @if(Route::is('home') )
            @include('layout.headerHome')
        @else
            @include('layout.header')
        @endif
        <!-- header END -->

        <!-- Content -->
        @yield('content')
        <!-- Content END-->

        <!-- Footer -->
        @include('layout.footer')
        <!-- Footer END-->

        <button class="scroltop fa fa-chevron-up" ></button>
    </div>

    <!-- JAVASCRIPT FILES ========================================= -->
    <script src="{{url('assets/js/combining.js')}}"></script><!-- CONTACT JS  -->

</body>
</html>
