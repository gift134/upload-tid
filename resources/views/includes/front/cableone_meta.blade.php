<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>{!! $meta['meta_title']!!}</title>
<meta name="description" content="{!! $meta['meta_desc'] !!}" />
<meta name="keywords" content="{!! $meta['meta_keyword'] !!}" />

<meta name="robots" content="all">
<link rel="canonical" href="{{url()->current()}}"/>

<link rel="shortcut icon" href="{{ asset('https://raw.githubusercontent.com/gift134/jna/master/front_assets/img/favicon.ico.png') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{!! $meta['meta_title'] !!}">
    <meta property="og:description" content="{!! $meta['meta_desc'] !!}">
    <meta property="og:image" content="{{ url('/resources/assets/front_assets/img/home/tvinternetdeals-social-banner.jpg')}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{!! $meta['meta_title'] !!}">
    <meta property="twitter:description" content="{!! $meta['meta_desc'] !!}">
    <meta property="twitter:image" content="{{ url('/resources/assets/front_assets/img/home/tvinternetdeals-social-banner.jpg')}}">

{{-- <link async href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<link async href="{{ url('resources/assets/front_assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link async href="{{ url('resources/assets/front_assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
<link async href="{{ url('resources/assets/front_assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link async href="{{ url('resources/assets/front_assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
<link async href="{{ url('resources/assets/front_assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
<link async href="{{ url('resources/assets/front_assets/vendor/aos/aos.css') }}" rel="stylesheet">

<link async href="{{ url('resources/assets/front_assets/css/cableone/style.css') }}" rel="stylesheet"> --}}


<link rel="stylesheet" href="{{ url('public/css/app_cable_one.css')}}">

