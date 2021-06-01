@extends('layouts.att_main')
@section('content')

<section id="att_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>Get Entertained.<br />
            Stay Connected.
        </h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(7, 'phone') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(7, 'phone') }}</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 responsive-img">
        <img src="/resources/assets/front_assets/img/att/att-home-m.png" class="img-fluid" alt="AT&T TV, Internet, Phone, Mobility and Bundles Deals">
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
            <h2>ENTERTAINMENT PACKAGE*</h2>
            <div class="price-icon"><i class="icofont-monitor "></i> <i class="icofont-laptop no-display"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <h4><sup>$</sup>49.99<span> / month</span></h4>
            <p class="description">for 12 mos. plus taxes
              <br />
              w/24-mo. agmt. Prices higher in 2nd year.*</p>
              <h3>See features and benefits:</h3>
            <ul>
              <li>Live TV, on-demand titles & 500 hours of cloud DVR storage1</li>
              <li>Access to 5,000+ apps like Netflix & Pandora2</li>
              <li>AT&T TV device and voice remote with Google Assistant3</li>
              <li>12 months of HBO® and 3 months of Cinemax®, SHOWTIME®, STARZ®, and EPIX® on us4</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(7, 'phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(7, 'phone') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="price-box" style="height:700px">
            <h2>Superfast 1 GIG Internet</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <h4><sup>$</sup>49.99<span> / month</span></h4>
            <p class="description">for 12 months plus taxes & equip. fee</p>
            <h3>See features and benefits:</h3>
            <ul>
              <li>20x faster upload than cable</li>
              <li>100mbps connection - our max speed bandwidth</li>
              <li>No anual contract</li>
              <li>Over 99% reliability</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(7, 'phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(7, 'phone') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="price-box" style="height:700px">
            <h2>PHONE + INTERNET</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
            <h4><sup>$</sup>72.98<span> / month</span></h4>
            <p class="description">for 12 mos. plus taxes & internet equip. fee
              <br/>
              $10/mo. equip. fee applies. Incl. 1TB data/mo., overage chrgs apply. Geo & svc. restr’s apply
            </p>
            <h3>See features and benefits:</h3>
            <ul>
              <li>Fast online speeds for the whole family</li>
              <li>Digital phone with unlimited nationwide calling</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(7, 'phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(7, 'phone') }}</a>
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

                <h4 class="title">All your favorite entertainment. Together.</h4>
                <p class="description">A voice remote with the Google Assistant. Live TV. 40,000 on-demand titles. Stream over 5,000 popular apps like Netflix and Pandora available on the Google Play Store. Record 500 hours to your Cloud DVR. It’s TV at its greatest. And for a limited time, get a year of HBO® on us when you order AT&T TV.*</p>

            </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/att/tv-watching.jpg" class="img-fluid animated" alt="TV Watch | AT&T">

            </div>

          </div>
        </div>

      </section>

      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">



            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/bundle.jpg" class="img-fluid animated" alt="Best Unlimited Plans | AT&T">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

              <h4 class="title">Our best unlimited plan. On America’s best network.</h4>

              <ul>
                <li>Unlimited talk, text, and data</li>
                <li>High-def streaming</li>
                <li>30GB hotspot data per line</li>
                <li><strong>HBO® included—plus HBO MaxSM coming soon</strong></li>
              </ul>
              <p class="description">After 100GB, AT&T may temporarily slow data speeds if the network is busy.</p>

          </div>

          </div>
        </div>

      </section>





  </main><!-- End #main -->


@endsection
