<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.verizon_meta')

</head>

<body class="homepage">

    @include('includes.front.verizon_header')

    @yield('content')

    @include('includes.front.footer')

</body>

</html>
