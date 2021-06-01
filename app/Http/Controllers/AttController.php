<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Helper;

class AttController extends Controller
{
    //
    public function index(){
		$param = Helper::seo('att_home_pg');
        return view('pages.frontend.att.index')->with('meta',$param);

    }

    public function tv_deals(){
		$param = Helper::seo('att_tv_deals_pg');
        return view('pages.frontend.att.tv')->with('meta',$param);

    }

    public function internet_deals(){
		$param = Helper::seo('att_internet_deals_pg');
        return view('pages.frontend.att.internet')->with('meta',$param);

    }

    public function phone_deals(){
		$param = Helper::seo('att_phone_deals_pg');
        return view('pages.frontend.att.phone')->with('meta',$param);

    }

    public function bundle_deals(){
		$param = Helper::seo('att_bundle_deals_pg');
        return view('pages.frontend.att.bundle')->with('meta',$param);

    }

    public function mobility_deals(){
		$param = Helper::seo('att_mobility_deals_pg');
        return view('pages.frontend.att.mobility')->with('meta',$param);

    }


}
