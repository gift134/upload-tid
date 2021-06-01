
  <header id="header" class="fixed-top header-scrolled'">
    <div class="container d-flex align-items-center">

      
     <a href="/" class="logo mr-auto scrollto"><img src="/resources/assets/front_assets/img/home/tv.png" alt="TV Internet Deals Logo" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li class="{{ Request::is('') ? 'active' : '' }}"><a href="{{ URL::to('/') }}">Home</a></li>
            <li class="drop-down"><a href="">TV</a>
              <ul>
                <li class="{{ Request::is('att/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/att/tv-deals') }}">AT&T</a></li>
                <!--<li class="{{ Request::is('buckeyebroadband/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/buckeyebroadband/tv-deals') }}">Buck Eye Broadband</a></li>-->
                <li class="{{ Request::is('cableone/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/cableone/tv-deals') }}">Cable One</a></li>
                <li class="{{ Request::is('cox/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/cox/tv-deals') }}">Cox</a></li>
                <li class="{{ Request::is('directv/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/directv/tv-deals') }}">DirecTV</a></li>
                <li class="{{ Request::is('dish/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/dish/tv-deals') }}">Dish</a></li>
                <li class="{{ Request::is('frontier/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/frontier/tv-deals') }}">Frontier</a></li>
                <li class="{{ Request::is('optimum/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/optimum/tv-deals') }}">Optimum</a></li>
                <li class="{{ Request::is('rcn/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/rcn/tv-deals') }}">RCN</a></li>
                <li class="{{ Request::is('spectrum/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/spectrum/tv-deals') }}">Spectrum</a></li>
                <li class="{{ Request::is('verizon/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/verizon/tv-deals') }}">Verizon</a></li>
                <li class="{{ Request::is('xfinity/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/xfinity/tv-deals') }}">Xfinity</a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="">Internet</a>
                <ul>
                    <li class="{{ Request::is('att/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/att/internet-deals') }}">AT&T</a></li>
                    <li class="{{ Request::is('buckeyebroadband/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/buckeyebroadband/internet-deals') }}">Buck Eye Broadband</a></li>
                    <li class="{{ Request::is('cableone/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/cableone/internet-deals') }}">Cable One</a></li>
                    <li class="{{ Request::is('centurylink/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/centurylink/internet-deals') }}">CenturyLink</a></li>
                    <li class="{{ Request::is('cox/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/cox/internet-deals') }}">Cox</a></li>
                    <li class="{{ Request::is('directv/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/directv/internet-deals') }}">DirecTV</a></li>
                    <li class="{{ Request::is('dish/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/dish/internet-deals') }}">Dish</a></li>
                    <li class="{{ Request::is('frontier/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/frontier/internet-deals') }}">Frontier</a></li>
                    <li class="{{ Request::is('optimum/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/optimum/internet-deals') }}">Optimum</a></li>
                    <li class="{{ Request::is('rcn/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/rcn/internet-deals') }}">RCN</a></li>
                    <li class="{{ Request::is('spectrum/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/spectrum/internet-deals') }}">Spectrum</a></li>
                    <li class="{{ Request::is('verizon/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/verizon/internet-deals') }}">Verizon</a></li>
                    <li class="{{ Request::is('viasat/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/viasat/internet-deals') }}">Viasat</a></li>
                    <li class="{{ Request::is('xfinity/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/xfinity/internet-deals') }}">Xfinity</a></li>
                </ul>
              </li>
              <li class="drop-down"><a href="">Phone</a>
                <ul>
                    <li class="{{ Request::is('att/phone-deals') ? 'active' : '' }}"><a href="{{ URL::to('/att/phone-deals') }}">AT&T</a></li>
                    <li class="{{ Request::is('buckeyebroadband/phone-deals') ? 'active' : '' }}"><a href="{{ URL::to('/buckeyebroadband/phone-deals') }}">Buck Eye Broadband</a></li>
                    <li class="{{ Request::is('cableone/phone-deals') ? 'active' : '' }}"><a href="{{ URL::to('/cableone/phone-deals') }}">Cable One</a></li>
                    <li class="{{ Request::is('centurylink/phone-deals') ? 'active' : '' }}"><a href="{{ URL::to('/centurylink/phone-deals') }}">CenturyLink</a></li>
                    <li class="{{ Request::is('cox/phone-deals') ? 'active' : '' }}"><a href="{{ URL::to('/cox/phone-deals') }}">Cox</a></li>
                    <li class="{{ Request::is('frontier/phone-deals') ? 'active' : '' }}"><a href="{{ URL::to('/frontier/phone-deals') }}">Frontier</a></li>
                    <li class="{{ Request::is('spectrum/phone-deals') ? 'active' : '' }}"><a href="{{ URL::to('/spectrum/phone-deals') }}">Spectrum</a></li>
                    <li class="{{ Request::is('xfinity/phone-deals') ? 'active' : '' }}"><a href="{{ URL::to('/xfinity/phone-deals') }}">Xfinity</a></li>
                </ul>
              </li>
              <li class="drop-down"><a href="">Mobility</a>
                <ul>
                    <li class="{{ Request::is('att/mobility-deals') ? 'active' : '' }}"><a href="{{ URL::to('/att/mobility-deals') }}">AT&T</a></li>
                    <!--<li class="{{ Request::is('frontier/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/frontier/internet-deals') }}">Frontier</a></li>-->
                    <li class="{{ Request::is('spectrum/mobility-deals') ? 'active' : '' }}"><a href="{{ URL::to('/spectrum/mobility-deals') }}">Spectrum</a></li>
                    <li class="{{ Request::is('verizon/mobility-deals') ? 'active' : '' }}"><a href="{{ URL::to('/verizon/mobility-deals') }}">Verizon</a></li>
                    <li class="{{ Request::is('xfinity/mobility-deals') ? 'active' : '' }}"><a href="{{ URL::to('/xfinity/mobility-deals') }}">Xfinity</a></li>
                    <li class="{{ Request::is('sprint/mobility-deals') ? 'active' : '' }}"><a href="{{ URL::to('/sprint/mobility-deals') }}">Sprint</a></li>
                    <li class="{{ Request::is('tmobile/mobility-deals') ? 'active' : '' }}"><a href="{{ URL::to('/tmobile/mobility-deals') }}">T-Mobile</a></li>
                </ul>
              </li>
              <li class="drop-down"><a href="">Home Alarm</a>
                <ul>
                  <li class="{{ Request::is('adt-home-security') ? 'active' : '' }}"><a href="{{ URL::to('/adt-home-security') }}">Adt</a></li>
                  <li class="{{ Request::is('brinks-home-security') ? 'active' : '' }}"><a href="{{ URL::to('/brinks-home-security') }}">Brinks</a></li>
                  <li class="{{ Request::is('ring-home-security') ? 'active' : '' }}"><a href="{{ URL::to('/ring-home-security') }}">Ring</a></li>
                  <li class="{{ Request::is('simplisafe-home-security') ? 'active' : '' }}"><a href="{{ URL::to('/simplisafe-home-security') }}">Simplisafe</a></li>
                  <li class="{{ Request::is('vivint-home-security') ? 'active' : '' }}"><a href="{{ URL::to('/vivint-home-security') }}">Vivint</a></li>
                </ul>
              </li>
              <li class="drop-down"><a href="">Providers</a>
                <ul>
                    <li class="{{ Request::is('att') ? 'active' : '' }}"><a href="{{ URL::to('/att') }}">AT&T</a></li>
                    <li class="{{ Request::is('buckeyebroadbands/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/buckeyebroadband/internet-deals') }}">Buck Eye Broadband</a></li>
                    <li class="{{ Request::is('cableone') ? 'active' : '' }}"><a href="{{ URL::to('/cableone') }}">Cable One</a></li>
                    <li class="{{ Request::is('centurylink/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/centurylink/internet-deals') }}">CenturyLink</a></li>
                    <li class="{{ Request::is('cox/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/cox/tv-deals') }}">Cox</a></li>
                    <li class="{{ Request::is('directv') ? 'active' : '' }}"><a href="{{ URL::to('/directv') }}">DirecTV</a></li>
                    <li class="{{ Request::is('dish') ? 'active' : '' }}"><a href="{{ URL::to('/dish') }}">Dish</a></li>
                    <li class="{{ Request::is('frontier') ? 'active' : '' }}"><a href="{{ URL::to('/frontier') }}">Frontier</a></li>
                    <li class="{{ Request::is('optimum') ? 'active' : '' }}"><a href="{{ URL::to('/optimum') }}">Optimum</a></li>
                    <li class="{{ Request::is('rcn/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/rcn/tv-deals') }}">RCN</a></li>
                    <li class="{{ Request::is('spectrum') ? 'active' : '' }}"><a href="{{ URL::to('/spectrum') }}">Spectrum</a></li>
                    <li class="{{ Request::is('verizon') ? 'active' : '' }}"><a href="{{ URL::to('/verizon') }}">Verizon</a></li>
                    <li class="{{ Request::is('viasat') ? 'active' : '' }}"><a href="{{ URL::to('/viasat') }}">Viasat</a></li>
                    <li class="{{ Request::is('xfinity') ? 'active' : '' }}"><a href="{{ URL::to('/xfinity') }}">Xfinity</a></li>
                </ul>
              </li>
              <li><a href="{{ URL::to('/blog') }}">Blog</a></li>


        </ul>

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
