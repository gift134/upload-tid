<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.meta_5')

</head>

<body class="homepage">

    @include('includes.front.header_5')


    @yield('content')


    @include('includes.front.footer_5')



</body>

</html>
