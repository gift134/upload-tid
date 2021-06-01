@extends('layouts.centurylink_main')
@section('content')

<section id="centurylink_intro_phone" class="d-flex align-items-center">

  <div class="container">

    <div class="row">

      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>Home Phone Service<br />
          Stay connected with CenturyLink Home Phone</h1>
        <h2>Get reliable landline phone service with a crystal-clear connection. CenturyLink Home Phone Service offers local, long distance, and VoIP home phone plans that fit your needs</h2>
        <a href="tel:{{ Helper::providers_phone_type(12,'phone_phone') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(12,'phone_phone') }}</a>
      </div>

      <div class="col-lg-5 order-1 order-lg-2 responsive-img">
       
      </div>

    </div>

  </div>

</section>

  <main id="main">


    <section class="feature-table">

      <div class="container">
          <h2 data-aos="fade-up">Home Phone Service Plans & Features</h2>
          <p data-aos="fade-up">Choose the home phone plan that is right for you, with long distance options and popular calling features.</p>
        <table data-aos="fade-up" >
          <caption>Unlimited Home Phone service comes packed with features, including: call waiting, caller ID, call waiting
            ID, voice mail, 3-way calling, call rejection, call forwarding, call return, anonymous call rejection, speed
            call, busy redial. *Not all features are available in all markets.
          </caption>
          <thead>
            <tr>
              <th scope="col">Package</th>
              <th scope="col">Basic</th>
              <th scope="col">Unlimited</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-label="Package">Local</td>
              <td data-label="Basic"><i class="fas fa-check" style="color:#27a56f"></i></td>
              <td data-label="Unlimited"><i class="fas fa-check" style="color:#27a56f"></i></td>
            </tr>
            <tr>
              <td data-label="Package">Long Distance</td>
              <td data-label="Basic"></td>
              <td data-label="Unlimited"><i class="fas fa-check" style="color:#27a56f"></i></td>
            </tr>
            <tr>
              <td data-label="Package">Feature</td>
              <td data-label="Basic"></td>
              <td data-label="Unlimited"><i class="fas fa-check" style="color:#27a56f"></i></td>
            </tr>
       
          </tbody>
        </table>

      </div>
     
      </section>

    <!-- ======= Icon Boxes Section ======= -->


    <section class="phone-feature">
      <div class="container">
      
        <div class="row">
          <div class="phone-col-1 col-md-4  align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <h2>5 Great Reasons</h2>
            <h3>To Have a Home Phone</h3>
          </div>
          <div class="phone-col-2 col-md-8 align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">

            <h4>1. Safety First</h4>
            <p>In an emergency, landline phones identify your exact location, so first responders can send help.</p>

            <h4>2. Quality Counts</h4>
            <p>Landline phone service gets crystal clear, reliable connections with virtually no delays or lag time.</p>

            <h4>3. Excellent Coverage</h4>
            <p>Home landline phones always provide excellent coverage because they rely on phone networks not towers with spotty coverage.</p>

            <h4>4. Security System</h4>
            <p>Many security systems require a home phone line because landline monitoring is a more reliable method of sending alarms signals.</p>

            <h4>5. Great Home Phone Plans</h4>
            <p>There are home phone plans available to talk to family and friends as much as you like – across the country and internationally.</p> 

          </div>
        </div>

      </div>
    </section>

          <!-- ======= Icon Boxes Section ======= -->
          <section id="icon-boxes" class="icon-boxes" style="background: aliceblue;">
            <div class="container">
    
              <h2 style="text-align:center;padding:50px 0;" data-aos="fade-up">All the action. All on Contour TV. </h2>
      
              <div class="row justify-content-center ">
    
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" >
                  <div class="icon-outer-box">
                    <div class="icon-box">
                      <h2>Streaming apps</h2>
                      <h3>The Century™ Calling Plan</h3>
                      <p>Over a hundred countries to choose from. Call anytime you want.</p>

                      <h3>Oh Canada!</h3>
                      <p>Connect with your friends and family in the Great White North.</p>

                      <h3>Enjoy our reduced rates to Mexico and other Latin American Countries.</h3>
                      <p>Flexible plans that connect you with friends and family in Mexico and other Latin American countries.</p>
                      <a href="tel:{{ Helper::providers_phone_type(12,'phone_phone') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(12,'phone_phone') }}</a>
                    </div>
                  </div>
                </div>
      

              </div>
              
            </div>
          </section>
          <!-- End Icon Boxes Section -->

    {{-- <section id="price-boxes" class="price-boxes">
  
      <div class="container">
        <div class="border-top-price-boxes"></div>
        <div class="row outer-price-box">

          <div class="col-sm-12">
            <div class="row justify-content-center inner-price-box">

            
          <div class="col-md-6 col-lg-5 align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="">
            <div class="price-box"  style="height: 140px;">
              <h2>CenturyLink Internet
                with Price for Life</h2>
              <p class="description">Keep your rate for as long as you keep your plan.</p>
            </div>
              <h4><sup>$</sup>49<sup> 00</sup><span> <sup class="month">/mo.</span></sup></h4>

            <div class="price-box-internet" >
             
              <div class="price-icon-internet"><i class="icofont-speed-meter"></i></div>
              <h3>All speeds up to 100 Mbps</h3>
              <p style="height: 130px;">Speed may not be available in your area. Rate requires paperless billing. Additional taxes, fees, and surcharges apply. Get the fastest internet speed available at your home (max speed is up to 100 Mbps).</p>
              <ul>
                <li>Work from home and shop online with ease</li>
                <li>Connect multiple users and devices</li>
                <li>Stream multiple HD movies</li>
              </ul>
            </div>
          </div>
          </div>

          <div class="hidden-sm" style="display: block;
          border-left: 1px solid black;
          height: 550px;
          float: left;
          margin-top: 43px;" style="col-sm-1">
          </div>


          <div class="col-md-6 col-lg-5 align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="">
            <div class="price-box" style="height: 140px;">
              <h2>Fiber Gigabit</h2>
            </div>
              <h4><sup>$</sup>65<sup> 00</sup><span> <sup class="month">/mo.</span></sup></h4>
              
            

            <div class="price-box-internet" >
             
              <div class="price-icon-internet"><i class="icofont-speed-meter"></i></div>
              <h3>Speeds up to 940 Mbps</h3>
              <p style="height: 130px;">Speed may not be available in your area. Rate requires paperless billing. Additional taxes, fees, and surcharges apply.</p>
              <ul>
                <li>Work from home or attend class virtually</li>
                <li>Connect multiple high-bandwidth users</li>
                <li>Stream multiple HD movies</li>
              </ul>
            </div>
            
          </div>
          </div>
          <div class="col-sm-12 align-item-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="call">
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(12,'phone_phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(12,'phone_phone') }}</a>
            </div>
            </div>
          </div>
        </div>
      </div>
        <p style="text-align:center; font-size:16px;margin-top:10px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>
        </div>

    

      </div>

      <div class="container">
        <div class="bottom-feature">
          <h2>CenturyLink Internet <br><span>with</span> <span class="whiteText">Price For Life</span></h2>
          <p>Our Price for Life Internet deal keeps you connected to the world without price hikes or long‐term contracts. Your Internet rate won’t change as long as you keep your CenturyLink Price For Life plan! It’s a great home Internet service for an affordable price.</p>
          <div>
            No contract Internet&nbsp;&nbsp;&nbsp; • &nbsp;&nbsp;&nbsp;No rate hikes&nbsp;&nbsp;&nbsp; • &nbsp;&nbsp;&nbsp;No hassles&nbsp;&nbsp;&nbsp; • &nbsp;&nbsp;&nbsp;Pay month‐to‐month&nbsp;&nbsp;&nbsp; • &nbsp;&nbsp;&nbsp;No credit checks&nbsp;&nbsp;&nbsp; • &nbsp;&nbsp;&nbsp;No cancellation fee
        </div>

        </div>
       
      </div>
    </section> --}}
    <!-- End Icon Boxes Section -->

    
      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">We have just the plan for you..</h4>
                <p class="description">Keep in touch with friends and family across the country, right next door or internationally with a crystal clear, reliable home phone connection.</p>

            </div>
            
            <div class="col-lg-6 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/centurylink/phone-call.jpg" class="img-fluid animated" alt="Internet and Phone Connection | CenturyLink">
            </div>

          </div>
        </div>
          
      </section>

   

   

  </main><!-- End #main -->


@endsection