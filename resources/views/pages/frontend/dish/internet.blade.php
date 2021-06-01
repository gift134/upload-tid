@extends('layouts.dish_main')
@section('content')

<section id="dish_intro_internet" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1 style="color:#f01446!important">Make DISH your internet provider anywhere</h1>
        <h2 style="color:#f01446!important">Got more Choices when Selecting your Internet</h2>
        <a href="tel:{{ Helper::providers_phone_type(4992,'phone_internet') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(4992,'phone_internet') }}</a>
      </div>
      <div class="col-lg-5 order-1 order-lg-2 responsive-img" style="text-align: end;">
      
      </div>
    </div>
  </div>

</section>

  <main id="main">
    
    <!-- ======= Icon Boxes Section ======= -->
    <section id="price-boxes" class="price-boxes">
     <div class="container">
      <h2>FRONTIER INTERNET PLANS & PRICES</h2>
      <p>Frontier Internet packages are available in 29 states, with some areas designated for FiOS plans and others for High-Speed Internet. Both services help households stay connected, with FiOS supporting even more devices and users.</p>
      
        <div class="row justify-content-center align-items-center">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="price-box" style="border-top: 10px solid #f99e1c;">
              <h2>Frontier High-Speed Internet</h2>
              <h4 style="color:#f99e1c;"><sup>$</sup>27.99<span> / month</span></h4>
              <p class="description">for 24 months</p>
              <ul>
                <li>Up to 45 Mbps</li> 
                <li>Broadband</li>   
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(4992,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(4992,'phone_internet') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            
            <div class="price-box" style="border-top: 10px solid #ff672a;">
              <h2>Frontier FiOS</h2>
              <h4 style="color:#ff672a;"><sup>$</sup>$29.99<span> / month</span></h4>
              <p class="description">for 24 months</p>
              <ul>
                <li>Up to 940 Mbps</li>
                <li>Fiber Optic</li>   
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(4992,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(4992,'phone_internet') }}</a>
              </div>
            </div>
          </div>




        </div>

      
      </div>
    </section><!-- End Icon Boxes Section -->

     <!-- ======= Icon Boxes Section ======= -->
     <section id="icon-boxes" class="icon-boxes" style="background: aliceblue;">
      <div class="container">

        <h2 style="text-align:center;padding:30px 0;" data-aos="fade-up">SPEED TIERS FOR FRONTIER HIGH-SPEED INTERNET</h2>
        <p  style="text-align:center;" data-aos="fade-up">Internet speeds are expressed in megabits per second (Mbps), which measures how many bits of data your connection can send or receive at one time. Frontier internet speeds start at up to 6 Mbps with faster options available to allow more bandwidth for busier homes.</p>
        <div class="row">
          <div class="col-md-4  d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box" >
              <h4 class="title">Up to<br/>6Mbps</h4>
              <ul style="text-align:left;">
                <li>Ideal for 1–2 users</li>
                <li>Best for email, browsing & shopping</li>
                <li>No annual commitment</li>
              </ul>
            </div>
          </div>

          <div class="col-md-4  d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box" >
              <h4 class="title">Up to<br/>
                25Mbps</h4>
              <ul style="text-align:left;">
                <li>Ideal for 2–4 users</li>
                <li>Best for HD streaming</li>
                <li>No annual commitment</li>
              </ul>
            </div>
          </div>

          <div class="col-md-4  d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box" >
              <h4 class="title">Up to<br/>
                45Mbps
                </h4>
              <ul style="text-align:left;">
                <li>Ideal for 4–6 users</li>
                <li>Best for households with lots of devices</li>
                <li>No annual commitment</li>
              </ul>
            </div>
          </div>

        


        </div>

      </div>
    </section><!-- End Icon Boxes Section -->





      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            
            
            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
              <img src="/resources/assets/front_assets/img/dish/internet.png" class="img-fluid animated" alt="Dish Internet">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

              <h4 class="title">Make DISH your internet provider anywhere</h4>
              <p class="description">Did you know you can get high speed internet from DISH? No matter where in the country you live, DISH has a way to get you connected with internet services tailored to your location. We offer high speed satellite internet as well as high speed wired internet solutions through providers in your area.</p>
          
          </div>

          </div>
        </div>
          
      </section>

      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">Stay connected with DISH satellite internet</h4>
                <p class="description">In places where connecting through cable or fiber isn’t an option, DISH offers high speed satellite internet. No matter where you are, you can take care of the important things—email, shopping, browsing the web. Connections are reliable, installation is professional, and customer support is available 24/7.</p>
 
            </div>
            
            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
              <img src="/resources/assets/front_assets/img/dish/great-internet.png" class="img-fluid animated" alt="Dish Satellite Internet">
            </div>

          </div>
        </div>
          
      </section>

      <section >
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            
            
            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
              <img src="/resources/assets/front_assets/img/dish/all-internet.png" class="img-fluid animated" alt="Dish Internet Providers Nationwide">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

              <h4 class="title">We partner with internet providers nationwide</h4>
              <p class="description">Get high speed internet service no matter where you live. DISH can get you connected through our partners in your neighborhood and offer you the value you expect. Whether we connect you with cable or fiber, you can do all the browsing and streaming you like.</p>
          
          </div>

          </div>
        </div>
          
      </section>

      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">Get the benefits of an internet-connected Hopper</h4>
                <p class="description">The Hopper 3 is the most technologically-advanced DVR but we made it simple to use with even more features available when it’s connected to the internet. Use popular apps like Netflix, YouTube, and Pandora on your TV through the Hopper 3—no need to connect another device. Watch 100% of your live and recorded TV anywhere. Plus you can control your TV without a remote when you pair the Hopper 3 with Amazon Echo or Echo Dot.</p>
 
            </div>
            
            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
              <img src="/resources/assets/front_assets/img/dish/tech.png" class="img-fluid animated" alt="Dish Internet-connected Hopper">
            </div>

          </div>
        </div>
          
      </section>


  </main><!-- End #main -->


@endsection