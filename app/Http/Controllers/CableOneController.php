<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Helper;

class CableOneController extends Controller
{
    //
    public function index(){   
		$param = Helper::seo('cableone_home_pg');
        return view('pages.frontend.cableone.index')->with('meta',$param);
        
    }

    public function tv_deals(){   
		$param = Helper::seo('cableone_tv_deals_pg');
        return view('pages.frontend.cableone.tv')->with('meta',$param);
        
    }

    public function internet_deals(){   
		$param = Helper::seo('cableone_internet_deals_pg');
        return view('pages.frontend.cableone.internet')->with('meta',$param);
        
    }

    public function phone_deals(){   
		$param = Helper::seo('cableone_phone_deals_pg');
        return view('pages.frontend.cableone.phone')->with('meta',$param);
        
    }

    public function bundle_deals(){   
		$param = Helper::seo('cableone_bundle_deals_pg');
        return view('pages.frontend.cableone.bundle')->with('meta',$param);
        
    }


}
