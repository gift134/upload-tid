
  <header id="header" class="fixed-top header-scrolled'">
    <div class="container d-flex align-items-center">

    <a href="/" class="logo mr-auto scrollto"><img src="{{ url("resources/assets/front_assets/img/tmobile/t-mobile-logo.png") }}" alt="T-Mobile Logo" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li class="{{ Request::is('tmobile/mobility-deals') ? 'active' : '' }}"><a href="{{ URL::to('/tmobile/mobility-deals') }}">Mobility</a></li>

        </ul>

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
