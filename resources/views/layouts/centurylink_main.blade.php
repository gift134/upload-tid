<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.centurylink_meta')

</head>

<body class="homepage">

    @include('includes.front.centurylink_header')

    @yield('content')

    @include('includes.front.footer')

</body>

</html>
