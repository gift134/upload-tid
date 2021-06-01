<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Helper;

class SprintController extends Controller
{
    //
    public function index(){
		$param = Helper::seo('sprint_home_pg');
        return view('pages.frontend.sprint.index')->with('meta',$param);
    }


}
