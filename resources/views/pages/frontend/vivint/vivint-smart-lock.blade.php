@extends('layouts.vivint_main')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
          <h1 style="color:white">Kwikset Smart Locks®</h1>
          <h2 style="color:white">Too Busy to open your door for your friends or family?</h2>
          <a href="tel:(844)529-7237" class="btn-get-started scrollto">Call (844)529-7237</a>
        </div>

        <div class="col-lg-6 order-1 order-lg-2 responsive-img justify-content-center">
          <img src="/resources/assets/vivint_assets/img/vivint-products/smart-lock.png" style="width:350px"class="product-image img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

    <!-- ======= feature Section ======= -->

    <section id="feature" class="feature">
      <div class="container">

        <div class="section-title">
          <h2>Kwikset Smart Locks®</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch" >
            <div class="icon-box">
              <div class="icon"><i class="fa fa-mobile-phone"></i></div>
              <h4 class="title"><a href="">Mobile Lock Access</a></h4>
              <p class="description">Lock and unlock your front door with the Vivint Smart Home App.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-bell"></i></div>
              <h4 class="title"><a href="">Alerts and Notifications</a></h4>
              <p class="description">Get notified when the door is left unlocked.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-shield"></i></div>
              <h4 class="title"><a href="">Completely Secure</a></h4>
              <p class="description">Secure technology protects against unauthorized entry.</p>
            </div>
          </div>



        </div>

      </div>
    </section><!-- End feature Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>F.A.Q</h2>
        </div>
        <ul class="faq-list">

          <li>
            <a data-toggle="collapse" class="" href="#faq1">What are smart door locks? <i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse show" data-parent=".faq-list">
              <p>
                Smart locks are door locks that don’t require keys. Rather, they are often controlled using a smartphone app or a numeric keypad that requires a unique access code.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">How can I make my front door more secure? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                Smart locks are a great way to make your front door more secure. Since they can be opened with just a code or your phone, you’ll no longer need to hide a key outside your home. Hide-a-keys make it easy for burglars to break in, and smart locks solve that problem.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Is a keypad door lock safe? <i class="icofont-simple-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                Yes, a keypad door lock is much safer than a door with only keyed entry. Just be sure that your passcode isn’t easy to guess or taken from anything (like your phone number) that could be easy to determine.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>

       <section id="contact" class="contact">
        <div class="container">
  
          <div class="section-title">
            <h2>Get a free Quotes</h2>
  
          </div>
  
          <div class="row">
  
            <div class="col-lg-5 align-items-stretch">
              <h2>Our Agent will contact you within 24 hours or skip the form</h2>
              <div class="row">
              <a href="tel:(844)529-7237" class="btn-get-started scrollto">Call (844)529-7237</a>
              </div>
            </div>
  
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="{{ route('quote-vivint') }}" method="post" accept-charset="UTF-8" role="form" class="php-email-form">
                @include('includes.admin.flash-message')
                {{ csrf_field() }}
                
                <input id="leadid_token" name="universal_leadid" type="hidden" value="4XYZ78B9-0CDC-43A7-98EA-2B680A5313A2"/>
                
                <div class="form-group">
                  <label for="name">First Name</label>
                  <input type="text" name="first_name" class="form-control" value="test" id="first_name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                
                <div class="form-group">
                  <label for="name">Last Name</label>
                  <input type="text" name="last_name" class="form-control" id="last_name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                
                <div class="form-group">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>

              <div class="form-group">
                <label for="name">Phone Number</label>
                <input type="text" class="form-control" name="phone" id="phone" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              
              <input type="hidden" id="leadid_tcpa_disclosure" />
              
              <div class="form-group">
                <input class="form-btn" type="submit" onclick="loadDoc()" value="Request Quote">
              </div>
              <label for="leadid_tcpa_disclosure">
                  <strong>TCPA Disclaimer:</strong> <br/>
                By clicking the button above, you consent for Vivint, and its service provider Aktify, to use automated technology, including calls, texts and prerecorded messages, to contact you at the number and email provided about Vivint offers. This consent is not required to make a purchase. Clicking the button below constitutes your electronic signature.
            </label>
            </form>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Contact Us Section -->

  </main><!-- End #main -->
  
   <script id="LeadiDscript" type="text/javascript">
(function() {
var s = document.createElement('script');
s.id = 'LeadiDscript_campaign';
s.type = 'text/javascript';
s.async = true;
s.src = '//create.lidstatic.com/campaign/ff4e8dc0-f79a-a87f-0a2d-15455660eb02.js?snippet_version=2';
var LeadiDscript = document.getElementById('LeadiDscript');
LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
})();
</script>
<noscript><img src='//create.leadid.com/noscript.gif?lac=a567d3ae-19fc-9bba-2900-2ebb824f1322&lck=ff4e8dc0-f79a-a87f-0a2d-15455660eb02&snippet_version=2' /></noscript>

<script>

function loadDoc() {
    var firstname = document.getElementById("first_name").value;
    var lastname = document.getElementById("last_name").value;
    var phone = document.getElementById("phone").value;    
    
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange=function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
        
    }
  };
  

  xhttp.open("GET", "https://t.vivint.com/post.do?lp_campaign_id=5e9f4be7458d3&lp_campaign_key=cMYx36N8HBCLFG9bDZWw&first_name=" + firstname + "&last_name=" + lastname + "&jornaya_lead_id=B137DB12-5F98-57EF-EBB7-96D6087378BA&phone_cell="+phone+"");
  xhttp.send();
   
}
</script>
  

@endsection