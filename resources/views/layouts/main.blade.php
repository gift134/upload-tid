<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.meta')
   
</head>

<body class="homepage">
  
    @include('includes.front.header')
    
   
    @yield('content')
    
    
    @include('includes.front.footer')
	

   
</body>

</html>