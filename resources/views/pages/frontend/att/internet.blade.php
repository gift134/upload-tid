@extends('layouts.att_main')
@section('content')

<section id="att_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>Our best plans. Our best prices. On the best network.</h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(7, 'phone_internet') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(7, 'phone_internet') }}</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 responsive-img">
        <img src="/resources/assets/front_assets/img/att/att-internet-m.png" class="img-fluid" alt="AT&T Internet Deals">
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
          <div class="price-box" style="height:1170px">
            <h2>AT&T UNLIMITED ELITESM</h2>
            <div class="price-icon"><i class="icofont-monitor  no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <h4><sup>$</sup>50.00<span> per line / month</span></h4>
            <p class="description">$200/mo. for 4 lines</p>
              <h3>Here's what you'll get:</h3>
            <ul>
              <li><strong>Unlimited talk, text, data + 100GB of Premium Data</strong><br/>After 100GB, AT&T may slow data speeds when the network is busy. Roaming may be at 2G speed.</li>
              <li><strong>High-definition streaming</strong><br />Plan includes Stream Saver. Stream video in HD quality, when available, with Stream Saver turned off.</li>
              <li><strong>30GB Hotspot per line</strong><br />After 30GB, mobile hotspot speed slowed to a maximum of 128Kbps.</li>
              <li><strong>5G access</strong><br />Req’s compatible device for 5G connection. Limited availability. May not be available in your area.</li>
              <li><strong>HBO® included</strong><br />Video may be ltd to SD. Requires compatible device & activating HBO at www.att.com/myatt. Content, programming and channels subject to change.</li>
              <li><strong>Signature Program members save up to $10/mo. per phone line</strong></li>
              <li><strong>Unlimited texting from U.S. to 120+ countries</strong></li>
              <li><strong>Device security, fraud blocking, and spam risk alerts</strong></li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(7, 'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(7, 'phone_internet') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="price-box" style="height:1170px">
            <h2>AT&T UNLIMITED EXTRASM</h2>
            <div class="price-icon"><i class="icofont-monitor  no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <h4><sup>$</sup>$40.00<span> per line / month</span></h4>
            <p class="description">$160/mo. for 4 lines</p>
            <h3>Here's what you'll get:</h3>
            <ul>
              <li><strong>Unlimited talk, text, data +50GB of Premium Data</strong><br />After 50GB, AT&T may slow data speeds when the network is busy. Roaming may be at 2G speed.</li>
              <li><strong>Standard-definition streaming</strong></li>
              <li><strong>15GB Hotspot per line</strong><br />After 15GB, mobile hotspot speed slowed to a maximum of 128Kbps.</li>
              <li><strong>5G access</strong><br />Req’s compatible device for 5G connection. Limited availability. May not be available in your area.</li>
              <li><strong>Unlimited texting from U.S. to 120+ countries</strong></li>
              <li><strong>Device security, fraud blocking, and spam risk alerts</strong></li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(7, 'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(7, 'phone_internet') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="price-box" style="height:1170px">
            <h2>AT&T UNLIMITED STARTERSM</h2>
            <div class="price-icon"><i class="icofont-monitor  no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <h4><sup>$</sup>35.00<span> per line / month</span></h4>
            <p class="description">$140/mo. for 4 lines</p>
            <h3>Here's what you'll get:</h3>
            <ul>
              <li><strong>Unlimited talk, text, data</strong><br />AT&T may slow data speeds when the network is busy. Roaming may be at 2G speed.</li>
              <li><strong>Standard-definition streaming</strong></li>
              <li><strong>Unlimited texting from U.S. to 120+ countries</strong></li>
              <li><strong>Device security, fraud blocking, and spam risk alerts</strong></li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(7, 'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(7, 'phone_internet') }}</a>
            </div>
          </div>
        </div>


      </div>
      <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change. Req’s you to select offer.</p>
    </div>
  </section><!-- End Icon Boxes Section -->


      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center ">

            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">Free, fast, no-contact delivery and device setup</h4>
                <p class="description">Pick the time, and we will deliver your new device(s) straight to your doorstep. After you’ve received your deliver, A same-day delivery expert will contact you to schedule a free over-the-phone personal appointment to guide you through setup and activation, and help answer any questions you may have.</p>

            </div>

            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                <h4 class="title">Get your fastest speed</h4>
                <p class="description">Order AT&T Internet and get the fastest speed available—with plans up to 100Mbps*—for a low monthly price.</p>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>Enjoy fast online speeds for the whole family.</li>
                  <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>Seamlessly stream, work, and game.</li>
                  <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>Access the internet with multiple devices at the same time.** </li>
                </ul>
            </div>

          </div>
        </div>

      </section>



      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">Wall-to-wall Wi-Fi</h4>
                <p class="description">Get a seamless whole-home Wi-Fi® experience with AT&T Smart Wi-Fi. Our advanced Wi-Fi technology selects the best and fastest connection wherever you are in the home for a connection you can count on.</p>

            </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/att/tablet-women.jpg" class="img-fluid animated" alt="Wifi | AT&T">
            </div>

          </div>
        </div>

      </section>







  </main><!-- End #main -->


@endsection
