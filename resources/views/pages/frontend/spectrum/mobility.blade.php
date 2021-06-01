@extends('layouts.spectrum_main')
@section('content')

<section id="spectrum_intro_mobility" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1 style="color:white!important">Exclusive Mobile Plans for Internet Customers</h1>
        <h2 style="color:white!important">Save up to 40% on your monthly mobile bill* by switching to Spectrum Mobile.</h2>
        <a href="tel:{{ Helper::providers_phone_type(9,'phone_mobility') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(9,'phone_mobility') }}</a>
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

        <div class="row justify-content-center align-items-center">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="price-box" style="height:470px">
              <h2>Unlimited</h2>
              <div class="price-icon"><i <i class="icofont-mobile-phone"></i></div>
              <h4><sup>$</sup>45<span>/Line</span></h4>
              {{-- <p class="description">for 12 months</p> --}}
              {{-- <h3>175+ HD Channels</h3> --}}
              <ul>
                <li>Unlimited data</li>
                <li>More freedom to surf and stream</li>
                <li>Available for 4G and select 5G-ready devices</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(9,'phone_mobility') }}" class="btn-call">Call {{ Helper::providers_phone_type(9,'phone_mobility') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="price-box" style="height:470px">
              <h2>By the Gig</h2>
              <div class="price-icon"><i class="icofont-mobile-phone"></i></div>
              <h4><sup>$</sup>14<span>/GB</span></h4>
              {{-- <p class="description">for 12 months when bundled</p> --}}
              {{-- <h3>HBO® and SHOWTIME® included</h3> --}}
              <ul>
                <li>Pay for the data you use</li>
                <li>Share data between up to 5 lines</li>
                <li>Great value with the fastest overall speeds and the most reliable, coast to coast±</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(9,'phone_mobility') }}" class="btn-call">Call {{ Helper::providers_phone_type(9,'phone_mobility') }}</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Icon Boxes Section -->

<section style="background:#00629b;color:#fff;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <p style="margin-top:20px;">Spectrum Mobile plans come with:</p>
        <ul class="fa-ul">
            <li><i class="fa-li fa fa-check"></i>Unlimited Talk and Text</li>
            <li><i class="fa-li fa fa-check"></i>WiFi Hotspots</li>
            <li><i class="fa-li fa fa-check"></i>No Added Taxes and Fees</li>
            <li><i class="fa-li fa fa-check"></i>No Contracts</li>
          </ul>
            </div>
        </div>
    </div>
</section>



      <!-- ======= Icon Boxes Section ======= -->
      <section id="icon-boxes" class="icon-boxes" style="background: aliceblue;">
        <div class="container">

          <h2 style="text-align:center;padding:50px 0;">Stay Connected Wherever You Go</h2>

          <div class="row">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="icon-box">
                {{-- <div class="icon"><i class="fas fa-hand-holding-usd"></i></div> --}}
                <h4 class="title">CELLULAR</h4>
                <p class="description">
                    Spectrum Mobile offers service known for speed, reliability and performance – coast to coast.
                  </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                {{-- <div class="icon"><i class="fas fa-user-shield"></i></div> --}}
                <h4 class="title">HOME WIFI</h4>
                <p class="description">
                    Use Spectrum Internet at home and save data when your calls automatically switch from data to WiFi.
                  </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                {{-- <div class="icon"><i class="fas fa-tv"></i></div> --}}
                <h4 class="title">HOTSPOTS</h4>
                <p class="description">
                    500,000+ Spectrum WiFi hotspots seamlessly connect calls when you’re on-the-go nationwide.
                  </p>
              </div>
            </div>


          </div>

        </div>
      </section><!-- End Icon Boxes Section -->

      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center">

            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">Talk, Text and Roam the World</h4>
                <p class="description">Get free international texting within the United States, roaming in 200+ countries and competitive rates for talk, text and data use abroad.</p>

            </div>

            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">Unlimited Plan and 5G. Perfect Together.</h4>
                <p class="description">Spectrum’s Unlimited data plan supports 5G phones, so you’re ready to get started.</p>

            </div>

          </div>
        </div>

      </section>




  </main><!-- End #main -->


@endsection
