@extends('layouts.buckeyebroadband_main')
@section('content')

<section id="buckeyebroadband_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-8 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1 style="color:white!important">Our Most Popular High Speed Internet Packages</h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(602,'phone_internet') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(602,'phone_internet') }}</a>
      </div>
      <div class="col-lg-4 order-1 order-lg-2 responsive-img">
       
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
              <h2>STARTER INTERNET</h2>
              <h3 class="padding-bottom-none padding-top-none"><span>25</span> Mbps</h3>
              <div class="price-icon"><i class="internet icofont-speed-meter"></i></div>
              <h3 class="padding-top-none">Download</h3>
              <p class="description p-internet-height">Power 1-3 devices with this 25 Mbps speed. This will give you web and email access and help you keep up with social media.</p>
              <div class="price-tag">
              <h4><sup>$</sup>19.99<span>/month</span></h4>
              <h5>$39.99/Mo.</h5>
              <h6>Reg Rate</h6>
              </div>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(602,'phone_internet') }}" class="btn-call">{{ Helper::providers_phone_type(602,'phone_internet') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="price-box">
              <h2>ESSENTIAL INTERNET</h2>
              <h3 class="padding-bottom-none padding-top-none"><span>50</span> Mbps</h3>
              <div class="price-icon"><i class="internet icofont-speed-meter"></i></div>
              <h3 class="padding-top-none">Download</h3>
              <p class="description p-internet-height">Power 5-7 devices at one time with this essential speed. This will give you a great internet experience without delays and buffering. Includes free unlimited data for 6 months.</p>
              <div class="price-tag">
              <h4><sup>$</sup>39.99<span>/month</span></h4>
              <h5>$99.99/Mo.</h5>
              <h6>Reg Rate</h6>
              </div>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(602,'phone_internet') }}" class="btn-call">{{ Helper::providers_phone_type(602,'phone_internet') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="price-box">
              <h2>ULTIMATE INTERNET</h2>
              <h3 class="padding-bottom-none padding-top-none"><span>200</span> Mbps</h3>
              <div class="price-icon"><i class="internet icofont-speed-meter"></i></div>
              <h3 class="padding-top-none">Download</h3>
              <p class="description p-internet-height">Power 10-20 devices at one time with this ultimate speed. This will give you the ability to stream on multiple devices! Includes free unlimited data for 6 months.</p>
              <div class="price-tag">
              <h4><sup>$</sup>59.99<span>/month</span></h4>
              <h5>$119.99/Mo.</h5>
              <h6>Reg Rate</h6>
              </div>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(602,'phone_internet') }}" class="btn-call">{{ Helper::providers_phone_type(602,'phone_internet') }}</a>
              </div>
            </div>
          </div>


        </div>

        <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>

      </div>
    </section><!-- End Icon Boxes Section -->


  

      <section class="feat">
        <div class="container">
         
                <h4 data-aos="fade-up">Express High Speed Internet- An Exceptional Customer Experience!</h4>
                <p data-aos="fade-up">Surf the web, game online, download your favorite music and movies and keep in touch with friends and family across the country with even <strong>FASTER SPEEDS</strong>. BEX High-Speed Internet service surpasses all the competition.</p>
                <ul data-aos="fade-up">
                  <li>Reliable, fast connection - <strong>fastest in town and now even faster!</strong></li>
                  <li>In-Home WiFi</li>
                  <li><strong>Local, 24/7 customer service</strong> - we are always here!</li>
                </ul>
        </div>
          
      </section>


      <section class="feat">
        <div class="container">      
          <h4 data-aos="fade-up">Giving you the speed you need!</h4>
          <p data-aos="fade-up">As internet powered devices in our homes continue to grow and we become more connected, only ONE local technology leader wants to grow with you. We are excited to announce NEW internet speeds up to 1 Gig. Whether you're a streamer, gamer, or casual user with packages ranging from 100 Mbps to 1 Gig, we have a speed plan that's right for you.</p>
        </div>
          
      </section>


      <section class="gig-box">
        <div class="container">

          <div class="row">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="gig-card">
                <h2>ESSENTIALS</h2>
                <div class="speed">
                  <h5>100 MBPS</h5>
                </div>
                <div class="price-icon"><i class="internet icofont-speed-meter"></i></div>
                <h4>Connect</h4>
                <h3>3-8</h3>
                <h6>DEVICES AT THE SAME TIME</h6>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="gig-card center-card-bg">
                <h2>ULTIMATE</h2>
                <div class="speed">
                  <h5>200 MBPS</h5>
                </div>
                <div class="price-icon"><i class="internet icofont-speed-meter"></i></div>
                <h4>Connect</h4>
                <h3>10-20</h3>
                <h6>DEVICES AT THE SAME TIME</h6>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="gig-card">
                <h2>GIG</h2>
                <div class="speed">
                  <h5>1000 MBPS</h5>
                </div>
                <div class="price-icon"><i class="internet icofont-speed-meter"></i></div>
                <h4>Connect</h4>
                <h3>20-60</h3>
                <h6>DEVICES AT THE SAME TIME</h6>
              </div>
            </div>
  
  
          </div>
  

        </div>
      </section>

      <section>
        <div class="container">    
          <div class="row">
            <div class="col-md-8">
              <h4  class="call-now-title" data-aos="fade-up">Interested in Getting Gig Speed?</h4>
            </div>
            <div class="col-md-4 ">
              <div class="btn-wrap call-now">
                <a href="tel:{{ Helper::providers_phone_type(602,'phone_internet') }}" class="btn-call">{{ Helper::providers_phone_type(602,'phone_internet') }}</a>
              </div>
            </div>
          </div>  

  
        </div>
          
      </section>






   

  </main><!-- End #main -->


@endsection