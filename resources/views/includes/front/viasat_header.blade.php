  <header id="header" class="fixed-top header-scrolled'">
    <div class="container d-flex align-items-center">

     <a href="/" class="logo mr-auto scrollto"><img src="{{ url("resources/assets/front_assets/img/viasat/viasat_logo.jpg") }}" alt="Viasat Logo" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ Request::is('viasat') ? 'active' : '' }}"><a href="{{ URL::to('/viasat') }}">Home</a></li>
          {{-- <li class="{{ Request::is('viasat/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/viasat/tv-deals') }}">TV</a></li> --}}
          <li class="{{ Request::is('viasat/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/viasat/internet-deals') }}">Internet</a></li>
          {{-- <li class="{{ Request::is('directv/phone-deals') ? 'active' : '' }}"><a href="{{ URL::to('/directv/phone-deals') }}"><i class="icofont-mobile-phone"></i>Phone</a></li> --}}
          <li class="{{ Request::is('viasat/bundle-deals') ? 'active' : '' }}"><a href="{{ URL::to('/viasat/bundle-deals') }}">Bundles</a></li>
        </ul>

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
