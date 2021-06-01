
  <header id="header" class="fixed-top header-scrolled'">
    <div class="container d-flex align-items-center">

    <a href="/" class="logo mr-auto scrollto"><img src="{{ url("resources/assets/front_assets/img/spectrum/spectrum-log-white2.png") }}" alt="Spectrum Logo" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ Request::is('spectrum') ? 'active' : '' }}"><a href="{{ URL::to('/spectrum') }}">Home</a></li>
          <li class="{{ Request::is('spectrum/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/spectrum/tv-deals') }}">TV</a></li>
          <li class="{{ Request::is('spectrum/phone-deals') ? 'active' : '' }}"><a href="{{ URL::to('/spectrum/phone-deals') }}">Phone</a></li>
          <li class="{{ Request::is('spectrum/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/spectrum/internet-deals') }}">Internet</a></li>
          <li class="{{ Request::is('spectrum/mobility-deals') ? 'active' : '' }}"><a href="{{ URL::to('/spectrum/mobility-deals') }}">Mobility</a></li>
          <li class="{{ Request::is('spectrum/bundle-deals') ? 'active' : '' }}"><a href="{{ URL::to('/spectrum/bundle-deals') }}">Bundle</a></li>
        </ul>

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
