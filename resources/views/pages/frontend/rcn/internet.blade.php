@extends('layouts.rcn_main')
@section('content')

<section id="rcn_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>Your Local Internet Provider</h1>

        <h2 style="color:white!important">RCN is an award winning high speed internet provider offering reliable and affordable internet services in Chicago, with gigabit internet speeds up to 940* Mbps. You can surf, game, stream, and connect wirelessly to multiple devices through RCN’s powerful fiber-optic network. RCN delivers seamless WiFi for your home and video streaming through a blazing fast, secure connection.</h2>
        <a href="tel:{{ Helper::providers_phone_type(38,'phone_internet') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(38,'phone_internet') }}</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 responsive-img">
        <img src="/resources/assets/front_assets/img/rcn/rcb-internet.png" class="img-fluid" alt="RCN Internet Deals">
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
              <li><span class="fa-li"><i class="fas fa-plus"></i></span>Add <strong>Enhanced Whole Home WiFi</strong> powered by eero First Month Free; $9.95/mo thereafter</li>

              <li><span class="fa-li"><i class="fas fa-plus"></i></span>Add <strong>Whole Home Audio</strong> powered by Sonos. Sonos One Smart Speaker $5.99/mo</li>
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
              <a href="tel:{{ Helper::providers_phone_type(38,'phone_internet') }}" class="btn-call">{{ Helper::providers_phone_type(38,'phone_internet') }}</a>
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
              <li><span class="fa-li"><i class="fas fa-plus"></i></span>Add <strong>Enhanced Whole Home WiFi</strong> powered by eero First Month Free; $9.95/mo thereafter</li>

              <li><span class="fa-li"><i class="fas fa-plus"></i></span>Add <strong>Whole Home Audio</strong> powered by Sonos. Sonos One Smart Speaker $5.99/mo</li>
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
              <a href="tel:{{ Helper::providers_phone_type(38,'phone_internet') }}" class="btn-call">{{ Helper::providers_phone_type(38,'phone_internet') }}</a>
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
              <li><span class="fa-li"><i class="fas fa-plus"></i></span>Add <strong>Enhanced Whole Home WiFi</strong> powered by eero First Month Free; $9.95/mo thereafter</li>

              <li><span class="fa-li"><i class="fas fa-plus"></i></span>Manage all your security settings and tools in one place with <strong>eero Secure +</strong> for an additional $9.99/mo.</li>
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
              <a href="tel:{{ Helper::providers_phone_type(38,'phone_internet') }}" class="btn-call">{{ Helper::providers_phone_type(38,'phone_internet') }}</a>
            </div>
          </div>
        </div>

        </div>


      <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">* Experienced speeds may vary. Equipment priced separately. 12 months pricing.</p>
    </div>
  </section><!-- End Icon Boxes Section -->


   <!-- ======= Icon Boxes Section ======= -->
   <section id="icon-boxes" class="icon-boxes" style="background: aliceblue;">
    <div class="container">

      <h2 style="text-align:center;padding:50px 0;" data-aos="fade-up">Internet Security</h2>

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" >
          <div class="icon-box">
            <h4 class="title">RCN Service Protection Plan</h4>
            <p class="description">RCN’s Service Protection Plan gives you peace of mind.</p>
            <p class="description">You can avoid the service charge for a technician to come to your house even if the issue is the result of something inside your home.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box">
            <h4 class="title">eero Secure+</h4>
            <p class="description">Advanced security doesn’t have to feel advanced. With eero Secure+, you can manage all your security settings and tools in one place. eero Secure+ provides brilliant security features to fit your home - antivirus software, ad blocking, VPN protection, password management and more.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box">
            <h4 class="title">McAfee® Total Protection</h4>
            <p class="description">McAfee® Total Protection provides comprehensive safeguards against viruses, spam, spyware, and malware. Parental controls, improved system performance, content protection, easy home networking tools, digital shredding and site advisor are all included
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box">
            <h4 class="title">McAfee® Internet Security</h4>
            <p class="description">
              Turn your tablet, smartphone, or computer into a TV screen with the Xfinity Stream app. Download the Xfinity
              Stream app to watch top shows and hit movies even when you're offline. You can also download your DVR
              recordings from anywhere.
            </p>
          </div>
        </div>


      </div>

    </div>
  </section><!-- End Icon Boxes Section -->


  <section>
    <div class="container">
      <div class="row justify-content-between justify-content-center align-items-center">

        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

            <h4 class="title">Internet Equipment</h4>
            <p class="description">Did you know your internet equipment can affect your speeds? We want to make sure you have the latest equipment so you can take advantage of our lightning fast internet speeds. Learn more about RCN’s Modem, Wi-Fi Router, Modem & Wi-Fi Gateway and bring your own equipment options</p>


        </div>

        <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
            <img src="/resources/assets/front_assets/img/rcn/internet-equipment-eero-beacon.jpg" class="img-fluid animated" alt="RCN Internet Equipment">
        </div>

      </div>
    </div>

  </section>

  <section >
    <div class="container">
      <div class="row justify-content-between justify-content-center align-items-center">



        <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
            <img src="/resources/assets/front_assets/img/rcn/internet-security-wireless-networking.jpg" class="img-fluid animated" alt="RCN Internet Security">
        </div>

        <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

          <h4 class="title">Internet Security</h4>
          <p class="description">As you surf the web, email or pay bills online, make sure to protect your personal information from identity theft, viruses, hackers or spyware. RCN makes it easy to protect your online experience with a low cost subscription to McAfee® Internet Security Suite included with any Internet purchase.</p>

      </div>

      </div>
    </div>

  </section>

  <section>
    <div class="container">
      <div class="row justify-content-between justify-content-center align-items-center">

        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

            <h4 class="title">Streaming TV Apps</h4>
            <p class="description">As you surf the web, email or pay bills online, make sure to protect your personal information from identity theft, viruses, hackers or spyware. RCN makes it easy to protect your online experience with a low cost subscription to McAfee® Internet Security Suite included with any Internet purchase.</p>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
            <img src="/resources/assets/front_assets/img/rcn/computer-requirements.jpg" class="img-fluid animated" alt="RCN Streaming TV Apps">
        </div>

      </div>
    </div>

  </section>

  </main><!-- End #main -->


@endsection
