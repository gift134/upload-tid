@extends('layouts.att_main')
@section('content')

<section id="att_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1> AT&T TV , INTERNET AND PHONE <br /> Get the Best Deals</h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(7,'phone_bundles') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(7,'phone_bundles') }}</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 responsive-img">
        <img src="/resources/assets/front_assets/img/att/att-bundle-m.png" class="img-fluid" alt="AT&T Bundles Deals">
      </div>
    </div>
  </div>

</section>

  <main id="main">

   <!-- ======= Icon Boxes Section ======= -->
   <section id="price-boxes" class="price-boxes">
    <div class="container">

      <div class="row">

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="price-box" style="height:700px">
            <h2>XTRA PACKAGE</h2>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <h4><sup>$</sup>54.99<span> / month</span></h4>
            <p class="description">for 12 mos. plus taxes & internet equip. fee
              <br/>
              $10/mo. equip. fee applies. Incl. 1TB data/mo., overage chrgs apply. Geo & svc. restr’s apply
            </p>
            <h3>See features and benefits:</h3>
            <ul>
              <li>50,000 on-demand titles, live TV & 500 hours of cloud DVR storage</li>
              <li>Access to 5,000+ apps like Netflix & Pandora</li>
              <li>AT&T TV device and voice remote with Google Assistant</li>
              <li>12 months of HBO® and 3 months of Cinemax®, SHOWTIME®, STARZ®, and EPIX® on us</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(7,'phone_bundles')}}" class="btn-call">Call {{ Helper::providers_phone_type(7,'phone_bundles')}}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box" style="height:700px">
            <h2>PHONE + INTERNET</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
            <h4><sup>$</sup>72.98<span> / month</span></h4>
            <p class="description">for 12 mos. plus taxes & internet equip. fee</p>
              <h3>See features and benefits:</h3>
            <ul>
              <li>Fast online speeds for the whole family</li>
              <li>Digital phone with unlimited nationwide calling</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(7,'phone_bundles')}}" class="btn-call">Call {{ Helper::providers_phone_type(7,'phone_bundles') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="price-box" style="height:700px">
            <h2>PHONE + INTERNET + DIRECTV</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
            <h4><sup>$</sup>99.97<span> / month</span></h4>
            <p class="description">for 12 months plus taxes & equip. fee</p>
            <h3>See features and benefits:</h3>
            <ul>
              <li>DIRECTV SELECT™ package</li>
              <li>Over 155 of your favorite channels</li>
              <li>INCLUDED! Monthly equipment fees for an HD DVR</li>
              <li>Professional installation included</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(7,'phone_bundles')}}" class="btn-call">Call {{ Helper::providers_phone_type(7,'phone_bundles') }}</a>
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
                <img src="/resources/assets/front_assets/img/att/texting.jpg" class="img-fluid animated" alt="Home phone service | AT&T">
            </div>

          </div>
        </div>

      </section>

      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">



            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/att/tv-watching.jpg" class="img-fluid animated" alt="TV Watch | AT&T">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

              <h4 class="title">Get AT&T TVSM and enjoy a year of HBO® included</h4>
              <p class="description">Experience the most talked about shows and movies. Plus, you’ll also get access to HBO Max™, coming May 27! It’s all of HBO together with a collection of classic TV favorites and even more great movies, plus new Max Originals. Additionally, get Cinemax®, SHOWTIME®, STARZ® and EPIX® included at no extra charge for the first 3 months.</p>

          </div>

          </div>
        </div>

      </section>


      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">Our best unlimited plan. On America’s best network.</h4>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>Unlimited talk, text, and data</li>
                  <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>High-def streaming</li>
                  <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>30GB hotspot data per line</li>
                  <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>HBO® included—plus HBO MaxSM coming soon</li>
                </ul>
                <p class="description">After 100GB, AT&T may temporarily slow data speeds if the network is busy.</p>
            </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/spectrum/bundle.jpg" class="img-fluid animated" alt="Unlimited Plans | AT&T">
            </div>

          </div>
        </div>

      </section>





  </main><!-- End #main -->


@endsection
