<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Helper;

class VerizonController extends Controller
{
    //
    public function index(){
		$param = Helper::seo('verizon_home_pg');
        return view('pages.frontend.verizon.index')->with('meta',$param);

    }

    public function tv_deals(){
		$param = Helper::seo('verizon_tv_deals_pg');
        return view('pages.frontend.verizon.tv')->with('meta',$param);

    }

    public function internet_deals(){
		$param = Helper::seo('verizon_internet_deals_pg');
        return view('pages.frontend.verizon.internet')->with('meta',$param);

    }

    public function phone_deals(){
		$param = Helper::seo('verizon_phone_deals_pg');
        return view('pages.frontend.verizon.phone')->with('meta',$param);

    }

    public function bundle_deals(){
		$param = Helper::seo('verizon_bundle_deals_pg');
        return view('pages.frontend.verizon.bundle')->with('meta',$param);

    }

    public function mobility_deals(){
		$param = Helper::seo('verizon_mobility_deals_pg');
        return view('pages.frontend.verizon.mobility')->with('meta',$param);
    }

}
