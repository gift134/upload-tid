@extends('layouts.buckeyebroadband_main')
@section('content')

<section id="buckeyebroadband_intro_bundle_phone" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-8 pt-5 pt-lg-0 order-2 order-lg-1">
        <h1 style="color:white!important">Our Most Popular High Speed Internet Packages</h1>
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
    <section id="phone-boxes" class="phone-boxes">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-8 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="phone-box">
                <h2>Express Home Phone</h2>
                <h4>UNLIMITED LOCAL CALLS AND<br/>
                    UNLIMITED LONG DISTANCE CALLS INCLUDING CANADA<br/>
                    WITH VOICEMAIL</h4>
                <p>Whether you are calling family or friends, for pleasure or emergency, <strong>Buckeye Express Home Phone</strong> has one easy to understand home phone package. Call anywhere at any time, we can keep you connected to the world! Plus, you get to keep your current phone number. Only $9.99 for 6 months! (original price of $19.99/mo)</p>
                <h3>$9.99/mo</h3>
                <div class="btn-wrap">
                    <a href="tel:{{ Helper::providers_phone_number(602) }}" class="btn-call">{{ Helper::providers_phone_number(602) }}</a>
                </div>
            </div>
          </div>

        </div>

        <p style="text-align:center; font-size16px;margin-top:50px"  data-aos="fade-up">Offers and availability vary by market and are subject to change.</p>

      </div>
    </section><!-- End Icon Boxes Section -->


    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes" style="background: aliceblue;">
        <div class="container">
  
          <h2 style="text-align:center;padding:50px 0;" data-aos="fade-up">Add More to Your Home Phone</h2>
  
          <div class="row">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="icon-box">
                <h4 class="title">Robocall Blocker - NOW INCLUDED</h4>
                <p class="description">
                Intercepts suspicious calls before they reach you, reducing the potential of being scammed! Buckeye's Robocall Blocker technology will block those annoying automated calls from telemarketers, political calls, and ID spoofers. Our system is smart and will allow automated calls for schools, doctors offices, and emergency numbers to ring through normally.
                </p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <h4 class="title">Add Enhanced Features for Only $10/mo.</h4>
                <p class="description">Enhanced Phone Features package includes: Anonymous Call Rejection, Automatic Call Back, Call Forwarding, Call Privacy, Call Waiting w/ID, Caller ID w/Name, Do Not Disturb, Repeat Dialing, Selective Call Rejection, Speed Dialing 8 and Three Way Calling.
                </p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <h4 class="title">Add Brainiacs for Only $10/mo.</h4>
                <p class="description">Brainiacs Package includes: Inside Phone Maintenance for Express Phone Customers. Plus, if you have internet with Buckeye, you'll also received: Unlimited Phone Support and Remote Access Support via Internet, Malware Removal and PC optimization, Bitdefender Antivirus protection on up to 3 computers</p>
              </div>
            </div>
  
  
          </div>
  
        </div>
      </section><!-- End Icon Boxes Section -->

   

  </main><!-- End #main -->


@endsection