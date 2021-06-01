@extends('layouts.frontier_main')
@section('content')

<section id="frontier_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1 style="color:#17355e!important">Talk to your heart’s content with Frontier Home Phone.</h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(15,'phone_phone') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(15,'phone_phone') }}</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 responsive-img">
        <img src="/resources/assets/front_assets/img/frontier/frontier-phone.png" class="img-fluid" alt="Frontier Phone Deals">
      </div>
    </div>
  </div>

</section>

  <main id="main">

   <!-- ======= Icon Boxes Section ======= -->
   <section id="price-boxes" class="price-boxes">
    <div class="container">

      <div class="row d-flex justify-content-center">
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box">
            <h2>Digital Phone Unlimited</h2>
            <div class="price-icon"><i class="icofont-monitor  no-display"></i> <i class="icofont-laptop  no-display"></i> <i class="icofont-mobile-phone"></i></div>
            <h4><sup>$</sup>32.99<span> / month</span></h4>

            <ul>
              <li>Unlimited nationwide calling</li>
              <li>Caller ID with name and number</li>
              <li>Call waiting and voicemail</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(15,'phone_phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(15,'phone_phone') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="price-box">
            <h2>FiOS 50/50 + Digital Voice</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
            <h4><sup>$</sup>39.99<span> / month</span></h4>
            <p class="description">for 12 months. Actual speeds may vary. Installation, Equipment fees, Internet Infrastructure Surcharge, VoIP admin fee, taxes & other fees apply. Services subject to availability and all applicable terms and conditions.</p>
            <h3>Speeds as fast as 50/50 Mbps</h3>
            <ul>
              <li>Unlimited nationwide calling</li>
              <li>No data caps</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(15,'phone_phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(15,'phone_phone') }}</a>
            </div>
          </div>
        </div>

      </div>

      <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>

    </div>
  </section><!-- End Icon Boxes Section -->



  <section>
    <h2 style="text-align:center" data-aos="fade-up">Frontier Phone Packages Summary</h2>
    <div class="container">

      <table>
        <caption>Offers and availability may vary by location and are subject to change.</caption>
        <thead>
          <tr>
            <th scope="col">Package</th>
            <th scope="col">Coverage</th>
            <th scope="col">Introductory Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-label="Package">Digital Phone Unlimited</td>
            <td data-label="Coverage">Unlimited local and nationwide calling  </td>
            <td data-label="Introductory Price">$32.99/mo.</td>
          </tr>
          <tr>
            <td data-label="Package">Digital Phone Essentials</td>
            <td data-label="Coverage">Unlimited local calling</td>
            <td data-label="Introductory Price">$29.99/mo.</td>
          </tr>
        </tbody>
      </table>

    </div>

    </section>





      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">Experience the FiOS difference with Frontier TV</h4>
                <p class="description">Using the power of a 100% fiber optic network, FiOS TV from Frontier delivers HD quality picture and stunning sound. Fiber optic technology is more reliable than cable, bringing you a better picture quality and fewer outages.</p>

            </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/spectrum/bundle.jpg" class="img-fluid animated" alt="Frontier TV">
            </div>

          </div>
        </div>

      </section>

      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/entertainment.jpg" class="img-fluid animated" alt="Frontier Unlimited Nationwide Call">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

              <h4 class="title">Always stay in touch with Unlimited Nationwide calling</h4>

              <p class="description">Now you can talk as long as you want, to anyone in the United States, without breaking the bank.</p>

          </div>

          </div>
        </div>

      </section>

      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">The hidden benefits of Home Phone from Frontier</h4>
                <p class="description">Did you know that Frontier phone service will work when the power is out? This means if there is an emergency situation, you can still make calls. Plus, you can save extra money with a home phone line because you aren’t always using your cell minutes, and if you have a family with kids, you don’t have to get them their own expensive cell plans. Sign up for a Frontier telephone package today and enjoy:</p>
                <ul>
                  <li>A reliable secure line</li>
                  <li>Clear connections with no dropped calls</li>
                  <li>Caller ID, Call Waiting</li>
                </ul>
            </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/iphone-472197_1280.jpg" class="img-fluid animated" alt="Phone | Frontier Phone Deals">
            </div>

          </div>

        </div>

      </section>



  </main><!-- End #main -->


@endsection
