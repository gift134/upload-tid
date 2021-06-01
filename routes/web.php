<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/location', 'HomeFCController@banned_location')->name('banned_location');

Route::group(['middleware' => 'geochecker'], function(){

Route::get('/', 'HomeFCController@index');

Route::get('/2', 'HomeFCController@index2');

Route::get('/3', 'HomeFCController@index3');

Route::get('/4', 'HomeFCController@index4');

Route::get('/5', 'HomeFCController@index5');

Route::get('/6', 'HomeFCController@index6');

Route::get('/search', 'SearchController@search')->name('search');

Route::get('/providers/{state}/{city}/{zip_code}', 'SearchController@search_result')->name('search_result');

Route::get('/tools/home-alarm-filter', 'HomeFCController@home_alarm_filter');


Route::get('/spectrum', 'SpectrumController@index');

Route::get('/spectrum/tv-deals', 'SpectrumController@tv_deals');

Route::get('/spectrum/internet-deals', 'SpectrumController@internet_deals');

Route::get('/spectrum/phone-deals', 'SpectrumController@phone_deals');

Route::get('/spectrum/bundle-deals', 'SpectrumController@bundles_deals');

Route::get('/spectrum/mobility-deals', 'SpectrumController@mobility_deals');


Route::get('/xfinity', 'XfinityController@index');

Route::get('/xfinity/tv-deals', 'XfinityController@tv_deals');

Route::get('/xfinity/internet-deals', 'XfinityController@internet_deals');

Route::get('/xfinity/phone-deals', 'XfinityController@phone_deals');

Route::get('/xfinity/bundle-deals', 'XfinityController@bundle_deals');

Route::get('/xfinity/mobility-deals', 'XfinityController@mobility_deals');


Route::get('/frontier', 'FrontierController@index');

Route::get('/frontier/tv-deals', 'FrontierController@tv_deals');

Route::get('/frontier/internet-deals', 'FrontierController@internet_deals');

Route::get('/frontier/phone-deals', 'FrontierController@phone_deals');

Route::get('/frontier/bundle-deals', 'FrontierController@bundle_deals');


Route::get('/att', 'AttController@index');

Route::get('/att/tv-deals', 'AttController@tv_deals');

Route::get('/att/internet-deals', 'AttController@internet_deals');

Route::get('/att/phone-deals', 'AttController@phone_deals');

Route::get('/att/bundle-deals', 'AttController@bundle_deals');

Route::get('/att/mobility-deals', 'AttController@mobility_deals');


Route::get('/cableone', 'CableOneController@index');

Route::get('/cableone/tv-deals', 'CableOneController@tv_deals');

Route::get('/cableone/internet-deals', 'CableOneController@internet_deals');

Route::get('/cableone/phone-deals', 'CableOneController@phone_deals');

Route::get('/cableone/bundle-deals', 'CableOneController@bundle_deals');


Route::get('/optimum', 'OptimumController@index');

Route::get('/optimum/tv-deals', 'OptimumController@tv_deals');

Route::get('/optimum/internet-deals', 'OptimumController@internet_deals');

Route::get('/optimum/phone-deals', 'OptimumController@phone_deals');

Route::get('/optimum/bundle-deals', 'OptimumController@bundle_deals');


Route::get('/directv', 'DirectvController@index');

Route::get('/directv/tv-deals', 'DirectvController@tv_deals');

Route::get('/directv/internet-deals', 'DirectvController@internet_deals');

Route::get('/directv/bundle-deals', 'DirectvController@bundle_deals');


Route::get('/verizon', 'VerizonController@index');

Route::get('/verizon/tv-deals', 'VerizonController@tv_deals');

Route::get('/verizon/internet-deals', 'VerizonController@internet_deals');

Route::get('/verizon/bundle-deals', 'VerizonController@bundle_deals');

Route::get('/verizon/mobility-deals', 'VerizonController@mobility_deals');


Route::get('/dish', 'DishController@index');

Route::get('/dish/tv-deals', 'DishController@tv_deals');

Route::get('/dish/internet-deals', 'DishController@internet_deals');

Route::get('/dish/phone-deals', 'DishController@phone_deals');

Route::get('/dish/bundle-deals', 'DishController@bundle_deals');


Route::get('/cox', 'CoxController@index');

Route::get('/cox/tv-deals', 'CoxController@tv_deals');

Route::get('/cox/internet-deals', 'CoxController@internet_deals');

Route::get('/cox/phone-deals', 'CoxController@phone_deals');

Route::get('/cox/bundle-deals', 'CoxController@bundle_deals');


Route::get('/centurylink', 'CenturyLinkController@index');

Route::get('/centurylink/tv-deals', 'CenturyLinkController@tv_deals');

Route::get('/centurylink/internet-deals', 'CenturyLinkController@internet_deals');

Route::get('/centurylink/phone-deals', 'CenturyLinkController@phone_deals');

Route::get('/centurylink/bundle-deals', 'CenturyLinkController@bundle_deals');


Route::get('/rcn', 'RCNController@index');

Route::get('/rcn/tv-deals', 'RCNController@tv_deals');

Route::get('/rcn/internet-deals', 'RCNController@internet_deals');

Route::get('/rcn/phone-deals', 'RCNController@phone_deals');

Route::get('/rcn/bundle-deals', 'RCNController@bundle_deals');


Route::get('/viasat', 'ViasatController@index');

Route::get('/viasat/tv-deals', 'ViasatController@tv_deals');

Route::get('/viasat/internet-deals', 'ViasatController@internet_deals');

Route::get('/viasat/phone-deals', 'ViasatController@phone_deals');

Route::get('/viasat/bundle-deals', 'ViasatController@bundle_deals');


Route::get('/buckeyebroadband', 'BuckEyeBroadbandController@index');

Route::get('/buckeyebroadband/tv-deals', 'BuckEyeBroadbandController@tv_deals');

Route::get('/buckeyebroadband/internet-deals', 'BuckEyeBroadbandController@internet_deals');

Route::get('/buckeyebroadband/phone-deals', 'BuckEyeBroadbandController@phone_deals');

Route::get('/buckeyebroadband/bundle-deals', 'BuckEyeBroadbandController@bundle_deals');



Route::get('/sprint/mobility-deals', 'SprintController@index');


Route::get('/tmobile/mobility-deals', 'TMobileController@index');






//adt
Route::group(['prefix' => 'adt-home-security'], function(){

    Route::get('/', 'ADTController@index');

    Route::get('/adt-security-cameras', 'ADTController@adt_security_cameras');

    Route::get('/adt-emergency-alarm', 'ADTController@adt_emergency_alarm');

    Route::get('/adt-home-automation', 'ADTController@adt_home_automation');

    Route::get('/adt-security-system', 'ADTController@adt_security_system');

    Route::post('/contactus', 'ADTController@store')->name('quote-adt');

    });


    //vivint
Route::group(['prefix' => 'vivint-home-security'], function(){

    //vivint home page
    Route::get('/', 'VivintController@index');

    // products
    Route::get('/vivint-product-template', 'VivintController@vivint_template');

    Route::get('/vivint-doorbell-camera-pro', 'VivintController@vivint_doorbell_camera_pro');

    Route::get('/vivint-outdoor-camera-pro', 'VivintController@vivint_outdoor_camera_pro');

    Route::get('/vivint-ping-camera', 'VivintController@vivint_ping_camera');

    Route::get('/vivint-element-thermostat', 'VivintController@vivint_element_thermostat');

    Route::get('/vivint-playback-dvr', 'VivintController@vivint_playback_dvr');

    Route::get('/vivint-smart-lock', 'VivintController@vivint_smart_lock');

    Route::get('/vivint-247-monitoring', 'VivintController@vivint_247_monitoring');

    Route::get('/vivint-garage-door-controll', 'VivintController@vivint_garage_door_controll');

    //quote
    Route::get('/quote', 'VivintController@quote');

    Route::post('/contactus', 'VivintController@store')->name('quote-vivint');

    });

//simplisafe

Route::get('/simplisafe-home-security', 'SimpliSafeController@index');
Route::post('/simplisafe-home-security/contactus', 'SimpliSafeController@store')->name('quote-simplisafe');

//brinks
Route::get('/brinks-home-security', 'BrinksController@index');
Route::post('/brinks-home-security/contactus', 'BrinksController@store')->name('quote-brinks');

//ring
Route::get('/ring-home-security', 'RingController@index');
Route::post('/ring-home-security/contactus', 'RingController@store')->name('quote');

Route::get('/blog', 'BlogController@index')->name('blog');

Route::get('/blogdetails/{slug}', 'BlogController@details')->name('blogdetails');

Route::get('/tag/{slug}', 'BlogController@tag');

Route::get('/category/{slug}', 'BlogController@category');

Route::get('sitemap-blog.xml','SitemapController@index');

Route::get('/tag/{slug}', 'BlogController@tag');

Route::get('/category/{slug}', 'BlogController@category');


Route::post('/ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');

Route::get('/state/{state}','SearchController@state_city')->name('state-search');

});

