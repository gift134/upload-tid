@extends('layouts.optimum_main')
@section('content')

<section id="optimum_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>Save big on Optimum packages without signing your life away.</h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_number(23) }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_number(23) }}</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 responsive-img">
        <img src="/resources/assets/front_assets/img/optimum/optimum-main.png" class="img-fluid" alt="Optimum TV, Internet, Bundles Deals">
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
          <div class="price-box" style="height:500px">
            <h2>SELECT PACKAGE</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <h4><sup>$</sup>39.99<span> / month</span></h4>
            <p class="description">for 12 months. Plus taxes, fees and charges.</p>
              <h3>Download Speeds up to 300 Mbps</h3>
            <ul>
              <li>Upload speeds up to 35 Mbps</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_number(23) }}" class="btn-call">Call {{ Helper::providers_phone_number(23) }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="price-box" style="height:500px">
            <h2>Optimum Select TV + Optimum Internet 200</h2>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <h4><sup>$</sup>79.99<span> / month</span></h4>
            <p class="description">for 24 months. Plus taxes, fees and charges.</p>
            <h3>Over 340 channels</h3>
            <ul>
              <li>over 110 channels in HD</li>
              <li>Includes $100 Amazon Gift Card†</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_number(23) }}" class="btn-call">Call {{ Helper::providers_phone_number(23) }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="price-box" style="height:500px">
            <h2>Optimum Core TV + Optimum Internet 400</h2>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
            <h4><sup>$</sup>84.99<span> / month</span></h4>
            <p class="description">Price for Life. Plus taxes, fees, and other charges*</p>
            <h3>Over 220 channels</h3>
            <ul>
              <li>Download speed up to 400 Mbps</li>
              <li>Includes $100 Amazon Gift Card†</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_number(23) }}" class="btn-call">Call {{ Helper::providers_phone_number(23) }}</a>
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

        <h2 style="text-align:center;padding:50px 0;" data-aos="fade-up">Get everything you want from your TV service with Optimum TV.</h2>

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
              <h4 class="title">Watch what's on.</h4>
              <p class="description">Get over 420 channels, including sports and movie channels with free HD.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-user-shield"></i></div>
              <h4 class="title">Watch it now.</h4>
              <p class="description">
              Watch hundreds of programs free On Demand. or choose from thousands of movies.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-tv"></i></div>
              <h4 class="title">Watch it later.</h4>
              <p class="description">
              Record up to 15 shows at once with the Optimum Multi-Room DVR.
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
                <h4 class="title">Optimum Online Internet Service</h4>
                <h5 class="title2">Take your Altice internet service to the Optimum with download speeds up to 400 Mbps and upload speeds up to 40 Mbps.</h5>
                <ul>
                  <li>Dominate in online gaming and download full-length movies in seconds.</li>
                  <li>Access over 1 million WiFi hotspots on the Optimum network.</li>
                  <li>Access your Optimum TV programming and watch it anywhere you have an internet connection.</li>
                </ul>
              </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/spectrum/bundle.jpg" class="img-fluid animated" alt="Optimum Internet Service">
            </div>

          </div>
        </div>

      </section>

      <section style="background: aliceblue;">

        <div class="container">

          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/entertainment.jpg" class="img-fluid animated" alt="Optimum Voice Home Phone">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

              <h4 class="title">Optimum Voice Home Phone</h4>

              <p class="description">Get unlimited local and long-distance calling with one easy payment. Optimum Voice brings you incredibly clear call quality and all the special features you love. Get voicemail, caller ID, and call-waiting included in your Optimum Voice package. Best of all, you won't need to change your phone number when you switch your home phone to Optimum.</p>

          </div>

          </div>

        </div>

      </section>


      {{-- <section id="icon-boxes" class="icon-boxes">
        <div class="container">
          <div class="row justify-content-center align-items-center">

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <div class="icon-box align-middle">
                      <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
                      <h4 class="title">Watch what's on.</h4>
                      <p class="description">Get over 420 channels, including sports and movie channels with free HD.</p>
                    </div>
                  </div>
                  <div class="flip-card-back align-middle">
                    <h1>John Doe</h1>
                    <p>Architect & Engineer</p>
                    <p>We love that guy</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
                  </div>
                  <div class="flip-card-back">
                    <h1>John Doe</h1>
                    <p>Architect & Engineer</p>
                    <p>We love that guy</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
                  </div>
                  <div class="flip-card-back">
                    <h1>John Doe</h1>
                    <p>Architect & Engineer</p>
                    <p>We love that guy</p>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section> --}}

  </main><!-- End #main -->


@endsection
