<?php

namespace App\Http\Controllers;

use App\Tag;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class TagController extends Controller
{
    //
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
    	$query = Tag::distinct();  

        if ($request->sortby) {    		
            $sortby = $request->sortby;
        }else{
        	$sortby = 30;
        }

        if ($request->seacrhby) {
            $query->where('name', 'like', '%' . $request->seacrhby . '%')
                    ->orWhere('slug', 'like', '%' . $request->seacrhby . '%');
        }
    	$categories = $query->orderBy('name', 'asc')->paginate($sortby);
    	return view('pages.backend.tag.taglist')->with('tagdata',$categories)->with('sortby',$sortby)->with('seacrhby',$request->seacrhby);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.tag.addtag');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        	$rules = array(                 
                'name' => 'required|max:500',
                'meta_title' => 'required|max:200',
                'meta_desc' => 'required|max:200',
                'meta_keyword' => 'required|max:200'                    
            );  

            $slug = Str::slug($request->name, '-');

            $is_slug_exist = Tag::where('slug',$slug)->count();

            if($is_slug_exist === 0){
            	$tag_slug = $slug;
            }else{
            	$tag_slug = $slug.'-'.rand(0,9999);
            }

            //dd($cat_slug);

            $validator = Validator::make($request->all(), $rules);       

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }


        $tag = new Tag;
        $tag->name = $request->name;
        $tag->meta_title = $request->meta_title;
        $tag->meta_desc = $request->meta_desc;
        $tag->meta_keyword = $request->meta_keyword;
        $tag->slug = $tag_slug;
        $tag->save();

        return redirect()->back()->with(["success" => "Record created successfully!"]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Tag::where('id',$id)->first();
        return view('pages.backend.tag.edittag')->with('tagdata',$category);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $rules = array(                 
                    'name' => 'required|max:500',
                    'meta_title' => 'required|max:200',
                    'meta_desc' => 'required|max:200',
                    'meta_keyword' => 'required|max:200'
            );  

        $validator = Validator::make($request->all(), $rules);       

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $tag = Tag::find($id);

        $slug = Str::slug($request->name, '-');        
        
        if($tag->slug != $slug){
        	$is_slug_exist = Tag::where('slug',$slug)->count();
        	if($is_slug_exist === 0){
            	$tag_slug = $slug;
            }else{
            	$tag_slug = $slug.'-'.rand(0,9999);
            }
        }else{
        	$tag_slug = $tag->slug;
        }

        $tag->name = $request->name;
        $tag->meta_title = $request->meta_title;
        $tag->meta_desc = $request->meta_desc;
        $tag->meta_keyword = $request->meta_keyword;
        $tag->slug = $tag_slug;
        $tag->save();

        return redirect()->back()->with(["success" => "Record updated successfully!"]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tag::where('id',$id)->delete();
        return redirect()->back()->with(["success" => "Record deleted successfully!"]);
    }
}
