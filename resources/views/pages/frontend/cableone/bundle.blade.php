@extends('layouts.cableone_main')
@section('content')

<section id="bundle_intro" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1>Save on Elite and Preferred Bundles</h1>
        {{-- <h2 style="color:white!important">Bundle your TV, Phone, and Internet services</h2> --}}
        <a href="tel:{{ Helper::providers_phone_type(45,'phone_bundles') }}" class="btn-get-started scrollto">Call {{ Helper::providers_phone_type(45,'phone_bundles') }}</a>
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
              <a href="tel:{{ Helper::providers_phone_type(45,'phone_bundles') }}" class="btn-call">Call {{ Helper::providers_phone_type(45,'phone_bundles') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="price-box" style="height:700px">
            <h2>Preferred Package: 100 Mbps Internet & Phone</h2>
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
              <a href="tel: {{ Helper::providers_phone_type(45,'phone_bundles') }}" class="btn-call">Call {{ Helper::providers_phone_type(45,'phone_bundles') }}</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="price-box" style="height:700px">
            <h2>Elite Package: 100 Mbps Internet, Cable & Phone</h2>
            <div class="price-icon"><i class="icofont-monitor"></i> <i class="icofont-laptop"></i> <i class="icofont-mobile-phone"></i></div>
            <h4><sup>$</sup>155.00<span> / month</span></h4>
            <p class="description">for 6 months
              <br />
              $204.00/mo after trial offer.
            </p>
            <h3>Download speeds up to 200 Mbps</h3>
            <ul>
              <li>Up to 100 channels</li>
              <li>Unlimited long-distance in the continental US</li>
              <li>TV Everywhere for on-the-go watching</li>
              <li>No contract</li>
            </ul>
            <div class="btn-wrap">
              <a href="tel:{{ Helper::providers_phone_type(45,'phone_bundles') }}" class="btn-call">Call {{ Helper::providers_phone_type(45,'phone_bundles') }}</a>
            </div>
          </div>
        </div>

      </div>
      <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>
    </div>
  </section><!-- End Icon Boxes Section -->


  <section>

    <div class="container">
        <h2 style="text-align:center" data-aos="fade-up">Cable ONE Bundle Packages Summary</h2>

      <table data-aos="fade-up">
        <caption>Offers and availability are not guaranteed and subject to change.</caption>
        <thead>
          <tr>
            <th scope="col" style="width:20%">Package</th>
            <th scope="col" style="width:15%">Download Speeds</th>
            <th scope="col" style="width:10%">Data Plan</th>
            <th scope="col" style="width:15%">Channel Count</th>
            <th scope="col" style="width:15%">Phone Plan</th>
            <th scope="col" style="width:25%">Introductory Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-label="Package">Preferred Package: 100 Mbps Internet & Cable</td>
            <td data-label="Download Speeds">Up to 100 Mbps</td>
            <td data-label="Data Plan">300 GB included</td>
            <td data-label="Channel Count">Up to 100 channels</td>
            <td data-label="Phone Plan">N/A</td>
            <td data-label="Introductory Price">$95.00/mo. for 6 months. $134.00/mo. after trial offer.</td>
          </tr>
          <tr>
            <td data-label="Package">Preferred Package: 200 Mbps Internet & Cable</td>
            <td data-label="Download Speeds">Up to 200 Mbps</td>
            <td data-label="Data Plan">700 GB included</td>
            <td data-label="Channel Count">Up to 100 channels</td>
            <td data-label="Phone Plan">N/A</td>
            <td data-label="Introductory Price">$145.00/mo. for 6 months. $184.00/mo. after trial offer.</td>
          </tr>
          <tr>
            <td data-label="Package">Preferred Package: Cable & Phone</td>
            <td data-label="Download Speeds">N/A</td>
            <td data-label="Data Plan">N/A</td>
            <td data-label="Channel Count">Up to 100 channels</td>
            <td data-label="Phone Plan">Standard Phone with Voicemail</td>
            <td data-label="Introductory Price">$89.00/mo. for 6 months. <br />$119.00/mo. after trial offer.</td>
          </tr>
          <tr>
            <td data-label="Package">Preferred Package: 100 Mbps Internet & Phone</td>
            <td data-label="Download Speeds">Up to 100 Mbps</td>
            <td data-label="Data Plan">300 GB included</td>
            <td data-label="Channel Count">N/A</td>
            <td data-label="Phone Plan">Standard Phone with Voicemail</td>
            <td data-label="Introductory Price">$75.00/mo. for 6 months. <br />$80.00/mo. after trial offer.</td>
          </tr>
          <tr>
            <td data-label="Package">Preferred Package: 200 Mbps Internet & Phone</td>
            <td data-label="Download Speeds">Up to 200 Mbps</td>
            <td data-label="Data Plan">700 GB included</td>
            <td data-label="Channel Count">N/A</td>
            <td data-label="Phone Plan">Standard Phone with Voicemail</td>
            <td data-label="Introductory Price">$125.00/mo. for 6 months. <br />$130.00/mo. after trial offer.</td>
          </tr>
          <tr>
            <td data-label="Package">Elite Package: 100 Mbps Internet, Cable & Phone</td>
            <td data-label="Download Speeds">Up to 100 Mbps</td>
            <td data-label="Data Plan">300 GB included</td>
            <td data-label="Channel Count">Up to 100 channels</td>
            <td data-label="Phone Plan">Standard Phone with Voicemail</td>
            <td data-label="Introductory Price">$105.00/mo. for 6 months. <br />$154.00/mo. after trial offer.</td>
          </tr>
          <tr>
            <td data-label="Package">Elite Package: 200 Mbps Internet, Cable & Phone</td>
            <td data-label="Download Speeds">Up to 200 Mbps</td>
            <td data-label="Data Plan">700 GB included</td>
            <td data-label="Channel Count">Up to 100 channels</td>
            <td data-label="Phone Plan">Standard Phone with Voicemail</td>
            <td data-label="Introductory Price">$155.00/mo. for 6 months. <br />$204.00/mo. after trial offer.</td>
          </tr>


        </tbody>
      </table>

    </div>
    </section>
    

      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">Get the Fastest Internet for the Best Streaming</h4>
                <p class="description">Cable ONE internet speeds are some of the fastest on the market. With 100 Mbps, you’ll have a lag-free connection for up to five devices at once. So relax, and get to streaming all your favorite shows in HD through TV Everywhere, Netflix, or any other streaming services.</p>
              </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/cableone/laptop-browse.jpg" class="img-fluid animated" alt="Best Streaming | CableOne">
            </div>

          </div>
        </div>

      </section>

      <section style="background: aliceblue;">
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">



            <div class="col-lg-5 order-1 order-lg-1 spectrum_intro-img" data-aos="fade-up" data-aos-delay="200">
                <img src="/resources/assets/front_assets/img/spectrum/entertainment.jpg" class="img-fluid animated" alt="HDTV | CableOne">
            </div>

            <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

              <h4 class="title">Your Number-One Choice for HDTV</h4>

              <p class="description">With seventy-five channels available in HD at a super affordable price, it’s no wonder why more people choose Cable ONE for their HD programming than any other provider. Add to that the value of TV Everywhere (Cable ONE’s hub for on-the-go viewing), and there’s a whole lot to love.</p>
              <p class="description">Watch TV how it’s meant to be seen—in clear HD from Cable ONE.</p>

          </div>

          </div>
        </div>

      </section>

      <section>
        <div class="container">
          <div class="row justify-content-between justify-content-center align-items-center">

            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

                <h4 class="title">Get the Fastest Internet for the Best Streaming</h4>
                <p class="description">You’ll love the clear sound you get with Cable ONE’s digital phone. Already available at the lowest price on the local market, the deal gets even better in a Preferred or Elite Package. Keep in touch with your family and friends at a price that makes it easy.</p>
              </div>

            <div class="col-lg-5 order-1 order-lg-2 spectrum_intro-img" data-aos="fade-up" data-aos-delay="100">
                <img src="/resources/assets/front_assets/img/spectrum/bundle.jpg" class="img-fluid animated" alt="Best Streaming | CableOne">
            </div>

          </div>
          
        </div>

      </section>

  </main><!-- End #main -->


@endsection
