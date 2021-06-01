<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Helper;

class CoxController extends Controller
{
    //
    public function index(){   
		$param = Helper::seo('cox_home_pg');
        return view('pages.frontend.cox.index')->with('meta',$param);
        
    }

    public function tv_deals(){   
		$param = Helper::seo('cox_tv_deals_pg');
        return view('pages.frontend.cox.tv')->with('meta',$param);
        
    }

    public function internet_deals(){   
		$param = Helper::seo('cox_internet_deals_pg');
        return view('pages.frontend.cox.internet')->with('meta',$param);
        
    }

    public function phone_deals(){   
		$param = Helper::seo('cox_phone_deals_pg');
        return view('pages.frontend.cox.phone')->with('meta',$param);
        
    }

    public function bundle_deals(){   
		$param = Helper::seo('cox_bundle_deals_pg');
        return view('pages.frontend.cox.bundle')->with('meta',$param);
        
    }

}
