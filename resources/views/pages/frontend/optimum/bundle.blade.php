@extends('layouts.optimum_main')
@section('content')

<section id="optimum_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>Introducing Altice One</h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(23,'phone_bundles') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(23,'phone_bundles') }}</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 responsive-img">
        <img src="/resources/assets/front_assets/img/optimum/optimum-bundle.png" class="img-fluid" alt="Optimum Bundle Deals">
      </div>
    </div>
  </div>

</section>

  <main id="main">

   <!-- ======= Icon Boxes Section ======= -->
   <section id="price-boxes" class="price-boxes">
    <div class="container">

      <div class="row justify-content-center align-items-center">
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box" style="height:500px">
            <h2>Optimum Internet 300 + Home Phone</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
            <h4><sup>$</sup>49.99<span> / month</span></h4>
            <p class="description">for first 12 months. Plus taxes, fees, and other charges.</p>
              <h3>Download Speeds up to 300 Mbps</h3>
            <ul>
              <li>Unlimited home phone service</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(23,'phone_bundles') }}" class="btn-call">Call {{ Helper::providers_phone_type(23,'phone_bundles') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="price-box" style="height:500px">
            <h2>Optimum Select TV + Optimum Internet 200 + Phone</h2>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
            <h4><sup>$</sup>84.99<span> / month</span></h4>
            <p class="description">for 24 months. Plus taxes, fees and charges.</p>
            <h3>Over 220 All-Digital Channels</h3>
            <ul>
              <li>Download Speeds up to 200 Mbps</li>
              <li>Unlimited home phone service</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(23,'phone_bundles') }}" class="btn-call">Call {{ Helper::providers_phone_type(23,'phone_bundles') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="price-box" style="height:500px">
            <h2>Optimum Premier TV + Optimum Internet 400 + Phone</h2>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
            <h4><sup>$</sup>124.99<span> / month</span></h4>
            <p class="description">Price for life.* Plus taxes, fees and other charges*</p>
            <h3>Over 340 Channels</h3>
            <ul>
              <li>Download Speeds up to 400 Mbps</li>
              <li>Unlimited home phone service</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(23,'phone_bundles') }}" class="btn-call">Call {{ Helper::providers_phone_type(23,'phone_bundles') }}</a>
            </div>
          </div>
        </div>

      </div>
      <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change. <br />*for first 12 months. Plus taxes, fees, and other charges. </p>
    </div>
  </section><!-- End Icon Boxes Section -->


  <section>

    <div class="container">
        <h2 style="text-align:center" data-aos="fade-up">Cable ONE Internet Packages Summary</h2>

      <table data-aos="fade-up" >
        <caption>Offers and availability are not guaranteed and subject to change.</caption>
        <thead>
          <tr>
            <th scope="col" style="width:35%">Package</th>
            <th scope="col" style="width:15%">Download Speeds</th>
            <th scope="col" style="width:15%">Channel Count</th>
            <th scope="col" style="width:15%">Phone Coverage</th>
            <th scope="col" style="width:20%">Introductory Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-label="Package">Optimum Core TV + Optimum Internet 200 + Phone</td>
            <td data-label="Download Speeds">200 Mbps</td>
            <td data-label="Channel Count">220+ channels</td>
            <td data-label="Phone Coverage">Unlimited nationwide calling</td>
            <td data-label="Introductory Price">69.99/mo. for 24 months*</td>
          </tr>
          <tr>
            <td data-label="Package">Optimum Core TV + Optimum Internet 300 + Phone</td>
            <td data-label="Download Speeds">300 Mbps</td>
            <td data-label="Channel Count">220+ channels</td>
            <td data-label="Phone Coverage">Unlimited nationwide calling</td>
            <td data-label="Introductory Price">$79.99/mo. for 24 months*</td>
          </tr>
          <tr>
            <td data-label="Package">Optimum Core TV + Optimum Internet 400 + Phone</td>
            <td data-label="Download Speeds">400 Mbps</td>
            <td data-label="Channel Count">220+ channels</td>
            <td data-label="Phone Coverage">Unlimited nationwide calling</td>
            <td data-label="Introductory Price">$89.99/mo. price for life**</td>
          </tr>
          <tr>
            <td data-label="Package">Optimum Select TV + Optimum Internet 200 + Phone</td>
            <td data-label="Download Speeds">200 Mbps</td>
            <td data-label="Channel Count">340+ channels</td>
            <td data-label="Phone Coverage">Unlimited nationwide calling</td>
            <td data-label="Introductory Price">$84.99/mo. for 24 months*</td>
          </tr>
          <tr>
            <td data-label="Package">Optimum Select TV + Optimum Internet 300 + Phone</td>
            <td data-label="Download Speeds">300 Mbps</td>
            <td data-label="Channel Count">340+ channels</td>
            <td data-label="Phone Coverage">Unlimited nationwide calling</td>
            <td data-label="Introductory Price">$94.99/mo. for 24 months*</td>
          </tr>
          <tr>
            <td data-label="Package">Optimum Select TV + Optimum Internet 400 + Phone</td>
            <td data-label="Download Speeds">400 Mbps</td>
            <td data-label="Channel Count">340+ channels</td>
            <td data-label="Phone Coverage">Unlimited nationwide calling</td>
            <td data-label="Introductory Price">$104.99/mo. price for life**</td>
          </tr>
          <tr>
            <td data-label="Package">Optimum Premier TV + Optimum Internet 200 + Phone</td>
            <td data-label="Download Speeds">200 Mbps</td>
            <td data-label="Channel Count">420+ channels</td>
            <td data-label="Phone Coverage">Unlimited nationwide calling</td>
            <td data-label="Introductory Price">$104.99/mo. for 24 months*</td>
          </tr>
          <tr>
            <td data-label="Package">Optimum Premier TV + Optimum Internet 300 + Phone	</td>
            <td data-label="Download Speeds">300 Mbps</td>
            <td data-label="Channel Count">420+ channels</td>
            <td data-label="Phone Coverage">Unlimited nationwide calling</td>
            <td data-label="Introductory Price">$114.99/mo. for 24 months*</td>
          </tr>
          <tr>
            <td data-label="Package">Optimum Premier TV + Optimum Internet 400 + Phone</td>
            <td data-label="Download Speeds">400 Mbps</td>
            <td data-label="Channel Count">420+ channels</td>
            <td data-label="Phone Coverage">Unlimited nationwide calling</td>
            <td data-label="Introductory Price">$124.99/mo. price for life**</td>
          </tr>

        </tbody>
      </table>

    </div>

    </section>

      <!-- ======= Icon Boxes Section ======= -->
      <section id="icon-boxes" class="icon-boxes" style="background: aliceblue;">
        <div class="container">

          <h2 style="text-align:center;padding:50px 0;" data-aos="fade-up">Enjoy the advanced features included in bundled Optimum packages.</h2>

          <div class="row">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
                <p class="description">
                The Optimum TV App lets you watch Optimum cable TV on all your mobile devices.
                </p>

              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-user-shield"></i></div>
                <p class="description">
                Access your Optimum internet anywhere on over 1 million WiFi hotspots.
                </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-tv"></i></div>
                <p class="description">
                See who's calling without missing a second of your show with caller ID on TV.
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
                <h4 class="title">Optimum from Cablevision</h4>
                <p class="description">One of the most trusted names in entertainment services, Cablevision, has taken its services to the next level. Optimized Cablevision Packages feature Optimum Cablevision internet that feels instantaneous, Optimum Voice home phone that sounds flawless, and Optimum TV channels that seem endless. When looking for the best in home entertainment services, Optimum's the word.</p>
              </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/spectrum/bundle.jpg" class="img-fluid animated" alt="Optimum From Cablevision">
            </div>

          </div>
        </div>

      </section>



  </main><!-- End #main -->


@endsection
