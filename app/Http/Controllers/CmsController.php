<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Redirect;

use Session;

use App\Cms as CMS;

use Image;

class CmsController extends Controller
{
    //

    public function index()
    {
    	$cmsdata = CMS::orderBy('heading', 'asc')->paginate(10);
    	return view('pages.backend.cms.cmslist')->with('cmsdata',$cmsdata);
    }

    public function create()
    {    	  	    	
    	//return view('pages.dietadd');
    }

    public function store(){
    	
    }

    public function show($id){

    }

    public function edit($id){
    	$cmsdata = CMS::find($id);
    	if (is_null($cmsdata)) {        	
            Session::flash('error', 'Invalid request!');
            return Redirect::to('admin/cms');
        }

        return view('pages.backend.cms.cmsedit')->with('cmsdata',$cmsdata);
    }

    public function update(Request $request, $id){
    	$rules = array(  
            'page_name'     => 'required|max:100',
            'content'      	=> 'required',
            'image'         => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) { 
        	return Redirect::to('admin/cms/' . $id . '/edit')->withErrors($validator)->withInput(); 
        }else{
            $cms = CMS::find($id);
            if ($request->hasFile('image')) {
                 //unlink image
                $db_cms_img = $cms->image;
                if($db_cms_img !== null){
                    unlink(public_path('uploads/cms/original/'.$db_cms_img));
                    unlink(public_path('uploads/cms/thumb/'.$db_cms_img));
                }
           
                $cmsimg = Input::file('image'); 
                $imageName = time().'.'.$cmsimg->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/cms/thumb');

                $thumb_img = Image::make($cmsimg->getRealPath())->resize(270, 300);
                $thumb_img->save($destinationPath.'/'.$imageName, 80);
                
                $destinationPath = public_path('/uploads/cms/original');
                $cmsimg->move($destinationPath, $imageName);
            }else{
                $imageName = $cms->image;
            }
        	
        	$cms->heading = Input::get('page_name');
    		$cms->content = Input::get('content'); 
            $cms->image = $imageName;   		
    		$cms->save();  		 
            return redirect()->back()->with(["success" => "Record updated successfully!"])->withInput();   
		   
        }
    }

    public function destroy($id){
    	$cmsdata = CMS::find($id);

        if (is_null($cmsdata)) { 
        	return Redirect::to('admin/cms/')->withError('Invalid request!'); 
        }else{
        	CMS::destroy($id);        	
        	return Redirect::to('admin/cms/')->withSuccess('Record successfully deleted..!'); 
        }
    }
}
