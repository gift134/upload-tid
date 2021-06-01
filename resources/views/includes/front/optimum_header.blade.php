
  <header id="header" class="fixed-top header-scrolled'">
    <div class="container d-flex align-items-center">

        <a href="/" class="logo mr-auto scrollto"><img src="{{ url("resources/assets/front_assets/img/optimum/optimum-logo.png") }}" alt="Optimum Logo" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ Request::is('optimum') ? 'active' : '' }}"><a href="{{ URL::to('/optimum') }}">Home</a></li>
          <li class="{{ Request::is('optimum/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/optimum/tv-deals') }}">TV</a></li>
          <li class="{{ Request::is('optimum/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/optimum/internet-deals') }}">Internet</a></li>
          <li class="{{ Request::is('optimum/bundle-deals') ? 'active' : '' }}"><a href="{{ URL::to('/optimum/bundle-deals') }}">Bundle</a></li>


        </ul>

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
