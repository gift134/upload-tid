@extends('layouts.frontier_main')
@section('content')

<section id="frontier_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1 style="color:#17355e!important">Get FiOS® Internet from Frontier</h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(15,'phone_internet') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(15,'phone_internet') }}</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 responsive-img">
        <img src="/resources/assets/front_assets/img/frontier/frontier-internet-m.png" class="img-fluid" alt="Frontier Internet Deals">
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
            <h2>Simply FiOS 50/50 Mbps</h2>
            <div class="price-icon"><i class="icofont-monitor no-display "></i> <i class="icofont-laptop "></i> <i class="icofont-mobile-phone no-display"></i></div>
            <h4><sup>$</sup>99.98<span> / month</span></h4>
            <p class="description">for 12 months. Actual speeds may vary. Installation, equipment fees, Internet Infrastructure Surcharge, Quantum service fee, broadcast fee, taxes & other fees apply. Services subject to availability and all applicable terms and conditions.</p>

            <ul>
              <li>Max wired speeds as fast as 50/50 Mbps</li>
              <li>250 Channels + 40 HD Channels</li>
              <li>No data caps</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(15,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(15,'phone_internet') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="price-box">
            <h2>FiOS 500/500 + FiOS TV Prime HD</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <h4><sup>$</sup>109.98<span> / month</span></h4>
            <p class="description">for 12 months. Actual speeds may vary. Installation, equipment fees, Internet Infrastructure Surcharge, Quantum service fee, broadcast fee, taxes & other fees apply. Services subject to availability and all applicable terms and conditions.</p>

            <ul>
              <li>Max wired speeds as fast as 500/500 Mbps</li>
              <li>250 Channels + 40 HD Channels</li>
              <li>No data caps</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(15,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(15,'phone_internet') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="price-box">
            <h2>FiOS 500 + FiOS TV Extreme HD + Digital Voice</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <h4><sup>$</sup>124.98<span> / month</span></h4>
            <p class="description">for 12 months. Actual speeds may vary. Installation, equipment fees, Internet Infrastructure Surcharge, Quantum service fee, VoIP admin. fee, broadcast fee, taxes & other fees apply. Services subject to availability and all applicable terms and conditions.</p>

            <ul>
              <li>Max wired speeds as fast as 500/500 Mbps</li>
              <li>300+ Channels</li>
              <li>No data caps</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(15,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(15,'phone_internet') }}</a>
            </div>
          </div>
        </div>


      </div>
      <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>
    </div>
  </section><!-- End Icon Boxes Section -->



  <section>
    <h2 style="text-align:center" data-aos="fade-up">Frontier Internet Packages Summary</h2>
    <div class="container">

      <table>
        <caption>Offers and availability may vary by location and are subject to change.</caption>
        <thead>
          <tr>
            <th scope="col">Package</th>
            <th scope="col">Max. Download Speed</th>
            <th scope="col">Max. Upload Speed</th>
            <th scope="col">Introductory Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-label="Package">Simply FiOS 50/50 Mbps</td>
            <td data-label="Max. Download Speed">50 Mbps</td>
            <td data-label="Max. Upload Speed">50 Mbps</td>
            <td data-label="Introductory Price">$29.99/mo.</td>
          </tr>
          <tr>
            <td data-label="Package">Simply FiOS 500/500 Mbps</td>
            <td data-label="Max. Download Speed">500 Mbps</td>
            <td data-label="Max. Upload Speed">500 Mbps</td>
            <td data-label="Introductory Price">$39.99/mo.</td>
          </tr>
          <tr>
            <td data-label="Package">Simply FiOS 1 Gbps/1 Gbps</td>
            <td data-label="Max. Download Speed">1 Gbps</td>
            <td data-label="Max. Upload Speed">1 Gbps</td>
            <td data-label="Introductory Price">$74.99/mo.</td>
          </tr>


        </tbody>
      </table>

    </div>

    </section>





      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">What makes FiOS Internet from Frontier different?</h4>
                <p class="description">Unlike cable Internet, Frontier Internet is delivered on fiber optic lines that are run straight to your home. Since the lines are run directly to you, your Internet connection will be faster, and more capable of supporting multiple users at the same time. Discover the power of Frontier Internet today.</p>

            </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/spectrum/bundle.jpg" class="img-fluid animated" alt="Frontier FiOS internet">
            </div>

          </div>
        </div>

      </section>



  </main><!-- End #main -->


@endsection
