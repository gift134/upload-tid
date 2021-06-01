@extends('layouts.buckeyebroadband_main')
@section('content')

<section id="buckeyebroadband_intro_bundle" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-8 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1 style="color:white!important">Our Most Popular Bundles Packages</h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_number(602) }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_number(602) }}</a>
      </div>
      <div class="col-lg-4 order-1 order-lg-2 responsive-img">
       
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
              <h2>HD CABLE TV & BROADBAND INTERNET</h2>
              <div class="row justify-content-center">
                <div class="col-sm-4">
                  <h3 class="padding-bottom-none padding-top-none"><span>30+</span></h3>
                  <div class="price-icon"><i class="icofont-monitor"></i></div>
                  <h3 class="padding-top-none">Channels</h3>
                </div>
                <div class="col-sm-4">
                  <h3 class="padding-bottom-none padding-top-none"><span>25</span> Mbps</h3>
                  <div class="price-icon"><i class="icofont-speed-meter"></i></div>
                  <h3 class="padding-top-none">Download</h3>
                </div>

              </div>
              <p class="description p-bundle-height">NO CONTRACTS - stay connected with our basic internet and TV channel packages.</p>
              <p class="description">*Price includes Internet Equipment Fee for 6 months</p>
                <h5 class="includes">Included:<br/>
                  Local 30+<br/>
                  25 Mbps Internet</h5>
              <div class="price-tag">
              <h4><sup>$</sup>49.99<span>/month</span></h4>
              <h5>$64.98/Mo.</h5>
              <h6>Reg Rate</h6>
              </div>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_number(602) }}" class="btn-call">{{ Helper::providers_phone_number(602) }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="price-box">
              <h2>POPULAR STANDARD & BROADBAND INTERNET</h2>
              <div class="row justify-content-center">
                <div class="col-sm-4">
                  <h3 class="padding-bottom-none padding-top-none"><span>100+</span></h3>
                  <div class="price-icon"><i class="icofont-monitor"></i></div>
                  <h3 class="padding-top-none">Channels</h3>
                </div>
                <div class="col-sm-4">
                  <h3 class="padding-bottom-none padding-top-none"><span>25</span> Mbps</h3>
                  <div class="price-icon"><i class="icofont-speed-meter"></i></div>
                  <h3 class="padding-top-none">Download</h3>
                </div>

              </div>
              <p class="description p-bundle-height">NO CONTRACTS - Get our most popular TV package and basic internet.</p>
              <p class="description">*Price includes Internet Equipment Fee for 6 months</p>
                <h5 class="includes">Included:<br/>
                  Standard Service<br/>
                  25 Mbps Internet</h5>
              <div class="price-tag">
              <h4><sup>$</sup>99.99<span>/month</span></h4>
              <h5>$151.97/Mo.</h5>
              <h6>Reg Rate</h6>
              </div>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_number(602) }}" class="btn-call">{{ Helper::providers_phone_number(602) }}</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="price-box">
              <h2 style="height: 94px;">EXPRESS ESSENTIAL</h2>
              <div class="row justify-content-center">
                <div class="col-sm-4">
                  <h3 class="padding-bottom-none padding-top-none"><span>100+</span></h3>
                  <div class="price-icon"><i class="icofont-monitor"></i></div>
                  <h3 class="padding-top-none">Channels</h3>
                </div>
                <div class="col-sm-4">
                  <h3 class="padding-bottom-none padding-top-none"><span>100</span> Mbps</h3>
                  <div class="price-icon"><i class="icofont-speed-meter"></i></div>
                  <h3 class="padding-top-none">Download</h3>
                </div>
                <div class="col-sm-4">
                  <h3 class="padding-bottom-none padding-top-none"><span>DVR</span></h3>
                  <div class="price-icon"><i class="icofont-radio"></i></div>
                  <h3 class="padding-top-none"></h3>
                </div>
              </div>
              <p class="description p-bundle-height">Essential internet and our most popular cable TV package. Watch Live and Streaming TV all in one place!</p>
              <p class="description">INCLUDES: 2 TVs connected with Express TV Powered By TiVo</p>
                <h5 class="includes">Included Channels<br/>
                  Standard Service<br/>
                  Digital Music</h5>
              <div class="price-tag">
              <h4><sup>$</sup>179.97<span>/month</span></h4>
              <h5>$189.47/Mo.</h5>
              <h6>Reg Rate</h6>
              </div>
              <div class="btn-wrap">
                <a href="tel:{{ Helper::providers_phone_number(602) }}" class="btn-call">{{ Helper::providers_phone_number(602) }}</a>
              </div>
            </div>
          </div>


        </div>

        <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>

      </div>
    </section><!-- End Icon Boxes Section -->




    <section>
      <div class="container">
        <div class="row justify-content-between justify-content-center ">

          
          
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">

            <div class="white-box">
              <h4 class="title">ExpressTV Puts It All Together</h4>
              <p class="description">The entertainment landscape is more fractured than ever. In fact, the TV is no longer reserved for just TV anymore; streaming content is arguably just as important. Only TiVo connects all the dots in a way that’s seamless, searchable and hassle-free.</p>  
            </div>
           
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="white-box">
            <h4 class="title">RETHINK TV.</h4>
            <p class="description">Access live TV, DVR recordings and premium streaming entertainment through one easy-to-use interface.</p>
          </div>
        
        </div>

        </div>
      </div>
        
    </section>

    <section>
      <div class="container">
        <div class="row justify-content-between justify-content-center ">

          
          
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">

            <div class="white-box">
              <h4 class="title">Buckeye TV Everywhere</h4>
              <p class="description">Buckeye TV Everywhere is our latest technology that allows Buckeye Broadband video customers to watch streamed content from various cable TV content providers on your Web enabled devices such as computers, smartphones, tablets and more. Currently, we have 80+ cable TV sources for Buckeye TV Everywhere content.</p>  
            </div>
           
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="white-box">
            <h4 class="title">There's no additional charge to use Buckeye TV Everywhere.</h4>
            <p class="description">Your service level with Buckeye Broadband just needs to contain the cable TV network you want to watch. For example, if you are an HBO® subscriber, you can watch the full episodes of Game of Thrones® and other HBO® originals on HBO GO®.</p>
          </div>
        
        </div>

        </div>
      </div>
        
    </section>

    <section>
      <div class="container">
        <div class="row justify-content-between justify-content-center ">

          
          
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">

            <div class="white-box">
              <h4 class="title">On Demand Brings Entertainment at Your Fingertips</h4>
              <p class="description">See new movies 28 days or MORE before Netflix® or Redbox®. Watch primetime TV, hit shows and "On The House Movies" from networks like FX, MoviePlex and MGM HD for FREE. It’s all available instantly. Check menu listing/show description for specific pricing. Buckeye On Demand movies are available for as low as $2.99 per order.</p>  
            </div>
           
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="white-box">
            <h4 class="title">iNDEMAND Pay-Per-View</h4>
            <p class="description">Watch the biggest events on television including WWE, Championship Boxing, Ultimate Fighting Championship, concert events and much more.</p>
          </div>
        
        </div>

        </div>
      </div>
        
    </section>




   

  </main><!-- End #main -->


@endsection