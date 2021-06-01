
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="UTF-8">

    <meta name="author" content="ADT Home Security Authorized Dealer">

    <!-- page title -->

    <title>{!! $meta['meta_title']!!}</title>

    <meta name="description" content="{!! $meta['meta_desc'] !!}" />

    <meta name="keywords" content="{!! $meta['meta_keyword'] !!}" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

<?php
    $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
<link rel="canonical" href="{{ $link }}"/>

<!-- Google Fonts -->
{{-- <link async href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet"> --}}



{{-- <link async href="/resources/assets/front_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link async href="/resources/assets/front_assets/vendor/icofont/icofont.min.css" rel="stylesheet">
<link async rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link async href="/resources/assets/front_assets/vendor/venobox/venobox.css" rel="stylesheet">

<link async href="/resources/assets/brinks_assets/css/style.css" rel="stylesheet"> --}}

<link async rel="shortcut icon" href="https://raw.githubusercontent.com/gift134/jna/master/front_assets/img/favicon.ico.png">

<link rel="stylesheet" href="{{ url('public/css/app_brinks.css')}}">

<link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
<link rel="dns-prefetch" href="https://kit.fontawesome.com">
<link rel="dns-prefetch" href="https://fonts.googleapis.com">
<link rel="dns-prefetch" href="https://ajax.googleapis.com">


