@extends('layouts.buckeyebroadband_main')
@section('content')

<section id="buckeyebroadband_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1 style="color:white!important">Comcast Xfinity TV Plans</h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providerproviders_phone_types_phone_type(602,'phone') }}(602,'phone') }}" class="btn-get-started scrollto">Call {{ Helper::providerproviders_phone_types_phone_type(602,'phone') }}(602,'phone') }}</a>
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
            <div class="price-box">
              <h2>Extra TV</h2>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop no-display"></i> <i class="icofont-mobile-phone no-display"></i></div>
              <h4><sup>$</sup>60.00<span> / month</span></h4>
              <p class="description">with no term agreement</p>
              <h3>Over 125 digital channels</h3>
              <ul>
                <li>Thousands of Xfinity On Demand choices</li>
                <li>Watch any time on your TV, laptop, smartphone, or tablet with the Xfinity Stream app</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-call">Call 1-1111-111-111</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="price-box">
              <h2>X1 Starter Double Play</h2>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
              <h4><sup>$</sup>75.00<span> / month</span></h4>
              <p class="description">for the first 24 months w/ a 2-year agreement</p>
              <h3>Over 125 digital channels</h3>
              <ul>
                <li>ESPN, HGTV, TBS & More</li>
                <li>Download speeds up to 300 Mbps</li>
                <li>FREE access to millions of Wi-Fi hotspots</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-call">Call 1-1111-111-111</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="price-box">
              <h2>X1 Preferred Triple Play</h2>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
              <h4><sup>$</sup>120.00<span> / month</span></h4>
              <p class="description">for the first 24 months w/ a 2-year agreement</p>
              <h3>Over 200 digital channels</h3>
              <ul>
                <li>NHL Network, MLB Network®, STARZ ENCORE® and more</li>
                <li>Download speeds up to 300 Mbps</li>
                <li>Unlimited nationwide talk and text</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-call">Call 1-1111-111-111</a>
              </div>
            </div>
          </div>


        </div>

        <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>

      </div>
    </section><!-- End Icon Boxes Section -->


    <section>

      <div class="container">
          <h2 style="text-align:center" data-aos="fade-up">Xfinity from Comcast TV Packages and Deals</h2>
          <p style="text-align:center" data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">The prices in the chart below are for standalone Comcast cable TV packages only. To save on your monthly entertainment bills, you can bundle these packages with internet and phone services. Please note the prices shown don't include equipment fees.</p>
        <table data-aos="fade-up" >
          <caption>Offers and availability vary by market and are subject to change.</caption>
          <thead>
            <tr>
              <th scope="col">Package</th>
              <th scope="col">Channel Count</th>
              <th scope="col">Popular Channels</th>
              <th scope="col">Introductory Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-label="Package">Basic</td>
              <td data-label="Channel Count<">10+ channels</td>
              <td data-label="Popular Channels">CBS, ABC, FOX, NBC, and more</td>
              <td data-label="Introductory Price">$20.00/mo.</td>
            </tr>
            <tr>
              <td data-label="Package">Extra</td>
              <td data-label="Channel Count<">125+ channels</td>
              <td data-label="Popular Channels">CBS, ABC, FOX, NBC, AMC and more</td>
              <td data-label="Introductory Price">$60.00/mo.</td>
            </tr>
            <tr>
              <td data-label="Package">Preferred</td>
              <td data-label="Channel Count<">200+ channels</td>
              <td data-label="Popular Channels">Disney XD, NFL Network, MLB Network®, STARZ ENCORE®, and TCM</td>
              <td data-label="Introductory Price">$80.00/mo.</td>
            </tr>


          </tbody>
        </table>

      </div>

      </section>




      <!-- ======= Icon Boxes Section ======= -->
      <section id="icon-boxes" class="icon-boxes" style="background: aliceblue;">
        <div class="container">

          <h2 style="text-align:center;padding:50px 0;" data-aos="fade-up">Xfinity Delivers the Features and Services You Want</h2>

          <div class="row">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" >
              <div class="icon-box">
                <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
                <h4 class="title">X1 DVR</h4>
                <p class="description">
                  Record the shows you want to watch and view them in any room with X1 DVR service. Start watching a recording
                  in one room, pause it, and finish it in another. You can even play different recordings in different rooms
                  at the same time.
                </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-user-shield"></i></div>
                <h4 class="title">Xfinity On Demand</h4>
                <p class="description">
                  Watch current and past TV shows from all the major networks whenever you want. Enjoy your choices via TV,
                  laptop, tablet, or smartphone. Get newly released movies On Demand a month before Netflix® and Redbox®.
                  Plus, most of Xfinity On Demand movies and shows are free.
                </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-tv"></i></div>
                <h4 class="title">Xfinity Stream App</h4>
                <p class="description">
                  Turn your tablet, smartphone, or computer into a TV screen with the Xfinity Stream app. Download the Xfinity
                  Stream app to watch top shows and hit movies even when you're offline. You can also download your DVR
                  recordings from anywhere.
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

                <h4 class="title">Streampix</h4>
                <p class="description">Get unlimited access to thousands of movies and entire past seasons of TV shows with Streampix. Watch as much as you want, any time you want on your TV, laptop, tablet, or smartphone.</p>


            </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/xfinity/entertainment2.jpg" class="img-fluid animated" alt="Streampix | Buckeyebroadband">
            </div>

          </div>
        </div>

      </section>

      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">



            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/entertainment.jpg" class="img-fluid animated" alt="Xfinity | Buckeyebroadband">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

              <h4 class="title">Xfinity On Demand</h4>
              <p class="description">Featuring the most current TV shows from all the major networks with thousands of options to watch when you want. The latest movies come out a month before Netflix and Redbox®. Enjoy your choices via TV, laptop, tablet, or smartphone, and know that most of Xfinity On Demand movies and shows are free.</p>

          </div>

          </div>
        </div>

      </section>

      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">Xfinity from Comcast Simplifies Cable TV Installation</h4>
                <p class="description">Xfinity from Comcast makes installation simple. A local technician will deliver and install your equipment, and show you how to use it.</p>
                <p class="description">To prepare for your install, make sure you know where all your TVs need to be, and the technician will take care of the rest.</p>
                <p class="description">Your TV service will require a receiver or digital video recorder (DVR). Both of these options are available with HD capability. The rental fee for this equipment is included in your monthly bill.</p>

            </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/xfinity/tv-live.jpg" class="img-fluid animated" alt="Xfinity Cable TV Installation | Buckeyebroadband">
            </div>

          </div>
        </div>

      </section>






  </main><!-- End #main -->


@endsection
