@extends('layouts.xfinity_main')
@section('content')

<section id="xfinity_intro_bundle" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1 style="color:white!important">Get an Xfinity Triple Play</h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(8,'phone_bundles') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(8,'phone_bundles') }}</a>
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
              <h2>X1 Saver Pro+ Double Play</h2>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
              <h4><sup>$</sup>69.99<span> / month</span></h4>
              <p class="description">for the first 12 months w/ a 1-year agreement</p>
              <h3>Over 140 digital channels</h3>
              <ul>
                <li>ESPN, HGTV, TBS & More</li>
                <li>Download speeds up to 200 Mbps</li>
                <li>FREE access to millions of Wi-Fi hotspots</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(8,'phone_bundles') }}" class="btn-call">Call {{ Helper::providers_phone_type(8,'phone_bundles') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="price-box">
              <h2>X1 Starter Pro+ Triple Play</h2>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
              <h4><sup>$</sup>114.99<span> / month</span></h4>
              <p class="description">for the first 12 months w/ a 1-Year Agreement</p>
              <h3>Over 140 digital channels</h3>
              <ul>
                <li>ESPN, HGTV, TBS & More</li>
                <li>Download speeds up to 600 Mbps</li>
                <li>Unlimited nationwide talk and text</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(8,'phone_bundles') }}" class="btn-call">Call {{ Helper::providers_phone_type(8,'phone_bundles') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="price-box">
              <h2>X1 Premier Pro+ Triple Play</h2>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
              <h4><sup>$</sup>159.99<span> / month</span></h4>
              <p class="description">for the first 24 months w/ a 2-year agreement</p>
              <h3>Over 260 digital channels</h3>
              <ul>
                <li>HBO®, Cinemax®, SHOWTIME® and more</li>
                <li>Download speeds up to 1000 Mbps</li>
                <li>Unlimited nationwide talk and texts</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(8,'phone_bundles') }}" class="btn-call">Call {{ Helper::providers_phone_type(8,'phone_bundles') }}</a>
              </div>
            </div>
          </div>


        </div>
        <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>

      </div>
    </section><!-- End Icon Boxes Section -->


    <section>

      <div class="container">
          <h2 style="text-align:center" data-aos="fade-up">Xfinity Bundle Package Pricing</h2>
        <table data-aos="fade-up" >
          <caption>Offers and availability vary by market and are subject to change.<br />
            *For the first 12 months with a 1-year agreement.<br />
            †For the first 24 months with a 2-year agreement.<br />
            ‡For the first 12 months.<br />
            §Online orders only.
          </caption>
          <thead>
            <tr>
              <th scope="col">Package</th>
              <th scope="col">Download Speeds Up to</th>
              <th scope="col">Channel Count</th>
              <th scope="col">Phone Plan</th>
              <th scope="col">Introductory Price</th>
              <th scope="col">Online Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-label="Package">X1 Saver Pro+ Double Play</td>
              <td data-label="Download Speeds Up to">200 Mbps</td>
              <td data-label="Channel Count">140+ channels</td>
              <td data-label="Phone Plan">N/A</td>
              <td data-label="Introductory Price">$69.99/mo.*</td>
              <td data-label="Online Price">N/A</td>
            </tr>
            <tr>
              <td data-label="Package">X1 Starter Pro+ Double Play</td>
              <td data-label="Download Speeds Up to">300 Mbps</td>
              <td data-label="Channel Count">140+ channels</td>
              <td data-label="Phone Plan">N/A</td>
              <td data-label="Introductory Price">$94.99/mo.*</td>
              <td data-label="Online Price">N/A</td>
            </tr>
            <tr>
              <td data-label="Package">X1 Preferred Pro+ Double Play</td>
              <td data-label="Download Speeds Up to">600 Mbps</td>
              <td data-label="Channel Count">220+ channels</td>
              <td data-label="Phone Plan">N/A</td>
              <td data-label="Introductory Price">$104.99/mo.*</td>
              <td data-label="Online Price">N/A</td>
            </tr>
            <tr>
              <td data-label="Package">X1 Premier Pro+ Double Play</td>
              <td data-label="Download Speeds Up to">1000 Mbps</td>
              <td data-label="Channel Count">260+ channels</td>
              <td data-label="Phone Plan">N/A</td>
              <td data-label="Introductory Price">$129.99/mo.*</td>
              <td data-label="Online Price">N/A</td>
            </tr>
            <tr>
              <td data-label="Package">X1 Saver Pro+ Triple Play</td>
              <td data-label="Download Speeds Up to">300 Mbps</td>
              <td data-label="Channel Count">140+ channels</td>
              <td data-label="Phone Plan">Included</td>
              <td data-label="Introductory Price">$94.99/mo.*§</td>
              <td data-label="Online Price">N/A</td>
            </tr>
            <tr>
              <td data-label="Package">X1 Starter Pro+ Triple Play</td>
              <td data-label="Download Speeds Up to">600 Mbps</td>
              <td data-label="Channel Count">140+ channels</td>
              <td data-label="Phone Plan">Included</td>
              <td data-label="Introductory Price">$114.99/mo.*‡</td>
              <td data-label="Online Price">N/A</td>
            </tr>
            <tr>
              <td data-label="Package">X1 Preferred Pro+ Triple Play</td>
              <td data-label="Download Speeds Up to">1000 Mbps</td>
              <td data-label="Channel Count">220+ channels</td>
              <td data-label="Phone Plan">Included</td>
              <td data-label="Introductory Price">$139.99/mo.†</td>
              <td data-label="Online Price">N/A</td>
            </tr>
            <tr>
              <td data-label="Package">X1 Premier Pro+ Triple Play</td>
              <td data-label="Download Speeds Up to">1000 Mbps</td>
              <td data-label="Channel Count">260+ channels</td>
              <td data-label="Phone Plan">Included</td>
              <td data-label="Introductory Price">$159.99/mo.†</td>
              <td data-label="Online Price">N/A</td>
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
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
                <h4 class="title">Xfinity Internet</h4>
                <p class="description">
                  Bundling with a TV, Internet, and phone package saves you time and money. Plus, you'll get fast, reliable
                  Internet and the best in-home WiFi experience.
                </p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-user-shield"></i></div>
                <h4 class="title">Xfinity TV</h4>
                <p class="description">
                  Get the most out of your Xfinity from Comcast TV service when you bundle with Internet and Voice. Xfinity
                  offers 24/7 sports coverage, thousands of On Demand choices, and a high-quality HD picture.
                </p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-tv"></i></div>
                <h4 class="title">Xfinity Voice</h4>
                <p class="description">
                  Bundle home phone with TV to get caller ID on your TV, PC, and smartphone. Stay connected with reliable home
                  phone service and Unlimited Nationwide Calling.
                </p>
              </div>
            </div>
  
  
          </div>
  
        </div>
      </section><!-- End Icon Boxes Section -->

      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            
            
            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/entertainment.jpg" class="img-fluid animated" alt="Xfinity Bundle from Comcast">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

            <h4 class="title">Save Money with an Xfinity Bundle from Comcast</h4>
            
            <p>If you need TV, Internet and Voice service, you'll get the best deals with an Xfinity Bundle from Comcast. Whether you choose a Double Play or Triple Play package, you'll receive extra features you can't get with stand-alone service. These include Xfinity Connect™, an online hub for all your communications, and the Xfinity Stream App, which allows you to watch your favorite shows on your smartphone or tablet.</p>
          
          </div>

          </div>
        </div>
          
      </section>

 

   

  </main><!-- End #main -->


@endsection