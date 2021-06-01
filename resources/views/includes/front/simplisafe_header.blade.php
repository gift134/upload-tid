<header id="header" class="fixed-top">
  <div class="container d-flex">

    <div class="logo mr-auto">
<a href="/simplisafe-home-security"><img src="/resources/assets/simplisafe_assets/img/simplisafe-img/simplisafe-logo.png"  alt="Simplisafe Logo"></a>

    </div>

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ URL::to('/') }}">Home</a></li>
        <!--<li class="drop-down"><a href="">Packages</a>-->
        <!--  <ul>-->
        <!--    <li class="{{ Request::is('simplisafe-home-security/simplisafe-hearth-package') ? 'active' : '' }}"><a href="{{ URL::to('/simplisafe-home-security/simplisafe-hearth-package') }}">Hearth Package</a></li>-->
        <!--    <li class="{{ Request::is('simplisafe-home-security/simplisafe-essentials-package') ? 'active' : '' }}"><a href="{{ URL::to('/simplisafe-home-security/simplisafe-essentials-package') }}">Essentials Package</a></li>-->
        <!--    <li class="{{ Request::is('simplisafe-home-security/simplisafe-foundation-package') ? 'active' : '' }}"><a href="{{ URL::to('/simplisafe-home-security/simplisafe-foundation-package') }}">Foundation Package</a></li>-->
        <!--  </ul>-->
        <!--</li>-->
       

        {{-- <li class="{{ Request::is('brinks-home-security/quote') ? 'active' : '' }}"><a href="{{ URL::to('/brinks-home-security/quote') }}">Free Quotes</a></li> --}}

        <li class="get-started"><a href="tel:(844)991-9874">Call (844)991-9874</a></li>

      </ul>
    </nav><!-- .nav-menu -->
    
  </div>
</header><!-- End Header -->
