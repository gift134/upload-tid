<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Helper;

class DirectvController extends Controller
{
    //
    public function index(){   
		$param = Helper::seo('directv_home_pg');
        return view('pages.frontend.directv.index')->with('meta',$param);
        
    }

    public function tv_deals(){   
		$param = Helper::seo('directv_tv_deals_pg');
        return view('pages.frontend.directv.tv')->with('meta',$param);
        
    }

    public function internet_deals(){   
		$param = Helper::seo('directv_internet_deals_pg');
        return view('pages.frontend.directv.internet')->with('meta',$param);  
    }

    public function bundle_deals(){   
		$param = Helper::seo('directv_bundle_deals_pg');
        return view('pages.frontend.directv.bundle')->with('meta',$param);
        
    }

}
