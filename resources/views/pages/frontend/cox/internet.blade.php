@extends('layouts.cox_main')
@section('content')

<section id="cox_intro_internet" class="d-flex align-items-center">

  <div class="container">

    <div class="row">

      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1 style=""><span>COX INTERNET SERVICE</span> <br/ >Stay connected to the moments that matter</h1>
        <h2 >Make the most of your home wifi with great deals on fast internet.</h2>
        <a href="tel:{{ Helper::providers_phone_type(18,'phone_internet') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(18,'phone_internet') }}</a>
      </div>

      <div class="col-lg-5 order-1 order-lg-2 responsive-img">
       
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
            <div class="outer-price-box">
            <div class="price-box">
              <h4><sup>$</sup>29<sup> 99</sup><span> <sup class="month">/mo.</span></sup></h4>
              <p class="description">for 12 months No annual contract required.</p>
            </div>

            <div class="price-box-internet" >
             <h2>Cox Internet Starter 10</h2>
              <div class="price-icon-internet"><i class="icofont-speed-meter"></i></div>
              <h3>Up to <strong>10</strong> Mbps download</h3>
              <p>Ideal for fewer than 3 devices that browse the internet</p>
            </div>
                <div class="border-gradiant-bottom"></div>
                <div class="call">
                  <div class="btn-wrap">
                    <a href="tel:{{ Helper::providers_phone_type(18,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(18,'phone_internet') }}</a>
                </div>
                </div>
          </div>
          </div>


          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="outer-price-box">
            <div class="price-box">
              <h4><sup>$</sup>39<sup> 99</sup><span> <sup class="month">/mo.</span></sup></h4>
              <p class="description">for 12 months with 1-yr. svc. agr.</p>
            </div>

            <div class="price-box-internet" >
             <h2>Cox Internet Essential 50</h2>
              <div class="price-icon-internet"><i class="icofont-speed-meter"></i></div>
              <h3>Up to <strong>50</strong> Mbps download</h3>
              <p>Ideal for 3 to 5 devices that occasionally receive emails and light internet users</p>
            </div>
                <div class="border-gradiant-bottom"></div>
                <div class="call">
                  <div class="btn-wrap">
                    <a href="tel:{{ Helper::providers_phone_type(18,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(18,'phone_internet') }}</a>
                </div>
                </div>
          </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="outer-price-box">
            <div class="price-box">
              <h4><sup>$</sup>59<sup> 99</sup><span> <sup class="month">/mo.</span></sup></h4>
              <p class="description">for 12 months with 1-yr. svc. agr.</p>
            </div>

            <div class="price-box-internet" >
             <h2>Cox Internet Preferred 150</h2>
              <div class="price-icon-internet"><i class="icofont-speed-meter"></i></div>
              <h3>Up to <strong>150</strong> Mbps download</h3>
              <p>Ideal for 5 to 7 devices and internet users who are power web users and gamers</p>
            </div>
                <div class="border-gradiant-bottom"></div>
                <div class="call">
                  <div class="btn-wrap">
                    <a href="tel:{{ Helper::providers_phone_type(18,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(18,'phone_internet') }}</a>
                </div>
                </div>
          </div>
          </div>


        </div>

        <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>

      </div>
    </section><!-- End Icon Boxes Section -->


        <!-- ======= Icon Boxes Section ======= -->
        <section id="icon-boxes" class="icon-boxes" style="background: aliceblue;">
          <div class="container">
  
            <h2 style="text-align:center;padding:50px 0;" data-aos="fade-up">How do you Internet?</h2>
    
            <div class="row">
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" >
                <div class="icon-outer-box">
                  <div class="icon-box">
                    <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
                    <h4 class="title">650,000+ wifi hotspots</h4>
                    <p>It’s free to connect to the nation’s largest network. All you need is an Internet Preferred 150 plan or higher.</p>
                  </div>
                </div>
                
              </div>
    
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-outer-box">
                <div class="icon-box">
                  <div class="icon"><i class="fas fa-user-shield"></i></div>
                  <h4 class="title">Panoramic Wifi App</h4>
                  <p>View and manage connected devices and pause wifi for dinner—all in a tap when you add the Panoramic Wifi Gateway.</p>
                </div>
              </div>
              </div>
    
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-outer-box">
                <div class="icon-box">
                  <div class="icon"><i class="fas fa-tv"></i></div>
                  <h4 class="title">Online security</h4>
                  <p>Help protect your family from online threats with Cox Security Suite powered by McAfee. Add on Panoramic Wifi and Cox Complete Care for even more security features.</p>
                </div>
              </div>
              </div>
  
            </div>
    
          </div>
        </section><!-- End Icon Boxes Section -->

    
      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">Get the speed you need</h4>
                <p class="description">The Gateway—an all-in-one modem and router—auto-optimizes your network to find the best connection for all your devices. Plus, get regular software updates and upgrades at no additional cost.</p>

            </div>
            
            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/cox/cox-device.png" class="img-fluid animated" alt="Wifi Router | Cox">
            </div>

          </div>
        </div>
          
      </section>

      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            
            
            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/cox/cox-internet-security.jpg" class="img-fluid animated" alt="Internet Security | Cox">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

              <h4 class="title">Be the wifi boss</h4>
              <p class="description">It’s your network, your way. Take control of your home network’s preferences and usage with the Panoramic Wifi app, and protect your connected devices from threats with included Advanced Security.</p>
          
          </div>

          </div>
        </div>
          
      </section>

      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">Ditch the dead zones</h4>
                <p class="description">Need some extra coverage? Add on optional Panoramic Wifi Pods to extend strong and secure Internet connection to every corner of your home, even to those tough-to-reach spots.</p>
          
            </div>
            
            <div class="col-lg-6 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/cox/panoramic-wifi-pods.jpg" class="img-fluid animated" alt="Panoramic Wifi Pods | Cox">
            </div>

          </div>
        </div>
          
      </section>




   

  </main><!-- End #main -->


@endsection