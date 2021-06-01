@extends('layouts.spectrum_main')
@section('content')

<section id="spectrum_intro_phone" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1 style="color:white!important">Spectrum Internet Plans, Packages, and Prices</h1>
        {{-- <h2 style="color:white!important">No Contracts, No Strings Attached</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(9,'phone_phone') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(9,'phone_phone') }}</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 responsive-img">

      </div>
    </div>
  </div>

</section>

  <main id="main">


    <!-- ======= Icon Boxes Section ======= -->
    <section id="price-boxes" class="price-boxes">
      <div class="container">

        <div class="row d-flex justify-content-center">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="price-box" style="height:720px">
              <h2>Triple Play Select</h2>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop "></i> <i class="icofont-mobile-phone"></i></div>
              <h4><sup>$</sup>49.99<span> / month</span></h4>
              <p class="description">for 12 months when bundled</p>
              <h3>Thousands of movies and shows available on demand</h3>
              <ul>
                <li>125+ HD channels</li>
                <li>Speeds up to 940 Mbps</li>
                <li>Unlimited calling in the US, Canada, Mexico, and US territories</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(9,'phone_phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(9,'phone_phone') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="price-box" style="height:720px">
              <h2>Double Play Select</h2>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
              <h4><sup>$</sup>124.97<span> / month</span></h4>
              <p class="description">for 12 months when bundled</p>
              <h3>HBO® and SHOWTIME® included</h3>
              <ul>
                <li>175+ HD channels</li>
                <li>Speeds up to 940 Mbps</li>
                <li>Included modem</li>
                <li>Unlimited calling in the US, Canada, Mexico, and US territories</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(9,'phone_phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(9,'phone_phone') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="price-box" style="height:720px">
              <h2>Triple Play Gold</h2>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
              <h4><sup>$</sup>144.97<span> / month</span></h4>
              <p class="description">for 12 months when bundled</p>
              <h3>STARZ®, TMC®, STARZ ENCORE®, and NFL RedZone included</h3>
              <ul>
                <li>200+ HD Channels</li>
                <li>Thousands of movies and shows on demand</li>
                <li>Internet speeds up to 100 Mbps</li>
                <li>Included modem</li>
                <li>Unlimited calling in the US, Canada, Mexico, and US territories</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(9,'phone_phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(9,'phone_phone') }}</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Icon Boxes Section -->

    {{-- <section>
      <div class="container">
        <div class="row">
          <div col-lg-12 d-flex align-items-stretch mb-5 mb-lg-0>

          </div>
          <div col-lg-12 d-flex align-items-stretch mb-5 mb-lg-0>

          </div>
          <div col-lg-12 d-flex align-items-stretch mb-5 mb-lg-0>

          </div>
          <div col-lg-12 d-flex align-items-stretch mb-5 mb-lg-0>

          </div>
        </div>
      </div>
    </section> --}}

      <!-- ======= Icon Boxes Section ======= -->
      <section id="icon-boxes" class="icon-boxes" style="background: aliceblue;">
        <div class="container">

          <h2 style="text-align:center;padding:50px 0;">Spectrum Will Transform Your Entertainment Experience</h2>

          <div class="row">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
                <h4 class="title">Caller ID on TV</h4>
                <p class="description">
                Stay connected on the go with access to thousands of Spectrum WiFi
                Hotspots across the nation.
                  </p>

              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-user-shield"></i></div>
                <h4 class="title">Voice Online Manager</h4>
                <p class="description">
                  No need to fiddle with your phone features on your
                  handset—Spectrum’s Voice Online Manager lets you change your phone
                  settings from anywhere with an internet connection.
                  </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-tv"></i></div>
                <h4 class="title">Nomorobo</h4>
                <p class="description">
                  Nomorobo means no more robocalls or telemarketers pestering you on
                  your home phone. Enable this helpful feature from your Voice
                  Online Manager.
                  </p>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Icon Boxes Section -->

      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">Effortlessly Fast Internet</h4>
                <p class="description">Instead of offering a confusing range of download speeds, Spectrum keeps things fast and simple. With the well-priced 100 Mbps Spectrum Internet, you can stream HD movies, play online games, and have multiple devices on the same internet connection without experiencing lag.</p>
                <ul class="fa-ul" style="
                columns: 2;
                -webkit-columns: 2;
                -moz-columns: 2;
                ">
                  <li><span class="fa-li"><i class="far fa-check-circle"></i></span>Voicemail</li>
                  <li><span class="fa-li"><i class="far fa-check-circle"></i></span>Forward All or Selected Calls</li>
                  <li><span class="fa-li"><i class="far fa-check-circle"></i></span>VIP Ring</li>
                  <li><span class="fa-li"><i class="far fa-check-circle"></i></span>Repeat Dialing</li>
                  <li><span class="fa-li"><i class="far fa-check-circle"></i></span>Block Unwanted Callers</li>
                  <li><span class="fa-li"><i class="far fa-check-circle"></i></span>Trace Call</li>
                  <li><span class="fa-li"><i class="far fa-check-circle"></i></span>Readable Voicemail</li>
                  <li><span class="fa-li"><i class="far fa-check-circle"></i></span>Set Backup Phone</li>
                  <li><span class="fa-li"><i class="far fa-check-circle"></i></span>3-Way Calling</li>
                  <li><span class="fa-li"><i class="far fa-check-circle"></i></span>Caller ID on TV</li>
                  <li><span class="fa-li"><i class="far fa-check-circle"></i></span>Forward Calls When Busy</li>
                  <li><span class="fa-li"><i class="far fa-check-circle"></i></span>Nomorobo</li>


                </ul>
            </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/eff-internet.jpg" class="img-fluid animated" alt="Spectrum Fast Internet">
            </div>

          </div>
        </div>

      </section>

      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/modem.png" class="img-fluid animated" alt="Spectrum Home Phone with TV and Internet">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
              <h4 class="title">Save More by Bundling Spectrum Home Phone with TV and Internet</h4>
              <p class="description">You’re already saving money on long-distance rates with Spectrum Voice, so why not cut your bills down even more? Combining your phone plan in a Spectrum Triple Play will save you money on phone, internet, and TV, and you won’t have to worry about paying multiple bills to different providers.</p>
          </div>

          </div>
        </div>

      </section>


  </main><!-- End #main -->


@endsection
