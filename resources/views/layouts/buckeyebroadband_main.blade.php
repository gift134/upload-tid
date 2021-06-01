<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.buckeyebroadband_meta')

</head>

<body class="homepage">

    @include('includes.front.buckeyebroadband_header')

    @yield('content')

    @include('includes.front.footer')

</body>

</html>
