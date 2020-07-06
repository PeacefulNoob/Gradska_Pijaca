<!doctype html>
<html lang="zxx" dir="ltr">
	<head>
		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Gradska Pijaca">
		<meta name="author" content="QQRIQ PeacefulNoob">
		<meta name="keywords" content="Gradska Pijaca">
		
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<!-- Title -->
		<title>Gradska Pijaca</title>

		<!-- Bootstrap Css -->
		<link href="/assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Dashboard Css -->
		<link href="/assets/css/dashboard.css" rel="stylesheet" />

		<!-- RTL Css -->
		<link href="/assets/css/rtl.css" rel="stylesheet" />

		<!-- Font-awesome  Css -->
		<link href="/assets/css/icons.css" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400&display=swap" rel="stylesheet">

		<!--Horizontal Menu-->
		<link href="/assets/plugins/Horizontal2/Horizontal-menu/dropdown-effects/fade-down.css" rel="stylesheet" />
		<link href="/assets/plugins/Horizontal2/Horizontal-menu/horizontal.css" rel="stylesheet" />
		<link href="/assets/plugins/Horizontal2/Horizontal-menu/color-skins/color.css" rel="stylesheet" />

		<!--Select2 Plugin -->
		<link href="/assets/plugins/select2/select2.min.css" rel="stylesheet" />

		<!-- Cookie css -->
		<link href="/assets/plugins/cookie/cookie.css" rel="stylesheet">

		<!-- Owl Theme css-->
		<link href="/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

		<!-- video css-->
		<link href="/assets/plugins/video/insideElementDemo.css" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!-- COLOR-SKINS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="/assets/webslidemenu/color-skins/color10.css" />

	</head>
<body>

    <!--Loader-->
    <div id="global-loader">
        <img src="/assets/images/products/products/loader.png" class="loader-img floating" alt="">
    </div>
    @include('layouts.header_top')
    @include('layouts.mobile_header')
    @include('layouts.header_bot')
	<main >
		@include('components.message')
		@yield('content')
	</main>
   @include('layouts.footer')

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>



        {{-- SKRIPTE .////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
		<!-- JQuery js-->
		<script src="/assets/js/vendors/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap js -->
		<script src="/assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js"></script>
		<script src="/assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

		<!--JQuery Sparkline Js-->
		<script src="/assets/js/vendors/jquery.sparkline.min.js"></script>

		<!-- Circle Progress Js-->
		<script src="/assets/js/vendors/circle-progress.min.js"></script>

		<!-- Star Rating Js-->
		<script src="/assets/plugins/rating/jquery.rating-stars.js"></script>

		<!--Owl Carousel js -->
		<script src="/assets/plugins/owl-carousel/owl.carousel.js"></script>

		<!--Horizontal Menu-->
		<script src="/assets/plugins/Horizontal2/Horizontal-menu/horizontal.js"></script>

		<!--Counters -->
		<script src="/assets/plugins/counters/counterup.min.js"></script>
		<script src="/assets/plugins/counters/waypoints.min.js"></script>
		<script src="/assets/plugins/counters/numeric-counter.js"></script>

		<!--JQuery TouchSwipe js-->
		<script src="/assets/js/jquery.touchSwipe.min.js"></script>

		<!--Select2 js -->
		<script src="/assets/plugins/select2/select2.full.min.js"></script>
		<script src="/assets/js/select2.js"></script>

		<!-- Cookie js -->
		<script src="/assets/plugins/cookie/jquery.ihavecookies.js"></script>
		<script src="/assets/plugins/cookie/cookie.js"></script>

        <!-- Custom scroll bar Js-->
		<script src="/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- sticky Js-->
		<script src="/assets/js/sticky.js"></script>

		<!-- video -->
		<script src="/assets/plugins/video/jquery.vide.js"></script>

		<!-- Swipe Js-->
		<script src="/assets/js/swipe.js"></script>

		<!-- Scripts Js-->
		<script src="/assets/js/scripts2.js"></script>

		<!-- Custom Js-->
		<script src="/assets/js/custom.js"></script>

	</body>
</html>