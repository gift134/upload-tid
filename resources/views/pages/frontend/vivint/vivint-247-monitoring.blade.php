@extends('layouts.vivint_main')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
          <h1 style="color:white">24x7 Monitoring</h1>
          <h2 style="color:white">Don't worry we got your back. You will feel safe 24/7.</h2>
          <a href="tel:(844)529-7237" class="btn-get-started scrollto">Call (844)529-7237</a>
        </div>
      
        <div class="col-lg-6 order-1 order-lg-2 responsive-img">
          <img class="product-image" src="/resources/assets/vivint_assets/img/vivint-products/247-monitoring.jpeg" style="width:400px"class="product-image img-fluid" alt="">
        </div>

      </div>
    </div>

  </section>

    <section id="feature" class="feature"> 
      <div class="container">

        <div class="section-title">
          <h2>24x7 Monitoring</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch" >
            <div class="icon-box">
              <div class="icon"><i class="fa fa-shield"></i></div>
              <h4 class="title"><a href="">Peace of Mind Protection</a></h4>
              <p class="description">24x7 monitoring is there to respond to an emergency even if you can't.</p>
            </div>
          </div>
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-hospital-o"></i></div>
              <h4 class="title"><a href="">Medical Alerts</a></h4>
              <p class="description">Quickly contact the monitoring department for emergency help.</p>
            </div>
          </div>

          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-headphones"></i></div>
              <h4 class="title"><a href="">24x7 Support</a></h4>
              <p class="description">Need help? Our Smart Home Specialists are always available to assist.</p>
            </div>
          </div>

        

        </div>

      </div>
    </section>

  
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>F.A.Q</h2>
        </div>

        <ul class="faq-list">

          <li>
            <a data-toggle="collapse" class="" href="#faq1">What is 24x7 monitoring? <i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse show" data-parent=".faq-list">
              <p>
                If an alarm in your home is triggered, a team of home security professionals are immediately notified and take the proper action.
              </p>
              <p>
                This includes:
              </p>
              <ul>
                  <li>Contacting you to make sure you and your family are alright.</li>
                  <li>Contacting emergency personnel, such as the police or fire department, on your behalf</li>
              </ul>
              <p>You can also reach Smart Home Monitoring Specialists in an emergency with the touch of a button from your Smart Hub. They are available at any time and any day.</p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">How do I choose a security system? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                If you’re shopping for a security system, there are certain features you’ll want to look for to ensure your home is protected. Vivint offers an unrivaled home security system that includes:
              </p>
              <ul>
                <li>A Smart Home App that keeps you connected to your home.</li>
                <li>Glass break sensors, burglary detection, and smart locks for enhanced security.</li>
                <li>Surveillance cameras for a complete view of </li>
                <li>24/7 monitoring to keep your home safe day and night</li>
            </ul>
            <p>
              Vivint also offers a free consultation to help you create a completely customized security system.
            </p>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Can I monitor Vivint myself? <i class="icofont-simple-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                All Vivint Systems come with 24/7 monitoring. Because it’s impossible to monitor your own home 24/7, Vivint’s team of trained security specialists are on hand in the event an alarm in your home is triggered or you need emergency assistance. 
                This is helpful when you are out of town, at work, or away from your home.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">How far can outdoor security cameras see? <i class="icofont-simple-up"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <ul>
                <li>The Vivint Outdoor Camera Pro features a wide 140-degree field of view that provides sweeping views of the property, capturing as much as possible.</li>
            </ul>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">How do outdoor security cameras work? <i class="icofont-simple-up"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                The Vivint Outdoor Camera Pro works to protect you through the following features: 
              </p>
              <ul>
                <li>A wide-angle lens with night vision.</li>
                <li>Smart Sentry™ motion detection and threat deterrence.</li>
                <li>Two-way talk.</li>
                <li>Smart notifications right on your phone.</li>
            </ul>
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
                  <input type="text" name="first_name" class="form-control" id="first_name"/>
                  <div class="validate"></div>
                </div>
                
                <div class="form-group">
                  <label for="name">Last Name</label>
                  <input type="text" name="last_name" class="form-control" id="last_name"  />
                  <div class="validate"></div>
                </div>
                
                <div class="form-group">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" />
                  <div class="validate"></div>
                </div>

              <div class="form-group">
                <label for="name">Phone Number</label>
                <input type="text" class="form-control" name="phone" id="phone" />
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

  <!-- ======= Footer ======= -->
  
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