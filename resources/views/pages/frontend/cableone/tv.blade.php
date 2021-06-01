@extends('layouts.cableone_main')
@section('content')

<section id="tv_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>See It All with Cable ONE TV</h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(45,'phone_tv') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(45,'phone_tv') }}</a>
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

      <div class="row">
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box" style="height:700px">
            <h2>Standard Cable</h2>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop no-display"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <h4><sup>$</sup>84.00<span> / month</span></h4>
            
              <h3>Up to 100 channels</h3>
            <ul>
              <li>TV Everywhere for on-the-go watching</li>
              <li>46 music channels</li>
              <li>No contract</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(45,'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(45,'phone_tv') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="price-box" style="height:700px">
            <h2>Preferred Package: 100 Mbps Internet & Cable</h2>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone no-display"></i></div>
            <h4><sup>$</sup>95.00<span> / month</span></h4>
            <p class="description">for 6 months
                <br />
                $134.00/mo after trial offer.</p>
            <h3>Download speeds up to 100 Mbps</h3>
            <ul>
              <li>Up to 100 channels</li>
              <li>300 GB data plan included</li>
              <li>Lag-free connection for up to 5 devices at once</li>
              <li>No contract</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(45,'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(45,'phone_tv') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="price-box" style="height:700px">
            <h2>Elite Package: 100 Mbps Internet, Cable & Phone</h2>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
            <h4><sup>$</sup>105.00<span> / month</span></h4>
            <p class="description">for 6 months
              <br />
              $154.00/mo after trial offer
            </p>
            <h3>Download speeds up to 100 Mbps</h3>
            <ul>
              <li>Up to 100 channels</li>
              <li>Unlimited long-distance in the continental US</li>
              <li>TV Everywhere for on-the-go watching</li>
              <li>No contract</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(45,'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(45,'phone_tv') }}</a>
            </div>
          </div>
        </div>

      </div>
      <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>
    </div>
  </section><!-- End Icon Boxes Section -->


  <section>

    <div class="container">
        <h2 style="text-align:center" data-aos="fade-up">Cable ONE TV Packages Summary</h2>

      <table data-aos="fade-up" >
        <caption>The prices in the chart below are for standalone Comcast cable TV packages only. To save on your monthly entertainment bills, you can bundle these packages with internet and phone services. Please note the prices shown don't include equipment fees.</caption>
        <thead>
          <tr>
            <th scope="col" style="width:30%">Package</th>
            <th scope="col" style="width:40%">Channel Count</th>
            <th scope="col" style="width:30%">Introductory Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-label="Package">Economy Cable</td>
            <td data-label="Channel Count<">Up to 20 channels</td>
            <td data-label="Introductory Price">$40.00/mo.</td>
          </tr>
          <tr>
            <td data-label="Package">Standard Cable</td>
            <td data-label="Channel Count<">Up to 100 channels</td>
            <td data-label="Introductory Price">$84.00/mo.</td>
          </tr>
        </tbody>
      </table>

    </div>
   
    </section>





      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">TV at Home Is Good—TV Everywhere Is Better</h4>
                <p class="description">Whether you’re taking the train to work, sneaking a show at lunch, or staying in bed, TV Everywhere has you covered. As long as you have internet access, you can use your computer, tablet, or smartphone to watch your favorite shows with TV Everywhere.</p>
                <p class="description">Any Cable ONE plan with Standard Cable includes TV Everywhere at no extra cost. You’ll have access to more than 30,000 hours of programming from over sixty cable networks both at home and on the go. All you’ll need to get started is your Cable ONE user ID and password.</p>
              </div>
            
            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/spectrum/bundle.jpg" class="img-fluid animated" alt="TV | CableOne">
            </div>

          </div>
        </div>
          
      </section>

      <section>

        <div class="container">
            <h2 style="text-align:center" data-aos="fade-up">Cable ONE TV Packages Summary</h2>
            <p style="text-align:center" data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">The prices in the chart below are for standalone Comcast cable TV packages only. To save on your monthly entertainment bills, you can bundle these packages with internet and phone services. Please note the prices shown don't include equipment fees.</p>
          <table data-aos="fade-up" >
            <caption>Offers and availability are not guaranteed and subject to change.</caption>
            <thead>
              <tr>
                <th scope="col" style="width:20%">Package</th>
                <th scope="col" style="width:50%">Themes</th>
                <th scope="col" style="width:15%">Channel Count</th>
                <th scope="col" style="width:15%">Introductory Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-label="Package">Deluxe Pack</td>
                <td data-label="Themes">Movies, comedy, and original series—includes CINEMAX®, HBO®, SHOWTIME®, and STARZ® packages</td>
                <td data-label="Channel Count">36 channels average</td>
                <td data-label="Introductory Price">$40.00/mo.</td>
              </tr>
              <tr>
                <td data-label="Package">Digital Value Pack</td>
                <td data-label="Themes">Sports, movies, women, kids, and family</td>
                <td data-label="Channel Count">40 channels average</td>
                <td data-label="Introductory Price">$15.00/mo.</td>
              </tr>
              <tr>
                <td data-label="Package">CINEMAX®</td>
                <td data-label="Themes">Movies, comedy, and original series</td>
                <td data-label="Channel Count">8 channels average</td>
                <td data-label="Introductory Price">$18.00/mo.</td>
              </tr>
              <tr>
                <td data-label="Package">HBO®</td>
                <td data-label="Themes">Movies, comedy, and original series</td>
                <td data-label="Channel Count">11 channels average</td>
                <td data-label="Introductory Price">$18.00/mo.</td>
              </tr>
              <tr>
                <td data-label="Package">SHOWTIME®</td>
                <td data-label="Themes">Movies, comedy, and original series—includes The Movie Channel and Flix</td>
                <td data-label="Channel Count">8 channels average</td>
                <td data-label="Introductory Price">$18.00/mo.</td>
              </tr>
              <tr>
                <td data-label="Package">STARZ®</td>
                <td data-label="Themes">Movies, comedy, and original series (includes Starz Encore)</td>
                <td data-label="Channel Count">9 channels average</td>
                <td data-label="Introductory Price">$18.00/mo.</td>
              </tr>
              <tr>
                <td data-label="Package">Español Tier</td>
                <td data-label="Themes">News, sports, and movies in Spanish</td>
                <td data-label="Channel Count">12 channels average</td>
                <td data-label="Introductory Price">$5.00/mo.</td>
              </tr>

            </tbody>
          </table>
    
        </div>
       
        </section>


      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            
            
            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/entertainment.jpg" class="img-fluid animated" alt="TV Watch | CableOne">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

              <h4 class="title">Add a DVR to your Cable ONE package for just $15.00 per month, and take your TV watching to the next level with advanced features.</h4>
        
              <p class="description">When you sign up for Cable ONE with a Preferred or Elite promotion, you’ll not only save big over the life of the plan by bundling your services, but you’ll also get a significant discount for the first six months.</p>
              <ul>
                <li>Record your favorite shows to watch whenever you want.</li>
                <li>Pause, rewind, and fast-forward recordings to enjoy TV on your timetable.</li>
                <li>Look up to seven days ahead with an interactive guide.</li>
              </ul>
          </div>

          </div>
        </div>
          
      </section>





  </main><!-- End #main -->


@endsection