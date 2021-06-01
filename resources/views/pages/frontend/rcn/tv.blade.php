@extends('layouts.rcn_main')
@section('content')

<section id="rcn_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>Our Most Powerful Experience Yet</h1>
        <h2 style="color:white!important">Your entertainment just got a whole lot better. Get access to your favorite content front and center, tailored for you, and with amazing new features - all powered Android TV™.</h2>
        <a href="tel:{{ Helper::providers_phone_type(38,'phone_tv') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(38,'phone_tv') }}</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 responsive-img">
        <img src="/resources/assets/front_assets/img/rcn/rcn-tv.png" class="img-fluid" alt="RCN TV Deals">
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
            <div class="home-deals">
                <h2></h2>
            </div>
            <h2>Good Value</h2>
            <h5>Internet up to</h5>
            <div class="price-icon"><i class="icofont-monitor"></i></div>

            <h5><strong>250</strong> Mbps*</h5>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-plus"></i></span>Upgrade to <strong>Signature TV</strong> with 300+ channels for an extra $82.12/mo.</li>

              <li><span class="fa-li"><i class="fas fa-plus"></i></span>Add <strong>Enhanced Whole Home WiFi</strong> powered by eero First Month Free; $9.95/mo thereafter</li>
            </ul>
            <div class="priceBox">
							<div class="price">
								<div class="dollars">
									<sup>$</sup><span>39</span>
								</div>
								<div class="cents">
									<div class="top">
										99/mo<sup>*</sup> </div>
									<div class="bottom">
										No Contract <br>Required
									</div>
								</div>
							</div>
						</div>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(38,'phone_tv') }}" class="btn-call">{{ Helper::providers_phone_type(38,'phone_tv') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box">
            <div class="home-deals">
                <h2></h2>
            </div>
            <h2>Most Popular</h2>
            <h5>Internet up to</h5>
            <div class="price-icon"><i class="icofont-monitor"></i></div>

            <h5><strong>500</strong> Mbps*</h5>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-plus"></i></span>Add <strong>Basic TV</strong> for an extra $17.80/mo</li>

              <li><span class="fa-li"><i class="fas fa-plus"></i></span>Add <strong>Enhanced Whole Home WiFi</strong> powered by eero First Month Free; $9.95/mo thereafter</li>
            </ul>
            <div class="priceBox">
							<div class="price">
								<div class="dollars">
									<sup>$</sup><span>49</span>
								</div>
								<div class="cents">
									<div class="top">
										99/mo<sup>*</sup> </div>
									<div class="bottom">
										No Contract <br>Required
									</div>
								</div>
							</div>
						</div>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(38,'phone_tv') }}" class="btn-call">{{ Helper::providers_phone_type(38,'phone_tv') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box">
            <div class="home-deals">
                <h2></h2>
            </div>
            <h2>Top Speed</h2>
            <h5>Internet up to</h5>
            <div class="price-icon"><i class="icofont-monitor"></i></div>

            <h5><strong>940</strong> Mbps*</h5>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-plus"></i></span>Add <strong>Basic TV</strong> for an extra $17.80/mo</li>

              <li><span class="fa-li"><i class="fas fa-plus"></i></span>Add <strong>Whole Home Audio</strong> powered by Sonos. Sonos Beam for TV Smart Speaker $11.99/mo</li>
            </ul>
            <div class="priceBox">
							<div class="price">
								<div class="dollars">
									<sup>$</sup><span>59</span>
								</div>
								<div class="cents">
									<div class="top">
										99/mo<sup>*</sup> </div>
									<div class="bottom">
										No Contract <br>Required
									</div>
								</div>
							</div>
						</div>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(38,'phone_tv') }}" class="btn-call">{{ Helper::providers_phone_type(38,'phone_tv') }}</a>
            </div>
          </div>
        </div>

        </div>

      </div>
      <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">* Experienced speeds may vary. Equipment priced separately. 12 months pricing.</p>
    </div>
  </section><!-- End Icon Boxes Section -->


  <section>
    <div class="container">
      <div class="row justify-content-between justify-content-center align-items-center">

        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

            <h4 class="title">Add On Channels</h4>
            <p class="description">Customize your TV experience by adding channels that best fit your lifestyle. RCN has your entertainment needs covered whether you’re exploring the latest box office hits, catching up on your favorite sports, looking for family-friendly channels, or interested in international programming.</p>


        </div>

        <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
            <img src="/resources/assets/front_assets/img/rcn/add-on-channels.png" class="img-fluid animated" alt="RCN Channels">
        </div>

      </div>
    </div>

  </section>

  <section >
    <div class="container">
      <div class="row justify-content-between justify-content-center align-items-center">



        <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
            <img src="/resources/assets/front_assets/img/rcn/live-tv.png" class="img-fluid animated" alt="RCN Live TV">
        </div>

        <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

          <h4 class="title">Live TV</h4>
          <p class="description">Our robust channel lineup that lets you choose the package that works best for you and your family along with our advanced On Demand library brings you the best in entertainment! From local news and sports to premium channels like HBO, Showtime, and Starz—in home or on the go—we’ve got you covered!</p>

      </div>

      </div>
    </div>

  </section>

  <section>
    <div class="container">
      <div class="row justify-content-between justify-content-center align-items-center">

        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

            <h4 class="title">Streaming TV Apps</h4>
            <p class="description">Unbelievable freedom and control. With the Google Play store built right in, watch just about anything. Netflix, Prime Video, HBO NOW, YouTube, SHOWTIME®. Use your voice to search across it all.</p>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
            <img src="/resources/assets/front_assets/img/rcn/streaming-tv.png" class="img-fluid animated" alt="RCN Streaming TV apps">
        </div>

      </div>
    </div>

  </section>

  </main><!-- End #main -->


@endsection
