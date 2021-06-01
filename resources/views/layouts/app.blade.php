<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.admin.meta')
</head>
<body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">
        <!-- ./header start -->
        @include('includes.admin.header')
        <!-- ./header end -->

        <!-- Left side column. contains the logo and sidebar -->
        @include('includes.admin.leftmenu')

         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper" id="pjax-container">
            @yield('content')
         </div>
         <!-- Scripts -->
        @include('includes.admin.footer')
    </div>
    <!-- ./wrapper -->

</body>
</html>
