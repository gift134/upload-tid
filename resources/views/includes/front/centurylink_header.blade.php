
  <header id="header" class="fixed-top header-scrolled'">
    <div class="inner-padding container d-flex align-items-center">

    <a href="/" class="logo mr-auto scrollto"><img src="{{ url("resources/assets/front_assets/img/centurylink/logo.png") }}" alt="CenturyLink Logo" class="img-fluid"></a>

      <nav class="inner-padding nav-menu d-none d-lg-block">
        <ul>
          {{-- <li class="{{ Request::is('centurylink') ? 'active' : '' }}"><a href="{{ URL::to('/centurylink') }}">Home</a></li> --}}
          <li class="{{ Request::is('centurylink/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/centurylink/internet-deals') }}">Internet</a></li>
          <li class="{{ Request::is('centurylink/phone-deals') ? 'active' : '' }}"><a href="{{ URL::to('/centurylink/phone-deals') }}">Phone</a></li>

          <li class="{{ Request::is('centurylink/bundle-deals') ? 'active' : '' }}"><a href="{{ URL::to('/centurylink/bundle-deals') }}">Bundle</a></li>

        </ul>

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
