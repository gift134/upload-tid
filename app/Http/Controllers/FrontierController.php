<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Helper;

class FrontierController extends Controller
{
    //
    public function index(){   
		$param = Helper::seo('fontier_home_pg');
        return view('pages.frontend.frontier.index')->with('meta',$param);
        
    }

    public function tv_deals(){   
		$param = Helper::seo('fontier_tv_deals_pg');
        return view('pages.frontend.frontier.tv')->with('meta',$param);
    }

    public function internet_deals(){   
		$param = Helper::seo('fontier_internet_deals_pg');
        return view('pages.frontend.frontier.internet')->with('meta',$param);
        
    }

    public function phone_deals(){   
		$param = Helper::seo('fontier_phone_deals_pg');
        return view('pages.frontend.frontier.phone')->with('meta',$param);
    }

    public function bundle_deals(){   
		$param = Helper::seo('fontier_bundle_deals_pg');
        return view('pages.frontend.frontier.bundle')->with('meta',$param);
    }

}
