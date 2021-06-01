<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cms;

use Helper;

class StaticmsController extends Controller
{
    //

    public function aboutus(Request $request){

    	Helper::seo('about_us_pg');
    	
    	$data = Cms::select('heading','content','image')->where('page_name','=','about_us_pg')->first();
    	
    	$title= "Cheap Internet Service Provider | About Us";
    	
    	return view('pages.frontend.cms.aboutus')->with('data',$data)->with('title', $title);
    }

    public function disclaimer(Request $request){

    	Helper::seo('disclaimer_pg');
    	
    	$data = Cms::select('heading','content','image')->where('page_name','=','disclaimer_pg')->first();
    	
    	$title= "Cheap Internet Service Provider | Disclaimer";
    	
    	return view('pages.frontend.cms.aboutus')->with('data',$data)->with('title', $title);
    }

    public function privacypolicy(Request $request){

    	Helper::seo('privacy_pg');
    	
    	$data = Cms::select('heading','content','image')->where('page_name','=','privacy_pg')->first();
    	
    	$title= "Cheap Internet Service Provider | Privacy Policy";
    	
    	return view('pages.frontend.cms.aboutus')->with('data',$data)->with('title', $title);
    }
}
