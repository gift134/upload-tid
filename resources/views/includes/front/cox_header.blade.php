
  <header id="header" class="fixed-top header-scrolled'">
    <div class="container d-flex align-items-center">

    <a href="/" class="logo mr-auto scrollto"><img src="{{ url("resources/assets/front_assets/img/cox/cox-retailer-logo.png") }}" alt="Cox Logo" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          {{-- <li class="{{ Request::is('cox') ? 'active' : '' }}"><a href="{{ URL::to('/cox') }}">Home</a></li> --}}
          <li class="{{ Request::is('cox/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/cox/tv-deals') }}">TV</a></li>
          <li class="{{ Request::is('cox/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/cox/internet-deals') }}">Internet</a></li>
          <li class="{{ Request::is('cox/bundle-deals') ? 'active' : '' }}"><a href="{{ URL::to('/cox/bundle-deals') }}">Bundle</a></li>
        </ul>

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
