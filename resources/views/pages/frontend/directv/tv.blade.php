@extends('layouts.directv_main')
@section('content')

<section id="directv_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1> Turn up your entertainment</h1>
        <h2 style="color:white!important">With DIRECTV, you’ll get:</h2>
        <ul class="fa-ul">
          <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>TV you can watch live and on demand</li>
          <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>Genie HD DVR to store over 200 hours of TV</li>
          <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>The #1 satellite service in the country*</li>
          <li><span class="fa-li"><i class="fas fa-check" style="color:#0057b8"></i></span>Plus, get a $100 reward card when you order online.</li>
        </ul>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(4986,'phone_tv') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(4986,'phone_tv') }}</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 responsive-img">
        <img src="/resources/assets/front_assets/img/directv/directv-tv.png" class="img-fluid" alt="DirecTV TV Deals">
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
                <h2>ENTERTAINMENT PACKAGE</h2>
            </div>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop no-display"></i> <i class="icofont-mobile-phone no-display"></i></div>

            <h5>160+ channels</h5>
            <h4><sup>$</sup>54.99<span> / month</span></h4>
            <p class="description">For 12 mos. plus taxes.<br />
              w/ 24-mo. agmt. Prices higher in 2nd year. Regional Sports Fee up to $9.99/mo. is extra & applies.</p>
              <h3 class="desc">See features & benefits:</h3>
            <ul>
              <li><strong>Genie HD DVR at no extra cost</strong><br />
                Add’l equipment req’d. Add’l & Advanced Receiver fees apply.</li>

              <li><strong>3 mos. premium entertainment</strong><br />
                After 3 mos., services automatically continue each mo. at then prevailing rate (currently $53.99/mo.) unless you call to change or cancel. Req’s you to select offer.</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(4986,'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(4986,'phone_tv') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="price-box">
              <div class="home-second-deals2">
                  <h2>XTRA PACKAGE</h2>
              </div>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop no-display"></i> <i class="icofont-mobile-phone no-display"></i></div>

              <h5>235+ channels</h5>
              <h4><sup>$</sup>69.99<span> / month</span></h4>
              <p class="description">For 12 mos. plus taxes<br />
                w/ 24-mo. agmt. Prices higher in 2nd year. Regional Sports Fee up to $9.99/mo. is extra & applies.</p>
              <h3 class="desc">See features & benefits:</h3>
              <ul>
               <li><strong>Genie HD DVR at no extra cost</strong><br />Add’l equipment req’d. Add’l & advance receiver fees apply.</li>
               <li><strong>12 months of HBO® and 3 months of Cinemax®, SHOWTIME®, STARZ®, and EPIX® on us</strong><br />Cinemax, SHOWTIME, STARZ, and EPIX included for 3 months and auto-renew thereafter at then-prevailing rate (currently $41.99/mo.), and HBO auto-renews after 12 mos. at then-prevailing rate (currently $17.99/mo.), unless you call to change or cancel. Req’s you to select offer.</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(4986,'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(4986,'phone_tv') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="price-box">
              <div class="home-third-deals2">
                  <h2>PREMIER PACKAGE</h2>
              </div>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop no-display"></i> <i class="icofont-mobile-phone no-display"></i></div>

              <h5>330+ channels</h5>
              <h4><sup>$</sup>124.99<span> / month</span></h4>
              <p class="description">for 12 months plus taxes and Regional Sports Fee.<br />
                w/24-mo. agmt. Autopay & Paperless bill req’d. Prices higher in 2nd year. Regional Sports Fee up to $9.99/mo. is extra & applies.</p>
                <h3 class="desc">See features & benefits:</h3>
              <ul>
               <li><strong>Genie HD DVR at no extra cost</strong><br/>Add’l equipment req’d. Add’l & Advanced Receiver fees apply.</li>
               <li><strong>HBO®, STARZ, SHOWTIME®, and Cinemax included</strong></li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(4986,'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(4986,'phone_tv') }}</a>
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

          <h2 style="text-align:center;padding:50px 0;" data-aos="fade-up">What do you get with DIRECTV Package</h2>

          <div class="row">

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
                <h4 class="title">Record and watch later</h4>
                <p class="description">Store over 200 hours of shows and movies with a free Genie HD DVR upgrade.</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-user-shield"></i></div>
                <h4 class="title">1 year of premium entertainment</h4>
                <p class="description">
                  Watch HBO® for the first year—and Cinemax®, SHOWTIME®, STARZ®, and EPIX® for the first 3 months—on us.
                </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-tv"></i></div>
                <h4 class="title">The undisputed leader in sports</h4>
                <p class="description">
                  Only DIRECTV brings you every live NFL game, every Sunday with NFL SUNDAY TICKET.
                </p>
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
