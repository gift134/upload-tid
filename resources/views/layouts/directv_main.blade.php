<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.directv_meta')

</head>

<body class="homepage">

    @include('includes.front.directv_header')

    @yield('content')

    @include('includes.front.footer')

</body>

</html>
