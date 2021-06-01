<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.meta_2')

</head>

<body class="homepage">

    @include('includes.front.header_2')


    @yield('content')


    @include('includes.front.footer_2')

</body>

</html>
