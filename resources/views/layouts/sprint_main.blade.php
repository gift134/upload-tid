<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.sprint_meta')

</head>

<body class="homepage">

    @include('includes.front.sprint_header')

    @yield('content')

    @include('includes.front.footer')

</body>

</html>
