@extends('layouts.verizon_main')
@section('content')



  <section id="verizon_intro" class="d-flex align-items-center">

  <div class="container" >
    <div class="row">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>Internet and TV your way.</h1>
        <h2>Now go mix and match.</h2>
        <a href="tel:{{ Helper::providers_phone_type(4,'phone') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(4,'phone') }}</a>
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

      <h2 class="price-boxes-title">Get more streaming, gaming, sharing with Fios Home Internet.</h2>
      <div class="row">

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box">
            <h2>200 Mbps</h2>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop no-display"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <div style="height:125px;">
            <h3>Stream and download movies, shows and photos.</h3>
            </div>
            <h4><sup>$</sup>39.99<span> / month</span></h4>
            <div style="height: 50px;">
            <p class="description">Per month w/ Auto Pay + taxes & equip. charges.</p>
            </div>
            <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>Disney+ on us for 12 months ($6.99/mo. after)</li>
                <li><span class="fa-li"><i class="fas fa-plus" style="color:#333"></i></span>Genie HD DVR to store over 200 hours of TV</li>
              </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(4,'phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(4,'phone') }}</a>
            </div>
          </div>
        </div>


        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box">
            <h2>Your Fios TV</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <div style="height:125px;">
            <h3>125+ channels. Choose 5 of your favorite channels and we'll recommend a package based on your preferences.</h3>
            </div>
            <h4><sup>$</sup>50.00<span> / month</span></h4>
            <div style="height: 50px;">
            <p class="description">Per month + taxes & equip. charges.</p>
            </div>
            <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>Disney+ on us for 12 months ($6.99/mo. after)</li>
                <li><span class="fa-li"><i class="fas fa-plus" style="color:#333"></i></span>Genie HD DVR to store over 200 hours of TV</li>
              </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(4,'phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(4,'phone') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box">
            <h2>Home Phone</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop no-display"></i> <i class="icofont-mobile-phone"></i></div>
            <div style="height:125px;">
            <h3>Get the most out of your home phone with caller ID, spam blocking and more.</h3>
            </div>
            <h4><sup>$</sup>20.00<span> / month</span></h4>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(4,'phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(4,'phone') }}</a>
            </div>
          </div>
        </div>

      </div>
      <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>
    </div>
  </section><!-- End Icon Boxes Section -->

     <!-- ======= Icon Boxes Section ======= -->
     <section id="icon-boxes" class="icon-boxes">
      <div class="container">

        <h2 data-aos="fade-up">Finally, internet & TV your way.</h2>

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              {{-- <div class="icon"><i class="fas fa-hand-holding-usd"></i></div> --}}
              <h4 class="title">Pay for what you want.</h4>
              <p class="description">Mix and match any internet and TV plan to get what you want. And with Your Fios TV, you can pick your five favorite channels and we’ll recommend a plan based on your preferences.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              {{-- <div class="icon"><i class="fas fa-user-shield"></i></div> --}}
              <h4 class="title">No extra fees.</h4>
              <p class="description">
                With our new pricing model, your Fios bill has never been simpler. No broadcast or regional sports network fees, no surprises.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              {{-- <div class="icon"><i class="fas fa-tv"></i></div> --}}
              <h4 class="title">No more annual contracts.</h4>
              <p class="description">
                Life changes fast. Flexibility is important. With Mix and Match, you can change your plan every billing cycle without any penalties.
              </p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Icon Boxes Section -->



      <section class="section-content">

        <div class="container">

          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/verizon/girl-on-tab.jpg" class="img-fluid animated" alt="Verizon Fast Internet">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

              <h4 class="title">Stream with our fastest internet.</h4>

              <p class="description">Everyone in the house can do what they want, all at the same time with Fios Gigabit Connection on the 100% fiber-optic network.</p>

          </div>

          </div>

        </div>

      </section>


      <section class="section-content">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

              <h4 class="title">Have a Verizon mobile plan?</h4>
              <p class="description">Pair your Verizon mobile plan with a Fios Home Internet plan and get up to $10/mo off your Verizon Wireless bill and up to $10/mo off you Fios bill. Plus, get $10/mo toward you next phone or tablet.  </p>

              </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/verizon/livingroom-girl-phone.jpg" class="img-fluid animated" alt="Verizon Mobile Plan">
            </div>

          </div>
        </div>

      </section>




  </main><!-- End #main -->

@endsection
