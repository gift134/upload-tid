@extends('layouts.cableone_main')
@section('content')

<section id="cableone_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>Save with Cable ONE Elite Promotions</h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(45,'phone') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(45,'phone') }}</a>
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

      <div class="row">
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box" style="height:700px">
            <h2>Preferred Package: 100 Mbps Internet & Phone</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop "></i> <i class="icofont-mobile-phone"></i></div>
            <h4><sup>$</sup>75.00<span> / month</span></h4>
            <p class="description">for 6 months
                <br />
                $80.00/mo after trial offer.</p>
              <h3>Download speeds up to 100 Mbps</h3>
            <ul>
              <li>Unlimited long-distance cals in the continental US</li>
              <li>Voicemail and caller ID included</li>
              <li>300 GB data plan included</li>
              <li>No contract</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(45,'phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(45,'phone') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="price-box" style="height:700px">
            <h2>Preferred Package: 100 Mbps Internet & Cable</h2>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <h4><sup>$</sup>95.00<span> / month</span></h4>
            <p class="description">for 6 months
                <br />
                $134.00/mo after trial offer.</p>
            <h3>Download speeds up to 100 Mbps</h3>
            <ul>
              <li>Up to 100 channels</li>
              <li>300 GB data plan included</li>
              <li>Lag-free connection for up to 5 devices at once</li>
              <li>No contract</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(45,'phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(45,'phone') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="price-box" style="height:700px">
            <h2>Elite Package: 200 Mbps Internet, Cable & Phone</h2>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
            <h4><sup>$</sup>155.00<span> / month</span></h4>
            <p class="description">for 6 months
                <br />
                $204.00/mo after trial offer.
            </p>
            <h3>Download speeds up to 200 Mbps</h3>
            <ul>
              <li>Up to 100 channels</li>
              <li>Unlimited long-distance in the continental US</li>
              <li>TV Everywhere for on-the-go watching</li>
              <li>No contract</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(45,'phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(45,'phone') }}</a>
            </div>
          </div>
        </div>

      </div>
      <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>
    </div>
  </section><!-- End Icon Boxes Section -->



   <!-- ======= Icon Boxes Section ======= -->
   <section id="icon-boxes" class="icon-boxes" style="background: aliceblue;">
    <div class="container">

      <h2 style="text-align:center;padding:50px 0;" data-aos="fade-up">Cable ONE Streamlines Home Entertainment</h2>

      <div class="row">
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
            <h4 class="title">No Contracts</h4>
            <p class="description">
                You can’t predict the future—so if you need to unexpectedly cancel
                your plan with Cable ONE, don’t worry. All Cable ONE plans are
                contract-free.
              </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-user-shield"></i></div>
            <h4 class="title">WiFi ONE</h4>
            <p class="description">
                The whole point of Wi-Fi is to access the internet in more than
                one room of your home. Don’t settle for spotty Wi-Fi. Get
                whole-home coverage with WiFi ONE from Cable ONE.
              </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-tv"></i></div>
            <h4 class="title">Service Guard</h4>
            <p class="description">
                Keep your wiring and equipment running smoothly with Service
                Guard. Included in Elite plans, Service Guard covers the fees for
                any service visits you may need.
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

                <h4 class="title">Watch on the Go with TV Everywhere</h4>
                <p class="description">Don’t miss your favorite show just because you’re not on the couch. You can watch over sixty channels from your computer, tablet, or smartphone using TV Everywhere through your Cable ONE standard TV plan*</p>
                <p class="description">Through TV Everywhere, you can access thousands of on-demand videos and stream live channels like ESPN, Disney, and HGTV. Find the channels you want through their specific websites and apps, or see all your options at once with the Cable ONE TV Everywhere Portal.</p>
                <p class="description">Experience what it’s like for your cable package to go beyond at-home entertainment with TV Everywhere. As long as you have internet access, you can tune in to the fun from anywhere you want.</p>
            </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/cableone/cableone-laptop.jpg" class="img-fluid animated" alt="TV, Laptop, Tablet Plans | CableOne">
            </div>

          </div>
        </div>

      </section>

      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">



            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/entertainment.jpg" class="img-fluid animated" alt="Promotions | CableOne">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

              <h4 class="title">Take Advantage of Cable ONE’s Preferred and Elite Promotions</h4>

              <p class="description">When you sign up for Cable ONE with a Preferred or Elite promotion, you’ll not only save big over the life of the plan by bundling your services, but you’ll also get a significant discount for the first six months.</p>
              <p class="description">All Preferred and Elite promotions that include TV have Cable ONE’s Standard Cable, which includes up to 100 channels and TV Everywhere. You can also add Cable ONE’s Standard Phone with unlimited long-distance calling in the continental US, caller ID, and voicemail. And for internet, choose from some of Cable ONE’s most popular internet plans with download speeds up to 200 Mbps.</p>
              <p class="description">No matter which services you choose to bundle, you’ll get great discounts that are easy on your entertainment budget. Make the smart choice for your wallet and your life by bundling with Cable ONE so you can get all your home entertainment through one solid provider.</p>

          </div>

          </div>
        </div>

      </section>





  </main><!-- End #main -->


@endsection
