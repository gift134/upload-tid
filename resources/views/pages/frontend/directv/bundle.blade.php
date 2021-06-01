@extends('layouts.directv_main')
@section('content')

<section id="directv_intro" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">

        <h1>Watch More, Pay Less with DirecTV Bundle Packages</h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(4986,'phone_bundles') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(4986,'phone_bundles') }}</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 responsive-img">
        <img src="/resources/assets/front_assets/img/directv/directv-bundle.png" class="img-fluid" alt="DirecTV Bundles Deals">
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
            <div class="home-first-deals3">
                <h2>Bundle DIRECTV SELECT™<br />
                  All-Included + AT&T Internet</h2>
            </div>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>

            <h5>155+ channels</h5>
            <h4><sup>$</sup>79.98<span> / month</span></h4>
            <p class="description" style="height:120px;">w/ 24-mo. TV agmt & combined bill. Autopay & Paperless bill req’d. TV price higher in 2nd year. $10/mo. internet equip. fee applies.* Incl Unlimited data allowance ($30 value) at no add’l charge.†</p>
            <h3 class="desc">See features & benefits:</h3>
            <ul>
              <li>Watch all the TV you love and get internet speeds speeds up to 100 Mbps for just $79.98/mo. for 12 months plus taxes & internet equip. fee.</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(4986,'phone_bundles') }}" class="btn-call">Call {{ Helper::providers_phone_type(4986,'phone_bundles') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="price-box">
              <div class="home-second-deals3">
                  <h2>Bundle DIRECTV ENTERTAINMENT<br />All-Included + AT&T Internet</h2>
              </div>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>

              <h5>165+ channels</h5>
              <h4><sup>$</sup>84.98<span> / month</span></h4>
              <p class="description" style="height:120px;">w/ 24-mo. TV agmt & combined bill. Autopay & Paperless bill req’d. TV price higher in 2nd year. $10/mo. internet equip. fee applies.* Incl Unlimited data allowance ($30 value) at no add’l charge.†</p>
              <h3 class="desc">See features & benefits:</h3>
              <ul>
               <li>Watch all the TV you love and get internet speeds speeds up to 100 Mbps for just $84.98/mo. for 12 months plus taxes & internet equip. fee.</li>

              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(4986,'phone_bundles') }}" class="btn-call">Call {{ Helper::providers_phone_type(4986,'phone_bundles') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="price-box">
              <div class="home-third-deals3">
                  <h2>Bundle DIRECTV CHOICE™<br />All-Included + AT&T Internet</h2>
              </div>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>

              <h5>185+ channels</h5>
              <h4><sup>$</sup>89.98<span> / month</span></h4>
              <p class="description" style="height:120px;">for 12 mos. plus taxes and Regional Sports Fee<br />
                w/24-mo. agmt & other qualifying AT&T svc (min. $39.99/mo. + taxes and fees). AutoPay & Paperless bill req’d. Prices higher in 2nd year. Regional Sports Fee up to $9.99/mo. is extra & applies.* Req’s you to select offer.</p>
                <h3 class="desc">See features & benefits:</h3>
              <ul>
               <li>Watch all the TV you love and get internet speeds speeds up to 100 Mbps for just $89.98/mo. for 12 months plus taxes & internet equip. fee.</li>

              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(4986,'phone_bundles') }}" class="btn-call">Call {{ Helper::providers_phone_type(4986,'phone_bundles') }}</a>
              </div>
            </div>
          </div>
        </div>

      </div>
      <p style="text-align:center; font-size:16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>
    </div>
  </section><!-- End Icon Boxes Section -->

  <section>
    <div class="container">
      <div class="row justify-content-between justify-content-center align-items-center">

        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h4 class="title">Get DIRECTV and get a year of HBO on us.</h4>

            <p class="description">Powerful dramas, hilarious comedies, big hit movies and so much more!</p>
          </div>

        <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
            <img src="/resources/assets/front_assets/img/spectrum/bundle.jpg" class="img-fluid animated" alt="HBO | DirecTV">
        </div>

      </div>
    </div>

  </section>

  <section style="background: aliceblue;">

    <div class="container">

      <div class="row justify-content-between justify-content-center align-items-center">

        <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
            <img src="/resources/assets/front_assets/img/directv/tv-sofa.jpg" class="img-fluid animated" alt="DirecTV Bundles">
        </div>

        <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

          <h4 class="title">Save Big with DIRECTV Bundles</h4>

          <ul class="fa-ul" style="color:#333">
            <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>Plus, get 3 months of HBO®, Cinemax,® SHOWTIME,® STARZ® and EPIX® included at no extra charge.</li>
            <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>Get Genie® HD DVR with select TV packages</li>
            <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>DIRECTV rated higher in customer satisfaction than Cable for 19 years running</li>
            <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>Count on a 99% reliable* connection when you bundle DIRECTV with AT&T Internet</li>
            <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>Stay ultra connected when you bundle AT&T Internet + home phone with DIRECTV</li>
          </ul>

      </div>

      </div>

    </div>

  </section>


  </main><!-- End #main -->


@endsection
