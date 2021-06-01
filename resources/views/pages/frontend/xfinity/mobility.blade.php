@extends('layouts.xfinity_main')
@section('content')

<section id="xfinity_intro_mobility" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1 style="color:white!important">Comcast Xfinity Mobility Plans</h1>
        <h2 style="color:white!important">Use as much data as you want for one price each month. Since Unlimited is per-line, others in your group can still use By the Gig.</h2>
        <a href="tel:{{ Helper::providers_phone_type(8,'phone_mobility') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(8,'phone_mobility') }}</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2">
        <div>
        <h2 style="color:#fff; font-size:45px;text-align:center;margin-bottom:5px;">Unlimited</h2>
        <p style="color:#fff; font-size:25px;text-align:center;margin-bottom:10px;">PER LINE DATA</p>
        <h3 style="color:#fff; font-size:65px;text-align:center">$45/line</h3>
        </div>
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
            <div class="price-box" style="height: 100%;margin-bottom:10px;">
              <h2>1GB</h2>
              <div class="price-icon"><i class="icofont-mobile-phone"></i></div>
              <h4><sup>$</sup>15.00<span> / month</span></h4>
              <p class="description">with no term agreement</p>
              <h3>Benefits</h3>
              <ul>
                <li>Flat monthly price per line</li>
                <li>Standard quality resolution for video streaming</li>
                <li>HD Pass available for higher-quality cellular service in times with high network traffic</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(8,'phone_mobility') }}" class="btn-call">Call {{ Helper::providers_phone_type(8,'phone_mobility') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="price-box" style="height: 100%;margin-bottom:10px;">
              <h2>3GB</h2>
              <div class="price-icon"><i class="icofont-mobile-phone"></i></div>
              <h4><sup>$</sup>30.00<span> / month</span></h4>
              <p class="description">with no term agreement</p>
              <h3>Benefits</h3>
              <ul>
                <li>Flat monthly price per line</li>
                <li>Standard quality resolution for video streaming</li>
                <li>HD Pass available for higher-quality cellular service in times with high network traffic</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(8,'phone_mobility') }}" class="btn-call">Call {{ Helper::providers_phone_type(8,'phone_mobility') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="price-box" style="height: 100%;margin-bottom:10px;">
              <h2>10GB</h2>
              <div class="price-icon"><i class="icofont-mobile-phone"></i></div>
              <h4><sup>$</sup>60.00<span> / month</span></h4>
              <p class="description">with no term agreement</p>
              <h3>Benefits</h3>
              <ul>
                <li>Flat monthly price per line</li>
                <li>Standard quality resolution for video streaming</li>
                <li>HD Pass available for higher-quality cellular service in times with high network traffic</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(8,'phone_mobility') }}" class="btn-call">Call {{ Helper::providers_phone_type(8,'phone_mobility') }}</a>
              </div>
            </div>
          </div>


        </div>
        <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">If you go over your chosen amount, just keep using data at an additional $15/GB or adjust your minimum shared data.</p>
        <p style="text-align:center; font-size16px;margin-top:10px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>

      </div>
    </section><!-- End Icon Boxes Section -->



      <!-- ======= Icon Boxes Section ======= -->
      <section id="icon-boxes" class="icon-boxes" style="background: aliceblue;">
        <div class="container">

          <h2 style="text-align:center;padding:50px 0;" data-aos="fade-up">A mobile plan, built for you</h2>

          <div class="row">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" >
              <div class="icon-box">
                {{-- <div class="icon"><i class="fas fa-hand-holding-usd"></i></div> --}}
                <h4 class="title">Save hundreds</h4>
                <p class="description">
                    No activation fees, no phone line access fees, and data starting at $15/mo
                </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                {{-- <div class="icon"><i class="fas fa-user-shield"></i></div> --}}
                <h4 class="title">Most reliable network</h4>
                <p class="description">
                    Powerful nationwide network with 5G and millions of secure WiFi hotspots
                </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                {{-- <div class="icon"><i class="fas fa-tv"></i></div> --}}
                <h4 class="title">You make the rules</h4>
                <p class="description">
                    Data options you can track, control, and change anytime online or in our app
                </p>
              </div>
            </div>


          </div>

        </div>
      </section><!-- End Icon Boxes Section -->

      <section>

      <div class="container">
        <h2 style="text-align:center" data-aos="fade-up">Compare the options</h2>
        {{-- <p style="text-align:center" data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">The prices in the chart below are for standalone Comcast cable TV packages only. To save on your monthly entertainment bills, you can bundle these packages with internet and phone services. Please note the prices shown don't include equipment fees.</p> --}}
      <table data-aos="fade-up" >
        <caption>Reduced speeds after 20 GB of usage per line. Your data may be temporarily slower than other traffic in times of congestion.</caption>
        <thead>
          <tr>
            <th scope="col">BY THE GIG</th>
            <th scope="col">UNLIMITED</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-label="BY THE GIG">Shared data across lines<br/><br/>
                HD quality resolution for video streaming</br><br/>
                Includes higher-quality cellular service in times with high network traffic, like in a crowded stadium
            </td>
            <td data-label="UNLIMITED">Flat monthly price per line<br/><br/>
                Standard quality resolution for video streaming<br/><br/>
                HD Pass available for higher-quality cellular service in times with high network traffic
            </td>
          </tr>

        </tbody>
      </table>

    </div>

    </section>


      <section id="icon-boxes" class="icon-boxes" style="background: aliceblue;">
        <div class="container">

          <h2 style="text-align:center;padding:50px 0;" data-aos="fade-up">Benefits of By the Gig</h2>

          <div class="row">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" >
              <div class="icon-box">
                {{-- <div class="icon"><i class="fas fa-hand-holding-usd"></i></div> --}}
                <h4 class="title">For yourself, or to share</h4>
                <p class="description">
                    By the Gig’s shareable data can work for everyone: yourself, your family, or your group of friends.
                </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                {{-- <div class="icon"><i class="fas fa-user-shield"></i></div> --}}
                <h4 class="title">It’s okay to go over</h4>
                <p class="description">
                    If you use more than your chosen amount, no problem. Additional data is $15 per GB, or switch any lines to Unlimited.
                </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                {{-- <div class="icon"><i class="fas fa-tv"></i></div> --}}
                <h4 class="title">Manage costs with Data Saver</h4>
                <p class="description">
                    The Xfinity Mobile app gives you the power to save with LTE data controls. When you use less, you save more.
                </p>
              </div>
            </div>


          </div>

        </div>
      </section><!-- End Icon Boxes Section -->

      <section id="icon-boxes" class="icon-boxes" style="background: aliceblue;">
        <div class="container">

          <h2 style="text-align:center;padding:50px 0;" data-aos="fade-up">Benefits of Unlimited</h2>

          <div class="row">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" >
              <div class="icon-box">
                {{-- <div class="icon"><i class="fas fa-hand-holding-usd"></i></div> --}}
                <h4 class="title">Priced per line</h4>
                <p class="description">
                    If you need Unlimited on your own, no worries. With us, you don’t have to be a group of four to save with Unlimited.
                </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                {{-- <div class="icon"><i class="fas fa-user-shield"></i></div> --}}
                <h4 class="title">Match your needs, not each other</h4>
                <p class="description">
                    We don’t believe in one size fits all. Mix shared and unlimited data based on what you need.
                </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                {{-- <div class="icon"><i class="fas fa-tv"></i></div> --}}
                <h4 class="title">Freedom to switch</h4>
                <p class="description">
                    Streaming more, or using less? Switch any line to By the Gig anytime using the Xfinity Mobile app.
                </p>
              </div>
            </div>


          </div>

        </div>
      </section><!-- End Icon Boxes Section -->


  </main><!-- End #main -->


@endsection
