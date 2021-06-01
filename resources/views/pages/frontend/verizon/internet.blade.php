@extends('layouts.verizon_main')
@section('content')

<section  class="d-flex align-items-center">

  <div class="container d-flex align-items-center" id="verizon_intro_internet">
    <div class="row">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>Get the internet speed that’s right for you.</h1>
        <h2>Pick the internet plan that matches your needs and pay for what you want. No extra fees. No surprises. All on the 100% fiber-optic network.</h2>
        <a href="tel:{{ Helper::providers_phone_type(4,'phone_internet') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(4,'phone_internet') }}</a>
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
      <h2 class="price-boxes-title">Fios Internet Plans</h2>
      <div class="row">

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box">
            <h2>200 Mbps</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <div style="height:125px;">
            <h3>Stream and download movies, shows and photos.</h3>
            </div>
            <h4><sup>$</sup>39.99<span> / month</span></h4>

            <p class="description">Per month w/ Auto Pay + taxes & equip. charges.</p>

            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>Disney+ on us for 12 months ($6.99/mo. after)</li>
              <li><span class="fa-li"><i class="fas fa-plus" style="color:#333"></i></span>Save $10/mo with Unlimited Wireless</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(4,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(4,'phone_internet') }}</a>
            </div>
          </div>
        </div>


        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box">
            <h2>400 Mbps</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <div style="height:125px;">
            <h3>Great for multiple users, binge streaming and sharing large files.</h3>
            </div>
            <h4><sup>$</sup>59.99<span> / month</span></h4>

            <p class="description">Per month w/ Auto Pay + taxes & equip. charges.</p>

            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>Disney+ on us for 12 months ($6.99/mo. after)</li>
              <li><span class="fa-li"><i class="fas fa-plus" style="color:#333"></i></span>Save $10/mo with Unlimited Wireless</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(4,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(4,'phone_internet') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box">
            <h2>Gigabit Connection</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <div style="height:125px;">
            <h3>Ideal for a virtually seamless entertainment experience. Up to 940/880 Mbps.</h3>
            </div>
            <h4><sup>$</sup>79.99<span> / month</span></h4>

            <p class="description">Per month w/ Auto Pay + taxes.</p>

            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>Disney+ on us for 12 months ($6.99/mo. after)</li>
              <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>Router rental included</li>
              <li><span class="fa-li"><i class="fas fa-plus" style="color:#333"></i></span>Save $10/mo with Unlimited Wireless</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(4,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(4,'phone_internet') }}</a>
            </div>
          </div>
        </div>

      </div>
      <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>
    </div>
  </section><!-- End Icon Boxes Section -->

     <!-- ======= Icon Boxes Section ======= -->
     <section id="icon-boxes" class="icon-boxes">
      <div class="container">

        <h2 style="text-align:left;padding:30px 0;" data-aos="fade-up">Get more streaming, gaming, sharing with Fios Home Internet.</h2>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              <h4 class="title">100% fiber-optic network.</h4>
              <p class="description">Fios delivers internet on a 100% fiber-optic network offering the fastest, most reliable internet   and amazing TV picture quality.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <h4 class="title">Upload and download fast.</h4>
              <p class="description">
                Fios offers upload speeds that are a close match to its downloads. This means you can stream as fast as you share.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <h4 class="title">Superfast Fios Gigabit Connection.</h4>
              <p class="description">
                Get our fastest, most powerful internet, great for gamers and households with multiple devices or if you just want our best.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <h4 class="title">Have Verizon Wireless?</h4>
              <p class="description">
                Save up to $20/mo when you combine your wireless plan with a Fios Internet plan.
              </p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Icon Boxes Section -->



    <section  class="section-content">

      <div class="container d-flex" style="background:url(/resources/assets/front_assets/img/verizon/internet-surfing-kids.jpg); min-height: 550px;">

        <div class="row">



          <div style="margin-top:50px;" class="col-lg-7 order-1 order-lg-1" data-aos="fade-up" data-aos-delay="100">

            <h4 class="title">Nothing beats Fios 100% fiber-optic network.</h4>

            <ul>
              <li>Stream with virtually no buffering</li>
              <li>Game practically lag free</li>
              <li>Upload and download in a flash</li>
              <li>And, you’ll have enough bandwidth to do it all at once</li>
            </ul>

        </div>

        <div class="col-lg-5 pt-lg-0 order-1 order-lg-2  spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
          {{-- <img src="/resources/assets/front_assets/img/spectrum/entertainment.jpg" class="img-fluid animated" alt=""> --}}
        </div>

        </div>

      </div>

    </section>


    <section  class="section-content">
      <div class="container" >
        <div class="row justify-content-between justify-content-center align-items-center">

          <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

            <h4 class="title">Everything’s faster with the new Fios Home Router.</h4>
            <p class="description">Get stronger Wi-Fi for your connected home and devices.</p>
            <ul>
              <li>Benefit from faster next-gen Wi-Fi 6 technology.</li>
              <li>Enjoy a wider coverage "net" through your house.</li>
              <li>Includes a guest network, so your personal network stays secure.</li>
            </ul>

            </div>

          <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
              <img src="/resources/assets/front_assets/img/verizon/router.png" class="img-fluid animated" alt="Verizon Wifi Router">
          </div>

        </div>
      </div>

    </section>


  </main><!-- End #main -->

@endsection
