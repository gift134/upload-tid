<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.adt_meta')

</head>

<body class="homepage">

    @include('includes.front.adt_header')

    @yield('content')

    @include('includes.front.footer')



</body>

</html>
