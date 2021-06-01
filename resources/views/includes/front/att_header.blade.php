 <header id="header" class="fixed-top header-scrolled'">
    <div class="container d-flex align-items-center">

     <a href="/" class="logo mr-auto scrollto"><img src="{{ url('resources/assets/front_assets/img/att/ATT-Logo.png') }}" alt="AT&T Logo" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ Request::is('att') ? 'active' : '' }}"><a href="{{ URL::to('/att') }}">Home</a></li>
          <li class="{{ Request::is('att/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/att/tv-deals') }}">TV</a></li>
          <li class="{{ Request::is('att/phone-deals') ? 'active' : '' }}"><a href="{{ URL::to('/att/phone-deals') }}">Phone</a></li>
          <li class="{{ Request::is('att/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/att/internet-deals') }}">Internet</a></li>
          <li class="{{ Request::is('att/mobility-deals') ? 'active' : '' }}"><a href="{{ URL::to('/att/mobility-deals') }}">Mobility</a></li>
          <li class="{{ Request::is('att/bundle-deals') ? 'active' : '' }}"><a href="{{ URL::to('/att/bundle-deals') }}">Bundle</a></li>
        </ul>

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
