<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.att_meta')

</head>

<body class="homepage">

    @include('includes.front.att_header')

    @yield('content')

    @include('includes.front.footer')

</body>

</html>
