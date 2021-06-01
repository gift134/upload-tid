@extends('layouts.verizon_main')
@section('content')

<section>

  <div class="container d-flex align-items-center" id="verizon_intro_bundle">
    <div class="row">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>Shop Verizon Fios Plans for your Home.</h1>
        <h2>Mix and match Verizon Fios Internet, TV, and home phone to create your perfect package. Make the switch to our 100% fiber-optic network today.</h2>
        <a href="tel:{{ Helper::providers_phone_type(4,'phone_bundles') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(4,'phone_bundles') }}</a>
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
      <h2 class="price-boxes-title">Fios Bundle Plans</h2>
      <div class="row">

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box">
            <h2>Your Fios TV + 200 Mbps + Home Phone</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>

            <h4><sup>$</sup>70.00<span> / month</span></h4>

            <p class="description">Per month w/ Auto Pay + taxes & equip. charges.</p>

            <h3>125+ channels. Choose 5 of your favorite channels and we'll recommend a package based on your preferences.</h3>
            <h3>Stream and download movies, shows and photos.</h3>
            <h3>Get the most out of your home phone with caller ID, spam blocking and more.</h3>

            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>1st Set Top Box included</li>
              <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>Disney+ on us for 12 months ($6.99/mo. after)</li>
              <li><span class="fa-li"><i class="fas fa-plus" style="color:#333"></i></span>Save $10/mo with Unlimited Wireless</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(4,'phone_bundles') }}" class="btn-call">Call {{ Helper::providers_phone_type(4,'phone_bundles') }}</a>
            </div>
          </div>
        </div>


        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box">
            <h2>More Fios TV + 200 Mbps + Home Phone</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>

            <h4><sup>$</sup>90.00<span> / month</span></h4>

            <p class="description">Per month w/ Auto Pay + taxes & equip. charges.</p>

            <h3>300+ channels. Get our most popular channels plus regional sports.</h3>
            <h3>Stream and download movies, shows and photos.</h3>
            <h3>Get the most out of your home phone with caller ID, spam blocking and more.</h3>

            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>1st Set Top Box included</li>
              <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>Disney+ on us for 12 months ($6.99/mo. after)</li>
              <li><span class="fa-li"><i class="fas fa-plus" style="color:#333"></i></span>Save $10/mo with Unlimited Wireless</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(4,'phone_bundles') }}" class="btn-call">Call {{ Helper::providers_phone_type(4,'phone_bundles') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box">
            <h2>The Most Fios TV + 200 Mbps + Home Phone</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <h4><sup>$</sup>110.00<span> / month</span></h4>

            <p class="description">Per month w/ Auto Pay + taxes & equip. charges.</p>

            <h3>425+ channels. Kick back with the best sports and movie channels.</h3>
            <h3>Stream and download movies, shows and photos.</h3>
            <h3>Get the most out of your home phone with caller ID, spam blocking and more.</h3>

            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>1st Set Top Box included</li>
              <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>Basic DVR included</li>
              <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>Disney+ on us for 12 months ($6.99/mo. after)</li>
              <li><span class="fa-li"><i class="fas fa-plus" style="color:#333"></i></span>Save $10/mo with Unlimited Wireless</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(4,'phone_bundles') }}" class="btn-call">Call {{ Helper::providers_phone_type(4,'phone_bundles') }}</a>
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

        <h2 style="text-align:left;padding:30px 0;" data-aos="fade-up">Get Verizon Fios Deals</h2>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              <h4 class="title">Switch Today</h4>
              <p class="description">Switch today and save big. There’s no surprises, no annual contracts, and no standard setup charge when you order online.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <h4 class="title">Easy Installation</h4>
              <p class="description">
                You can choose a 2-hour arrival window for installation and we’ll get you connected in no time.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <h4 class="title">No early termination fee.</h4>
              <p class="description">
                Sometimes things change. That’s why with Fios, you can cancel your service with no early termination fees.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <h4 class="title">Disney+ On Us</h4>
              <p class="description">
                Sign up for any Fios home internet package and receive a full year of Disney+ streaming services on us – and $6.99/mo. after that.
              </p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Icon Boxes Section -->



    <section class="section-content" style="padding: 0px 0;">

      <div class="container" style="background:url(/resources/assets/front_assets/img/verizon/dog-kid-tablet.jpg);min-height:550px;">

        <div class="row justify-content-between justify-content-center align-items-center" style="padding-top:50px;">

          <div class="col-lg-7 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
              {{-- <img src="/resources/assets/front_assets/img/spectrum/entertainment.jpg" class="img-fluid animated" alt=""> --}}
          </div>

          <div class="col-lg-5 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

            <h4 class="title">Why choose Verizon Fios?</h4>

            <p class="description">Verizon Fios plans offer incredible value with fast, reliable internet, stunning TV and dependable home phone service. Take advantage of current promotions and extras when you package with Verizon Fios. Order your Fios package online or call to order today.</p>

        </div>

        </div>

      </div>

    </section>


    <section class="section-content" style="padding: 0px 0;">
      <div class="container" style="background:url(/resources/assets/front_assets/img/verizon/watching-tv.jpg);min-height:650px;background-size: cover;">
        <div class="row justify-content-between justify-content-center align-items-center" style="padding-top:50px;">

          <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

            <h4 class="title">Experience Fios TV One
              Watching your favorite entertainment has never been easier.</h4>
            <p class="description">With an advanced voice remote and seamless Netflix integration, you can get to what you want to watch faster. Fios TV One also provides 4K Ultra High Definition quality* and Wi-Fi connectivity, so you can put your TV virtually anywhere.</p>


            </div>

          <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
              {{-- <img src="/resources/assets/front_assets/img/spectrum/bundle.jpg" class="img-fluid animated" alt=""> --}}
          </div>

        </div>
      </div>

    </section>


    <section class="section-content" style="padding: 0px 0;">
      <div class="container" style="background:url(/resources/assets/front_assets/img/verizon/man-taking-a-call.jpg);min-height:550px;background-size: cover;">
        <div class="row justify-content-between justify-content-center align-items-center" style="padding-top:50px;">

          <div class="col-lg-5 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

            <h4 class="title">Keeping you connected.</h4>
            <p class="description">Get better sound quality and clear connections you can count on with 30+ helpful calling features and generous international plans.</p>


            </div>

          <div class="col-lg-7 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
              {{-- <img src="/resources/assets/front_assets/img/spectrum/bundle.jpg" class="img-fluid animated" alt=""> --}}
          </div>

        </div>
      </div>

    </section>


  </main><!-- End #main -->

@endsection
