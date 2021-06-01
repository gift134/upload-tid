@extends('layouts.cableone_main')
@section('content')

<section id="internet_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>Cable One, Get the Internet Speed You Need</h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(45,'phone_internet') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(45,'phone_internet') }}</a>
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
            <h2>Starter Plan</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <h4><sup>$</sup>55.00<span> / month</span></h4>
            
              <h3>Download speeds up to 100 Mbps</h3>
            <ul>
              <li>Upload speeds up to 3 Mbps</li>
              <li>300 GB data plan included</li>
              <li>Lag-free connection for up to 5 devices at once</li>\
              <li>No contract</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(45,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(45,'phone_internet') }}</a>
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
              <a href="tel:{{ Helper::providers_phone_type(45,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(45,'phone_internet') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="price-box" style="height:700px">
            <h2>Elite Package: 100 Mbps Internet, Cable & Phone</h2>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
            <h4><sup>$</sup>105.00<span> / month</span></h4>
            <p class="description">for 6 months
              <br />
              $154.00/mo after trial offer
            </p>
            <h3>Download speeds up to 100 Mbps</h3>
            <ul>
              <li>Up to 100 channels</li>
              <li>Unlimited long-distance in the continental US</li>
              <li>TV Everywhere for on-the-go watching</li>
              <li>No contract</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(45,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(45,'phone_internet') }}</a>
            </div>
          </div>
        </div>

      </div>
      <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>
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
            <th scope="col" style="width:15%">Max. Download Speed</th>
            <th scope="col" style="width:15%">Max. Upload Speed</th>
            <th scope="col" style="width:15%">Monthly Data Plan</th>
            <th scope="col" style="width:20%">Introductory Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-label="Package">Lite 15 Flexible Plus</td>
            <td data-label="Max. Download Speed">15 Mbps</td>
            <td data-label="Max. Upload Speed">1 Mbps</td>
            <td data-label="Monthly Data Plan">100 GB</td>
            <td data-label="Introductory Price">$30.00/mo.</td>
          </tr>
          <tr>
            <td data-label="Package">Starter 100 Flexible Plus</td>
            <td data-label="Max. Download Speed">100 Mbps</td>
            <td data-label="Max. Upload Speed">10 Mbps</td>
            <td data-label="Monthly Data Plan">300 GB</td>
            <td data-label="Introductory Price">$55.00/mo.</td>
          </tr>
          <tr>
            <td data-label="Package">Streamer and Gamer Flexible Plus 200</td>
            <td data-label="Max. Download Speed">200 Mbps</td>
            <td data-label="Max. Upload Speed">20 Mbps</td>
            <td data-label="Monthly Data Plan">600 GB</td>
            <td data-label="Introductory Price">$65.00/mo.</td>
          </tr>
          <tr>
            <td data-label="Package">Turbo 300</td>
            <td data-label="Max. Download Speed">300 Mbps</td>
            <td data-label="Max. Upload Speed">30 Mbps</td>
            <td data-label="Monthly Data Plan">900 GB</td>
            <td data-label="Introductory Price">$80.00/mo.</td>
          </tr>
          <tr>
            <td data-label="Package">GigaONE Flexible Plus</td>
            <td data-label="Max. Download Speed">1000 Mbps</td>
            <td data-label="Max. Upload Speed">50 Mbps</td>
            <td data-label="Monthly Data Plan">1200 GB</td>
            <td data-label="Introductory Price">$125.00/mo.</td>
          </tr>

        </tbody>
      </table>

    </div>
   
    </section>





      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">Top Speeds throughout Your Home</h4>
                <p class="description">Cable ONE’s WiFi ONE is a modem/router that eliminates dead zones in your home, so you’ll always get a fast, clear signal. It even reaches through brick walls and down to basements. No matter what the size and shape of your home, WiFi ONE is set up to match your unique needs.</p>
                <p class="description">WiFi ONE covers 100% of your home, 100% guaranteed. If you’re not satisfied for any reason, you can discontinue your WiFi ONE service and Cable ONE will give you a credit for any activation or installation charges and the modem lease.</p>
              </div>
            
            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/spectrum/bundle.jpg" class="img-fluid animated" alt="Home Wifi | CableOne">
            </div>

          </div>
        </div>
          
      </section>

      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            
            
            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/entertainment.jpg" class="img-fluid animated" alt="Giga Internet | CableOne">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

              <h4 class="title">GigaONE—Unbelievably Fast</h4>
        
              <p class="description">Imagine downloading entire HD movies in seconds. That may sound impossible, but it’s the reality of GigaONE’s 1,000 Mbps download speeds. For the time being, Cable ONE offers this incredible package only in select areas. If you’re ready to take internet to the next level, be sure to ask if it’s available where you live.</p>

          </div>

          </div>
        </div>
          
      </section>

  </main><!-- End #main -->


@endsection