Auth::routes();

// Route::get('admin/dashboard', 'HomeController@index')->name('dashboard')->middleware('is_admin');

Route::group(['prefix' => 'admin','middleware' => 'is_admin'], function()
{
     // only /admin/ routes
     Route::get('/dashboard', 'HomeController@index')->name('dashboard');

     Route::get('/change-password','HomeController@resetpassowrd');
     Route::post('/change-password','HomeController@changePassword')->name('changepassword');

     Route::get('/siteconfig','HomeController@siteconfig');
     Route::post('/siteconfig','HomeController@updatesiteconfig')->name('updateconfig');

     Route::post('/popularprovider','ProviderController@popularprovider')->name('popularprovider');

     Route::get('/states','ProviderController@states')->name('states');
     Route::get('/zips','ProviderController@zips')->name('zips');

     // Cms Routes
     Route::resource('cms','CmsController');

     Route::get('/dealpage','DealController@dealpg');
     Route::post('/dealpage','DealController@updatedealpg')->name('updatedealpg');


     Route::get('/sitecontent/{page}', 'SiteContent@sitecontent')
                     ->where(['page' => 'search|home|state|city|provider|deal|sources']);

     Route::post('/sitecontent/{ppage}','SiteContent@updatepage')
                     ->where(['ppage' => 'search|home|state|city|provider|deal|sources'])->name('updatepage');

     // below routes used for Blog section

     // Category Routes
     Route::resource('category','CategoryController');

     // Tag Routes
     Route::resource('tag','TagController');

     // Post Routes
     Route::resource('post','PostController');

     // Seo Routes
     Route::resource('seo','SeoController');
});

// Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');



