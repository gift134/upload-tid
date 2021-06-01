
  <header id="header" class="fixed-top header-scrolled'">
    <div class="container d-flex align-items-center">

    <a href="/" class="logo mr-auto scrollto"><img src="{{ url("resources/assets/front_assets/img/sprint/sprint-logo.jpg") }}" alt="Sprint Logo" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li class="{{ Request::is('sprint/mobility-deals') ? 'active' : '' }}"><a href="{{ URL::to('/spectrum/mobility-deals') }}">Mobility</a></li>

        </ul>

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
