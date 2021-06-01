<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Zip;
use App\State;

use Helper;

class HomeFCController extends Controller
{
    //
    public function index(Request $request){
		$param = Helper::seo('home_pg');
    	return view('pages.frontend.home.home')->with('meta',$param);
	}

    public function index2(Request $request){
		$param = Helper::seo('home_pg');
    	return view('pages.frontend.home.home2')->with('meta',$param);
	}

    public function index3(Request $request){
		$param = Helper::seo('home_pg');
    	return view('pages.frontend.home.home3')->with('meta',$param);
	}

    public function index4(Request $request){
		$param = Helper::seo('home_pg');
    	return view('pages.frontend.home.home4')->with('meta',$param);
	}

    public function index5(Request $request){
		$param = Helper::seo('home_pg');
    	return view('pages.frontend.home.home5')->with('meta',$param);
	}

    public function index6(Request $request){
		$param = Helper::seo('home_pg');
    	return view('pages.frontend.home.home6')->with('meta',$param);
	}

	public function search(Request $request){
		$states = State::select('abbr')->distinct()->orderBy('abbr','desc')->get();

		// $zip = Zip::with('state')->whereIn('state_abbr',$states)->orderBy('state_abbr','asc')->get();

		$zipinfo = Zip::with('state')->where('zip_code',$request->zip)->whereIn('state_abbr',$states)->first();

		if(!is_null($zipinfo)){

			$statename = str_replace(" ","-",$zipinfo->state->name);

			$cityname = str_replace(" ","-",$zipinfo->city);

			$param = [
                'state'=> $statename,
                'city' => $cityname,
                'zip_code'=> $request->zip
            ];

		return redirect()->route('search_result', $param);
		}
		else{
		 return view('pages.frontend.home.index');
		}
	}

	public function home_alarm_filter(){
		return view('pages.frontend.tools.home-alarm-filter');
	}

	public function search_result(Request $request){

		$states = State::select('abbr')->distinct()->orderBy('abbr','desc')->get();

		$zipinfo = Zip::with('state')->where('zip_code',$request->zip)->whereIn('state_abbr',$states)->first();



		return view('pages.frontend.home.search-result')
		->with('statename',$request->state)
		->with('cityname',$request->city)
		->with('zip_code',$request->zip_code);
	}


    public function store(Request $request){
	    	$rules = array(
	            'name' => 'required|max:255',
	            'email' => 'required|email',
	            'service' => 'required|min:1',
	            'provider' => 'required|max:500',
	            'pay' => 'required|regex:/^\d*(\.\d{1,2})?$/',
	        );
	        $validator = Validator::make($request->all(), $rules);

	        if ($validator->fails()) {
	            $data = ['result'=>false,'msg'=>$validator->messages()->first()];
	        }else{
	        	$service = implode(',', $request->service);

	        	// send mail

	        	Mail::send('email.survey', ['name' => $request->name, 'service' => $service, 'pay' => $request->pay, 'phone'=> $request->phone,'provider'=> $request->provider] , function ($message) use ($request) {

                   $message->to($request->email, $request->name);
                   $message->cc('jnamarketingspecialist@gmail.com');
                   $message->subject('Promo Code form Cheap Internet');
                   $message->from('jna.mgmt@gmail.com', 'Cheap Internet');

            	});
            	    // mail to admin
            		Mail::send('email.surveyadmin', ['name' => $request->name,'email' => $request->email, 'service' => $service, 'pay' => $request->pay, 'phone'=> $request->phone,'provider'=> $request->provider] , function ($message) use ($request) {

                   $message->to('jna.mgmt@gmail.com', 'Cheap Internet');
                   $message->cc('jnamarketingspecialist@gmail.com');
                   $message->subject('Promo Code form Cheap Internet');
                   $message->from($request->email, $request->name);

            	});

            	$data = ['result'=>true,'msg'=>'Thanks for your feedback'];
	        }
         	return response()->json($data);
	 }

	 public function banned_location(){
	     return view('pages.frontend.home.banned-location');
	 }

}
