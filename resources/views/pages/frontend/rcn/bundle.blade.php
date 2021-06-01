@extends('layouts.rcn_main')
@section('content')

<section id="rcn_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>Complete Your Entertainment Experience:</h1>

        {{-- <h2 style="color:white!important">RCN is an award winning high speed internet provider offering reliable and affordable internet services in Chicago, with gigabit internet speeds up to 940* Mbps. You can surf, game, stream, and connect wirelessly to multiple devices through RCN’s powerful fiber-optic network. RCN delivers seamless WiFi for your home and video streaming through a blazing fast, secure connection.</h2> --}}
        <ul style="color:#fff;font-size:16px;">
          <li>Enhanced Whole Home WiFi - powered by eero</li>
          <li>RCN2GO to watch your favorite shows on the go</li>
          <li>Say it, see it with TiVo Voice Remote</li>
          <li>RCN Whole Home Audio - powered by Sonos</li>
          <li>Snacks not included!</li>
        </ul>

      <a href="tel:{{ Helper::providers_phone_type(38,'phone_bundles') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(38,'phone_bundles') }}</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 responsive-img">
        <img src="/resources/assets/front_assets/img/rcn/rcn-bundle.png" class="img-fluid" alt="RCN Bundle Deals">
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
          <div class="price-box-2">
            <h2>100 Mbps Internet, Digital Basic TV, Phone</h2>
            <div class="row justify-content-center">
              <div class="col-md-6 col-lg-4 ">
                <h3>Internet up to</h3>
                <h5>50</h5>
                <h4>Mbps*</h4>
                <p>*Experienced speeds may vary. For complete details</p>
              </div>
              <div class="col-md-6 col-lg-4 ">
                <h3>Signature TV</h3>
                <h5>84+</h5>
                <h4>Channels</h4>
              </div>
              <div class="col-md-6 col-lg-4 ">
                <h3>Phone</h3>
                <i class="fas fa-phone-alt"></i>
                <h4>Nationwide</h4>
              </div>
            </div>
            <div class="price">

              <div class="price-content">
                <div class="price-row"><sup>$</sup><span>49.99</span> per mo.*</div>
                <div class="assurance-row">
                    <div class="assurance-link">12 Month Pricing</div>
                    <div class="assurance-text">No Contract Required<span> | Equipment Priced Separately</span></div>
                </div>
                <div class="btn-wrap">
                  <a href="tel:{{ Helper::providers_phone_type(38,'phone_bundles') }}" class="btn-call">{{ Helper::providers_phone_type(38,'phone_bundles') }}</a>
                </div>
              </div>
             </div>

          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box-2">

            <h2>250 Mbps Internet, Digital Basic TV, Phone</h2>
            <div class="row justify-content-center">
              <div class="col-md-6 col-lg-4 ">
                <h3>Internet up to</h3>
                <h5>250</h5>
                <h4>Mbps*</h4>
                <p>*Experienced speeds may vary. For complete details</p>
              </div>
              <div class="col-md-6 col-lg-4 ">
                <h3>Signature TV</h3>
                <h5>284+</h5>
                <h4>Channels</h4>
              </div>
              <div class="col-md-6 col-lg-4 ">
                <h3>Phone</h3>
                <i class="fas fa-phone-alt"></i>
                <h4>Nationwide</h4>
              </div>
            </div>
            <div class="price">

              <div class="price-content">
                <div class="price-row"><sup>$</sup><span>59.99</span> per mo.*</div>
                <div class="assurance-row">
                    <div class="assurance-link">12 Month Pricing</div>
                    <div class="assurance-text">No Contract Required<span>Equipment Priced Separately</span></div>
                </div>
                <div class="btn-wrap">
                  <a href="tel:{{ Helper::providers_phone_type(38,'phone_bundles') }}" class="btn-call">{{ Helper::providers_phone_type(38,'phone_bundles') }}</a>
                </div>
              </div>
             </div>

          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box-2">
           <h2>Gig Internet, Digital Basic TV, Phone</h2>
            <div class="row justify-content-center">
              <div class="col-md-6 col-lg-4 ">
                <h3>Internet up to</h3>
                <h5>940</h5>
                <h4>Mbps*</h4>
                <p>*Experienced speeds may vary. For complete details</p>
              </div>
              <div class="col-md-6 col-lg-4 ">
                <h3>Signature TV</h3>
                <h5>284+</h5>
                <h4>Channels</h4>
              </div>
              <div class="col-md-6 col-lg-4 ">
                <h3>Phone</h3>
                <i class="fas fa-phone-alt"></i>
                <h4>Nationwide</h4>
              </div>
            </div>
            <div class="price">

              <div class="price-content">
                <div class="price-row"><sup>$</sup><span>69.99</span> per mo.*</div>
                <div class="assurance-row">
                    <div class="assurance-link">12 Month Pricing</div>
                    <div class="assurance-text">No Contract Required<span>Equipment Priced Separately</span></div>
                </div>
                <div class="btn-wrap">
                  <a href="tel:{{ Helper::providers_phone_type(38,'phone_bundles') }}" class="btn-call">{{ Helper::providers_phone_type(38,'phone_bundles') }}</a>
                </div>
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

        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

            <h4 class="title">The Ultimate Home WiFi Experience</h4>
            <p class="description">RCN’s enhanced Whole Home WiFi - powered by eero - seamlessly blankets your home in fast, reliable WiFi.</p>


        </div>

        <div class="col-lg-6 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
          <h4 class="title">Watch TV Anywhere You Are</h4>
          <p class="description">The days of watching TV only in the TV room are gone. Today, you can watch TV while you’re out and about. Whenever you want, wherever you are, on your mobile device. With RCN, you’ll never run out of things to watch while you’re on-the-go. It’s easy.</p>

        </div>

      </div>
    </div>

  </section>

  <section >
    <div class="container">
      <div class="row justify-content-between justify-content-center align-items-center">



        <div class="col-lg-6 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
          <h4 class="title">Wall-to-Wall Sound</h4>
            <p class="description">Whether you’re hosting a family dance party or having some friends over, the Sonos wireless home sound system fills every room in your home with pulse-pounding sound.</p>
        </div>

        <div class="col-lg-6 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

          <h4 class="title">Just ask. Let TiVo do the rest.</h4>
          <p class="description">Search for shows, tune to a channel, ask for recommendations, schedule a recording — with TiVo you can do it all.</p>

      </div>

      </div>
    </div>

  </section>


  </main><!-- End #main -->


@endsection
