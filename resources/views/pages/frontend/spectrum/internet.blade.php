@extends('layouts.spectrum_main')
@section('content')

<section id="spectrum_intro_internet" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1 style="color:white!important">Spectrum Internet Plans, Packages, and Prices</h1>
        {{-- <h2 style="color:white!important">No Contracts, No Strings Attached</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(9,'phone_internet') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(9,'phone_internet') }}</a>
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
              <h2>Charter Spectrum Internet™</h2>
              <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop "></i> <i class="icofont-mobile-phone no-display"></i></div>
              <h4><sup>$</sup>49.99<span> / month</span></h4>
              <p class="description">for 12 months†</p>
              <h3>Download speeds up to 940 Mbps</h3>
              <ul>
                <li>No data caps</li>
                <li>Included modem</li>
                <li>Access to Wi-Fi hotspots across the nation</li>
                <li>The Spectrum Security Suite is included for up to 10 computers</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(9,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(9,'phone_internet') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="price-box">
              <h2>Double Play Select</h2>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
              <h4><sup>$</sup>89.98<span> / month</span></h4>
              <p class="description">for 12 months when bundled</p>
              <h3>125+ HD Channels</h3>
              <ul>
                <li>Free HD Channels</li>
                <li>Access to thousands of on-demand titles</li>
                <li>Download speeds up to 940 Mbps</li>
                <li>Included modem</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(9,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(9,'phone_internet') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="price-box" >
              <h2>Triple Play Silver</h2>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
              <h4><sup>$</sup>124.97<span> / month</span></h4>
              <p class="description">for 12 months when bundled</p>
              <h3>HBO® and SHOWTIME® included</h3>
              <ul>
                <li>175+ HD channels</li>
                <li>Speeds up to 940 Mbps</li>
                <li>Included modem</li>
                <li>Unlimited calling in the US, Canada, Mexico, and US territories</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(9,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(9,'phone_internet') }}</a>
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
            <caption>*Single Play Internet: Promotion price is $49.99/mo. Yr 1; standard rates apply after year 1. No additional charge for modem; other equipment, install, taxes, fees & surcharges may apply.</caption>
            <thead>
              <tr>
                <th scope="col">Package</th>
                <th scope="col">Max. Download Speed</th>
                <th scope="col">Introductory Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-label="Package">Charter Spectrum Internet™</td>
                <td data-label="Max. Download Speed">940 Mbps</td>
                <td data-label="Introductory Price">$49.99/mo. for 12 months*</td>
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
                <h4 class="title">Spectrum WiFi™ Hotspots</h4>
                <p class="description">
                  Stay connected on the go with access to thousands of Spectrum WiFi Hotspots across the nation.
                  </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-user-shield"></i></div>
                <h4 class="title">No Data Caps</h4>
                <p class="description">
                  Stream as much content as you like. Spectrum doesn’t cap your data—no matter how much you use.
                  </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-tv"></i></div>
                <h4 class="title">Parental Controls</h4>
                <p class="description">
                  Protect your kids online by filtering unwanted content with help from Spectrum’s Security Suite.
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

                <h4 class="title">Effortlessly Fast Internet</h4>
                <p class="description">Instead of offering a confusing range of download speeds, Spectrum keeps things fast and simple. With the well-priced 100 Mbps Spectrum Internet, you can stream HD movies, play online games, and have multiple devices on the same internet connection without experiencing lag.</p>

            </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/eff-internet.jpg" class="img-fluid animated" alt="Spectrum Fast Internet">
            </div>

          </div>
        </div>

      </section>

      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">



            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/modem.png" class="img-fluid animated" alt="Spectrum Modem">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">

              <h4 class="title">Don’t Pay More for Your Modem</h4>
              <p class="description">There are so many modems on the market, and some of them won’t work with Spectrum Internet. However, you don’t need to worry about finding the right modem—Spectrum has one ready for you. Plus, your modem rental fee is included in the listed price, so you won’t have to pay any extra fees for it.</p>

          </div>

          </div>
        </div>

      </section>

      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">Live Contract-Free</h4>
                <p class="description">Spectrum doesn’t believe there’s any reason for your internet to tie you down. When you sign up for Spectrum Internet, you won’t be signing up for any annual contracts. And if you’re stuck in one now, Spectrum will buy it out for up to $500.* Now there’s nothing holding you back from experiencing great internet.</p>

            </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/relaxing.jpg" class="img-fluid animated" alt="Spectrum Contract-Free">
            </div>

          </div>
        </div>

      </section>


      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">



            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/company-logo.png" class="img-fluid animated" alt="Spectrum Channels">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">

              <h4 class="title">You’re in the Right Place with Spectrum</h4>
              <p class="description">Whether you found Spectrum by searching for it by name or by looking for Time Warner Cable® (TWC®), Charter Communications®, or Bright House Networks®, this is the right spot for you. In 2015, Charter merged with TWC and Bright House, causing all three networks to operate under the Spectrum brand.</p>
              <p class="description">By merging Charter, TWC, and Bright House, Spectrum now provides faster internet speeds without data caps. Spectrum customers can also take advantage of an expanded Wi-Fi network open in public spaces. Experience the best of these three companies and more with services from Spectrum.</p>

          </div>

          </div>
        </div>

      </section>



  </main><!-- End #main -->


@endsection
