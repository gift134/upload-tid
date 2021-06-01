<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Helper;

class XfinityController extends Controller
{
    //
    public function index(){
		$param = Helper::seo('xfinity_home_pg');
        return view('pages.frontend.xfinity.index')->with('meta',$param);
    }

    public function tv_deals(){
		$param = Helper::seo('xfinity_tv_deals_pg');
        return view('pages.frontend.xfinity.tv')->with('meta',$param);
    }

    public function internet_deals(){
		$param = Helper::seo('xfinity_internet_deals_pg');
        return view('pages.frontend.xfinity.internet')->with('meta',$param);
    }

    public function phone_deals(){
		$param = Helper::seo('xfinity_phone_deals_pg');
        return view('pages.frontend.xfinity.phone')->with('meta',$param);
    }

    public function bundle_deals(){
		$param = Helper::seo('xfinity_bundle_deals_pg');
        return view('pages.frontend.xfinity.bundle')->with('meta',$param);
    }

    public function mobility_deals(){
		$param = Helper::seo('xfinity_mobility_deals_pg');
        return view('pages.frontend.xfinity.mobility')->with('meta',$param);
    }

}
