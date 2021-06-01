@extends('layouts.att_main')
@section('content')

<section id="att_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>Get AT&T TV and enjoy a year of HBO® included</h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(7, 'phone_tv') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(7, 'phone_tv') }}</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 responsive-img">
        <img src="/resources/assets/front_assets/img/att/att-tv-m.png" class="img-fluid" alt="AT&T TV Deals">
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
              <li>Live TV, on-demand titles & 500 hours of cloud DVR storage</li>
              <li>Access to 5,000+ apps like Netflix & Pandora</li>
              <li>AT&T TV device and voice remote with Google Assistant</li>
              <li>12 months of HBO® and 3 months of Cinemax®, SHOWTIME®, STARZ®, and EPIX® on us</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel: {{ Helper::providers_phone_type(7, 'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(7, 'phone_tv') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="price-box" style="height:700px">
            <h2>CHOICETM PACKAGE</h2>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop no-display"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <h4><sup>$</sup>54.99<span> / month</span></h4>
            <p class="description">for 12 months plus taxes & equip. fee</p>
            <h3>See features and benefits:</h3>
            <ul>
              <li>45,000 on-demand titles, live TV & 500 hours of cloud DVR storage</li>
              <li>Access to 5,000+ apps like Netflix & Pandora</li>
              <li>AT&T TV device and voice remote with Google Assistant</li>
              <li>12 months of HBO® and 3 months of Cinemax®, SHOWTIME®, STARZ®, and EPIX® on us4</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(7, 'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(7, 'phone_tv') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="price-box" style="height:700px">
            <h2>XTRA PACKAGE</h2>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop no-display"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <h4><sup>$</sup>64.99<span> / month</span></h4>
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
              <a href="tel:{{ Helper::providers_phone_type(7, 'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(7, 'phone_tv') }}</a>
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

                <h4 class="title">All your favorite entertainment. All in one place.</h4>
                <p class="description">No dish. No cable. Just one small, sleek device that brings your favorite entertainment together. Simply turn it on to watch live TV and access over 40,000 on-demand titles, and seamlessly jump to your favorite apps downloaded on the Google Play Store.</p>

            </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/spectrum/entertainment.jpg" class="img-fluid animated" alt="Favorite Entertainment | AT&T">
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

                <h4 class="title">Get more done with your voice using Google Assistant</h4>
                <p class="description">Our voice remote with the Google Assistant helps you complete everyday tasks without leaving your couch. Use your voice to:</p>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>Find your favorite shows and movies.</li>
                  <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>Change channels and turn on closed captioning.</li>
                  <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>Check the traffic, weather, stocks, and news.</li>
                  <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>Ask questions and get answers from Google on your TV.</li>
                  <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>Control compatible smart home devices, including your lights and thermostat.</li>
                </ul>

            </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/spectrum/bundle.jpg" class="img-fluid animated" alt="Google Assistant | AT&T">
            </div>

          </div>
        </div>

      </section>


  </main><!-- End #main -->


@endsection
