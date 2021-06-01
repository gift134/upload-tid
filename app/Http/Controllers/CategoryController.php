<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
    	$query = Category::distinct();  

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
    	return view('pages.backend.categories.categorylist')->with('catdata',$categories)->with('sortby',$sortby)->with('seacrhby',$request->seacrhby);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.categories.addcategory');
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

            $is_slug_exist = Category::where('slug',$slug)->count();

            if($is_slug_exist === 0){
            	$cat_slug = $slug;
            }else{
            	$cat_slug = $slug.'-'.rand(0,9999);
            }

            //dd($cat_slug);

            $validator = Validator::make($request->all(), $rules);       

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }


        $category = new Category;
        $category->name = $request->name;
        $category->meta_title = $request->meta_title;
        $category->meta_desc = $request->meta_desc;
        $category->meta_keyword = $request->meta_keyword;
        $category->slug = $cat_slug;
        $category->save();

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
        $category = Category::where('id',$id)->first();
        return view('pages.backend.categories.editcategory')->with('catdata',$category);
        
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

        $category = Category::find($id);

        $slug = Str::slug($request->name, '-');        
        
        if($category->slug != $slug){
        	$is_slug_exist = Category::where('slug',$slug)->count();
        	if($is_slug_exist === 0){
            	$cat_slug = $slug;
            }else{
            	$cat_slug = $slug.'-'.rand(0,9999);
            }
        }else{
        	$cat_slug = $category->slug;
        }

        $category->name = $request->name;
        $category->meta_title = $request->meta_title;
        $category->meta_desc = $request->meta_desc;
        $category->meta_keyword = $request->meta_keyword;
        $category->slug = $cat_slug;
        $category->save();

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
        Category::where('id',$id)->delete();
        return redirect()->back()->with(["success" => "Record deleted successfully!"]); ;
    }
}
