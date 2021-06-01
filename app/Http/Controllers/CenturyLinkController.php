<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Helper;

class CenturyLinkController extends Controller
{
    //
    public function index(){   
		$param = Helper::seo('centurylink_home_pg');
        return view('pages.frontend.centurylink.index')->with('meta',$param);
        
    }

    public function tv_deals(){   
		$param = Helper::seo('centurylink_tv_deals_pg');
        return view('pages.frontend.centurylink.tv')->with('meta',$param);
        
    }

    public function internet_deals(){   
		$param = Helper::seo('centurylink_internet_deals_pg');
        return view('pages.frontend.centurylink.internet')->with('meta',$param);
        
    }

    public function phone_deals(){   
		$param = Helper::seo('centurylink_phone_deals_pg');
        return view('pages.frontend.centurylink.phone')->with('meta',$param);
        
    }

    public function bundle_deals(){   
		$param = Helper::seo('centurylink_bundle_deals_pg');
        return view('pages.frontend.centurylink.bundle')->with('meta',$param);
        
    }

}
