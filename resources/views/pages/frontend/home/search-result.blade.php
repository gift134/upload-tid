

@extends('layouts.main')
@section('content')


<section id="search_intro" class="d-flex align-items-center">

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-8">
                <h1 style="margin-bottom:50px;">List of Providers in {{$zip_code}}, {{$city_name}}, {{$state_name}}</h1>
                <h2>Enter your zip code to see providers in your area.</h2>
                    <div>
                        <form class="form-inline" action="{{ url('search') }}">
                            <div class="form-box">
                            @csrf
                            <input type="number" id="zip" placeholder="Enter your Zip code" name="zip">
                            <button type="submit">Search</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
  </section>




<section class="search-result-content">
    <div class="container">
        @if(!is_null($type_tv) || !is_null($type_bundle) || !is_null($type_internet))


<ul class="tabs" role="tablist" >
    
    
   


    <li>
        <input type="radio" name="tabs" id="tab4" checked />
        <label for="tab4"
               role="tab"
               aria-selected="false"
               aria-controls="panel4"
               tabindex="0">Home Security</label>
        <div id="tab-content4"
             class="tab-content"
             role="tabpanel"
             aria-labelledby="specification"
             aria-hidden="true" >

              <div class="row" >

                <div class="col-sm-12" data-aos="fade-up">
                    <div class="provider-card-title" >
                        <h2>ADT</h2>
                    </div>
                    <div class="provider-card" >
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="responsive-img">
                              <img src="/public/logos/adt-authorized-dealer-program-logo.png" alt="adt" title="Adt" class="img-fluid animated"/>

                            </div>
                            </div>

                            <div class="col-md-3 col-sm-6 left-border">
                                <h4>Rating:</h4>
                                <div class="Stars" style="--rating: 4.2;" aria-label="Rating of this product is 4.2 out of 5."></div>
                                <h3></h3>
                            </div>
                            <div class="col-md-4 left-border">

                                <ul class="fa-ul" >
                                    <li><i class="fa-li fa fa-check"></i>Trusted name</li>
                                    <li><i class="fa-li fa fa-check"></i>Customer-first policies</li>
                                    <li><i class="fa-li fa fa-check"></i>140+ years of experience</li>
                                </ul>
                            </div>
                            <div class="col-md-2 justify-content-center align-items-center" style="display: grid; position: relative;">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="phone-number">
                                            <a  href="tel:(844) 529-7254">(844) 529-7254</a>
                                        </div>

                                    </div>
                                    <div class="col-sm-12">
                                        <div class="view-promos">
                                            <a  href="/adt-home-security">View Promos</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>



                <div class="col-sm-12" data-aos="fade-up">
                    <div class="provider-card-title" >
                        <h2>Vivint Smart Homes</h2>
                    </div>
                    <div class="provider-card" >
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="responsive-img">
                              <img src="/public/logos/vivint-authorized-dealer-logo.png" alt="vivint" title="vivint" class="img-fluid animated"/>

                            </div>
                            </div>

                            <div class="col-md-3 col-sm-6 left-border">
                                <h4>Rating:</h4>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 4.5 out of 5."></div>
                                <h3</h3>
                            </div>
                            <div class="col-md-4 left-border">

                                <ul class="fa-ul" >

                                    <li><i class="fa-li fa fa-check"></i>Professional installation and 24/7 monitoring</li>
                                    <li><i class="fa-li fa fa-check"></i>#1 smart home services provider in the U.S.</li>
                                    <li><i class="fa-li fa fa-check"></i>Rated 4.5 stars on The App Store</li>

                                </ul>

                            </div>
                            <div class="col-md-2 justify-content-center align-items-center" style="display: grid; position: relative;">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="phone-number">
                                            <a  href="tel:(844) 529-7237">(844) 529-7237</a>
                                        </div>

                                    </div>
                                    <div class="col-sm-12">
                                        <div class="view-promos">
                                            <a  href="/vivint-home-security">View Promos</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>
                
                <div class="col-sm-12" data-aos="fade-up">
                    <div class="provider-card-title" >
                        <h2>Brinks</h2>
                    </div>
                    <div class="provider-card" >
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="responsive-img">
                              <img src="/resources/assets/brinks_assets/img/brinks-img/brinks_logo.png" alt="Brinks" title="Brinks" class="img-fluid animated"/>
                        
                            </div>
                            </div>

                            <div class="col-md-3 col-sm-6 left-border">
                                <h4>Rating:</h4>
                                <div class="Stars" style="--rating: 4.0;" aria-label="Rating of this product is 4.5 out of 5."></div>
                                <h3</h3>
                            </div>
                            <div class="col-md-4 left-border">

                                <ul class="fa-ul" >

                                    <li><i class="fa-li fa fa-check"></i>Fast response times</li>
                                    <li><i class="fa-li fa fa-check"></i>Nest security equipment available</li>
                                    <li><i class="fa-li fa fa-check"></i>Mobile app included in every package</li>

                                </ul>

                            </div>
                            <div class="col-md-2 justify-content-center align-items-center" style="display: grid; position: relative;">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="phone-number">
                                            <a  href="tel:1-888-317-7540">(888) 317-7540</a>
                                        </div>

                                    </div>
                                    <div class="col-sm-12">
                                        <div class="view-promos">
                                            <a  href="/brinks-home-security">View Promos</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>
                
                
                <div class="col-sm-12" data-aos="fade-up">
                    <div class="provider-card-title" >
                        <h2>Simplisafe</h2>
                    </div>
                    <div class="provider-card" >
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="responsive-img">
                              <img src="/resources/assets/simplisafe_assets/img/simplisafe-img/simplisafe-logo.png" alt="Simplisafe" title="Simplisafe" class="img-fluid animated"/>
                        
                            </div>
                            </div>

                            <div class="col-md-3 col-sm-6 left-border">
                                <h4>Rating:</h4>
                                <div class="Stars" style="--rating: 3.9;" aria-label="Rating of this product is 4.5 out of 5."></div>
                                <h3</h3>
                            </div>
                            <div class="col-md-4 left-border">

                                <ul class="fa-ul" >

                                    <li><i class="fa-li fa fa-check"></i>Base Station, Sensor, Backup battery  </li>
                                    <li><i class="fa-li fa fa-check"></i>Water damage protection</li>

                                </ul>

                            </div>
                            <div class="col-md-2 justify-content-center align-items-center" style="display: grid; position: relative;">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="phone-number">
                                            <a  href="tel:(844)991-9874">(844) 991-9874</a>
                                        </div>

                                    </div>
                                    <div class="col-sm-12">
                                        <div class="view-promos">
                                            <a  href="/simplisafe-home-security">View Promos</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>
                
                <div class="col-sm-12" data-aos="fade-up">
                    <div class="provider-card-title" >
                        <h2>Ring</h2>
                    </div>
                    <div class="provider-card" >
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="responsive-img">
                              <img src="/resources/assets/ring_assets/img/ring-img/ring-logo.png" alt="Ring" title="Ring" class="img-fluid animated"/>
                        
                            </div>
                            </div>

                            <div class="col-md-3 col-sm-6 left-border">
                                <h4>Rating:</h4>
                                <div class="Stars" style="--rating: 3.8;" aria-label="Rating of this product is 4.5 out of 5."></div>
                                <h3</h3>
                            </div>
                            <div class="col-md-4 left-border">

                                <ul class="fa-ul" >

                                    <li><i class="fa-li fa fa-check"></i>Base Station, Alarm Kit, Keypad, Removable Battery  </li>

                                </ul>

                            </div>
                            <div class="col-md-2 justify-content-center align-items-center" style="display: grid; position: relative;">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="phone-number">
                                            <a  href="tel:(888)665-2165">(888) 665-2165</a>
                                        </div>

                                    </div>
                                    <div class="col-sm-12">
                                        <div class="view-promos">
                                            <a  href="/ring-home-security">View Promos</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>

            </div>
            </div>

    </li>


    @if(!is_null($type_bundle))
    <li>
        <input type="radio" name="tabs" id="tab3" checked />
        <label for="tab3"
               role="tab"
               aria-selected="false"
               aria-controls="panel3"
               tabindex="0">Bundle</label>
        <div id="tab-content3"
             class="tab-content"
             role="tabpanel"
             aria-labelledby="specification"
             aria-hidden="true">

              <div class="row">
                @foreach ($providers_list as $list_content)
                @if($list_content->type =="2")
                <div class="col-sm-12" data-aos="fade-up">
                    <div class="provider-card-title" >
                        <h2>{{ $list_content->providerdetails->name }}</h2>
                    </div>
                    <div class="provider-card" >
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="responsive-img">
                                @if(!is_null($list_content->providerdetails->logo_file_name)) <img src="{{ asset('public/logos/'.$list_content->providerdetails->logo_file_name) }}" alt="{{ $list_content->providerdetails->name }}" title="{{ $list_content->providerdetails->name }}" class="img-fluid animated"/> @else
                                ---
                                @endif
                            </div>
                            </div>

                            <div class="col-md-3 col-sm-6 left-border">
                                <h4>Rating:</h4>
                                <div class="Stars" style="--rating: {{ $list_content->rating }};" aria-label="Rating of this product is {{ $list_content->rating }} out of 5."></div>
                                <h3>{!! $list_content->basic_information !!}</h3>
                            </div>
                            <div class="col-md-4 left-border">
                                @php
                                    $str = explode(",",$list_content->feature_list);
                                    $i = 0;
                                @endphp
                                <ul class="fa-ul" >
                                    @foreach ($str as $feature)
                                    <li><i class="fa-li fa fa-check"></i>{{ str_replace("[comma]",",",$feature) }}</li>

                                    @endforeach
                                </ul>

                            </div>
                            <div class="col-md-2 justify-content-center align-items-center" style="display: grid; position: relative;">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="phone-number">
                                            <a  href="tel:{{ $list_content->providerdetails->phone_bundles }}">{{ $list_content->providerdetails->phone_bundles }}</a>
                                        </div>

                                    </div>
                                    <div class="col-sm-12">
                                        <div class="view-promos">
                                            <a  href="{{ url($list_content->url) }}">View Promos</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>
                @endif

            @endforeach
            </div>
            </div>



    </li>
    @endif
    
     <li>
        <input type="radio" name="tabs" id="tab5" checked />
        <label for="tab5"
               role="tab"
               aria-selected="false"
               aria-controls="panel5"
               tabindex="0">Mobility</label>
        <div id="tab-content3"
             class="tab-content"
             role="tabpanel"
             aria-labelledby="specification"
             aria-hidden="true" >

              <div class="row" >

                <div class="col-sm-12" data-aos="fade-up">
                    <div class="provider-card-title" >
                        <h2>AT&T</h2>
                    </div>
                    <div class="provider-card" >
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="responsive-img">
                              <img src="/public/logos/ATT-Logo.png" alt="AT&T" title="AT&T" class="img-fluid animated"/>

                            </div>
                            </div>

                            <div class="col-md-3 col-sm-6 left-border">
                                <h4>Rating:</h4>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 4.5 out of 5."></div>
                                <h3></h3>
                            </div>
                            <div class="col-md-4 left-border">

                                <ul class="fa-ul" >
                                    <li><i class="fa-li fa fa-check"></i>5G access</li>
                                    <li><i class="fa-li fa fa-check"></i>Unlimited talk, text, data + 100GB of Premium Data</li>
                                    <li><i class="fa-li fa fa-check"></i>High-definition streaming</li>
                                </ul>
                            </div>
                            <div class="col-md-2 justify-content-center align-items-center" style="display: grid; position: relative;">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="phone-number">
                                            <a  href="tel:{{ Helper::providers_phone_type(7,'phone_mobility') }}">{{ Helper::providers_phone_type(7,'phone_mobility') }}</a>
                                        </div>

                                    </div>
                                    <div class="col-sm-12">
                                        <div class="view-promos">
                                            <a  href="/att/mobility-deals">View Promos</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>



                <div class="col-sm-12" data-aos="fade-up">
                    <div class="provider-card-title" >
                        <h2>Spectrum</h2>
                    </div>
                    <div class="provider-card" >
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="responsive-img">
                              <img src="/public/logos/spectrum-log.png" alt="Spectrum" title="Spectrum" class="img-fluid animated"/>

                            </div>
                            </div>

                            <div class="col-md-3 col-sm-6 left-border">
                                <h4>Rating:</h4>
                                <div class="Stars" style="--rating: 4.6;" aria-label="Rating of this product is 4.6 out of 5."></div>
                                <h3</h3>
                            </div>
                            <div class="col-md-4 left-border">

                                <ul class="fa-ul" >

                                    <li><i class="fa-li fa fa-check"></i>Unlimited data</li>
                                    <li><i class="fa-li fa fa-check"></i>More freedom to surf and stream</li>
                                    <li><i class="fa-li fa fa-check"></i>Available for 4G and select 5G-ready devices</li>

                                </ul>

                            </div>
                            <div class="col-md-2 justify-content-center align-items-center" style="display: grid; position: relative;">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="phone-number">
                                            <a  href="tel:{{ Helper::providers_phone_type(9,'phone_mobility') }}">{{ Helper::providers_phone_type(9,'phone_mobility') }}</a>
                                        </div>

                                    </div>
                                    <div class="col-sm-12">
                                        <div class="view-promos">
                                            <a  href="/spectrum/mobility-deals">View Promos</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>



                <div class="col-sm-12" data-aos="fade-up">
                    <div class="provider-card-title" >
                        <h2>Verizon</h2>
                    </div>
                    <div class="provider-card" >
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="responsive-img">
                              <img src="/public/logos/verizon-logo.png" alt="Verizon" title="Verizon" class="img-fluid animated"/>

                            </div>
                            </div>

                            <div class="col-md-3 col-sm-6 left-border">
                                <h4>Rating:</h4>
                                <div class="Stars" style="--rating: 4.4;" aria-label="Rating of this product is 4.4 out of 5."></div>
                                <h3</h3>
                            </div>
                            <div class="col-md-4 left-border">

                                <ul class="fa-ul" >

                                    <li><i class="fa-li fa fa-check"></i>Unlimited 4G LTE Data</li>
                                    <li><i class="fa-li fa fa-check"></i>Ulimited Mobile Hotspot</li>
                                    <li><i class="fa-li fa fa-check"></i>5G access included with a 5G phone</li>

                                </ul>

                            </div>
                            <div class="col-md-2 justify-content-center align-items-center" style="display: grid; position: relative;">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="phone-number">
                                            <a  href="tel:{{ Helper::providers_phone_type(4,'phone_mobility') }}">{{ Helper::providers_phone_type(4,'phone_mobility') }}</a>
                                        </div>

                                    </div>
                                    <div class="col-sm-12">
                                        <div class="view-promos">
                                            <a  href="/verizon/mobility-deals">View Promos</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>





                <div class="col-sm-12" data-aos="fade-up">
                    <div class="provider-card-title" >
                        <h2>Xfinity Mobility</h2>
                    </div>
                    <div class="provider-card" >
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="responsive-img">
                              <img src="/public/logos/xfinity-logo.png" alt="Xfinity Mobility" title="Xfinity Mobility" class="img-fluid animated"/>

                            </div>
                            </div>

                            <div class="col-md-3 col-sm-6 left-border">
                                <h4>Rating:</h4>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 4.5 out of 5."></div>
                                <h3</h3>
                            </div>
                            <div class="col-md-4 left-border">

                                <ul class="fa-ul" >

                                    <li><i class="fa-li fa fa-check"></i>Flat monthly price per line.</li>
                                    <li><i class="fa-li fa fa-check"></i>Standard quality resolution for video streaming.</li>
                                    <li><i class="fa-li fa fa-check"></i>HD Pass available for higher-quality cellular service in times with high network traffic.</li>

                                </ul>

                            </div>
                            <div class="col-md-2 justify-content-center align-items-center" style="display: grid; position: relative;">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="phone-number">
                                            <a  href="tel:{{ Helper::providers_phone_type(8,'phone_mobility') }}">{{ Helper::providers_phone_type(8,'phone_mobility') }}</a>
                                        </div>

                                    </div>
                                    <div class="col-sm-12">
                                        <div class="view-promos">
                                            <a  href="/xfinity/mobility-deals">View Promos</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>
                
                
                   <div class="col-sm-12" data-aos="fade-up">
                    <div class="provider-card-title" >
                        <h2>Sprint Mobility</h2>
                    </div>
                    <div class="provider-card" >
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="responsive-img">
                              <img src="/public/logos/sprint-logo.jpg" alt="Sprint Mobility" title="Sprint Mobility" class="img-fluid animated"/>

                            </div>
                            </div>

                            <div class="col-md-3 col-sm-6 left-border">
                                <h4>Rating:</h4>
                                <div class="Stars" style="--rating: 4.2;" aria-label="Rating of this product is 4.2 out of 5."></div>
                                <h3</h3>
                            </div>
                            <div class="col-md-4 left-border">

                                <ul class="fa-ul" >

                                    <li><i class="fa-li fa fa-check"></i>Get Unlimited data, talk and text nationwide.</li>
                                    <li><i class="fa-li fa fa-check"></i>Compatible with eligible 5G phones</li>
                                    <li><i class="fa-li fa fa-check"></i>DVD-quality SD Video Streaming up to 480p</li>

                                </ul>

                            </div>
                            <div class="col-md-2 justify-content-center align-items-center" style="display: grid; position: relative;">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="phone-number">
                                            <a  href="tel:{{ Helper::providers_phone_type(5,'phone_mobility') }}">{{ Helper::providers_phone_type(5,'phone_mobility') }}</a>
                                        </div>

                                    </div>
                                    <div class="col-sm-12">
                                        <div class="view-promos">
                                            <a  href="/sprint/mobility-deals">View Promos</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                
                
                <div class="col-sm-12" data-aos="fade-up">
                    <div class="provider-card-title" >
                        <h2>T Mobile Mobility</h2>
                    </div>
                    <div class="provider-card" >
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="responsive-img">
                              <img src="/public/logos/t-mobile-logo.png" alt="t-mobile" title="T Mobile Mobilit" class="img-fluid animated"/>

                            </div>
                            </div>

                            <div class="col-md-3 col-sm-6 left-border">
                                <h4>Rating:</h4>
                                <div class="Stars" style="--rating: 4.1;" aria-label="Rating of this product is 4.1 out of 5."></div>
                                <h3</h3>
                            </div>
                            <div class="col-md-4 left-border">

                                <ul class="fa-ul" >

                                    <li><i class="fa-li fa fa-check"></i>Unlimited talk, text, & smartphone data on our network.</li>
                                    <li><i class="fa-li fa fa-check"></i>Taxes & fees included.</li>
                                    <li><i class="fa-li fa fa-check"></i>Talk, text, & 5GB of 4G data in MX & CA.</li>

                                </ul>

                            </div>
                            <div class="col-md-2 justify-content-center align-items-center" style="display: grid; position: relative;">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="phone-number">
                                            <a  href="tel:{{ Helper::providers_phone_type(6,'phone_mobility') }}">{{ Helper::providers_phone_type(6,'phone_mobility') }}</a>
                                        </div>

                                    </div>
                                    <div class="col-sm-12">
                                        <div class="view-promos">
                                            <a  href="/tmobile/mobility-deals">View Promos</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>






            </div>
            </div>

    </li>

    @if(!is_null($type_internet))
    <li>
        <input type="radio" name="tabs" id="tab2" checked />
        <label for="tab2"
               role="tab"
               aria-selected="false"
               aria-controls="panel2"
               tabindex="0">Internet</label>
        <div id="tab-content3"
             class="tab-content"
             role="tabpanel"
             aria-labelledby="specification"
             aria-hidden="true"
             >

              <div class="row">
            @foreach ($providers_list as $list_content)
                @if($list_content->type =="1")
                <div class="col-sm-12" data-aos="fade-up">
                    <div class="provider-card-title" >
                        <h2>{{ $list_content->providerdetails->name }}</h2>
                    </div>
                    <div class="provider-card" >
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="responsive-img">
                                @if(!is_null($list_content->providerdetails->logo_file_name)) <img src="{{ asset('public/logos/'.$list_content->providerdetails->logo_file_name) }}" alt="{{ $list_content->providerdetails->name }}" title="{{ $list_content->providerdetails->name }}" class="img-fluid animated"/> @else
                                ---
                                @endif
                            </div>
                            </div>

                            <div class="col-md-3 col-sm-6 left-border">
                                <h4>Rating:</h4>
                                <div class="Stars" style="--rating: {{ $list_content->rating }};" aria-label="Rating of this product is {{ $list_content->rating }} out of 5."></div>
                                <h3>{!! $list_content->basic_information !!}</h3>
                            </div>
                            <div class="col-md-4 left-border">
                                @php
                                    $str = explode(",",$list_content->feature_list);
                                    $i = 0;
                                @endphp
                                <ul class="fa-ul" >
                                    @foreach ($str as $feature)
                                    <li><i class="fa-li fa fa-check"></i>{{ str_replace("[comma]",",",$feature) }}</li>

                                    @endforeach
                                </ul>

                            </div>
                            <div class="col-md-2 justify-content-center align-items-center" style="display: grid; position: relative;">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="phone-number">
                                            <a  href="tel:{{ $list_content->providerdetails->phone_internet }}">{{ $list_content->providerdetails->phone_internet }}</a>
                                        </div>

                                    </div>
                                    <div class="col-sm-12">
                                        <div class="view-promos">
                                            <a  href="{{ url($list_content->url) }}">View Promos</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>
                @endif

            @endforeach
            </div>
            </div>
    </li>
    @endif

    @if(!is_null($type_tv))
    <li>
        <input type="radio" name="tabs" id="tab1" checked />
        <label for="tab1"
               role="tab"
               aria-selected="false"
               aria-controls="panel1"
               tabindex="0">TV</label>
        <div id="tab-content3"
             class="tab-content"
             role="tabpanel"
             aria-labelledby="specification"
             aria-hidden="true" >

              <div class="row" >
                @foreach ($providers_list as $list_content)
                @if($list_content->type =="0")
                <div class="col-sm-12" data-aos="fade-up">
                    <div class="provider-card-title" >
                        <h2>{{ $list_content->providerdetails->name }}</h2>
                    </div>
                    <div class="provider-card" >
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="responsive-img">
                                @if(!is_null($list_content->providerdetails->logo_file_name)) <img src="{{ asset('public/logos/'.$list_content->providerdetails->logo_file_name) }}" alt="{{ $list_content->providerdetails->name }}" title="{{ $list_content->providerdetails->name }}" class="img-fluid animated"/> @else
                                ---
                                @endif
                            </div>
                            </div>

                            <div class="col-md-3 col-sm-6 left-border">
                                <h4>Rating:</h4>
                                <div class="Stars" style="--rating: {{ $list_content->rating }};" aria-label="Rating of this product is {{ $list_content->rating }} out of 5."></div>
                                <h3>{!! $list_content->basic_information !!}</h3>
                            </div>
                            <div class="col-md-4 left-border">
                                @php
                                    $str = explode(",",$list_content->feature_list);
                                    $i = 0;
                                @endphp
                                <ul class="fa-ul" >
                                    @foreach ($str as $feature)
                                    <li><i class="fa-li fa fa-check"></i>{{ str_replace("[comma]",",",$feature) }}</li>

                                    @endforeach
                                </ul>

                            </div>
                            <div class="col-md-2 justify-content-center align-items-center" style="display: grid; position: relative;">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="phone-number">
                                            <a  href="tel:{{ $list_content->providerdetails->phone_tv }}">{{ $list_content->providerdetails->phone_tv }}</a>
                                        </div>

                                    </div>
                                    <div class="col-sm-12">
                                        <div class="view-promos">
                                            <a  href="{{ url($list_content->url) }}">View Promos</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>
                @endif

            @endforeach
            </div>
            </div>

    </li>
    @endif
</ul>

<br style="clear: both;" />

@else
<h3>Opps!!! Looks like there are no available Provider near area.</h3>
<h4>If you need assistance give us a call: <a href="qwe">011011101</a></h4>
@endif

</div>
</section>

  @endsection


