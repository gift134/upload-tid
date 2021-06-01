<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Helper;

class ViasatController extends Controller
{
    //
    public function index(){   
		$param = Helper::seo('viasat_home_pg');
        return view('pages.frontend.viasat.index')->with('meta',$param);
        
    }

    public function tv_deals(){   
		$param = Helper::seo('viasat_tv_deals_pg');
        return view('pages.frontend.viasat.tv')->with('meta',$param);
        
    }

    public function internet_deals(){   
		$param = Helper::seo('viasat_internet_deals_pg');
        return view('pages.frontend.viasat.internet')->with('meta',$param);
        
    }

    public function phone_deals(){   
		$param = Helper::seo('viasat_phone_deals_pg');
        return view('pages.frontend.viasat.phone')->with('meta',$param);
        
    }

    public function bundle_deals(){   
		$param = Helper::seo('viasat_bundle_deals_pg');
        return view('pages.frontend.viasat.bundle')->with('meta',$param);
        
    }


}
