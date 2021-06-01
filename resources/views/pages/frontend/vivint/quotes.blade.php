@extends('layouts.vivint_main')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row" >
        <div class="col-lg-6 demo">
          <h1 style="color:white!important">Get your Vivint Free Quote Now!</h1>
          <h2 style="color:white!important">
            There is not obligation. Just email us and we will call you back.
          </h2>
          
        </div>
        <div class="col-lg-6">
         
        </div>
      </div>
    </div>

  </section><!-- End Hero -->




    <!-- ======= Request Quotes Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

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
                  <input type="text" name="first_name" class="form-control" id="first_name" />
                  <div class="validate"></div>
                </div>
                
                <div class="form-group">
                  <label for="name">Last Name</label>
                  <input type="text" name="last_name" class="form-control" id="last_name" />
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