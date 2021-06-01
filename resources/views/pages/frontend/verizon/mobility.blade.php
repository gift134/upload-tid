@extends('layouts.verizon_main')
@section('content')

<section>

  <div class="container d-flex align-items-center" id="verizon_intro_mobility">
    <div class="row">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>Built right so you can mix, match and save on our best.</h1>
        <h2>Get unlimited talk, text, data and roaming in the US, Mexico and Canada.</h2>
        <a href="tel:{{ Helper::providers_phone_number(4) }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_number(4) }}</a>
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
      <h2 class="price-boxes-title">Get Unlimited at a price built for everyone and get premium entertainment, on us.</h2>
      <div class="row">

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box">
            <h2>Start Unlimited</h2>
            <div class="price-icon"><i class="icofont-mobile-phone"></i></div>
            <div style="height:125px;">
            <h3>Get all the basics with unlimited talk, text and data. And never worry about overage charges again.</h3>
            </div>
            <h4><sup>$</sup>70.00<span> / month</span></h4>

            <p class="description">Per Line per month.<br/>Plus taxes & fees</p>

            <ul>
                <li>Unlimited 4G LTE Data</li>
                <li>480p DVD-Quality Streaming</li>
                <li>Apple Music. Free for 6 mos.</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_number(4) }}" class="btn-call">Call {{ Helper::providers_phone_number(4) }}</a>
            </div>
          </div>
        </div>


        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box">
            <h2>Play More Unlimited</h2>
            <div class="price-icon"><i class="icofont-mobile-phone"></i></div>
            <div style="height:125px;">
            <h3>Our best for music and video streaming, with millions of songs, HD and premium data—all included.</h3>
            </div>
            <h4><sup>$</sup>80.00<span> / month</span></h4>

            <p class="description">Per Line per month.<br/>Plus taxes & fees</p>

           <ul>
            <li>5G access included with a 5G phone. A $10/mo value.</li>
            <li>Unlimited 4G LTE (+25 GB premium data)</li>
            <li>720p HD-Quality Streaming</li>
            <li>Ulimited Mobile Hotspot (15GB of 4G LTE)</li>
            <li>Apple Music. Included</li>
           </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_number(4) }}" class="btn-call">Call {{ Helper::providers_phone_number(4) }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box">
            <h2>Get More Unlimited</h2>
            <div class="price-icon"><i class="icofont-mobile-phone"></i></div>
            <div style="height:125px;">
            <h3>The very best of our Unlimited gives you our ultimate in performance with extra features</h3>
            </div>
            <h4><sup>$</sup>90.00<span> / month</span></h4>

            <p class="description">Per Line per month.<br/>Plus taxes & fees</p>

            <ul>
                <li>5G access included with a 5G phone. A $10/mo value.</li>
                <li>Unlimited 4G LTE (+50 GB premium data)</li>
                <li>Ulimited Mobile Hotspot (15GB of 4G LTE)</li>
                <li>720p HD-Quality Streaming</li>
                <li>Apple Music. Included</li>
                <li>50% off tablet or Jetpack Unlimited Plan</li>
                <li>500GB of Verizon Cloud Storage</li>
            </ul>

            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_number(4) }}" class="btn-call">Call {{ Helper::providers_phone_number(4) }}</a>
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

        <h2 style="text-align:center;padding:50px 0;" data-aos="fade-up">Your Fios TV</h2>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              <h4 class="title">Apple Music included.</h4>
              <p class="description">For iOS and Android. With select Unlimited plans. </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <h4 class="title">YouTube TV. First month on us.</h4>
              <p class="description">
                Live TV from 70+ top channels with select Unlimited. Then $49.99/mo thereafter.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <h4 class="title">Rewards made easier.</h4>
              <p class="description">
                With Verizon Up, get rewarded every
month—from tech and dining to gift
cards from your favorite brands and
more. Just for being with us.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <h4 class="title">All Unlimited plans include</h4>
              <p class="description">
                Unlimited Talk & Text
Mexico & Canada Talk, Text & Data
Verizon Up Rewards
              </p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Icon Boxes Section -->



  </main><!-- End #main -->

@endsection
