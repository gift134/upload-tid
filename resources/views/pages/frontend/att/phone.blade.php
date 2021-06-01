@extends('layouts.att_main')
@section('content')

<section id="att_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>Get AT&T TV and enjoy a year of HBO® included</h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(7, 'phone_phone') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(7, 'phone_phone') }}</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 responsive-img">
        <img src="/resources/assets/front_assets/img/att/att-phone.png" class="img-fluid" alt="AT&T Prepaid Deals">
      </div>
    </div>
  </div>

</section>

  <main id="main">

   <!-- ======= Icon Boxes Section ======= -->
   <section id="price-boxes" class="price-boxes">
    <div class="container">

      <div class="row">
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box" style="height:700px">
            <h2>PHONE 200</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop no-display"></i> <i class="icofont-mobile-phone"></i></div>
            <h4><sup>$</sup>25.00<span> / month</span></h4>
            <p class="description">plus taxes</p>
              <h3>See features and benefits:</h3>
            <ul>
              <li>Unlimited calling to other AT&T Phone customers.</li>
              <li>200 minutes of anytime calling to anyone within the U.S., to Puerto Rico, and the U.S. Virgin Islands.</li>
              <li>Calls to other countries at additional per-minute rates.</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(7, 'phone_phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(7, 'phone_phone') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="price-box" style="height:700px">
            <h2>PHONE UNLIMITED NORTH AMERICA</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop no-display"></i> <i class="icofont-mobile-phone"></i></div>
            <h4><sup>$</sup>19.99<span> / month</span></h4>
            <p class="description">plus taxes when bundled with TV and Internet</p>
            <h3>See features and benefits:</h3>
            <ul>
              <li>Unlimited nationwide calling within the U.S. and to Canada, Puerto Rico, the U.S. Virgin Islands, Guam, and the Northern Marianas.</li>
              <li>Calls to other countries at additional per-minute.</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(7, 'phone_phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(7, 'phone_phone') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="price-box" style="height:700px">
            <h2>PHONE INTERNATIONAL PLUS</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop no-display"></i> <i class="icofont-mobile-phone"></i></div>
            <h4><sup>$</sup>40.99<span> / month</span></h4>
            <p class="description">plus taxes</p>
            <h3>See features and benefits:</h3>
            <ul>
              <li>Unlimited calling within the U.S., Canada, Mexico, and U.S. Puerto Rico, the U.S. Virgin Islands, Guam and the Northern Marianas, when bundled with other qualifying AT&T services.</li>
              <li>Low international rates to 22+ countries with additional discounts to many others.</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(7, 'phone_phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(7, 'phone_phone') }}</a>
            </div>
          </div>
        </div>


      </div>
      <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change. Req’s you to select offer.</p>
    </div>
  </section><!-- End Icon Boxes Section -->

      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">Experience the AT&T difference</h4>
                <p class="description">Step up to next-generation digital home phone service for superior sound clarity and over 25 time-saving calling features. For convenience and reliability, AT&T is the connection you can count on.</p>

            </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/att/texting.jpg" class="img-fluid animated" alt="Home Phone Servier | AT&T">
            </div>

          </div>
        </div>

      </section>

      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">



            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/entertainment.jpg" class="img-fluid animated" alt="Entertainment | AT&T">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

              <h4 class="title">Making phone service affordable</h4>
              <p class="description">AT&T believes everyone should have access to a phone. Our discounted plans make basic phone service more affordable for qualified customers.</p>

          </div>

          </div>
        </div>

      </section>

      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">Home phone & accessories</h4>
                <p class="description">Cordless and corded telephones, office solutions, and home phone features to make your life easier.</p>

            </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/att/tablet-women.jpg" class="img-fluid animated" alt="Phone & Accessories | AT&T">
            </div>

          </div>
        </div>

      </section>

  </main><!-- End #main -->


@endsection
