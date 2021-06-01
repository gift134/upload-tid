<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.xfinity_meta')

</head>

<body class="homepage">

    @include('includes.front.xfinity_header')

    @yield('content')

    @include('includes.front.footer')

</body>

</html>
