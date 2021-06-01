
  <header id="header" class="fixed-top header-scrolled'">
    <div class="container d-flex align-items-center">


     <a href="/" class="logo mr-auto scrollto"><img src="{{ url("resources/assets/front_assets/img/directv/logo-directv2.png") }}" alt="DirecTV Logo" class="img-fluid"></a>
      <style>
        .nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a{
          color: bisque;
          opacity: .7!important;
          transition: opacity .15s ease-in-out;
        }
        .nav-menu a{
          display: grid;
          text-align: center;
        }
        .nav-menu i{
          padding-bottom:10px;
          font-size: 35px;
        }
      </style>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ Request::is('directv') ? 'active' : '' }}"><a href="{{ URL::to('/directv') }}"><i class="icofont-home"></i>Home</a></li>
          <li class="{{ Request::is('directv/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/directv/tv-deals') }}"><i class="icofont-monitor"></i>TV</a></li>
          <li class="{{ Request::is('directv/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/directv/internet-deals') }}"><i class="icofont-laptop"></i>Internet</a></li>
          {{-- <li class="{{ Request::is('directv/phone-deals') ? 'active' : '' }}"><a href="{{ URL::to('/directv/phone-deals') }}"><i class="icofont-mobile-phone"></i>Phone</a></li> --}}
          <li class="{{ Request::is('directv/bundle-deals') ? 'active' : '' }}"><a href="{{ URL::to('/directv/bundle-deals') }}"><i class="icofont-gift"></i>Bundles</a></li>
        </ul>

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->