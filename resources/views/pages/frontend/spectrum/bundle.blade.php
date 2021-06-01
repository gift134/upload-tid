@extends('layouts.spectrum_main')
@section('content')

<section id="spectrum_intro_internet" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1 style="color:white!important">Spectrum Internet Plans, Packages, and Prices</h1>
        {{-- <h2 style="color:white!important">No Contracts, No Strings Attached</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(9,'phone_bundles') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(9,'phone_bundles') }}</a>
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
              <h2>Double Play Select</h2>
              <div class="price-icon"><i class="icofont-monitor "></i> <i class="icofont-laptop "></i> <i class="icofont-mobile-phone no-display"></i></div>
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
                <a href="tel:{{ Helper::providers_phone_type(9,'phone_bundles') }}" class="btn-call">Call {{ Helper::providers_phone_type(9,'phone_bundles') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="price-box" style="height:720px">
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
                <a href="tel:{{ Helper::providers_phone_type(9,'phone_bundles') }}" class="btn-call">Call {{ Helper::providers_phone_type(9,'phone_bundles') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="price-box" style="height:720px">
              <h2>Triple Play Gold</h2>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
              <h4><sup>$</sup>144.97<span> / month</span></h4>
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
                <a href="tel:{{ Helper::providers_phone_type(9,'phone_bundles') }}" class="btn-call">Call {{ Helper::providers_phone_type(9,'phone_bundles') }}</a>
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
            <caption>Offers and availability are not guaranteed and subject to change.</caption>
            <thead>
              <tr>
                <th scope="col">Package</th>
                <th scope="col">Download Speeds</th>
                <th scope="col">Channel Count</th>
                <th scope="col">Phone Plan</th>
                <th scope="col">Introductory Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-label="Package">Double Play Select</td>
                <td data-label="Download Speeds">Up to 100 Mbps</td>
                <td data-label="Channel Count">125+ channels</td>
                <td data-label="Phone Plan">N/A</td>
                <td data-label="Introductory Price">$89.98/mo. for 12 months when bundled</td>
              </tr>
              <tr>
                <td data-label="Package">Double Play Silver</td>
                <td data-label="Download Speeds">Up to 100 Mbps</td>
                <td data-label="Channel Count">175+ channels</td>
                <td data-label="Phone Plan">N/A</td>
                <td data-label="Introductory Price">$114.98/mo. for 12 months when bundled</td>
              </tr>
              <tr>
                <td data-label="Package">Double Play Gold</td>
                <td data-label="Download Speeds">Up to 100 Mbps</td>
                <td data-label="Channel Count">200+ channels</td>
                <td data-label="Phone Plan">N/A</td>
                <td data-label="Introductory Price">$134.98/mo. for 12 months when bundled</td>
              </tr>
              <tr>
                <td data-label="Package">Spectrum Internet & Phone</td>
                <td data-label="Download Speeds">Up to 100 Mbps</td>
                <td data-label="Channel Count">N/A</td>
                <td data-label="Phone Plan">Unlimited nationwide calling</td>
                <td data-label="Introductory Price">$59.98/mo. for 12 months</td>
              </tr>
              <tr>
                <td data-label="Package">Triple Play Select</td>
                <td data-label="Download Speeds">Up to 100 Mbps</td>
                <td data-label="Channel Count">125+ channels</td>
                <td data-label="Phone Plan">Unlimited nationwide calling</td>
                <td data-label="Introductory Price">$99.97/mo. for 12 months when bundled</td>
              </tr>
              <tr>
                <td data-label="Package">Triple Play Silver</td>
                <td data-label="Download Speeds">Up to 100 Mbps</td>
                <td data-label="Channel Count">175+ channels</td>
                <td data-label="Phone Plan">Unlimited nationwide calling</td>
                <td data-label="Introductory Price">$124.97/mo. for 12 months when bundled</td>
              </tr>
              <tr>
                <td data-label="Package">Triple Play Gold</td>
                <td data-label="Download Speeds">Up to 100 Mbps</td>
                <td data-label="Channel Count">200+ channels</td>
                <td data-label="Phone Plan">Unlimited nationwide calling</td>
                <td data-label="Introductory Price">$144.97/mo. for 12 months when bundled</td>
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
                <h4 class="title">Contract Buyout*</h4>
                <p class="description">
                  Switch from your current provider to Spectrum with help from a contract buyout of up to $500.
                  </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-user-shield"></i></div>
                <h4 class="title">Spectrum Wi-Fi Hotspots</h4>
                <p class="description">
                  Keep your computer secure while browsing the internet with Spectrum’s anti-virus software.
                  </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-tv"></i></div>
                <h4 class="title">Spectrum TV Mobile App</h4>
                <p class="description">
                  Control your TV and DVR, watch live TV channels, and access on-demand titles—all from your phone or
                  tablet.
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

                <h4 class="title">Get Internet, TV, and Phone for Less</h4>
                <p class="description">With Spectrum Triple Play, you get internet, TV, and phone at a discounted price from stand-alone plans. You’re getting the best Spectrum has to offer for much, much less. Don’t miss out on these incredible services and savings!</p>

            </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/iphone-472197_1280.jpg" class="img-fluid animated" alt="Spectrum Internet, TV, and Phone">
            </div>

          </div>
        </div>

      </section>

      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">



            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/company-logo.png" class="img-fluid animated" alt="Charter, TWC, and Bright House Are Now Spectrum">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">

              <h4 class="title">Charter, TWC, and Bright House Are Now Spectrum</h4>
              <p class="description">In 2015, Charter Communications® purchased Time Warner Cable® (TWC®) and Bright House Networks® to form Spectrum. With the combined network of all three providers, Spectrum stretches across forty-one states and serves over 25 million customers.</p>
          </div>

          </div>
        </div>

      </section>



  </main><!-- End #main -->


@endsection
