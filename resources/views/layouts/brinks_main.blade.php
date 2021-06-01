<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.brinks_meta')
   
</head>

<body class="homepage">
  
    @include('includes.front.brinks_header')
    
    @yield('content')
    
    @include('includes.front.footer')
	

   
</body>

</html>