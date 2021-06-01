@extends('layouts.xfinity_main')
@section('content')

<section id="xfinity_intro_phone" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1 style="color:white!important">Save on Xfinity Voice + Internet</h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(8,'phone_phone') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(8,'phone_phone') }}</a>
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
            <div class="price-box">
              <h2>X1 Starter Triple Play</h2>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
              <h4><sup>$</sup>80.00<span> / month</span></h4>
              <p class="description">for the first 12 months w/ a 1-year agreement</p>
              <h3>Over 125 digital channels</h3>
              <ul>
                <li>ESPN, HGTV, TBS & More</li>
                <li>Download speeds up to 25 Mbps</li>
                <li>Unlimited nationwide talk and text</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(8,'phone_phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(8,'phone_phone') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="price-box">
              <h2>X1 Preferred Triple Play</h2>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
              <h4><sup>$</sup>120.00<span> / month</span></h4>
              <p class="description">for the first 24 months w/ a 2-year agreement</p>
              <h3>Over 200 digital channels</h3>
              <ul>
                <li>NHL Network, MLB Network®, STARZ ENCORE® and more</li>
                <li>Download speeds up to 300 Mbps</li>
                <li>Unlimited nationwide talk and text</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(8,'phone_phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(8,'phone_phone') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="price-box">
              <h2>X1 Preferred Triple Play w/ Gigabit Internet</h2>
              <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
              <h4><sup>$</sup>140.00<span> / month</span></h4>
              <p class="description">for the first 24 months w/ a 2-year agreement</p>
              <h3>Over 200 digital channels</h3>
              <ul>
                <li>HBO®, Cinemax®, SHOWTIME® and more</li>
                <li>Download speeds up to 1000 Mbps</li>
                <li>Unlimited nationwide talk and text</li>
              </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(8,'phone_phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(8,'phone_phone') }}</a>
              </div>
            </div>
          </div>


        </div>
        <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>

      </div>
    </section><!-- End Icon Boxes Section -->


    <section>

      <div class="container">
          <h2 style="text-align:center" data-aos="fade-up">Xfinity Voice Package Pricing</h2>
        <table data-aos="fade-up" >
          <caption>Offers and availability vary by market and are subject to change.<br />
            *For the first 12 months with a 1-year agreement.<br />
            †For the first 24 months with a 2-year agreement.<br />
          </caption>
          <thead>
            <tr>
              <th scope="col">Package</th>
              <th scope="col">Download Speeds Up to</th>
              <th scope="col">Channel Count</th>
              <th scope="col">Phone Plan</th>
              <th scope="col">Introductory Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-label="Package">Xfinity Voice</td>
              <td data-label="Download Speeds Up to">N/A</td>
              <td data-label="Channel Count">N/A</td>
              <td data-label="Phone Plan">Unlimited Calling Nationwide</td>
              <td data-label="Introductory Price">$20.00/mo.</td>
            </tr>
            <tr>
              <td data-label="Package">Performance Starter Internet & Xfinity Voice Unlimited</td>
              <td data-label="Download Speeds Up to">25 Mbps</td>
              <td data-label="Channel Count">N/A</td>
              <td data-label="Phone Plan">Unlimited Calling Nationwide</td>
              <td data-label="Introductory Price">$40.00/mo.*</td>
            </tr>
            <tr>
              <td data-label="Package">X1 Starter Triple Play</td>
              <td data-label="Download Speeds Up to">25 Mbps</td>
              <td data-label="Channel Count">125+ channels</td>
              <td data-label="Phone Plan">Unlimited Calling Nationwide</td>
              <td data-label="Introductory Price">$80.00/mo.*</td>
            </tr>
            <tr>
              <td data-label="Package">X1 Preferred Triple Play</td>
              <td data-label="Download Speeds Up to">X1 Preferred Triple Play</td>
              <td data-label="Channel Count">200+ channels</td>
              <td data-label="Phone Plan">Unlimited Calling Nationwide</td>
              <td data-label="Introductory Price">$120.00/mo.†</td>
            </tr>
            <tr>
              <td data-label="Package">X1 Preferred Triple Play w/ Gigabit Internet</td>
              <td data-label="Download Speeds Up to">1000 Mbps</td>
              <td data-label="Channel Count">200+ channels</td>
              <td data-label="Phone Plan">Unlimited Calling Nationwide</td>
              <td data-label="Introductory Price">$140.00/mo.†</td>
            </tr>



            
          </tbody>
        </table>

      </div>
     
      </section>





      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            
            
            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/xfinity/calling.jpg" class="img-fluid animated" alt="Xfinity Calling Features">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

              <h4 class="title">Popular Calling Features</h4>
              <ul style="columns: 2;
              -webkit-columns: 2;
              -moz-columns: 2;">
                <li>Local Calling</li>
                <li>Anonymous Call Rejection</li>
                <li>Call Forwarding</li>
                <li>Readable Voicemail</li>
                <li>Caller ID Blocking</li>
                <li>Call Waiting</li>
                <li>3-Way Calling</li>
                <li>Caller ID</li>
              </ul>
          
          </div>

          </div>
        </div>
          
      </section>

 

   

  </main><!-- End #main -->


@endsection