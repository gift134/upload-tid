@extends('layouts.cox_main')
@section('content')

<section id="cox_intro_tv" class="d-flex align-items-center">

  <div class="container">

    <div class="row">

      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1 style=""><span>COX CONTOUR TV</span> <br/ >Not the cable you know</h1>
        <h2 >Contour TV gives you all the channels you love, live and on-demand, with a voice remote that finds shows fast.</h2>
        <a href="tel:{{ Helper::providers_phone_type(18,'phone_tv') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(18,'phone_tv') }}</a>
      </div>

      <div class="col-lg-5 order-1 order-lg-2 responsive-img">
       
      </div>

    </div>

  </div>

</section>

  <main id="main">


    


    <!-- ======= Icon Boxes Section ======= -->
    <section id="price-boxes" class="price-boxes">
      <div class="container">

        <div class="row justify-content-center">

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="outer-price-box">
            <div class="price-box">
              <h4><sup>$</sup>25<sup> 00</sup><span> <sup class="month">/mo.</span></sup></h4>
              <p class="description">for 12 months No annual contract required.</p>
            </div>

            <div class="price-box-internet" >
             <h2>Cox TV Starter</h2>
              <div class="price-icon-internet"><i class="icofont-monitor"></i></div>
              <h3><strong>75+</strong> Channels</h3>
              <p>TV Starter</p>
              <div style="height: 700px;">
              <ul>
                <li>Local channels</li>
                <li>Free HD programming</li>
                <li>50+ commercial free, digital Music Choice channels</li>
                <li>On-screen guide, parental controls, closed captioning</li>
                <li>Stream via the Contour app and TV Everywhere apps</li>
                <li>Enjoy instant TV access ahead of your installation</li>
              </ul>
              </div>
            </div>
                <div class="border-gradiant-bottom"></div>
                <div class="call">
                  <div class="btn-wrap">
                    <a href="tel:{{ Helper::providers_phone_type(18,'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(18,'phone_tv') }}</a>
                  </div>
                </div>
          </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="outer-price-box">
            <div class="price-box">
              <h4><sup>$</sup>29<sup> 99</sup><span> <sup class="month">/mo.</span></sup></h4>
              <p class="description">for 12 months No annual contract required.</p>
            </div>

            <div class="price-box-internet" >
             <h2>Cox Internet Starter 10</h2>
              <div class="price-icon-internet"><i class="icofont-monitor"></i></div>
              <h3><strong>140+</strong> Channels</h3>
              <p>Contour TV</p>
              <div style="height: 700px;">
              <ul>
                <li>Local channels</li>
                <li>Free HD programming</li>
                <li>Access to live TV, On Demand, DVR & Pay-Per-View</li>
                <li>50+ commercial free, digital Music Choice channels</li>
                <li>On-screen guide, parental controls, closed captioning</li>
                <li>Stream via the Contour app and TV Everywhere apps</li>
                <li>Enjoy instant TV access ahead of your installation</li>
                <li>ESPN, Discovery, History, A&E, TNT, HGTV & more</li>
                <li>On-screen TV apps including Netfilx, YouTube, iHeart Radio, Sports & more</li> 
                <li>Voice remote with universal search</li>
              </ul>
            </div>
            </div>
                <div class="border-gradiant-bottom"></div>
                <div class="call">
                  <div class="btn-wrap">
                    <a href="tel:{{ Helper::providers_phone_type(18,'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(18,'phone_tv') }}</a>
                  </div>
                </div>
          </div>
          </div>

        </div>

        <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>

      </div>
    </section><!-- End Icon Boxes Section -->

    
  <section>

    <div class="container">
        <h2 style="text-align:center" data-aos="fade-up">Are you getting the best deal?</h2>

      <table data-aos="fade-up" >
        <caption></caption>
        <thead>
          <tr>
            <th scope="col" style="width:30%"></th>
            <th scope="col" >Cox</th>
            <th scope="col" >Sling</th>
            <th scope="col" >Hulu</th>
            <th scope="col" >DirecTV NOW</th>
            <th scope="col" >Youtube</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-label="" style="text-align: left;"><strong>Voice remote included:</strong> Search across live TV, On Demand and streaming apps in seconds with a phrase</td>
            <td data-label="Cox" style="background: #ebeff0;"><i class="fas fa-check table-icon table-i"></i></td>
            <td data-label="Sling"><i class="fas fa-times table-i"></i></td>
            <td data-label="Hulu" style="background: #ebeff0;"><i class="fas fa-times table-i"></i></td>
            <td data-label="DirecTV NOW"><i class="fas fa-times table-i"></i></td>
            <td data-label="Youtube" style="background: #ebeff0;"><i class="fas fa-times table-i"></i></td>
          </tr>
          <tr>
            <td data-label="" style="text-align: left;"><strong>All in one:</strong> All your shows and movies in one place without switching TV inputs or apps</td>
            <td data-label="Cox" style="background: #ebeff0;"><i class="fas fa-check table-icon table-i"></i></td>
            <td data-label="Sling"><i class="fas fa-times table-i"></i></td>
            <td data-label="Hulu" style="background: #ebeff0;"><i class="fas fa-times table-i"></i></td>
            <td data-label="DirecTV NOW"><i class="fas fa-times table-i"></i></td>
            <td data-label="Youtube" style="background: #ebeff0;"><i class="fas fa-times table-i"></i></td>
          </tr>
          <tr>
            <td data-label="" style="text-align: left;"><strong>TV bundles:</strong> Bundle TV and Internet to unlock extra savings and features</td>
            <td data-label="Cox" style="background: #ebeff0;"><i class="fas fa-check table-icon table-i"></i></td>
            <td data-label="Sling"><i class="fas fa-times table-i"></i></td>
            <td data-label="Hulu" style="background: #ebeff0;"><i class="fas fa-times table-i"></i></td>
            <td data-label="DirecTV NOW"><i class="fas fa-times table-i"></i></td>
            <td data-label="Youtube" style="background: #ebeff0;"><i class="fas fa-times table-i"></i></td>
          </tr>
         

        </tbody>
      </table>

    </div>
   
    </section>

      <!-- ======= Icon Boxes Section ======= -->
      <section id="icon-boxes" class="icon-boxes" style="background: aliceblue;">
        <div class="container">

          <h2 style="text-align:center;padding:50px 0;" data-aos="fade-up">All the action. All on Contour TV. </h2>
  
          <div class="row justify-content-center ">

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" >
              <div class="icon-outer-box">
                <div class="icon-box">
                  <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
                  <h4 class="title">Streaming apps</h4>
                  <p>Stream your favorite shows anytime, anywhere.</p>
                </div>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-outer-box">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-user-shield"></i></div>
                <h4 class="title">Live TV and more</h4>
                <p>Live TV, sports, On DemandSM and all your favorite shows.</p>
              </div>
            </div>
            </div>

          </div>
          
        </div>
      </section><!-- End Icon Boxes Section -->

      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            
            
            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/cox/cox-tv.jpg" class="img-fluid animated" alt="Straight to the show | Cox">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

              <h4 class="title">Skip straight to the show</h4>
              <p class="description">Your voice is all you need with the Voice Remote. Search all apps, live TV, On Demand, DVR recordings and more.   </p>
          
          </div>

          </div>
        </div>
          
      </section>

      <section style="padding:0;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">Get set up at home</h4>
                <p class="description">Find all the equipment you need to tune in and start watching.</p>
          
            </div>
            
            <div class="col-lg-6 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/cox/guy-using-remote.jpg" class="img-fluid animated" alt="Start Watching | Cox">
            </div>

          </div>
        </div>
          
      </section>




   

  </main><!-- End #main -->


@endsection