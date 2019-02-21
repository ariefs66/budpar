<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Dinas budaya dan pariwisata bandung, guides, directions, info.">
	<meta name="author" content="Yuliadi Wijaya">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Disbudpar Bandung</title>

    <!-- Favicons-->
    <link rel="shortcut icon" type="image/x-icon" href="/asset/img/stun_logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" href="/asset/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="/asset/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="/asset/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="/asset/img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300" rel="stylesheet" type="text/css">

    <!-- BASE CSS -->
    <link href="/asset/css/animate.min.css" rel="stylesheet">
    <link href="/asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="/asset/css/style.css" rel="stylesheet">
    <link href="/asset/css/menu.css" rel="stylesheet">
    <link href="/asset/css/icon_fonts/css/all_icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/asset/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- SPECIFIC CSS -->
	<link href="/asset/css/ion.rangeSlider.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="/asset/css/custom.css" rel="stylesheet">

    <style>
        .text-red {
            color: red;
        }

		.event-status {
			font-weight: bold; color: #ed145b;
		}

		header#plain {
			background: #fff;
			border-bottom: 1px solid rgb(238, 238, 238);
			-webkit-box-shadow: 0px 0px 5px #7d7d7d;
			-moz-box-shadow: 0px 0px 5px #7d7d7d;
			box-shadow: 0px 0px 5px #7d7d7d;
		}

		.header-image {
			height: 100vh !important;
		}

		.main-menu > ul > li > a {
			color: #000;
		}

		ul#primary_nav li a {
			color: #ed145b;
		}

		#logo_home h1 a {
			-webkit-background-size: 115px 80px;
			background-size: 170px 80px;
			height: 76px;
		}

		#logo_home h1 {
			margin: 0px;
		}

		#sub_content_in {
			background: rgba(0, 0, 0, 0.1);
		}

    </style>
    <!-- COMMON SCRIPTS -->
	<script src="/asset/js/jquery-2.2.4.min.js"></script>
	<!-- <script src="/asset/js/bootstrap.min.js"></script> -->
	<script src="/asset/js/common_scripts_min.js"></script>
	<script src="/asset/assets/validate.js"></script>
	<script src="/asset/js/functions.js"></script>
	<script src="/asset/js/ion.rangeSlider.min.js"></script>
	<script src="/asset/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
</head>

<body>

<!--[if lte IE 8]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

<div class="layer"></div>
<!-- Menu mask -->

<!-- Header ================================================== -->
<header id="plain" style="padding: 0px;">
    @include('layouts.header')
</header>
<!-- End Header =============================================== -->

@yield('content')
<!-- /.content -->

<!-- Footer ================================================== -->
<footer>
    @include('layouts.footer')
</footer>
<!-- End Footer =============================================== -->
</body>

</html>
