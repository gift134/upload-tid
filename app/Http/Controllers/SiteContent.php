<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

use App\Cmstext;

class SiteContent extends Controller
{
    //

    public function sitecontent($page){
        $cms = Cmstext::select('page_text','page_text_key')->where('page_name','=',$page.'_pg')->get(); 
        return view('pages.backend.sitecontent.sitecontent')->with('cms', $cms)->with('pagename',$page);
    }

     public function updatepage(Request $request,$page){

        $input = Input::all();     



            
                foreach($input as $k => $v ){
                    Cmstext::where('page_name',$page.'_pg')->where('page_text_key',$k)
                                    ->update(['page_text' => $v]);                     
                }
                
                return redirect()->back()->with(["success" => "Record updated successfully!"]);  
    }

    
}
