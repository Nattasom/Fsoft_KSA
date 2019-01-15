	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#ffd600" />
	<title> @yield('title')</title>
	<link href="{{ Config::get('app.url_main') }}favicon.ico" type="image/x-icon" rel="shortcut icon">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<link type="text/css" rel="stylesheet" href="{{ Config::get('app.url_assets') }}assets/css/style.css" />
	<link rel="stylesheet" href="{{ Config::get('app.url_assets') }}assets/bootstrap/css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="{{ Config::get('app.url_assets') }}assets/js/scrollpane/jquery.jscrollpane.css" />
	<link type="text/css" rel="stylesheet" href="{{ Config::get('app.url_assets') }}assets/js/slick/slick.css" />
	<link type="text/css" rel="stylesheet" href="{{ Config::get('app.url_assets') }}assets/js/slick/slick-theme.css" />
	
	<link rel="stylesheet" href="{{ Config::get('app.url_assets') }}assets/jquery-ui/jquery-ui.min.css">
	
	<!-- Fontawsome -->
	<link href="{{ Config::get('app.url_assets') }}assets/css/font-awesome.min.css" rel="stylesheet">

	<!-- <link rel="stylesheet" href="{{ Config::get('app.url_assets') }}assets/chosen_v1.8.7/chosen.css"> -->
	

	<!-- Bootstrap TagsInput -->
	<link rel="stylesheet" href="{{ Config::get('app.url_assets') }}assets/select2/css/select2.min.css">

	<!-- Jquery Rangeslider -->
	<!-- <link rel="stylesheet" href="{{ Config::get('app.url_assets') }}assets/rangeslider/rangeslider.css"> -->
	<link rel="stylesheet" href="{{ Config::get('app.url_assets') }}assets/jqueryrange/multirange.css">

	<!-- Owlcarousel -->
	<link rel="stylesheet" href="{{ Config::get('app.url_assets') }}assets/owlcarousel2/assets/owl.carousel.min.css">

	<!-- Bootstrap Datepicker -->
	<link rel="stylesheet" href="{{ Config::get('app.url_assets') }}assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">

	<!-- custom -->
	<link rel="stylesheet" href="{{ Config::get('app.url_assets') }}assets/css/custom.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="{{ Config::get('app.url_assets') }}assets/css/responsive.css?v=<?php echo time(); ?>">
	<!-- <link rel="stylesheet" href="{{ Config::get('app.url_assets') }}assets/css/custom-newtheme.css?v=<?php echo time(); ?>"> -->
	<!-- <link rel="stylesheet" href="{{ Config::get('app.url_assets') }}assets/css/responsive-newtheme.css?v=<?php echo time(); ?>">  -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MF7XQPM');</script>
<!-- End Google Tag Manager -->
