<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.frontier_meta')

</head>

<body class="homepage">

    @include('includes.front.frontier_header')

    @yield('content')

    @include('includes.front.footer')

</body>

</html>
