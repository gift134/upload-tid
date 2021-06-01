<header id="header" class="fixed-top">
  <div class="container d-flex">

    <div class="logo mr-auto">
      <a href="/brinks-home-security"><img src="/resources/assets/brinks_assets/img/brinks-img/brinks_logo.png" alt="Brinks Logo"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ URL::to('/') }}">Home</a></li>
        <!--<li class="drop-down"><a href="">Packages</a>-->
        <!--  <ul>-->
        <!--    <li class="{{ Request::is('brinks-home-security/brinks-essential-package') ? 'active' : '' }}"><a href="{{ URL::to('/brinks-home-security/brinks-essential-package') }}">Essential Package</a></li>-->
        <!--    <li class="{{ Request::is('brinks-home-security/brinks-complete-package') ? 'active' : '' }}"><a href="{{ URL::to('/brinks-home-security/brinks-complete-package') }}">Complete Package</a></li>-->
        <!--    <li class="{{ Request::is('brinks-home-security/brinks-ultimate-package') ? 'active' : '' }}"><a href="{{ URL::to('/brinks-home-security/brinks-ultimate-package') }}">Ultimate Package</a></li>-->
        <!--  </ul>-->
        <!--</li>-->
       

        <!--<li class="{{ Request::is('brinks-home-security/quote') ? 'active' : '' }}"><a href="{{ URL::to('/brinks-home-security/quote') }}">Free Quotes</a></li>-->

        <li class="get-started"><a href="tel:(844)832-3908">Call (844)832-3908</a></li>

      </ul>
    </nav><!-- .nav-menu -->

  </div>
</header><!-- End Header -->
