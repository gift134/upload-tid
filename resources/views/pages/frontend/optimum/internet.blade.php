@extends('layouts.optimum_main')
@section('content')

<section id="optimum_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>Save time, save money with Optimum Online<h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(23,'phone_internet') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(23,'phone_internet') }}</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 responsive-img">
        <img src="/resources/assets/front_assets/img/optimum/optimum-internet.png" class="img-fluid" alt="Optimum Internet Deals">
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
            <h2>Optimum Internet 300</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <h4><sup>$</sup>39.99<span> / month</span></h4>
            <p class="description">for 12 months. Plus taxes, fees and charges.</p>
              <h3>Download Speeds up to 300 Mbps</h3>
            <ul>
              <li>Upload speeds up to 35 Mbps</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(23,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(23,'phone_internet') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="price-box" style="height:500px">
            <h2>Optimum Internet 400</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <h4><sup>$</sup>64.99<span> / month</span></h4>
            <p class="description">Price for Life. Plus taxes, fees, and other charges.*</p>
            <h3>Download Speeds up to 400 Mbps</h3>
            <ul>
              <li>Upload speeds up to 40 Mbps</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(23,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(23,'phone_internet') }}</a>
            </div>
          </div>
        </div>

      </div>
      <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change. <br />*for first 12 months. Plus taxes, fees, and other charges. </p>
    </div>
  </section><!-- End Icon Boxes Section -->


  <section>

    <div class="container">
        <h2 style="text-align:center" data-aos="fade-up">Optimum TV Packages Summary</h2>

      <table data-aos="fade-up" >
        <caption>*Offers and availability are not guaranteed and are subject to change. </caption>
        <thead>
          <tr>
            <th scope="col" style="width:40%">Package</th>
            <th scope="col" style="width:30%">Max. Download Speed</th>
            <th scope="col" style="width:30%">Introductory Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-label="Package">Optimum Internet 300</td>
            <td data-label="Max. Download Speed">300 Mbps</td>
            <td data-label="Introductory Price">$39.99/mo.</td>
          </tr>
          <tr>
            <td data-label="Package">Optimum Internet 400</td>
            <td data-label="Max. Download Speed">400 Mbps</td>
            <td data-label="Introductory Price">$64.99/mo.</td>
          </tr>
        </tbody>
      </table>

    </div>

    </section>

      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h4 class="title">Set up a home network with a Smart Router.</h4>
                <p class="description">Get the most out of your Optimum internet service by setting up a home network. With the Smart Router you can connect all of your wireless devices to the internet. The router even upgrades itself with the latest features, including security features, so you'll always know your network is current and safe.</p>
              </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/spectrum/bundle.jpg" class="img-fluid animated" alt="Optimum Smart Router">
            </div>

          </div>
        </div>

      </section>

      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/entertainment.jpg" class="img-fluid animated" alt="Optimum Wifi Network">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
              <h4 class="title">Get internet access on the largest WiFi network in the nation.</h4>
              <p class="description">Your Optimum Online account gives you access to over 100,000 WiFi hotspots. Get online with your phone, tablet, or laptop and browse the web to your heart's content whenever you're in range. Save money on your mobile phone bill by using our WiFi network instead of the minutes in your data plan.</p>
            </div>

          </div>

        </div>

      </section>

      <section>

        <div class="container">

          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h4 class="title">Get a bundle full of savings.</h4>
                <p class="description">Get the best rates on Optimum services by bundling them together. When you bundle your Optimum cable, Optimum internet, and Optimum home phone, you can save over $40 per month.</p>
              </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/spectrum/bundle.jpg" class="img-fluid animated" alt="Optimum Bundle">
            </div>

          </div>

        </div>

      </section>

  </main><!-- End #main -->


@endsection
