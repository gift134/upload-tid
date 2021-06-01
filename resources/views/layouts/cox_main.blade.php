<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.cox_meta')

</head>

<body class="homepage">

    @include('includes.front.cox_header')

    @yield('content')

    @include('includes.front.footer')

</body>

</html>
