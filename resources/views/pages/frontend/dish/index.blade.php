@extends('layouts.dish_main')
@section('content')

<section id="dish_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1 style="color:#f01446!important">DISH SATELLITE TV BEATS CABLE</h1>
        <h2 style="color:#f01446!important">Satellite TV with the same channels and reliability at 2-year prices.</h2>
        <a href="tel:{{ Helper::providers_phone_type(4992,'phone') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(4992,'phone') }}</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 responsive-img" style="text-align: end;">
        <img src="/resources/assets/front_assets/img/dish/dish-hopper.png" class="product-image img-fluid" alt="Dish Hopper" style="width:350px;height:auto;">
      </div>
    </div>
  </div>

</section>

  <main id="main">

    <!-- ======= Icon Boxes Section ======= -->
    <section id="price-boxes" class="price-boxes">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="price-box" style="border-top: 10px solid #f99e1c;">
              <h4 style="color:#f99e1c;"><sup>$</sup>59.99<span> / month</span></h4>
              <p class="description">for 24 months</p>
              <ul>
                <li>190 channels</li>  
              </ul>
              <h3>America's Top 120™<br/>Free Google Voice Remote‡ and DVR Included</h3>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(4992,'phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(4992,'phone') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            
            <div class="price-box" style="border-top: 10px solid #ff672a;">
              <h4 style="color:#ff672a;"><sup>$</sup>74.99<span> / month</span></h4>
              <p class="description">for 24 months</p>
              <ul>
                <li>190+ channels</li>  
              </ul>
              <h3>America's Top 120+™<br/>Free Google Voice Remote‡ and DVR Included</h3>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(4992,'phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(4992,'phone') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            {{-- <p class="promo-text red">Most Popular</p> --}}
            <div class="price-box" style="border-top: 10px solid #f01446;">
              <h4 style="color:#f01446;"><sup>$</sup>84.99<span> / month</span></h4>
              <p class="description">for 24 months</p>
              <ul>
                <li>240+channels</li>  
              </ul>
              <h3>America's Top 200™<br/>Free Google Voice Remote‡ and DVR Included</h3>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(4992,'phone') }}" class="btn-call">{{ Helper::providers_phone_type(4992,'phone') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            {{-- <p class="promo-text pink">Best Value</p> --}}
            <div class="price-box" style="border-top: 10px solid #ca1061;">
              <h4 style="color:#ca1061;"><sup>$</sup>94.99<span> / month</span></h4>
              <p class="description">for 24 months</p>
              <ul>
                <li>290+ channels</li>  
              </ul>
              <h3>America's Top 250™<br/>Free Google Voice Remote‡ and DVR Included</h3>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(4992,'phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(4992,'phone') }}</a>
              </div>
            </div>
          </div>


        </div>

        <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">All offers require credit qualification, 24-month commitment with early termination fee and eAutoPay. Prices include Hopper Duo for qualifying customers. Hopper, Hopper w/Sling or Hopper 3 $5/mo. more. Upfront fees may apply based on credit qualification. ‡Requires internet-connected Hopper, Joey, or Wally device. Customer must press Voice Remote button to activate feature. The Google Assistant Smart Home features require Google account and compatible devices. Google is a trademark of Google LLC.</p>

      </div>
    </section><!-- End Icon Boxes Section -->


      <!-- ======= Icon Boxes Section ======= -->
      <section id="icon-boxes" class="icon-boxes" style="background: aliceblue;">
        <div class="container">

          <h2 style="text-align:center;padding:50px 0;" data-aos="fade-up">DISH IS #1 IN CUSTOMER SATISFACTION</h2>
  
          <div class="row">
            <div class="col-md-6  d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="icon-box">
                <h4 class="title">Stable 2 Year Price</h4>
                <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
                <p class="description">Only DISH guarantees a 2-year price for satellite TV, keeping your rate consistent so you won’t have to shell out almost double the price in year 2.</p>
              </div>
            </div>

            <div class="col-md-6 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                <div class="icon-box">
                  <h4 class="title">FREE INSTALLATION</h4>
                  <div class="icon"><i class="fas fa-tv"></i></div>
                  <p class="description">DISH TV helps you save while making the switch by offering FREE standard professional installation in up to 6 rooms (same-day often available!).</p>
                </div>
              </div>
  
          
  
  
          </div>
  
        </div>
      </section><!-- End Icon Boxes Section -->

      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">LOCAL CHANNELS INCLUDED FOR NO EXTRA CHARGE</h4>
                <p class="description">Most TV providers will quote you an extra fee to watch ABC, CBS, PBS, and any other public channel available in your area. But when you order America’s Top packages from DISH TV, local channels are included for no extra charge—as they should be.</p>
 
            </div>
            
            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/dish/remote-watch.png" class="img-fluid animated" alt="Dish Local Channels">
            </div>

          </div>
        </div>
          
      </section>

      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            
            
            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/dish/dish-portable.png" class="img-fluid animated" alt="Dish Portables">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

              <h4 class="title">DISH ANYWHERE, JUST AS PORTABLE AS ANY STREAMING APP</h4>
              <p class="description">You don’t have to be home to watch DISH TV. Take your entire DVR library or even watch live TV away from home when you download the free DISH Anywhere mobile app. You can watch DISH Anywhere wherever there’s Internet, so go for it—huddle in a corner booth and stream your shows over cafė Wi-Fi, or take advantage of your sweet unlimited data and watch primetime on the bus.</p>
          
          </div>

          </div>
        </div>
          
      </section>


  </main><!-- End #main -->


@endsection