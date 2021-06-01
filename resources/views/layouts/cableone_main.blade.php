<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.cableone_meta')

</head>

<body class="homepage">

    @include('includes.front.cableone_header')

    @yield('content')

    @include('includes.front.footer')

</body>

</html>
