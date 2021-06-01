@extends('layouts.verizon_main')
@section('content')

<section>

  <div class="container d-flex align-items-center" id="verizon_intro_tv">
    <div class="row">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>Your TV. Your way.</h1>
        <h2>With Your Fios TV, you’ll get what you want with no surprises or annual contracts.</h2>
        <a href="tel:{{ Helper::providers_phone_number(4) }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_number(4) }}</a>
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
      <h2 class="price-boxes-title">Fios TV Plans</h2>
      <div class="row">

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box">
            <h2>Your Fios TV</h2>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop no-display"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <div style="height:125px;">
            <h3>125+ channels. Choose 5 of your favorite channels and we'll recommend a package based on your preferences.</h3>
            </div>
            <h4><sup>$</sup>50.00<span> / month</span></h4>

            <p class="description">Per month + taxes & equip. charges.</p>

            <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-plus" style="color:#333"></i></span>For new TV residential customers. $12/mo Set-top Box and $15/mo router chargers apply. $99 set-up & taxes & terms may apply. Subject to credit approval & may require a deposit. Fios available in select areas.</li>
              </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_number(4) }}" class="btn-call">Call {{ Helper::providers_phone_number(4) }}</a>
            </div>
          </div>
        </div>


        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box">
            <h2>More Fios TV</h2>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop no-display"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <div style="height:125px;">
            <h3>300+ channels. Get our most popular channels plus regional sports.</h3>
            </div>
            <h4><sup>$</sup>70.00<span> / month</span></h4>

            <p class="description">Per month + taxes.</p>

            <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>1st Set Top Box included</li>
                <li><span class="fa-li"><i class="fas fa-plus" style="color:#333"></i></span>Offer valid thru 4.29.20 for eligible new res. custs. $99 set-up & taxes & terms may apply. Subj. to credit approval & may require a deposit. Fios avail. in selectareas.</li>
              </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_number(4) }}" class="btn-call">Call {{ Helper::providers_phone_number(4) }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box">
            <h2>The Most Fios TV</h2>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop no-display"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <div style="height:125px;">
            <h3>425+ channels. Kick back with the best sports and movie channels.</h3>
            </div>
            <h4><sup>$</sup>90.00<span> / month</span></h4>
            <p class="description">Per month + taxes.</p>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>1st Set Top Box included</li>
              <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>Basic DVR included</li>
              <li><span class="fa-li"><i class="fas fa-plus" style="color:#333"></i></span>Offer valid thru 4.29.20 for eligible new res. custs. $99 set-up & taxes & terms may apply. Subj. to credit approval & may require a deposit. Fios avail. in selectareas.</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_number(4) }}" class="btn-call">Call {{ Helper::providers_phone_number(4) }}</a>
            </div>
          </div>
        </div>

      </div>
      <p style="text-align:left; font-size16px;margin-top:30px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>
    </div>
  </section><!-- End Icon Boxes Section -->

     <!-- ======= Icon Boxes Section ======= -->
     <section id="icon-boxes" class="icon-boxes">
      <div class="container">

        <h2 style="text-align:center;padding:50px 0;" data-aos="fade-up">Your Fios TV</h2>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              <h4 class="title">All the essentials.</h4>
              <p class="description">Pick your five favorite channels, and we’ll recommend a package based on your preferences. Your personalized plan will feature over 125+ channels including local networks.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <h4 class="title">The more the merrier.</h4>
              <p class="description">
                Need more TV? Pick a plan that has from 300 to 425+ channels, from kids’ content to regional sports to premium movies. Includes one set-top box and a DVR option if you choose The Most Fios TV.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <h4 class="title">Decisions made easy.</h4>
              <p class="description">
                Not sure which plan is right for you? Take the Fios Test Drive and watch 425+ channels for 60 days and we’ll recommend a perfect package based on your viewership.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <h4 class="title">Watch wherever.</h4>
              <p class="description">
                Don’t want a set top box? No problem. YouTube TV lets you catch live TV at home, on the road and virtually anywhere in between.
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
              <img src="/resources/assets/front_assets/img/verizon/tvapp.png" class="img-fluid animated" alt="Verizon FiOS TV One DVR" style="height:300px;">
          </div>

          <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

            <h4 class="title">Get more with Fios TV One DVR.</h4>

            <ul>
              <li>Use the Fios TV Voice Remote to change channels, search for programs and control your Multi-Room DVR.</li>
              <li>Enjoy a picture with four times the details of HD and a wider, deeper color range with 4K Ultra HD. </li>
              <li>Get direct access to Netflix and YouTube directly from the channel guide.</li>
              <li>Connect your Fios TV One Mini by Wi-Fi and put your TVs virtually anywhere in your home - no need to plug into a cable outlet.</li>
            </ul>

        </div>

        </div>

      </div>

    </section>


    <section class="section-content">
      <div class="container">
        <div class="row justify-content-between justify-content-center align-items-center">

          <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

            <h4 class="title">Watch TV almost anywhere - Fios TV app.</h4>
            <p class="description">Watch hundreds of channels, thousands of movies and shows on demand. Download the Fios TV app  and start streaming right away – even before your home service has been installed. Included with all plans.</p>

            </div>

          <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
              <img src="/resources/assets/front_assets/img/verizon/dvr-v3.png" class="img-fluid animated" alt="Verizon FiOS TV App" style="height:300px;">
          </div>

        </div>
      </div>

    </section>


  </main><!-- End #main -->

@endsection
