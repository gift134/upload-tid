
  <header id="header" class="fixed-top header-scrolled'">
    <div class="container d-flex align-items-center">

     <a href="/" class="logo mr-auto scrollto"><img src="{{ url('resources/assets/front_assets/img/buckeyebroadband/buckeyebroadband-logo.png') }}" alt="Buckeyebroadband Logo" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          {{-- <li class="{{ Request::is('buckeyebroadband') ? 'active' : '' }}"><a href="{{ URL::to('/buckeyebroadband') }}">Home</a></li> --}}
          <li class="{{ Request::is('buckeyebroadband/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/buckeyebroadband/internet-deals') }}">Internet</a></li>
          <li class="{{ Request::is('buckeyebroadband/phone-deals') ? 'active' : '' }}"><a href="{{ URL::to('/buckeyebroadband/phone-deals') }}">Phone</a></li>

          <li class="{{ Request::is('buckeyebroadband/bundle-deals') ? 'active' : '' }}"><a href="{{ URL::to('/buckeyebroadband/bundle-deals') }}">Bundle</a></li>


        </ul>

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
