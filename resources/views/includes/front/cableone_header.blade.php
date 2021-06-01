
  <header id="header" class="fixed-top header-scrolled'">
    <div class="container d-flex align-items-center">

     <a href="/" class="logo mr-auto scrollto"><img src="{{ url('resources/assets/front_assets/img/cableone/cableone-logo.png') }}" alt="CableOne Logo" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ Request::is('cableone') ? 'active' : '' }}"><a href="{{ URL::to('/cableone') }}">Home</a></li>
          <li class="{{ Request::is('cableone/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/cableone/tv-deals') }}">TV</a></li>
          <li class="{{ Request::is('cableone/phone-deals') ? 'active' : '' }}"><a href="{{ URL::to('/cableone/phone-deals') }}">Phone</a></li>
          <li class="{{ Request::is('cableone/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/cableone/internet-deals') }}">Internet</a></li>
          <li class="{{ Request::is('cableone/bundle-deals') ? 'active' : '' }}"><a href="{{ URL::to('/cableone/bundle-deals') }}">Bundle</a></li>
        </ul>

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
