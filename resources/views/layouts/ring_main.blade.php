<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.ring_meta')
   
</head>

<body class="homepage">
  
    @include('includes.front.ring_header')
    
    @yield('content')
    
    @include('includes.front.footer')
	

   
</body>

</html>