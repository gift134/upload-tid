<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.meta_3')
   
</head>

<body class="homepage">
  
    @include('includes.front.header_3')
    
   
    @yield('content')
    
    
    @include('includes.front.footer_3')
	

   
</body>

</html>