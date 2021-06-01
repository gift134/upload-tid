@extends('layouts.frontier_main')
@section('content')

<section id="frontier_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1 style="color:#17355e!important">Get the speed and dependability of FiOS® from Frontier</h1>
        {{-- <h2 style="color:white!important">No Contracts, No Strings Attached</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(15,'phone') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(15,'phone') }}</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 responsive-img">
        <img src="/resources/assets/front_assets/img/frontier/frontier-main.png" class="img-fluid" alt="Frontier TV, Internet, Phone, Mobility and Bundles Deals">
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
            <div class="price-box">
              <h2>FiOS 50/50 + FiOS TV Prime HD</h2>
              <div class="price-icon"><i class="icofont-monitor "></i> <i class="icofont-laptop "></i> <i class="icofont-mobile-phone no-display"></i></div>
              <h4><sup>$</sup>99.98<span> / month</span></h4>
              <p class="description">for 12 months. Actual speeds may vary. Installation, equipment fees, Internet Infrastructure Surcharge, Quantum service fee, broadcast fee, taxes & other fees apply. Services subject to availability and all applicable terms and conditions.</p>

              <ul>
                <li>Max wired speeds as fast as 50/50 Mbps</li>
                <li>250 Channels + 40 HD Channels</li>
                <li>No data caps</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(15,'phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(15,'phone') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="price-box">
              <h2>FiOS 500/500 + FiOS TV Prime HD</h2>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
              <h4><sup>$</sup>109.98<span> / month</span></h4>
              <p class="description">for 12 months. Actual speeds may vary. Installation, equipment fees, Internet Infrastructure Surcharge, Quantum service fee, broadcast fee, taxes & other fees apply. Services subject to availability and all applicable terms and conditions.</p>

              <ul>
                <li>Max wired speeds as fast as 500/500 Mbps</li>
                <li>250 Channels + 40 HD Channels</li>
                <li>No data caps</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(15,'phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(15,'phone') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="price-box">
              <h2>FiOS 500 + FiOS TV Extreme HD + Digital Voice</h2>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
              <h4><sup>$</sup>124.98<span> / month</span></h4>
              <p class="description">for 12 months. Actual speeds may vary. Installation, equipment fees, Internet Infrastructure Surcharge, Quantum service fee, VoIP admin. fee, broadcast fee, taxes & other fees apply. Services subject to availability and all applicable terms and conditions.</p>

              <ul>
                <li>Max wired speeds as fast as 500/500 Mbps</li>
                <li>300+ Channels</li>
                <li>No data caps</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(15,'phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(15,'phone') }}</a>
              </div>
            </div>
          </div>


        </div>
        <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>

      </div>
    </section><!-- End Icon Boxes Section -->






      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">Save More Money When You Bundle</h4>
                <p class="description">The fiber optic network Frontier uses for its FiOS services delivers clear HD video, top quality Internet, and long-distance phone calls that don’t drop. Get all these great features, plus added savings with a FiOS Bundle from Frontier.</p>
                <ul  style="columns: 2;
                -webkit-columns: 2;
                -moz-columns: 2;">
                  <li>Over 400 digital channels</li>
                  <li>Streaming HD video</li>
                  <li>A Wireless Router to create a Wi-Fi hotspot</li>
                  <li>Speeds as fast as 1 Gbps*</li>
                  <li>Clear long-distance phone calls</li>
                  <li>A private High-Speed Internet connection</li>
                </ul>
                <p style="font-size:13px;line-height: 16px;">*Available in select areas only, additional monthly fee applies. Frontier’s gigabit service is available in all Frontier fiber markets, but may not be available to every location depending on local network capacity or other technical details. While Frontier’s gigabit service is delivered on our 100% fiber-to-the-home network, actual speeds may vary due to limitations in the customer’s home network, devices in use, and/or Frontier’s network traffic conditions. Actual speeds will range up to 940 Mbps (download) and 880 Mbps (upload) and may vary depending on usage of the network and multiple other factors.</p>
            </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/iphone-472197_1280.jpg" class="img-fluid animated" alt="Frontier Bundle">
            </div>

          </div>

        </div>

      </section>

      <section style="background: aliceblue;">

        <div class="container">

          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/frontier/dishtv.jpg" class="img-fluid animated" alt="Frontier with Dish TV">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">

              <h4 class="title">DISH TV</h4>
              <p class="description">If you prefer satellite TV or if you live in an area where FiOS TV is not available, you can also get DISH TV service with your Frontier Internet service.</p>
          </div>

          </div>
        </div>

      </section>




  </main><!-- End #main -->


@endsection
