
  <header id="header" class="fixed-top header-scrolled'">
    <div class="container d-flex align-items-center">

    <a href="/" class="logo scrollto"><img src="{{ url("resources/assets/front_assets/img/dish/DISH-Authorized-Retailer.png") }}" alt="Dish Logo" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ Request::is('dish') ? 'active' : '' }}"><a href="{{ URL::to('/dish') }}">Home</a></li>
          <li class="{{ Request::is('dish/tv-deals') ? 'active' : '' }}"><a href="{{ URL::to('/dish/tv-deals') }}">TV</a></li>
          <li class="{{ Request::is('dish/internet-deals') ? 'active' : '' }}"><a href="{{ URL::to('/dish/internet-deals') }}">Internet</a></li>
          <li class="{{ Request::is('dish/bundle-deals') ? 'active' : '' }}"><a href="{{ URL::to('/dish/bundle-deals') }}">Bundle</a></li>


        </ul>

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
