@extends('layouts.vivint_main')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
          <h1 style="color:white">Garage Door Control</h1>
          <h2 style="color:white">Lets you control your Garage Door anywhere you are!</h2>
          <a href="tel:(844)529-7237" class="btn-get-started scrollto">Call (844)529-7237</a>
        </div>

        <div class="col-lg-6 order-1 order-lg-2 responsive-img justify-content-center">
            <img src="/resources/assets/vivint_assets/img/vivint-products/garage-door-controll.png" class="product-image img-fluid" style="height:250px; width:100%" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

   <!-- ======= feature Section ======= -->
   <section id="feature" class="feature">
    <div class="container">

      <div class="section-title">
        <h2>Vivint Element Thermostat</h2>
      </div>

      <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch" >
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4 class="title"><a href="">Open and shut—from anywhere.</a></h4>
            <p class="description">Worried you forgot to close the garage door? No need to turn around when you leave the house. Just check the status of your garage door on your mobile device and close it remotely if you left it open. Simple.</p>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4 class="title"><a href="">Total Front Door Control.</a></h4>
            <p class="description">Tell your mailman to place the package safely inside your garage with the help of the Vivint Doorbell Camera and garage door control. </p>
          </div>
        </div>

        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4 class="title"><a href="">Be a garage door know-it-all.</a></h4>
            <p class="description">Get notified on your smartphone when your garage is left open, and close it remotely. No worry. No stress.</p>
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
            <a data-toggle="collapse" class="" href="#faq1">How do I control my garage door? <i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse show" data-parent=".faq-list">
              <p>
                With the Vivint Garage Door Control, you can open and shut your garage door from anywhere via the Smart Home App. You can also check and see whether it’s open or closed from your smartphone. Your smartphone doubles as a garage door opener.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">How can I protect the items in my garage? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                You can keep the items in your garage safe by practicing security measures that include:
              </p>
              <ul>
                <li>Replacing broken, rotted, or flimsy garage doors and parts</li>
                <li>Reinforce the lock with a deadbolt and update your door jamb with longer screws.</li>
                <li>Avoid leaving your garage door open unless coming or going.</li>
                <li>Upgrade your door opener with newer technology like the Vivint Garage Door Control, which allows you to control your garage door and check its status from anywhere.</li>
            </ul>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">How does the doorbell camera work? <i class="icofont-simple-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                The Vivint Doorbell Camera Pro works using a wireless connection. It integrates a number of features to bring you a safer smarter doorstep, including:
              </p>
              <ul>
                <li>Live and recorded video.</li>
                <li>A microphone and speaker with two-way talk.</li>
                <li>Smart visitor detection and notifications right to your phone.</li>
            </ul>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">Do doorbell cameras need WiFi? <i class="icofont-simple-up"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
                Typically, yes. Most doorbell cameras are WiFi-enabled which allows you to see the camera feed right from your phone as long as your doorbell is connected to your home’s WiFi network. With the Vivint Doorbell Camera Pro:
              </p>
              <ul>
                <li>A notification is sent to your smartphone when a visitor is detected.</li>
                <li>You can speak directly to visitors right through your phone.</li>
            </ul>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">Do doorbell cameras record all the time? <i class="icofont-simple-up"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                The Vivint Doorbell Camera Pro records video any time the sensors detect a visitor. 
              </p>
            </div>
          </li>

        

        </ul>

      </div>
    </section><!-- End F.A.Q Section -->

  

 

       <!-- ======= Contact Us Section ======= -->
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
                  <input type="text" name="last_name" class="form-control" id="last_name"/>
                  <div class="validate"></div>
                </div>
                
                <div class="form-group">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email"/>
                  <div class="validate"></div>
                </div>

              <div class="form-group">
                <label for="name">Phone Number</label>
                <input type="text" class="form-control" name="phone" id="phone"/>
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

  <!-- ======= Footer ======= -->
@endsection