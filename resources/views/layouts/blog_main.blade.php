<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.blog_meta')
   
</head>

<body class="homepage">
  
    @include('includes.front.header')
    
   
    @yield('content')
    
    
    @include('includes.front.footer')
	

   
</body>

</html>