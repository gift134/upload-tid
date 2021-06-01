@extends('layouts.xfinity_main')
@section('content')

<section id="xfinity_intro_internet" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1 style="color:white!important">Comcast Xfinity Internet Plans</h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(8,'phone_internet') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(8,'phone_internet') }}</a>
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
              <h2>Simply FiOS 50/50 Mbps</h2>
              <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop "></i> <i class="icofont-mobile-phone no-display"></i></div>
              <h4><sup>$</sup>29.99<span> / month</span></h4>
              <p class="description">for 12 months. Actual speeds may vary. Installation, Equipment fees, Internet Infrastructure Surcharge, taxes & other fees apply. Services subject to availability and all applicable terms and conditions.</p>
              <h3>Speeds as fast as 50/50 Mbps</h3>
              <ul>
                <li>No data caps</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(8,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(8,'phone_internet') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="price-box">
              <h2>Simply FiOS 500/500 Mbps</h2>
              <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
              <h4><sup>$</sup>39.99<span> / month</span></h4>
              <p class="description">for 12 months. Actual speeds may vary. Installation, Equipment fees, Internet Infrastructure Surcharge, taxes & other fees apply. Services subject to availability and all applicable terms and conditions.</p>
              <h3>Speeds as fast as 500/500 Mbps</h3>
              <ul>
                <li>No data caps</li>

              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(8,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(8,'phone_internet') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="price-box">
              <h2>Simply FiOS 1 Gbps/1 Gpbs</h2>
              <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop no-display"></i> <i class="icofont-mobile-phone no-display"></i></div>
              <h4><sup>$</sup>74.99<span> / month</span></h4>
              <p class="description">for 12 months. Max wired speed 940/880. Actual speeds may vary. Installation, taxes & other fees apply. Services subject to availability and all applicable terms and conditions.</p>
              <h3>Speeds as fast as 1 Gbps/1 Gbps</h3>
              <ul>
                <li>No data caps</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(8,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(8,'phone_internet') }}</a>
              </div>
            </div>
          </div>


        </div>
        <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change. <br /> 
          **Available in select areas only, additional monthly fee applies. Frontier’s gigabit service is available in all Frontier fiber markets, but may not be available to every location depending on local network capacity or other technical details. While Frontier’s gigabit service is delivered on our 100% fiber-to-the-home network, actual speeds may vary due to limitations in the customer’s home network, devices in use, and/or Frontier’s network traffic conditions. Actual speeds will range up to 940 Mbps (download) and 880 Mbps (upload) and may vary depending on usage of the network and multiple other factors.
        </p>

      </div>
    </section><!-- End Icon Boxes Section -->


    <section>

      <div class="container">
          <h2 style="text-align:center" data-aos="fade-up">Xfinity from Comcast Internet Pricing</h2>
          <p style="text-align:center" data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">The pricing shown in the chart is based on internet standalone plans only. Customers can save on the internet portion of their bill when they bundle with TV and/or phone services. Additionally, the prices shown don’t include equipment fees.</p>
        <table data-aos="fade-up" >
          <caption>Offers and availability vary by market and are subject to change.<br />
            *For the first 12 months w/ a 1-year agreement.<br />
            †For the first 24 months w/ a 1-year agreement.<br />
            ‡2-year agreement required.<br />
            §Online orders only.</caption>
          <thead>
            <tr>
              <th scope="col">Internet Package</th>
              <th scope="col">Download Speeds Up to</th>
              <th scope="col">Upload Speeds Up to</th>
              <th scope="col">Introductory Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-label="Internet Package">Performance Starter+</td>
              <td data-label="Download Speeds Up to">25 Mbps</td>
              <td data-label="Upload Speeds Up to">3 Mbps</td>
              <td data-label="Introductory Price">$29.99/mo.*</td>
            </tr>
            <tr>
              <td data-label="Internet Package">Performance Select</td>
              <td data-label="Download Speeds Up to">100 Mbps</td>
              <td data-label="Upload Speeds Up to">5 Mbps</td>
              <td data-label="Introductory Price">$34.99/mo.*</td>
            </tr>
            <tr>
              <td data-label="Internet Package">Performance Pro+</td>
              <td data-label="Download Speeds Up to">200 Mbps</td>
              <td data-label="Upload Speeds Up to">5 Mbps</td>
              <td data-label="Introductory Price">$49.99/mo.*</td>
            </tr>
            <tr>
              <td data-label="Internet Package">Blast!</td>
              <td data-label="Download Speeds Up to">300 Mbps</td>
              <td data-label="Upload Speeds Up to">10 Mbps</td>
              <td data-label="Introductory Price">$64.99/mo.*</td>
            </tr>
            <tr>
              <td data-label="Internet Package">Extreme Pro+</td>
              <td data-label="Download Speeds Up to">600 Mbps</td>
              <td data-label="Upload Speeds Up to">15 Mbps</td>
              <td data-label="Introductory Price">$74.99/mo.*</td>
            </tr>
            <tr>
              <td data-label="Internet Package">Gigabit</td>
              <td data-label="Download Speeds Up to">1000 Mbps</td>
              <td data-label="Upload Speeds Up to">35 Mbps</td>
              <td data-label="Introductory Price">$84.99/mo.*</td>
            </tr>
            <tr>
              <td data-label="Internet Package">Gigabit Pro</td>
              <td data-label="Download Speeds Up to">2000 Mbps</td>
              <td data-label="Upload Speeds Up to">2000 Mbps</td>
              <td data-label="Introductory Price">$299.95/mo.‡§</td>
            </tr>
            


            
          </tbody>
        </table>

      </div>
     
      </section>





      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            
            
            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/entertainment.jpg" class="img-fluid animated" alt="Xfinity from Comcast Internet Deals">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

              <h4 class="title">Xfinity from Comcast Internet Deals</h4>
              <ul>
                <li><strong>Performance Starter</strong> — Download speeds up to 25 Mbps - $29.99/mo.*</li>
                <li><strong>Performance Select</strong> — Download speeds up to 100 Mbps - $34.99/mo.*</li>
                <li><strong>Performance Pro Plus</strong> — Download speeds up to 200 Mbps - $49.99/mo.*</li>
                <li><strong>Blast!</strong> — Download speeds up to 300 Mbps - $64.99/mo.*</li>
                <li><strong>Gigabit</strong> — Download speeds up to 1,000 Mbps - $84.99/mo.†</li>
                <li><strong>Gigabit Pro</strong> — Download speeds up to 2,000 Mbps - $299.95/mo.‡§</li>
              </ul>
              <p style="font-size:15px;">Data as of 2/28/20. Offers and availability may vary by location and are subject to change.<br />
                *for the first 12 months with 1-year agreement.<br />
                † With no term agreement.</p>

              <h5>Save Money by Bundling</h5>
              <p class="description">Xfinity bundles get you the best Xfinity internet prices, but that’s not all you get when you bundle. By adding home phone and TV to your internet package, you'll get unique phone features, like Caller ID on your television.</p>       
              <p class="description">You can also save money on your wireless bill thanks to the Xfinity Connect App, which lets you text and make calls from your smartphone, tablet, or other mobile devices.</p>
              <p class="description">Xfinity has even more ways to lower your monthly costs and enjoy your internet and TV services. Head over to the Xfinity Special Deals page to learn more.</p>
          
          </div>

          </div>
        </div>
          
      </section>

 


      <section>

        <div class="container">
            <h2 style="text-align:center" data-aos="fade-up">Xfinity No-Contract Plans</h2>
            <p style="text-align:center" data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">If you’re uncomfortable with annual contracts, or you have an upcoming move that makes you wary of early termination fees, Xfinity will take care of you with its no-contract plans.</p>
          <table data-aos="fade-up" >
            <caption>Data as of 2/28/20. Offers and availability may vary by location and are subject to change.<br />
              *For the first 12 months.</caption>
            <thead>
              <tr>
                <th scope="col">Internet Package</th>
                <th scope="col">Download Speeds Up to</th>
                <th scope="col">Upload Speeds Up to</th>
                <th scope="col">Introductory Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-label="Internet Package">Performance Starter (no contract)</td>
                <td data-label="Download Speeds Up to">25 Mbps</td>
                <td data-label="Upload Speeds Up to">5 Mbps</td>
                <td data-label="Introductory Price">$30.00/mo.*</td>
              </tr>
              <tr>
                <td data-label="Internet Package">Blast! (no contract)</td>
                <td data-label="Download Speeds Up to">200 Mbps</td>
                <td data-label="Upload Speeds Up to">10 Mbps</td>
                <td data-label="Introductory Price">$60.00/mo.*</td>
              </tr>
              <tr>
                <td data-label="Internet Package">Extreme Pro (no contract)</td>
                <td data-label="Download Speeds Up to">600 Mbps</td>
                <td data-label="Upload Speeds Up to">15 Mbps</td>
                <td data-label="Introductory Price">$80.00/mo.*</td>
              </tr>

  
  
              
            </tbody>
          </table>
  
        </div>
       
        </section>


        <section>
          <div class="container">
            <div class="row justify-content-between justify-content-center align-items-center">
  
              <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
  
                  <h4 class="title">Xfinity xFi</h4>
                  <p class="description">The new Xfinity xFi brings a whole new experience to your home network. It lets you manage your home WiFi network using your phone, your laptop, or your TV if you have X1 service. This means you can set up your network without the help of a technician, see which devices are connected to your network, and even set usage limits on certain devices.</p>
                  <p class="description">With this much control, you’ll enjoy the satisfaction of streaming your favorite shows while knowing your network is running efficiently and securely.</p>
  
              </div>
              
              <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                  <img src="/resources/assets/front_assets/img/xfinity/enterntain.jpg" class="img-fluid animated" alt="Xfinity xFi">
              </div>
  
            </div>
          </div>
            
        </section>
  
        <section style="background: aliceblue;">
          <div class="container">
            <div class="row justify-content-between justify-content-center align-items-center">
  
              
              
              <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                  <img src="/resources/assets/front_assets/img/spectrum/entertainment.jpg" class="img-fluid animated" alt="Xfinity Connect">
              </div>
  
              <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
  
                <h4 class="title">Xfinity Connect</h4>
                <h5>Xfinity Connect is an online hub for email, voicemail, texting, WiFi calls, and more.</h5>
                <p class="description">The free Xfinity Connect app puts you in charge of all your communication on the go. It allows you to text and make WiFi calls from your smartphone, saving your wireless and text minutes. You'll also get 7 email accounts with plenty of storage (up to 10 GB).</p>
            
            </div>
  
            </div>
          </div>
            
        </section>
  
        <section>
          <div class="container">
            <div class="row justify-content-between justify-content-center align-items-center">
  
              <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
  
                  <h4 class="title">Installing Xfinity Internet from Comcast</h4>
                  <h5>Xfinity Internet Equipment & Installation</h5>
                  <p class="description">What you'll need:</p>
                  <ul style="columns: 2;
                  -webkit-columns: 2;
                  -moz-columns: 2;">
                  
                  <li>You may be required to lease or purchase Xfinity equipment.</li>
                  <li>A cable line. If your home is not pre-wired, Xfinity will install a line for you</li>
                  <li>A cable modem. If you don't have one, Xfinity will lease or sell one to you.</li>
                  <li>A wireless router. If you want a wireless connection, you need a router; you may have to purchase your own.</li>
                  </ul>

              </div>
              
              <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                  <img src="/resources/assets/front_assets/img/spectrum/bundle.jpg" class="img-fluid animated" alt="Xfinity Internet from Comcast">
              </div>
  
            </div>
          </div>
            
        </section>

   

  </main><!-- End #main -->


@endsection