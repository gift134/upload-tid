@extends('layouts.directv_main')
@section('content')

<section id="directv_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>Get DIRECTV and enjoy a year of HBO® at no extra charge*</h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(4986,'phone') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(4986,'phone') }}</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 responsive-img">
        <img src="/resources/assets/front_assets/img/directv/directv-tv-m.png" class="img-fluid" alt="DirecTV TV, Internet, Phone, Mobility and Bundles Deals">
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
            <div class="home-first-deals">
                <h2>The essential channels</h2>
            </div>
            <h3>SELECT™ PACKAGE</h3>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop no-display"></i> <i class="icofont-mobile-phone no-display"></i></div>

            <h5>155+ Channels</h5>
            <h4><sup>$</sup>49.99<span> / month</span></h4>
            <p class="description">for 12 months plus taxes.
                <br/>
                w/24 mo. agmt. AutoPay & Paperless bill req’d. Prices higher in 2nd year.<br> </p>
              <h3 class="desc">See features & benefits:</h3>
            <ul>
              <li><strong>Genie® HD DVR included</strong><br />
                Additional equipment required. Additional and advance receiver fees apply.</li>
                <li><strong>3 months of premium channels on us</strong><br />
                    HBO®, Cinemax®, SHOWTIME®, STARZ®, and EPIX® included for 3 months and auto-renew thereafter at then-prevailing rate (currently $59.98/mo.) unless you call to change or cancel.</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(4986,'phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(4986,'phone') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="price-box">
              <div class="home-second-deals">
                  <h2>Entertainment for everyone</h2>
              </div>
              <h3>CHOICE™ PACKAGE</h3>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop no-display"></i> <i class="icofont-mobile-phone no-display"></i></div>

              <h5>185+ channels | 85 in HD</h5>
              <h4><sup>$</sup>59.99<span> / month</span></h4>
              <p class="description">for 12 months plus taxes and Regional Sports Fee.<br/>
                w/24-mo. agmt. Autopay & Paperless bill req’d. Prices higher in 2nd year. Regional Sports Fee up to $9.99/mo. is extra & applies.</p>
              <h3 class="desc">See features & benefits:</h3>
              <ul>
               <li><strong>12 months of HBO® and 3 months of Cinemax®, SHOWTIME®, STARZ®, and EPIX® on us</strong><br />
                Cinemax, SHOWTIME, STARZ, and EPIX included for 3 months and auto-renew thereafter at then-prevailing rate (currently $41.99/mo.), and HBO auto-renews after 12 mos. at then-prevailing rate (currently $17.99/mo.), unless you call to change or cancel. Req’s you to select offer.</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(4986,'phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(4986,'phone') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="price-box">
              <div class="home-third-deals">
                  <h2>Get blockbuster movies</h2>
              </div>
              <h3>ULTIMATE PACKAGE</h3>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop no-display"></i> <i class="icofont-mobile-phone no-display"></i></div>

              <h5>250+ channels | 115 in HD</h5>
              <h4><sup>$</sup>74.99<span> / month</span></h4>
              <p class="description">for 12 months plus taxes and Regional Sports Fee.<br />
                w/24-mo. agmt. Autopay & Paperless bill req’d. Prices higher in 2nd year. Regional Sports Fee up to $9.99/mo. is extra & applies.</p>
                <h3 class="desc">See features & benefits:</h3>
              <ul>
                <li><strong>12 months of HBO® and 3 months of Cinemax®, SHOWTIME®, STARZ®, and EPIX® on us</strong><br/>
                    Cinemax, SHOWTIME, STARZ, and EPIX included for 3 months and auto-renew thereafter at then-prevailing rate (currently $41.99/mo.), and HBO auto-renews after 12 mos. at then-prevailing rate (currently $17.99/mo.), unless you call to change or cancel. Req’s you to select offer.</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(4986,'phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(4986,'phone') }}</a>
              </div>
            </div>
          </div>
        </div>

      </div>
      <p style="text-align:center; font-size:16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>
    </div>
  </section><!-- End Icon Boxes Section -->

  <section>

    <div class="container">
        <h2 style="text-align:center" data-aos="fade-up">See why we top Xfinity, Spectrum, and Dish, too.</h2>

      <table data-aos="fade-up" >
        <caption></caption>
        <thead>
          <tr>
            <th scope="col" style="width:30%">GET MORE OUT OF YOUR TV WITH DIRECTV</th>
            <th scope="col" >DirecTV</th>
            <th scope="col" >DISH</th>
            <th scope="col" >COMCAST XFINITY®</th>
            <th scope="col" >SPECTRUM</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-label="GET MORE OUT OF YOUR TV WITH DIRECTV">Every live, out-of-market NFL game, every Sunday with NFL SUNDAY TICKET1</td>
            <td data-label="DirecTV"><i class="fas fa-check" style="color:#0057b8"></i></td>
            <td data-label="DISH"><i class="fas fa-times"></i></td>
            <td data-label="COMCAST XFINITY®"><i class="fas fa-times"></i></td>
            <td data-label="SPECTRUM"><i class="fas fa-times"></i></td>
          </tr>
          <tr>
            <td data-label="GET MORE OUT OF YOUR TV WITH DIRECTV">The most live sports in 4K HDR2</td>
            <td data-label="DirecTV"><i class="fas fa-check" style="color:#0057b8"></i></td>
            <td data-label="DISH"><i class="fas fa-times"></i></td>
            <td data-label="COMCAST XFINITY®"><i class="fas fa-times"></i></td>
            <td data-label="SPECTRUM"><i class="fas fa-times"></i></td>
          </tr>
          <tr>
            <td data-label="GET MORE OUT OF YOUR TV WITH DIRECTV">Data-Free streaming with AT&T wireless3</td>
            <td data-label="DirecTV"><i class="fas fa-check" style="color:#0057b8"></i></td>
            <td data-label="DISH"><i class="fas fa-times"></i></td>
            <td data-label="COMCAST XFINITY®"><i class="fas fa-times"></i></td>
            <td data-label="SPECTRUM"><i class="fas fa-times"></i></td>
          </tr>

        </tbody>
      </table>

    </div>

    </section>


      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h4 class="title">Catch the game, wherever you are</h4>

                <p class="description">From the big screen to your littlest screen, get a seat on the sidelines and stream all the action live on your TV, laptop, tablet, phone, or game console from the NFL SUNDAY TICKET app.</p>
              </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/spectrum/bundle.jpg" class="img-fluid animated" alt="DirecTV Bundles">
            </div>

          </div>
        </div>

      </section>

      <section style="background: aliceblue;">

        <div class="container">

          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/directv/laptop.jpg" class="img-fluid animated" alt="DirecTV HBO">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

              <h4 class="title">Get DIRECTV and enjoy a year of HBO® included</h4>

              <p class="description">Experience the most talked about shows and movies. Plus, you’ll also get access to HBO MaxTM, coming May 27! It’s all of HBO together with a collection of classic TV favorites and even more great movies, plus new Max Originals. Additionally, get Cinemax®, SHOWTIME®, STARZ® and EPIX® included at no extra charge for the first 3 months.</p>

          </div>

          </div>

        </div>

      </section>

      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h4 class="title">TV you love whenever you want</h4>

                <p class="description">Download the DIRECTV App to stream live and on-demand shows, up to 5 screens at a time. Plus, the Genie HD DVR can record up to 5 shows at once, watch select shows from the last 72 hours, and store 200+ hours of your favorites.</p>
              </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/directv/tv-sofa.jpg" class="img-fluid animated" alt="DirecTV App to Stream Live">
            </div>

          </div>
        </div>

      </section>


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
