@extends('layouts.sprint_main')
@section('content')

<section id="sprint_intro">

  <div class="container d-flex align-items-center" >

    <div class="row">

      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1">

        <h1>Sprint Mobile</h1>

        <h2>All of Sprint’s Unlimited phone plans include Unlimited data, talk and text nationwide. You’ll also get free text and basic data with Global Roaming in 200 worldwide destinations.</h2>

        <a href="tel:{{ Helper::providers_phone_type(5,'phone_mobility') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(5,'phone_mobility') }}</a>

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
      <h2 class="price-boxes-title">All About Unlimited Basic, Unlimited Plus, And Unlimited Premium Plans</h2>
      <div class="row">

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box" style="height:720px">
            <h2>Unlimited <strong>Basic</strong></h2>
            <p class="description">The essentials Unlimited Plan</p>

            <h4><sup>$</sup>60.00<span> / month</span></h4>

            <h5>Included</h5>
            <div class="price-icon" style="height:200px">

                <div class="row justify-content-center">

                    <div class="col-sm-6">
                        <i class="icofont-laptop"></i>
                        <h3>DVD-quality SD video streaming (480p)</h3>
                    </div>
                    <div class="col-sm-6">
                        <i class="icofont-mobile-phone "></i>
                        <h3>500 MB LTE Mobile Hotspot</h3>
                    </div>

                </div>
            </div>
            <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>Compatible with eligible 5G phones.</li>
                <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>500MB LTE<br/>Mobile Hotspot</li>
                <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>DVD-quality SD video streaming (480)</li>
                <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>Unlimited talk, text and 5GB of 4G LTE data while roaming in Canada and Mexico</li>
              </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(5,'phone_mobility') }}" class="btn-call">Call {{ Helper::providers_phone_type(5,'phone_mobility') }}</a>
            </div>
          </div>
        </div>


        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="price-box" style="height:720px">
              <h2>Unlimited <strong>Plus</strong></h2>
              <p class="description">Full of features, nice on price.</p>

              <h4><sup>$</sup>70.00<span> / month</span></h4>

              <h5>Included</h5>
              <div class="price-icon" style="height:200px">

                  <div class="row justify-content-center">

                      <div class="col-sm-6">
                          <i class="icofont-laptop"></i>
                          <h3>HD video streaming (1080p)</h3>
                      </div>
                      <div class="col-sm-6">
                          <i class="icofont-mobile-phone "></i>
                          <h3>50 GB LTE Mobile Hotspot</h3>
                      </div>

                  </div>
              </div>
              <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>Compatible with eligible 5G phones.</li>
                  <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>50GB LTE<br/>Mobile Hotspot</li>
                  <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>DVD-quality SD video streaming (1080p)</li>
                  <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>Unlimited talk, text and 5GB of 4G LTE data while roaming in Canada and Mexico</li>
                </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(5,'phone_mobility') }}" class="btn-call">Call {{ Helper::providers_phone_type(5,'phone_mobility') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="price-box" style="height:720px">
              <h2>Unlimited <strong>Premium</strong></h2>
              <p class="description">Sprint's best Unlimited value. Ever.</p>

              <h4><sup>$</sup>80.00<span> / month</span></h4>

              <h5>Included</h5>
              <div class="price-icon" style="height:200px">

                  <div class="row justify-content-center ">

                      <div class="col-sm-6">
                          <i class="icofont-laptop"></i>
                          <h3>Full HD streaming</h3>
                      </div>
                      <div class="col-sm-6">
                          <i class="icofont-mobile-phone "></i>
                          <h3>100 GB LTE Mobile Hotspot</h3>
                      </div>

                  </div>
              </div>
              <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>Compatible with eligible 5G phones.</li>
                  <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>100GB LTE<br/>Mobile Hotspot</li>
                  <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>Full HD video streaming</li>
                  <li><span class="fa-li"><i class="fas fa-check" style="color:#333"></i></span>Unlimited talk, text and Unlimited 4G LTE data while roaming in Canada and Mexico</li>
                </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(5,'phone_mobility') }}" class="btn-call">Call {{ Helper::providers_phone_type(5,'phone_mobility') }}</a>
              </div>
            </div>
          </div>

      </div>
      <p style="text-align:left; font-size16px;margin-top:30px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>
    </div>
  </section><!-- End Icon Boxes Section -->

     <!-- ======= Icon Boxes Section ======= -->
     <section id="icon-boxes" class="icon-boxes">
      <div class="container">

        <h2 style="text-align:center;padding:50px 0;" data-aos="fade-up">THESE PLANS INCLUDE</h2>

        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              <h4 class="title">Unlimited For All Budgets.</h4>
              <p class="description">Get Unlimited data, talk and text nationwide.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <h4 class="title">Roaming In Mexico And Canada</h4>
              <p class="description">Enjoy Unlimited talk and text with at least 5 GB of 4G LTE data.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <h4 class="title">International Coverage With Global Roaming</h4>
              <p class="description">Travel with free text and basic data in more than 200 worldwide destinations.</p>
            </div>
          </div>



        </div>

      </div>
    </section><!-- End Icon Boxes Section -->



    <section class="section-content">

      <div class="container">

        <div class="row justify-content-between justify-content-center">

          <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h4 class="title">The Best 5G Coverage Nationwide</h4>
            <p class="description">Experience the first and only nationwide 5G network covering more people and places than anyone else.</p>
          </div>

          <div class="col-lg-6 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

            <h4 class="title">International Service Included</h4>
            <p class="description">All Sprint plans with capable smartphones include Global Roaming: free text, data up to 2G speeds and calls for 25 cents/minute from more than 200 worldwide locations. High-speed data is also available.</p>

        </div>

        </div>

      </div>

    </section>




  </main><!-- End #main -->

@endsection
