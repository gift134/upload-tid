<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Helper;

class DishController extends Controller
{
    //
    public function index(){   
		$param = Helper::seo('dish_home_pg');
        return view('pages.frontend.dish.index')->with('meta',$param);
        
    }

    public function tv_deals(){   
		$param = Helper::seo('dish_tv_deals_pg');
        return view('pages.frontend.dish.tv')->with('meta',$param);
        
    }

    public function internet_deals(){   
		$param = Helper::seo('dish_internet_deals_pg');
        return view('pages.frontend.dish.internet')->with('meta',$param);
        
    }

    public function phone_deals(){   
		$param = Helper::seo('dish_phone_deals_pg');
        return view('pages.frontend.dish.phone')->with('meta',$param);
        
    }

    public function bundle_deals(){   
		$param = Helper::seo('dish_bundle_deals_pg');
        return view('pages.frontend.dish.bundle')->with('meta',$param);
        
    }


}
