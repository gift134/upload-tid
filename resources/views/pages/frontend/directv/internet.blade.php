@extends('layouts.directv_main')
@section('content')

<section id="directv_intro" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h2 style="color:white!important">AT&T INTERNET + DIRECTV</h2>
        <h1>Get the ultimate bundle</h1>

        <ul class="fa-ul">
          <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>Proven reliability for both TV and internet1</li>
          <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>Unlimited streaming and browsing—with no internet data caps</li>
          <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>An HD DVR and free professional installation</li>
        </ul>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(4986,'phone_internet') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(4986,'phone_internet') }}</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 responsive-img">
        <img src="/resources/assets/front_assets/img/directv/directv-internet-b.png" class="img-fluid" alt="DirecTV Internet Deals">
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
            <div class="home-first-deals2">
                <h2>SELECT™ PACKAGE</h2>
            </div>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>

            <h5>155+ channels | 60+ in HD</h5>
            <h4><sup>$</sup>54.99<span> / month</span></h4>
            <p class="description" style="height:140px;">for 12 mos. plus taxes <br />
              w/24-mo. agmt & other qualifying AT&T svc. (min. $39.99/mo. + taxes and fees). AutoPay & paperless bill req’d. Prices higher in 2nd year.</p>
              <h3 class="desc">See features & benefits:</h3>
            <ul>
              <li><strong> 3 months of HBO®, SHOWTIME®, STARZ®, Cinemax®, and EPIX® at no extra cost</strong><br />Services auto-renew after 3 months at then-prevailing rate (currently $59.98/mo.) unless you call to change or cancel.</li>


            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(4986,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(4986,'phone_internet') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="price-box">
              <div class="home-second-deals2">
                  <h2>CHOICE™ PACKAGE</h2>
              </div>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>

              <h5>185+ channels | 85+ in HD</h5>
              <h4><sup>$</sup>49.99<span> / month</span></h4>
              <p class="description" style="height:140px;">for 12 mos. plus taxes and Regional Sports Fee<br />
                w/24-mo. agmt & other qualifying AT&T svc. (min. $39.99/mo. + taxes and fees). AutoPay & paperless bill req’d. Prices higher in 2nd year. Regional Sports Fee up to $9.99/mo. is extra & applies.* Req’s you to select offer. </p>
              <h3 class="desc">See features & benefits:</h3>
              <ul>
               <li><strong>1 year of HBO® and 3 months of Cinemax®, SHOWTIME®, STARZ®, and EPIX® on us</strong><br />
                Cinemax, SHOWTIME, STARZ, and EPIX included for 3 mos. and auto-renew thereafter at then-prevailing rate (currently $41.99/mo.), and HBO auto-renews after 12 mos. at then-prevailing rate (currently $17.99/mo.), unless you call to change or cancel. Req’s you to select offer.</li>

              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(4986,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(4986,'phone_internet') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="price-box">
              <div class="home-third-deals2">
                  <h2>ULTIMATE™ PACKAGE</h2>
              </div>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>

              <h5>250+ channels | 115+ in HD</h5>
              <h4><sup>$</sup>64.99<span> / month</span></h4>
              <p class="description" style="height:140px;">for 12 mos. plus taxes and Regional Sports Fee<br />
                w/24-mo. agmt & other qualifying AT&T svc (min. $39.99/mo. + taxes and fees). AutoPay & Paperless bill req’d. Prices higher in 2nd year. Regional Sports Fee up to $9.99/mo. is extra & applies.* Req’s you to select offer.</p>
                <h3 class="desc">See features & benefits:</h3>
              <ul>
               <li><strong>1 year of HBO® and 3 months of Cinemax®, SHOWTIME®, STARZ®, and EPIX® on us</strong><br/>
                Cinemax, SHOWTIME, STARZ, and EPIX included for 3 mos. and auto-renew thereafter at then-prevailing rate (currently $41.99/mo.), and HBO auto-renews after 12 mos. at then-prevailing rate (currently $17.99/mo.), unless you call to change or cancel. Req’s you to select offer.</li>

              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(4986,'phone_internet') }}" class="btn-call">Call {{ Helper::providers_phone_type(4986,'phone_internet') }}</a>
              </div>
            </div>
          </div>
        </div>

      </div>
      <p style="text-align:center; font-size:16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>
    </div>
  </section><!-- End Icon Boxes Section -->

       <!-- ======= Icon Boxes Section ======= -->
       <section id="icon-boxes" class="icon-boxes" style="background: aliceblue;">
        <div class="container">

          <h2 style="text-align:center;padding:50px 0;" data-aos="fade-up">What do you get with DIRECTV + Internet?</h2>

          <div class="row">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
                <h4 class="title">A trained expert will install and configure your Genie HD DVR and Wi-Fi equipment</h4>

              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-user-shield"></i></div>
                <h4 class="title">1 year of HBO® and 3 months of other premium television channel packages1 at no extra cost</h4>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-tv"></i></div>
                <h4 class="title">Leading live sports coverage in 4K HDR,2 with exclusive access to NFL Sunday Ticket3</h4>
              </div>
            </div>


          </div>

        </div>
      </section><!-- End Icon Boxes Section -->




      {{-- <section id="icon-boxes" class="icon-boxes">
        <div class="container">
          <div class="row justify-content-center align-items-center">

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <div class="icon-box align-middle">
                      <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
                      <h4 class="title">Watch what's on.</h4>
                      <p class="description">Get over 420 channels, including sports and movie channels with free HD.</p>
                    </div>
                  </div>
                  <div class="flip-card-back align-middle">
                    <h1>John Doe</h1>
                    <p>Architect & Engineer</p>
                    <p>We love that guy</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
                  </div>
                  <div class="flip-card-back">
                    <h1>John Doe</h1>
                    <p>Architect & Engineer</p>
                    <p>We love that guy</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
                  </div>
                  <div class="flip-card-back">
                    <h1>John Doe</h1>
                    <p>Architect & Engineer</p>
                    <p>We love that guy</p>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section> --}}

  </main><!-- End #main -->


@endsection
