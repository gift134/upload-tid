@extends('layouts.spectrum_main')
@section('content')

<section id="spectrum_intro_tv" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1 style="color:white!important">The Most HD Channels on the Market</h1>
        {{-- <h2 style="color:white!important">No Contracts, No Strings Attached</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(9,'phone_tv') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(9,'phone_tv') }}</a>
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
            <div class="price-box" style="height:720px">
              <h2>Charter Spectrum TV™ Silver</h2>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop no-display"></i> <i class="icofont-mobile-phone no-display"></i></div>
              <h4><sup>$</sup>69.99<span> / month</span></h4>
              <p class="description">for 12 months</p>
              <h3>175+ HD Channels</h3>
              <ul>
                <li>Free HD Channels</li>
                <li>HBO® and SHOWTIME® included</li>
                <li>Thousands of movies and shows on demand</li>
                <li>Live TV on the go with Spectrum TV® app</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(9,'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(9,'phone_tv') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="price-box" style="height:720px">
              <h2>Double Play Silver</h2>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
              <h4><sup>$</sup>114.98<span> / month</span></h4>
              <p class="description">for 12 months when bundled</p>
              <h3>HBO® and SHOWTIME® included</h3>
              <ul>
                <li>175+ HD Channels</li>
                <li>Thousands of movies and shows on demand</li>
                <li>Internet speeds up to 100 Mbps</li>
                <li>Included modem</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(9,'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(9,'phone_tv') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0 " data-aos="fade-up" data-aos-delay="200">
            <div class="price-box" style="height:720px">
              <h2>Triple Play Gold</h2>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
              <h4><sup>$</sup>124.97<span> / month</span></h4>
              <p class="description">for 12 months when bundled</p>
              <h3>STARZ®, TMC®, STARZ ENCORE®, and NFL RedZone included</h3>
              <ul>
                <li>200+ HD Channels</li>
                <li>Thousands of movies and shows on demand</li>
                <li>Internet speeds up to 100 Mbps</li>
                <li>Included modem</li>
                <li>Unlimited calling in the US, Canada, Mexico, and US territories</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(9,'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(9,'phone_tv') }}</a>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Icon Boxes Section -->



    <section>

        <div class="container">
            <h2 style="text-align:center" data-aos="fade-up">Spectrum TV Packages Summary</h2>
          <table data-aos="fade-up">
            <caption>*Limited time offer; subject to change; valid to qualified residential customers who have not subscribed to any services within the previous 30 days and who have no outstanding obligation to Charter. Standard rates apply after yr. 1. Price for TV Select, Internet and home phone is $99.97/mo for yr. 1; standard rates apply after yr 1. Install, other equipment, taxes, fees and surcharges (broadcast surcharge up to $13.50/mo.) extra; additional services are extra; General Terms: TV: TV equipment required, charges may apply. Channel and HD programming availability based on level of service. Account credentials may be required to stream some TV content online.            </caption>
            <thead>
              <tr>
                <th scope="col">Package</th>
                <th scope="col">Channel Count</th>
                <th scope="col">Introductory Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-label="Package">Charter Spectrum TV™ Select</td>
                <td data-label="Channel Count">125+ channels</td>
                <td data-label="Introductory Price">$44.99/mo. for 12 months when bundled*</td>
              </tr>
              <tr>
                <td scope="row" data-label="Package">Charter Spectrum TV™ Silver</td>
                <td data-label="Channel Count">175+ channels</td>
                <td data-label="Introductory Price">$69.99/mo. for 12 months when bundled*</td>
              </tr>
              <tr>
                <td scope="row" data-label="Package">Charter Spectrum TV™ Gold</td>
                <td data-label="Due Date">200+ channels</td>
                <td data-label="Introductory Price">$89.99/mo. for 12 months when bundled*</td>
              </tr>

            </tbody>
          </table>

        </div>

        </section>

    {{-- <section>
      <div class="container">
        <div class="row">
          <div col-lg-12 d-flex align-items-stretch mb-5 mb-lg-0>

          </div>
          <div col-lg-12 d-flex align-items-stretch mb-5 mb-lg-0>

          </div>
          <div col-lg-12 d-flex align-items-stretch mb-5 mb-lg-0>

          </div>
          <div col-lg-12 d-flex align-items-stretch mb-5 mb-lg-0>

          </div>
        </div>
      </div>
    </section> --}}



      <!-- ======= Icon Boxes Section ======= -->
      <section id="icon-boxes" class="icon-boxes" style="background: aliceblue;">
        <div class="container">

          <h2 style="text-align:center;padding:50px 0;">Spectrum Will Transform Your Entertainment Experience</h2>

          <div class="row">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
                <h4 class="title">Make TV Fit Your Schedule</h4>
                <p class="description">
                    If you need to pause your show or record one channel while
                    watching another, Spectrum’s DVR will take care of you.
                  </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-user-shield"></i></div>
                <h4 class="title">Premium Channels Included</h4>
                <p class="description">
                    Stop worrying about premium-channel fees and start watching the
                    biggest shows on TV! Spectrum includes premium-channel favorites
                    in TV Silver and TV Gold packages.
                  </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-tv"></i></div>
                <h4 class="title">Free Primetime on Demand</h4>
                <p class="description">
                    Spectrum has thousands of free titles on demand—including
                    primetime shows on CBS, ABC, and FOX—so it’s easy to catch up on
                    episodes you’ve missed or find a new favorite.
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

                <h4 class="title">Enjoy Free HD</h4>
                <p class="description">Don’t waste your time surfing through SD channels that are just blurry duplicates of the HD channels you actually want to watch. With the most HD channels on the market, Spectrum has you covered. Spectrum offers only crisp HD channels and doesn’t charge extra for the pleasure of watching TV how it was meant to be seen.</p>

            </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/tv-5017870_1280.jpg" class="img-fluid animated" alt="Spectrum Free HD">
            </div>

          </div>
        </div>

      </section>

      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">



            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/tv-live.jpg" class="img-fluid animated" alt="Spectrum Watch Live TV">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">

              <h4 class="title">Watch Live TV on the Go</h4>
              <p class="description">The Spectrum TV App offers up over 200 live TV channels and 30,000 on-demand titles when you’re connected to your home Wi-Fi. But you won’t be tied down—the app also offers up to 150 live channels and 20,000 on-demand options from anywhere with an internet connection.</p>
              <p class="description">In addition to using the app as a remote, you can also use it to search live TV, access parental controls, and set your DVR. Be sure to download the app to your phone or tablet as soon as you sign up with Spectrum TV to get the full Spectrum experience.</p>

          </div>

          </div>
        </div>

      </section>


      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
              <h4 class="title">Join One of the Fastest-Growing Networks</h4>
              <p class="description">Spectrum is a new name on the market, but it’s the resulting merger of three familiar television providers: Time Warner Cable® (TWC®), Bright House Networks®, and Charter Communications®. Thanks to this merger, Spectrum’s network can now bring its crisp HD picture to forty-one states. Sign up today to benefit from all Spectrum TV has to offer.</p>
            </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/company-logo.png" class="img-fluid animated" alt="Spectrum Fastes-Growing Networks">
            </div>

          </div>
        </div>

      </section>




  </main><!-- End #main -->


@endsection
