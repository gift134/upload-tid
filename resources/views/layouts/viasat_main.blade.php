<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.viasat_meta')

</head>

<body class="homepage">

    @include('includes.front.viasat_header')

    @yield('content')

    @include('includes.front.footer')

</body>

</html>
