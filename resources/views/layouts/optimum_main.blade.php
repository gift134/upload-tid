<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.optimum_meta')

</head>

<body class="homepage">

    @include('includes.front.optimum_header')

    @yield('content')

    @include('includes.front.footer')

</body>

</html>
