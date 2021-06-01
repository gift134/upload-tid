@extends('layouts.dish_main')
@section('content')

<section id="dish_intro_tv" class="d-flex align-items-center">

  <div class="container">
        <h1 style="color:#f01446!important">DISH NETWORK PACKAGES FOR TV LOVERS</h1>
        <h2 style="color:#f01446!important">Shop DISH satellite TV packages and find the best plan for your at-home entertainment.</h2>
        <a href="tel:{{ Helper::providers_phone_type(4992,'phone_tv') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(4992,'phone_tv') }}</a>
  </div>

</section>

  <main id="main">

 

    <section>

      <div class="container">
          <h2 style="text-align:center" data-aos="fade-up">SEE THE DISH TV PACKAGE LINEUP</h2>
          <p style="text-align:center" data-aos="fade-up">DISH Network provides plenty of channel variety whether you're in the city, the suburbs, or the countryside.</p>
        <table data-aos="fade-up" >
          <caption>
          </caption>
          <thead>
            <tr>
              <th scope="col" style="width:30%">Package</th>
              <th scope="col">Price/mo</th>
              <th scope="col">Channels</th>
              <th scope="col" style="width:35%">Additional Channels</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-label="Package" style="background:#f99e1c">America's Top 120™</td>
              <td data-label="Price/mo">$59.99</td>
              <td data-label="Channels">190</td>
              <td data-label="Additional Channels">USA, Disney, ESPN, E!</td>
            </tr>
            <tr>
              <td data-label="Package" style="background:#ff672a">America's Top 120+™</td>
              <td data-label="Price/mo">$74.99</td>
              <td data-label="Channels">190+</td>
              <td data-label="Additional Channels">FOX Sports, Pac-12, CSN</td>
            </tr>
            <tr>
              <td data-label="Package" style="background:#f01446">America's Top 200™</td>
              <td data-label="Price/mo">$84.99</td>
              <td data-label="Channels">240+</td>
              <td data-label="Additional Channels">Bravo, Sundance, NBA TV</td>
            </tr>
            <tr>
              <td data-label="Package" style="background:#ca1061">America's Top 250™</td>
              <td data-label="Price/mo">$94.99</td>
              <td data-label="Channels">290+</td>
              <td data-label="Additional Channels">H2, DIY, Starz Encore</td>
            </tr>
            
          </tbody>
        </table>

      </div>
     
      </section>


         <!-- ======= Icon Boxes Section ======= -->
    <section id="price-boxes" class="price-boxes" style="background: aliceblue;">
      <div class="container">
        <h2 style="text-align:center;font-size:30px;" data-aos="fade-up">DISH PACKAGE PRICING</h2>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="price-box" style="border-top: 10px solid #f99e1c;">
              <h4 style="color:#f99e1c;"><sup>$</sup>59.99<span> / month</span></h4>
              <p class="description">for 24 months</p>
              <ul>
                <li>190 channels</li>  
              </ul>
              <h3>America's Top 120™<br/>Free Google Voice Remote‡ and DVR Included</h3>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(4992,'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(4992,'phone_tv') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            
            <div class="price-box" style="border-top: 10px solid #ff672a;">
              <h4 style="color:#ff672a;"><sup>$</sup>74.99<span> / month</span></h4>
              <p class="description">for 24 months</p>
              <ul>
                <li>190+ channels</li>  
              </ul>
              <h3>America's Top 120+™<br/>Free Google Voice Remote‡ and DVR Included</h3>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(4992,'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(4992,'phone_tv') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            {{-- <p class="promo-text red">Most Popular</p> --}}
            <div class="price-box" style="border-top: 10px solid #f01446;">
              <h4 style="color:#f01446;"><sup>$</sup>84.99<span> / month</span></h4>
              <p class="description">for 24 months</p>
              <ul>
                <li>240+channels</li>  
              </ul>
              <h3>America's Top 200™<br/>Free Google Voice Remote‡ and DVR Included</h3>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(4992,'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(4992,'phone_tv') }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            {{-- <p class="promo-text pink">Best Value</p> --}}
            <div class="price-box" style="border-top: 10px solid #ca1061;">
              <h4 style="color:#ca1061;"><sup>$</sup>94.99<span> / month</span></h4>
              <p class="description">for 24 months</p>
              <ul>
                <li>290+ channels</li>  
              </ul>
              <h3>America's Top 250™<br/>Free Google Voice Remote‡ and DVR Included</h3>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_type(4992,'phone_tv') }}" class="btn-call">Call {{ Helper::providers_phone_type(4992,'phone_tv') }}</a>
              </div>
            </div>
          </div>


        </div>

        <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">All offers require credit qualification, 24-month commitment with early termination fee and eAutoPay. Prices include Hopper Duo for qualifying customers. Hopper, Hopper w/Sling or Hopper 3 $5/mo. more. Upfront fees may apply based on credit qualification. ‡Requires internet-connected Hopper, Joey, or Wally device. Customer must press Voice Remote button to activate feature. The Google Assistant Smart Home features require Google account and compatible devices. Google is a trademark of Google LLC.</p>

      </div>
    </section><!-- End Icon Boxes Section -->


      <!-- ======= Icon Boxes Section ======= -->
      <section id="icon-boxes" class="icon-boxes" style="background: aliceblue;">
        <div class="container">

          <h2 style="text-align:center;padding:50px 0;" data-aos="fade-up">DISH IS #1 IN CUSTOMER SATISFACTION</h2>
  
          <div class="row">

            <div class="col-md-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="icon-box">
                <h4 class="title" style="height: 110px;">FREE INSTALLATION</h4>
                <div class="icon"><i class="fas fa-toolbox"></i></div>
                <p class="description">DISH TV helps you save while making the switch by offering FREE standard professional installation in up to 6 rooms (same-day often available!).</p>
              </div>
            </div>

            <div class="col-md-4  d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="icon-box">
                <h4 class="title" style="height: 110px;">Local Channels Included</h4>
                <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
                <p class="description">There’s no extra charge for public local channels when you order America’s Top packages. DISH absorbs the fees.</p>
              </div>
            </div>

              <div class="col-md-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                <div class="icon-box" >
                  <h4 class="title" style="height: 110px;">FREE Voice Remote & HD DVR</h4>
                  <div class="icon"><i class="fas fa-tv"></i></div>
                  <p class="description">These user-friendly devices have advanced functions that help you search, record, and watch TV effortlessly.</p>
                </div>
              </div>
  
          
  
  
          </div>
  
        </div>
      </section><!-- End Icon Boxes Section -->

      <section style="background:url(/resources/assets/front_assets/img/dish/man-child.jpg) no-repeat;background-size: cover;height:500px;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">INTERNET WITH YOUR DISH TV ORDER</h4>
                <p class="description">When you call to order DISH TV, your representative can find internet quotes and even order your chosen package while you’re still on the phone together. Whatever options are available at your address—satellite, wired, or even fiber internet—you can get your order in today and have one less call to make.</p>
 
            </div>
            
            <div class="col-lg-6 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">

            </div>

          </div>
        </div>
          
      </section>

      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            
            
            <div class="col-lg-6 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/dish/tv-robot.png" class="img-fluid animated" alt="Dish Hopper: Premium On Demand">
            </div>

            <div class="col-lg-6 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

              <h4 class="title">The Hopper 3: Get Premium On Demand At Your Command</h4>
              <p class="description">When it comes to On Demand, the Hopper 3 provides the best HD video quality to date and boasts more storage capacity than previous generations. Skip the pesky commercials and get back to your show in crystal clear 4K Ultra HD.</p>
              <p class="description">Check out what else you can do with the Hopper 3:</p>
              <ul>
                <li>Access your complete library when you’re on the go with the DISH Anywhere mobile app</li>
                <li>Watch up to 4 programs at once with MultiView mode</li>
                <li>Record up to 16 different shows at once</li>
              </ul>
          </div>

          </div>
        </div>
          
      </section>


  </main><!-- End #main -->


@endsection