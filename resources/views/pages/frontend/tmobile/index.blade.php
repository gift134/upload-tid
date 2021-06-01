@extends('layouts.tmobile_main')
@section('content')

<section id="verizon_intro_tv">

  <div class="container" >

    <div class="row">

      <div class="col-sm-7 pt-5 pt-lg-0 order-2 order-lg-1">

        <h1>T Mobile</h1>

        <h2>There's a cell phone plan for everyone.</h2>

        <a href="tel:{{ Helper::providers_phone_type(6,'phone_mobility') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(6,'phone_mobility') }}</a>

      </div>

      <div class="col-sm-6 order-1 order-lg-2 responsive-img">

      </div>

    </div>

  </div>

</section>

  <main id="main">

   <!-- ======= Icon Boxes Section ======= -->
   <section id="price-boxes" class="price-boxes">
    <div class="container">
      <h2 class="price-boxes-title">Find your perfect plan here.</h2>
      <div class="row">

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="price-box" style="height:720px">
            <h2>Essentials</h2>


            <h4><sup>$</sup>26<span>/line</span></h4>

            <p class="description">Pricing for 4 lines with AutoPay, with your 3rd line on us.<br/>
                ($105/mo.)<br/>
                Plus taxes & fees.</p>

            <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check-circle" style="color:#f66db3"></i></span>Unlimited talk & text</li>
                <li><span class="fa-li"><i class="fas fa-check-circle" style="color:#f66db3"></i></span>Unlimited 4G LTE data on our network</li>
                <li><span class="fa-li"><i class="fas fa-check-circle" style="color:#f66db3"></i></span>Mobile hotspot data<br/>Unlimited 3G data</li>
                <li><span class="fa-li"><i class="fas fa-check-circle" style="color:#f66db3"></i></span>T-Mobile Tuesdays</li>
                <li><span class="fa-li"><i class="fas fa-check-circle" style="color:#f66db3"></i></span>Dedicated customer care team</li>

              </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(6,'phone_mobility') }}" class="btn-call">Call {{ Helper::providers_phone_type(6,'phone_mobility') }}</a>
            </div>
          </div>
        </div>


        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="price-box" style="height:720px">
              <h2 style="color:#f66db3">Magenta®</h2>


              <h4><sup>$</sup>35<span>/line</span></h4>

              <p class="description">Pricing for 4 lines on AutoPay, with your 3rd line on us.<br/>
                ($140/mo.)<br/>
                Taxes & fees included.</p>

              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check-circle" style="color:#f66db3"></i></span>Unlimited talk & text</li>
                <li><span class="fa-li"><i class="fas fa-check-circle" style="color:#f66db3"></i></span>Unlimited 4G LTE data on our network</li>
                <li><span class="fa-li"><i class="fas fa-check-circle" style="color:#f66db3"></i></span>Netflix & Quibi on us<br/>Netflix: Basic, 1 SD screen / Quibi</li>
                <li><span class="fa-li"><i class="fas fa-check-circle" style="color:#f66db3"></i></span>Taxes & fees included</li>
                <li><span class="fa-li"><i class="fas fa-check-circle" style="color:#f66db3"></i></span>Mobile hotspot data<br/>3GB of 4G LTE data, then Unlimited @ 3G</li>
                <li><span class="fa-li"><i class="fas fa-check-circle" style="color:#f66db3"></i></span>T-Mobile Tuesdays</li>
                <li><span class="fa-li"><i class="fas fa-check-circle" style="color:#f66db3"></i></span>Dedicated customer care team</li>

                </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(6,'phone_mobility') }}" class="btn-call">Call {{ Helper::providers_phone_type(6,'phone_mobility') }}</a>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="price-box" style="height:720px">
              <h2 style="color:#f66db3">Magenta® Plus</h2>


              <h4><sup>$</sup>43<span>/line</span></h4>

              <p class="description">Pricing for 4 lines on AutoPay, with your 3rd line on us.<br/>
                ($170/mo.)<br/>
                Taxes & fees included.</p>

              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check-circle" style="color:#f66db3"></i></span>Unlimited talk & text</li>
                <li><span class="fa-li"><i class="fas fa-check-circle" style="color:#f66db3"></i></span>Unlimited 4G LTE data on our network</li>
                <li><span class="fa-li"><i class="fas fa-check-circle" style="color:#f66db3"></i></span>Netflix & Quibi on us<br/>Netflix: Standard, 2 HD screens / Quibi</li>
                <li><span class="fa-li"><i class="fas fa-check-circle" style="color:#f66db3"></i></span>Taxes & fees included</li>
                <li><span class="fa-li"><i class="fas fa-check-circle" style="color:#f66db3"></i></span>Mobile hotspot data<br/>20GB of 4G LTE data, then Unlimited @ 3G</li>
                <li><span class="fa-li"><i class="fas fa-check-circle" style="color:#f66db3"></i></span>T-Mobile Tuesdays</li>
                <li><span class="fa-li"><i class="fas fa-check-circle" style="color:#f66db3"></i></span>Dedicated customer care team</li>

                </ul>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(6,'phone_mobility') }}" class="btn-call">Call {{ Helper::providers_phone_type(6,'phone_mobility') }}</a>
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

        <h2 style="text-align:center;padding:50px 0;" data-aos="fade-up">Changing wireless for good.</h2>

        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              <h4 class="title">Customer-crazed, employee committed.</h4>
              <p class="description">The moves we’ve made keep topping the charts in customer and employee satisfaction.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <h4 class="title">Dedicated to the community.</h4>
              <p class="description">From disaster relief efforts to renewable energy initiatives, we’re involved in our communities.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <h4 class="title">Going beyond wireless.</h4>
              <p class="description">While our network grows, we’re leading innovations that reimagine how you live.</p>
            </div>
          </div>



        </div>

      </div>
    </section><!-- End Icon Boxes Section -->



    <section class="section-content">

      <div class="container">

        <div class="row justify-content-between justify-content-center">

          <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h4 class="title">Do more of what you love with Magenta® plan benefits.</h4>
            <p class="description">From unlimited streaming to weekly deals & giveaways, our Magenta plans offer customer benefits that let you do a whole lot more than talk—at no extra cost.</p>
          </div>

          <div class="col-lg-6 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

            <h4 class="title">How does 5G work?</h4>
            <p class="description">5G networks can be built in different ways from multiple bands of wavelength spectrum: low-band, mid-band, and high-band.</p>

        </div>

        </div>

      </div>

    </section>




  </main><!-- End #main -->

@endsection
