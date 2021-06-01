<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Helper;

class RCNController extends Controller
{
    //
    public function index(){   
		$param = Helper::seo('rcn_home_pg');
        return view('pages.frontend.rcn.index')->with('meta',$param);
        
    }

    public function tv_deals(){   
		$param = Helper::seo('rcn_tv_deals_pg');
        return view('pages.frontend.rcn.tv')->with('meta',$param);
        
    }

    public function internet_deals(){   
		$param = Helper::seo('rcn_internet_deals_pg');
        return view('pages.frontend.rcn.internet')->with('meta',$param);
        
    }

    public function phone_deals(){   
		$param = Helper::seo('rcn_phone_deals_pg');
        return view('pages.frontend.rcn.phone')->with('meta',$param);
        
    }

    public function bundle_deals(){   
		$param = Helper::seo('rcn_bundle_deals_pg');
        return view('pages.frontend.rcn.bundle')->with('meta',$param);
        
    }


}
