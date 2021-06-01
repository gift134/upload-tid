<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.spectrum_meta')

</head>

<body class="homepage">

    @include('includes.front.spectrum_header')


    @yield('content')


    @include('includes.front.footer')



</body>

</html>
