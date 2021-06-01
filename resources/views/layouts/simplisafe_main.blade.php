<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.front.simplisafe_meta')
   
</head>

<body class="homepage">
  
    @include('includes.front.simplisafe_header')
    
    @yield('content')
    
    @include('includes.front.footer')
	
</body>

</html>