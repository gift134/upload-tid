<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Helper;

class TMobileController extends Controller
{
    //
    public function index(){
		$param = Helper::seo('tmobile_home_pg');
        return view('pages.frontend.tmobile.index')->with('meta',$param);

    }


}
