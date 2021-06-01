
  <header id="header" class="fixed-top header-scrolled'">
    <div class="container d-flex align-items-center">

    <a href="/" class="logo mr-auto scrollto"><img src="{{ url("resources/assets/front_assets/img/verizon/verizon-logo.png") }}" alt="Verizon Logo" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ Request::is('verizon') ? 'active' : '' }}"><a href="{{ URL::to('/verizon') }}">Home</a></li>
          <li class="{{ Request::is('verizon/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/verizon/tv-deals') }}">TV</a></li>
          <li class="{{ Request::is('verizon/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/verizon/internet-deals') }}">Internet</a></li>
          <li class="{{ Request::is('verizon/mobility-deals') ? 'active' : '' }}"><a href="{{ URL::to('/verizon/mobility-deals') }}">Mobility</a></li>
          <li class="{{ Request::is('verizon/bundle-deals') ? 'active' : '' }}"><a href="{{ URL::to('/verizon/bundle-deals') }}">Bundle</a></li>


        </ul>

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
