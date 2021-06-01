@extends('layouts.optimum_main')
@section('content')

<section id="optimum_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>Watch more, spend less with Optimum TV</1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(23,'phone_tv') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(23,'phone_tv') }}</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 responsive-img">
        <img src="/resources/assets/front_assets/img/optimum/optimum-tv-b.png" class="img-fluid" alt="Optimum TV Deals">
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
          <div class="price-box" style="height:500px">
            <h2>Optimum Select TV + Optimum Internet 300</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <h4><sup>$</sup>89.99<span> / month</span></h4>
            <p class="description">for 24 months. Plus taxes, fees and charges.</p>
              <h3>Over 340 channels</h3>
            <ul>
              <li>over 110 channels in HD</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(23,'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(23,'phone_tv') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="price-box" style="height:500px">
            <h2>Optimum Premier TV + Optimum Internet 200</h2>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <h4><sup>$</sup>99.99<span> / month</span></h4>
            <p class="description">for 24 months. Plus taxes, fees and charges.</p>
            <h3>Over 420 channels</h3>
            <ul>
              <li>Over 140 channels in HD</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(23,'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(23,'phone_tv') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="price-box" style="height:500px">
            <h2>Optimum Core TV + Optimum Internet 200</h2>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
            <h4><sup>$</sup>64.99<span> / month</span></h4>
            <p class="description">for 24 months. Plus taxes, fees and charges.</p>
            <h3>Over 220 channels</h3>
            <ul>
              <li>Download speed up to 200 Mbps</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(23,'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(23,'phone_tv') }}</a>
            </div>
          </div>
        </div>

      </div>
      <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change. <br />Offers and availability are not guaranteed and are subject to change. </p>
    </div>
  </section><!-- End Icon Boxes Section -->


  <section>

    <div class="container">
        <h2 style="text-align:center" data-aos="fade-up">Optimum TV Packages Summary</h2>

      <table data-aos="fade-up" >
        <caption>*Offers and availability are not guaranteed and are subject to change. </caption>
        <thead>
          <tr>
            <th scope="col" style="width:40%">Package</th>
            <th scope="col" style="width:30%">Channel Count</th>
            <th scope="col" style="width:30%">Introductory Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-label="Package">Optimum Core TV</td>
            <td data-label="Channel Count<">220+ channels</td>
            <td data-label="Introductory Price">$59.95/mo.*</td>
          </tr>
          <tr>
            <td data-label="Package">Optimum Select TV</td>
            <td data-label="Channel Count<">340+ channels</td>
            <td data-label="Introductory Price">$74.95/mo.*</td>
          </tr>
          <tr>
            <td data-label="Package">Optimum Premier TV</td>
            <td data-label="Channel Count<">420+ channels</td>
            <td data-label="Introductory Price">$109.95/mo.*</td>
          </tr>
        </tbody>
      </table>

    </div>

    </section>

     <!-- ======= Icon Boxes Section ======= -->
     <section id="icon-boxes" class="icon-boxes" style="background: aliceblue;">
      <div class="container">

        <h2 style="text-align:center;padding:50px 0;" data-aos="fade-up">Get everything you want from your TV service with Optimum TV.</h2>

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
              <p class="description">
                All HD channels in Optimum TV packages come at no extra cost.
              </p>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-user-shield"></i></div>
              <p class="description">
                Record up to 10 shows at once with the Optimum Multi-Room DVR.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-tv"></i></div>
              <p class="description">
                Get hundreds of Optimum cable programs FREE On Demand.
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
                <h4 class="title">Save when you bundle your Optimum services.</h4>
                <ul>
                  <li>Save over $40 per month with a TV, internet, and phone package</li>
                  <li>Save yourself some hassle with one low monthly payment for all three services</li>
                </ul>
              </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/spectrum/bundle.jpg" class="img-fluid animated" alt="Optimum Bundle">
            </div>

          </div>
        </div>

      </section>

  </main><!-- End #main -->


@endsection
