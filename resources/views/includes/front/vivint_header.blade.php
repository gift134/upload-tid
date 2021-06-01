<header id="header" class="fixed-top">
  <div class="container d-flex">

    <div class="logo mr-auto">
      <h1 class="text-light"><a href="/"><img src="/resources/assets/front_assets2/img/vivint-img/logo-vivint.png" alt="Vivint Logo"></a></h1>
    </div>

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="{{ Request::is('') ? 'active' : '' }}"><a href="{{ URL::to('/') }}">Home</a></li>
        {{-- <li class="drop-down"><a href="">Products</a>
          <ul>
            <li class="{{ Request::is('vivint-home-security/vivint-doorbell-camera-pro') ? 'active' : '' }}"><a href="{{ URL::to('/vivint-home-security/vivint-doorbell-camera-pro') }}">Doorbell Camera Pro</a></li>
            <li class="{{ Request::is('vivint-home-security/vivint-ping-camera') ? 'active' : '' }}"><a href="{{ URL::to('/vivint-home-security/vivint-ping-camera') }}">Ping Camera</a></li>
            <li class="{{ Request::is('vivint-home-security/vivint-outdoor-camera-pro') ? 'active' : '' }}"><a href="{{ URL::to('/vivint-home-security/vivint-outdoor-camera-pro') }}">Outdoor Camera Pro</a></li>
            <li class="{{ Request::is('vivint-home-security/vivint-playback-dvr') ? 'active' : '' }}"><a href="{{ URL::to('/vivint-home-security/vivint-playback-dvr') }}">Playback DVR</a></li>
            <li class="{{ Request::is('vivint-home-security/vivint-247-monitoring') ? 'active' : '' }}"><a href="{{ URL::to('/vivint-home-security/vivint-247-monitoring') }}">24/7 Monitoring</a></li>
            <li class="{{ Request::is('vivint-home-security/vivint-element-thermostat') ? 'active' : '' }}"><a href="{{ URL::to('/vivint-home-security/vivint-element-thermostat') }}">Element Thermostat</a></li>
            <li class="{{ Request::is('vivint-home-security/vivint-smart-lock') ? 'active' : '' }}"><a href="{{ URL::to('/vivint-home-security/vivint-smart-lock') }}">Kwikset Smart Lock</a></li>
            <li class="{{ Request::is('vivint-home-security/vivint-garage-door-controll') ? 'active' : '' }}"><a href="{{ URL::to('/vivint-home-security/vivint-garage-door-controll') }}">Garage Door Controll</a></li>
          </ul>
        </li> --}}


        {{-- <li class="{{ Request::is('vivint-home-security/quote') ? 'active' : '' }}"><a href="{{ URL::to('/vivint-home-security/quote') }}">Free Quotes</a></li> --}}

        <li class="get-started"><a href="tel:(844)529-7237">Call (844)529-7237</a></li>

      </ul>
    </nav>

  </div>
</header>
