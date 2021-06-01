    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="UTF-8">

    <meta name="author" content="ADT Home Security Authorized Dealer">

    <!-- page title -->
    <title>{!! $meta['meta_title']!!}</title>

    <meta name="description" content="{!! $meta['meta_desc'] !!}" />

    <meta name="keywords" content="{!! $meta['meta_keyword'] !!}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{!! $meta['meta_title']!!}">
    <meta property="og:description" content="{!! $meta['meta_desc'] !!}">
    <meta property="og:image" content="">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{!! $meta['meta_title']!!}">
    <meta property="twitter:description" content="{!! $meta['meta_desc'] !!}">
    <meta property="twitter:image" content="">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="https://raw.githubusercontent.com/gift134/jna/master/front_assets/img/favicon.ico.png">


<?php
    $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
<link rel="canonical" href="{{ $link }}"/>

<!-- Google Fonts -->
{{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet"> --}}

{{-- <link href="/resources/assets/front_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="/resources/assets/front_assets/vendor/icofont/icofont.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="/resources/assets/front_assets/vendor/venobox/venobox.css" rel="stylesheet"> --}}

{{-- <link href="/resources/assets/ring_assets/css/style.css" rel="stylesheet"> --}}

<link rel="stylesheet" href="{{ url('public/css/app_ring.css')}}">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-170658343-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-170658343-5');
</script>


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://www.jqueryscript.net/demo/Infinite-Scroller-Plugin-jQuery/infiniteslidev2.js"></script>



