<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.rcn_meta')

</head>

<body class="homepage">

    @include('includes.front.rcn_header')

    @yield('content')

    @include('includes.front.footer')

</body>

</html>
