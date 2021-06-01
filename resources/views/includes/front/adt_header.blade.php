<header id="header" class="fixed-top">
  <div class="container d-flex">

    <div class="logo mr-auto">
      <h1 class="text-light"><a href="/"><img src="/resources/assets/adt_assets/img/adt-img/adt-authorized-dealer-program.png" alt="ADT logo"></a></h1>
    </div>

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ URL::to('/') }}">Home</a></li>
        {{-- <li class="drop-down"><a href="">Products</a>
          <ul>
            <li class="{{ Request::is('adt-home-security/adt-security-system') ? 'active' : '' }}"><a href="{{ URL::to('/adt-home-security/adt-security-system') }}">System</a></li>
            <li class="{{ Request::is('adt-home-security/adt-security-cameras') ? 'active' : '' }}"><a href="{{ URL::to('/adt-home-security/adt-security-cameras') }}">Camera</a></li>
            <li class="{{ Request::is('adt-home-security/adt-emergency-alarm') ? 'active' : '' }}"><a href="{{ URL::to('/adt-home-security/adt-emergency-alarm') }}">Emergency Alarm</a></li>
            <li class="{{ Request::is('adt-home-security/adt-home-automation') ? 'active' : '' }}"><a href="{{ URL::to('/adt-home-security/adt-home-automation') }}">Home Automation</a></li>
          </ul>
        </li> --}}


        {{-- <li class="{{ Request::is('adt-home-security/quote') ? 'active' : '' }}"><a href="{{ URL::to('/adt-home-security/quote') }}">Free Quotes</a></li> --}}

        <li class="get-started"><a href="tel:(844)529-7254">Call (844)529-7254</a></li>

      </ul>
    </nav><!-- .nav-menu -->

  </div>
</header><!-- End Header -->
