<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Helper;

class BuckEyeBroadbandController extends Controller
{
    //
    public function index(){   
		$param = Helper::seo('buckeye_home_pg');
        return view('pages.frontend.buckeyebroadband.index')->with('meta',$param);
    }

    public function tv_deals(){   
		$param = Helper::seo('buckeye_tv_deals_pg');
        return view('pages.frontend.buckeyebroadband.tv')->with('meta',$param);
    }

    public function internet_deals(){   
		$param = Helper::seo('buckeye_internet_deals_pg');
        return view('pages.frontend.buckeyebroadband.internet')->with('meta',$param);
    }

    public function phone_deals(){   
		$param = Helper::seo('buckeye_phone_deals_pg');
        return view('pages.frontend.buckeyebroadband.phone')->with('meta',$param);
    }

    public function bundle_deals(){   
		$param = Helper::seo('buckeye_bundle_deals_pg');
        return view('pages.frontend.buckeyebroadband.bundle')->with('meta',$param);
    }


}
