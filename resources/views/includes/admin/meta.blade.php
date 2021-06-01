
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Hiit Fitness') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('resources/assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('resources/assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('resources/assets/bower_components/Ionicons/css/ionicons.min.css')}}">

   <!-- toastr -->
  <link rel="stylesheet" href="{{asset('resources/assets/bower_components/toastr/toastr.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('resources/assets/dist/css/AdminLTE.min.css')}}">


   <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('resources/assets/dist/css/skins/skin-blue.min.css')}}">


  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('resources/assets/plugins/iCheck/square/blue.css')}}">

  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{asset('resources/assets/plugins/timepicker/bootstrap-timepicker.min.css')}}">



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
-->

<link rel="preload" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" as="style" onload="this.rel='stylesheet'">

<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"></noscript>

  <!-- jQuery 3 -->
<script src="{{asset('resources/assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('resources/assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<script src="{{asset('resources/assets/bower_components/toastr/toastr.min.js')}}"></script>

<!-- AJAX App -->
<script src="{{asset('resources/assets/plugins/jquery.pjax.js')}}"></script>

<!-- MASK App -->
<script src="{{asset('resources/assets/plugins/jquery.mask.min.js')}}"></script>

<!-- CK Editor -->
{{-- <script src="{{asset('resources/assets/bower_components/ckeditor/ckeditor.js')}}"></script> --}}

<!-- AdminLTE App -->
<script src="{{asset('resources/assets/dist/js/adminlte.min.js')}}"></script>

<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
