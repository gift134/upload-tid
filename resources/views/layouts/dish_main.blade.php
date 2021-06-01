<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.dish_meta')

</head>

<body class="homepage">

    @include('includes.front.dish_header')

    @yield('content')

    @include('includes.front.footer')

</body>

</html>
