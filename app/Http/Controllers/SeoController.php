<?php

namespace App\Http\Controllers;

use App\SeoMaster;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class SeoController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
    	$query = SeoMaster::distinct();  

        if ($request->sortby) {    		
            $sortby = $request->sortby;
        }else{
        	$sortby = 30;
        }

        if ($request->seacrhby) {
            $query->where('title', 'like', '%' . $request->seacrhby . '%')
                    ->orWhere('metadesc', 'like', '%' . $request->seacrhby . '%')
                    ->orWhere('keyword', 'like', '%' . $request->seacrhby . '%');
        }
    	$seodata = $query->orderBy('page_name', 'asc')->paginate($sortby);

    	return view('pages.backend.seo.seolist')->with('seodata',$seodata)->with('sortby',$sortby)->with('seacrhby',$request->seacrhby);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seodata = SeoMaster::find($id);        
        return view('pages.backend.seo.editseo')->with('seodata',$seodata);        
    }


    public function update(Request $request, $id){
    	$rules = array(  
            'title'     	=> 'required|max:255',
            'metadesc'     => 'required|max:500',
            'keyword'      	=> 'required|max:255'            
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) { 
        	return redirect()->back()->withErrors($validator)->withInput(); 
        }else{
            $seo = SeoMaster::find($id);          
        	$seo->title = $request->title;
            $seo->metadesc = $request->metadesc;
    		$seo->keyword = $request->keyword; 
    		$seo->save();  		 
            return redirect()->back()->with(["success" => "Record updated successfully!"])->withInput();   
        }
    }
}
