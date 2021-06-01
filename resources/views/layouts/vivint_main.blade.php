<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.vivint_meta')
   
</head>

<body class="homepage">
  
    @include('includes.front.vivint_header')
    
    @yield('content')
    
    @include('includes.front.footer')
	
   
</body>

</html>