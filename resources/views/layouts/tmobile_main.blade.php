<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.tmobile_meta')

</head>

<body class="homepage">

    @include('includes.front.tmobile_header')


    @yield('content')


    @include('includes.front.footer')



</body>

</html>
