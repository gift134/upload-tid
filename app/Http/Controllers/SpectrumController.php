<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

use Helper;

class SpectrumController extends Controller
{
    //
    public function index(Request $request){
		$param = Helper::seo('spectrum_home_pg');
    	return view('pages.frontend.spectrum.index')->with('meta',$param);

    }


    public function tv_deals(){
        $param = Helper::seo('spectrum_tv_deals_pg');
        return view('pages.frontend.spectrum.tv')->with('meta',$param);

    }

    public function internet_deals(){
        $param = Helper::seo('spectrum_internet_deals_pg');
        return view('pages.frontend.spectrum.internet')->with('meta',$param);

    }

    public function phone_deals(){
        $param = Helper::seo('spectrum_phone_deals_pg');
        return view('pages.frontend.spectrum.phone')->with('meta',$param);

    }

    public function bundles_deals(){
        $param = Helper::seo('spectrum_bundle_deals_pg');
        return view('pages.frontend.spectrum.bundle')->with('meta',$param);

    }

    public function mobility_deals(){
        $param = Helper::seo('spectrum_mobility_deals_pg');
        return view('pages.frontend.spectrum.mobility')->with('meta',$param);

    }



}
