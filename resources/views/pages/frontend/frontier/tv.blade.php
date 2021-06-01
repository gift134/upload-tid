@extends('layouts.frontier_main')
@section('content')

<section id="frontier_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1 style="color:#17355e!important">Get FiOS® TV from Frontier. More channels. More savings.</h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(15,'phone_tv') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(15,'phone_tv') }}</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 responsive-img">
        <img src="/resources/assets/front_assets/img/frontier/frontier-tv-m.png" class="img-fluid" alt="Frontier TV Deals">
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
              <a href="tel:{{ Helper::providers_phone_type(15,'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(15,'phone_tv') }}</a>
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
              <a href="tel:{{ Helper::providers_phone_type(15,'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(15,'phone_tv') }}</a>
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
              <a href="tel:{{ Helper::providers_phone_type(15,'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(15,'phone_tv') }}</a>
            </div>
          </div>
        </div>


      </div>
      <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>
    </div>
  </section><!-- End Icon Boxes Section -->



  <section>
    <h2 style="text-align:center" data-aos="fade-up">Selected Frontier Packages Summary</h2>
    <div class="container">

      <table>
        <caption>* for 12 months. Actual speeds may vary. Installation, equipment fees, Internet Infrastructure Surcharge, Quantum service fee, VoIP admin. fee, broadcast fee, taxes & other fees apply. Services subject to availability and all applicable terms and conditions.
            <br />
            † for 12 months. Actual speeds may vary. Installation, equipment fees, Internet Infrastructure Surcharge, Quantum service fee, VoIP admin. fee, broadcast fee, taxes & other fees apply. Services subject to availability and all applicable terms and conditions.</caption>
        <thead>
          <tr>
            <th scope="col">Package</th>
            <th scope="col">Download Speedse</th>
            <th scope="col">Channel Count</th>
            <th scope="col">Phone Coverage</th>
            <th scope="col">Introductory Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-label="Package">FiOS 50/50 + FiOS TV Basic + Digital Voice</td>
            <td data-label="Download Speeds">50 Mbps</td>
            <td data-label="Channel Count">25+</td>
            <td data-label="Phone Coverage">Unlimited local and nationwide calling</td>
            <td data-label="Introductory Price">59.98/mo*</td>
          </tr>
          <tr>
            <td data-label="Package">FiOS 50/50 + FiOS TV Prime HD + Digital Voice</td>
            <td data-label="Download Speeds">50 Mbps</td>
            <td data-label="Channel Count">250+</td>
            <td data-label="Phone Coverage">Unlimited local and nationwide calling</td>
            <td data-label="Introductory Price">109.98/mo†</td>
          </tr>
        </tbody>
      </table>

    </div>

    </section>




      <!-- ======= Icon Boxes Section ======= -->
      <section id="icon-boxes" class="icon-boxes" style="background: aliceblue;">
        <div class="container">



          <div class="row">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
                <h4 class="title">Bundle and save today!</h4>
                <p class="description">
                    FiOS Triple Play from Frontier Bundles start at only $79.99/mo
                </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-user-shield"></i></div>
                <h4 class="title">Get everything you need with FiOS from Frontier</h4>
                <p class="description">
                    Over 400 channels Multi-room HD DVR available HBO®, EPIX, STARZ®, & Cinemax® available
                </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-tv"></i></div>
                <h4 class="title">PAC-12 Networks</h4>
                <p class="description">
                    Enjoy the most comprehensive Pac-12 coverage in the Pacific Northwest.
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

                <h4 class="title">Experience the FiOS difference with Frontier TV</h4>
                <p class="description">Using the power of a 100% fiber optic network, FiOS TV from Frontier delivers HD quality picture and stunning sound. Fiber optic technology is more reliable than cable, bringing you a better picture quality and fewer outages.</p>

            </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/spectrum/bundle.jpg" class="img-fluid animated" alt="Frontier TV">
            </div>

          </div>
        </div>

      </section>

      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">



            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/entertainment.jpg" class="img-fluid animated" alt="Frontier FiOS TV">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

              <h4 class="title">There’s always something on with FiOS TV</h4>

              <p class="description">Frontier TV packages are packed with all the entertainment features you could hope for. FiOS TV comes with access to thousands of On Demand titles, access to over 400 digital channels, and 65+ channels delivered in stunning HD. Add a multi-room HD DVR to any FiOS TV package, and you’ll never miss any of your favorite programming.</p>
              <p class="description">Sign up for FiOS TV from Frontier today!</p>

          </div>

          </div>
        </div>

      </section>

      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">Get DISH with Frontier and save on both services.</h4>
                <p class="description">Frontier and DISH work together to bring you deals when you order them together. So, if you can’t get FiOS TV in your area, or if you simply prefer satellite TV over FiOS TV, the knowledgeable representatives at CableTV.com can get you set up with both Frontier Internet and DISH TV with one convenient phone call. You’ll get added convenience and added saving all at once.</p>

            </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/iphone-472197_1280.jpg" class="img-fluid animated" alt="Dish with Frontier">
            </div>

          </div>

        </div>

      </section>



  </main><!-- End #main -->


@endsection
