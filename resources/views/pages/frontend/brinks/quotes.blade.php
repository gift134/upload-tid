 
@extends('layouts.brinks_main')
@section('content')
     
     <section id="hero" class="d-flex align-items-center">

        <div class="container">
          <div class="row" >
            <div class="col-lg-6">
              <h1 style="color:white!important">Get your <strong>Brinks Free Quote</strong> Now!</h1>
              <h2 style="color:white!important">
                There is not obligation. Just email us and we will call you back.
              </h2>
              
            </div>
            <div class="col-lg-6">
             
            </div>
          </div>
        </div>
    
      </section><!-- End Hero -->
   
   <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Get a free Quotes</h2>

      </div>

      <div class="row">

        <div class="col-lg-5 align-items-stretch">
          <h2>Get a Free Quote with <br /><strong>Brinks Home Security</strong> or  skip the form and call us:</h2>
          <div class="row">
          <a href="tel:(844)832-3908" class="btn-get-started scrollto">Call (844)832-3908</a>
          </div>
        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="{{ route('quote-brinks') }}" method="post" role="form" class="php-email-form">
              @include('includes.admin.flash-message')
             {{ csrf_field() }}
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
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
            <div class="form-group">
              <input class="form-btn" type="submit" value="Request Quote">
            </div>
            <label>
                By clicking the button below, you consent for Brinks to use automated technology, including calls, texts and prerecorded messages, to contact you at the number and email provided about Brinks offers. This consent is not required to make a purchase. Clicking the button below constitutes your electronic signature.
              </label>
          </form>
        </div>

      </div>

    </div>
  </section>
  @endsection