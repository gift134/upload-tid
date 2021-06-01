
  <header id="header" class="fixed-top header-scrolled'">
    <div class="container d-flex align-items-center">

      <a href="/" class="logo mr-auto scrollto"><img src="{{ url("resources/assets/front_assets/img/frontier/frontier-logo.jpg") }}" alt="Frontier Logo" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ Request::is('frontier') ? 'active' : '' }}"><a href="{{ URL::to('/frontier') }}">Home</a></li>
          <li class="{{ Request::is('frontier/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/frontier/tv-deals') }}">TV</a></li>
          <li class="{{ Request::is('frontier/phone-deals') ? 'active' : '' }}"><a href="{{ URL::to('/frontier/phone-deals') }}">Phone</a></li>
          <li class="{{ Request::is('frontier/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/frontier/internet-deals') }}">Internet</a></li>
          <li class="{{ Request::is('frontier/bundle-deals') ? 'active' : '' }}"><a href="{{ URL::to('/frontier/bundle-deals') }}">Bundle</a></li>
        </ul>

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
