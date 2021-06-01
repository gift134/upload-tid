<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Helper;

class OptimumController extends Controller
{
    //
    public function index(){   
		$param = Helper::seo('optimum_home_pg');
        return view('pages.frontend.optimum.index')->with('meta',$param);
        
    }

    public function tv_deals(){   
		$param = Helper::seo('optimum_tv_deals_pg');
        return view('pages.frontend.optimum.tv')->with('meta',$param);
        
    }

    public function internet_deals(){   
		$param = Helper::seo('optimum_internet_deals_pg');
        return view('pages.frontend.optimum.internet')->with('meta',$param);
        
    }

    public function bundle_deals(){   
		$param = Helper::seo('optimum_bundle_deals_pg');
        return view('pages.frontend.optimum.bundle')->with('meta',$param);
        
    }

}
