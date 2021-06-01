@extends('layouts.cableone_main')
@section('content')

<section id="phone_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>Keep in Touch through Cable ONE Voice</h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(45,'phone_phone') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(45,'phone_phone') }}</a>
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
            <h2>Starter Plan</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop no-display"></i> <i class="icofont-mobile-phone"></i></div>
            <h4><sup>$</sup>25.00<span> / month</span></h4>

              <h3>Unlimited long-distance calls in the continental US</h3>
            <ul>
              <li>Voicemail and caller ID included</li>
              <li>Guaranteed pricing for life</li>
              <li>No contract</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(45,'phone_phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(45,'phone_phone') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="price-box" style="height:700px">
            <h2>Preferred Package: 100 Mbps Internet & Phone</h2>
            <div class="price-icon"><i class="icofont-monitor no-display"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
            <h4><sup>$</sup>75.00<span> / month</span></h4>
            <p class="description">for 6 months
              <br />
              $80.00/mo after trial offer.</p>
            <h3>Download speeds up to 100 Mbps</h3>
            <ul>
              <li>Unlimited long-distance cals in the continental US</li>
              <li>Voicemail and caller ID included</li>
              <li>300 GB data plan included</li>
              <li>No contract</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(45,'phone_phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(45,'phone_phone') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="price-box" style="height:700px">
            <h2>Elite Package: 100 Mbps Internet, Cable & Phone</h2>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
            <h4><sup>$</sup>105.00<span> / month</span></h4>
            <p class="description">for 6 months
              <br/>
              $154.00/mo after trial offer.
            </p>
            <h3>Download speeds up to 100 Mbps</h3>
            <ul>
              <li>Up to 100 channels</li>
              <li>Unlimited long-distance in the continental US</li>
              <li>TV Everywhere for on-the-go watching</li>
              <li>No contract</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(45,'phone_phone') }}" class="btn-call">Call {{ Helper::providers_phone_type(45,'phone_phone') }}</a>
            </div>
          </div>
        </div>

      </div>
      <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>
    </div>
  </section><!-- End Icon Boxes Section -->


  <section>

    <div class="container">
        <h2 style="text-align:center" data-aos="fade-up">Cable ONE Voice Packages Summary</h2>

      <table data-aos="fade-up" >
        <caption>Offers and availability are not guaranteed and are subject to change.</caption>
        <thead>
          <tr>
            <th scope="col" style="width:25%">Package</th>
            <th scope="col" style="width:55%">Features</th>
            <th scope="col" style="width:20%">Introductory Price</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-label="Package">Economy Phone</td>
            <td data-label="Features">Unlimited local calls </td>
            <td data-label="Introductory Price">$20.00/mo.</td>
          </tr>
          <tr>
            <td data-label="Package">Standard Phone</td>
            <td data-label="Features">Unlimited long-distance calls in the continental US</td>
            <td data-label="Introductory Price">$25.00/mo.</td>
          </tr>

        </tbody>
      </table>

    </div>

    </section>





      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">Make It a Bundle and Save</h4>
                <p class="description">If you’re looking for big savings, bundle your Cable ONE voice plan with your internet and TV plans. Along with voicemail and caller ID, you’ll get six months of extra discounts on the whole package—that’s a lot of extra money in your pocket.</p>
              </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/cableone/cableone-laptop.jpg" class="img-fluid animated" alt="Bundle TV and Internet Plans | CableOne">
            </div>

          </div>
        </div>

      </section>

  </main><!-- End #main -->


@endsection
