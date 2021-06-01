
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{!! $meta['meta_title']!!}</title>
    <meta name="description" content="{!! $meta['meta_desc'] !!}" />
    <meta name="keywords" content="{!! $meta['meta_keyword'] !!}" />

    <meta name="robots" content="all">
    <link rel="canonical" href="{{url()->current()}}"/>

    <meta name="author" content="ADT Home Security Authorized Dealer">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

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

    <link rel="shortcut icon" href="{{ asset('https://raw.githubusercontent.com/gift134/jna/master/front_assets/img/favicon.ico.png') }}">


<!-- Google Fonts -->
{{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

<link href="/resources/assets/front_assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="/resources/assets/front_assets2/vendor/icofont/icofont.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" rel="stylesheet">
<link href="/resources/assets/front_assets2/vendor/venobox/venobox.css" rel="stylesheet">

<link href="/resources/assets/adt_assets/css/style.css" rel="stylesheet"> --}}

<link rel="preload" href="/resources/assets/front_assets/vendor/boxicons/fonts/boxicons.woff2">

<link rel="stylesheet" href="{{ url('public/css/app_adt.css')}}">

<link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
<link rel="dns-prefetch" href="https://kit.fontawesome.com">
<link rel="dns-prefetch" href="https://fonts.googleapis.com">
<link rel="dns-prefetch" href="https://ajax.googleapis.com">


