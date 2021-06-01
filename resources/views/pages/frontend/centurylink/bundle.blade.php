@extends('layouts.centurylink_main')
@section('content')

<section id="centurylink_intro_bundle" class="d-flex align-items-center">

  <div class="container">

    <div class="row">

      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1 style="color:#fff"><span style="color:#fff">Best offers are online!</span><br/>
          Get the ultimate bundle.</h1>
          <ul >
            <li style="color:#fff">Fast Internet</li>
            <li style="color:#fff">Reliable Home Phone</li>
          </ul>
        <h2 style="color:#fff">To order Internet with Home Phone service,
          simply chat with a CenturyLink representative.</h2>
        <a href="tel:{{ Helper::providers_phone_type(12,'phone_bundles') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(12,'phone_bundles') }}</a>
      </div>

      <div class="col-lg-5 order-1 order-lg-2 responsive-img">
       
      </div>

    </div>

  </div>

</section>

  <main id="main">




      <!-- ======= Icon Boxes Section ======= -->
    <section id="price-boxes" class="price-boxes">
      <div class="container">
          <h3 style="text-align:center;">CenturyLink Bundles</h3>
        <div class="row justify-content-center align-items-center">

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="price-box price-box-border">
              <h2>Internet & Phone Bundle</h2>
              <p class="">Speeds up to 940 Mbps
                Speeds may not be available in your area.</p>
              <div class="row justify-content-center align-items-center price-icon"><div class="col-xs-4"><i class="icofont-laptop"></i></div><div class="col-xs-1" style="font-size:35px;text-align:center;color:#0047bb;">+</div> <div class="col-xs-4"><i class="icofont-mobile-phone no-display"></i></div></div>
              
              <p class="description">Bundled price as low as</p>
                <h4><sup>$</sup>75.00<span> / month</span></h4>
              <h3>Over 125 digital channels</h3>
              <ul>
                Speed may not be available in your area. Rate requires paperless billing. Additional taxes, fees, and surcharges apply.
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(12,'phone_bundles') }}" class="btn-call">Call {{ Helper::providers_phone_type(12,'phone_bundles') }}</a>
              </div>
            </div>
          </div>

        </div>

        <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>

      </div>
    </section><!-- End Icon Boxes Section -->

  

    
      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">Bundle the services that are right for you and save.</h4>
                <p class="description">Bundle Internet with Home Phone and spend less each month while getting the best deals CenturyLink has to offer. Bundling is the simplest way to get everything you need.</p>

            </div>
            
            <div class="col-lg-6 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/centurylink/man-working.jpg" class="img-fluid animated" alt="Bundle Services | CenturyLink">
            </div>

          </div>
        </div>
          
      </section>


   

  </main><!-- End #main -->


@endsection