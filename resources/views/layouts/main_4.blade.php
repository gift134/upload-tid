<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.meta_4')

</head>

<body class="homepage">

    @include('includes.front.header_4')


    @yield('content')


    @include('includes.front.footer_4')



</body>

</html>
