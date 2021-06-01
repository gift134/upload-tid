
  <header id="header" class="fixed-top header-scrolled'">
    <div class="container d-flex align-items-center">

     <a href="/" class="logo mr-auto scrollto"><img src="{{ url("resources/assets/front_assets/img/xfinity/xfinity-logo.png") }}" alt="Xfinity from Comcast Logo" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ Request::is('xfinity') ? 'active' : '' }}"><a href="{{ URL::to('/xfinity') }}">Home</a></li>
          <li class="{{ Request::is('xfinity/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/xfinity/tv-deals') }}">TV</a></li>
          <li class="{{ Request::is('xfinity/phone-deals') ? 'active' : '' }}"><a href="{{ URL::to('/xfinity/phone-deals') }}">Phone</a></li>
          <li class="{{ Request::is('xfinity/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/xfinity/internet-deals') }}">Internet</a></li>
          <li class="{{ Request::is('xfinity/mobility-deals') ? 'active' : '' }}"><a href="{{ URL::to('/xfinity/mobility-deals') }}">Mobility</a></li>
          <li class="{{ Request::is('xfinity/bundle-deals') ? 'active' : '' }}"><a href="{{ URL::to('/xfinity/bundle-deals') }}">Bundle</a></li>

        </ul>

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
