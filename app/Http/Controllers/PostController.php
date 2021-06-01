<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tag;
use App\Post;

use Image;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class PostController extends Controller
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $query = Post::distinct();  

        if ($request->sortby) {    		
            $sortby = $request->sortby;
        }else{
        	$sortby = 30;
        }

        if ($request->seacrhby) {
            $query->where('title', 'like', '%' . $request->seacrhby . '%')
                    ->orWhere('slug', 'like', '%' . $request->seacrhby . '%');
        }
    	$posts = $query->orderBy('created_at', 'desc')->paginate($sortby);
    	
    	return view('pages.backend.post.postlist')->with('postdata',$posts)->with('sortby',$sortby)->with('seacrhby',$request->seacrhby);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('pages.backend.post.addpost',compact('tags','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'subtitle' => 'required', 
            'keyword' => 'required',              
            'body' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tags' => 'required',
            'categories' => 'required',
            ]);
            
        if ($request->hasFile('image')) {
            $blogimg = Input::file('image'); 
            $imageName = time().'.'.$blogimg->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/thumb');

            $thumb_img = Image::make($blogimg->getRealPath())->resize(369, 164);
            $thumb_img->save($destinationPath.'/'.$imageName, 80);
            
            $destinationPath = public_path('/uploads/original');
            $blogimg->move($destinationPath, $imageName);
            
        }else{
        	$imageName = null;
        }


           $slug = Str::slug($request->title, '-');

            $is_slug_exist = Tag::where('slug',$slug)->count();

            if($is_slug_exist === 0){
            	$post_slug = $slug;
            }else{
            	$post_slug = $slug.'-'.rand(0,9999);
            }


        $post = new Post;
        $post->image = $imageName;
        $post->title = $request->title;
        $post->keyword = $request->keyword;
        $post->subtitle = $request->subtitle;
        $post->slug = $post_slug;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);

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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::with('tags','categories')->where('id',$id)->first();
        $tags = Tag::all();
        $categories = Category::all();    
       
        return view('pages.backend.post.editpost',compact('tags','categories','post'));
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
        $this->validate($request,[
            'title'=>'required',
            'keyword'=>'required',
            'subtitle' => 'required', 
            'permalink' => 'required',           
            'body' => 'required',
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

        $post = Post::find($id);

         if ($request->hasFile('image')) {
            //unlink image
            $db_blog_img = $post->image;
            if($db_blog_img !== null){
                unlink(public_path('uploads/original/'.$db_blog_img));
                unlink(public_path('uploads/thumb/'.$db_blog_img));
            }
           
            $blogimg = Input::file('image'); 
            $imageName = time().'.'.$blogimg->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/thumb');

            $thumb_img = Image::make($blogimg->getRealPath())->resize(369, 164);
            $thumb_img->save($destinationPath.'/'.$imageName, 80);
            
            $destinationPath = public_path('/uploads/original');
            $blogimg->move($destinationPath, $imageName);
        }else{
        	$imageName = $post->image; 
        }

        $slug = Str::slug($request->permalink, '-'); 

        $posted_slug = str_replace('/','',str_replace(url('/blogdetails'),'',$post->slug));       
        
        if($posted_slug != $slug){
        	$is_slug_exist = Post::where('slug',$slug)->count();
        	if($is_slug_exist === 0){
            	$post_slug = $slug;
            }else{
            	$post_slug = $slug.'-'.rand(0,9999);
            }
        }else{
        	$post_slug = $posted_slug;
        }



        $post->image = $imageName;
        $post->title = $request->title;
        $post->keyword = $request->keyword;
        $post->subtitle = $request->subtitle;
        $post->slug = $post_slug;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        $post->updated_at = date('Y-m-d G:i:s');
        $post->save();

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
        $post = Post::find($id);	 

        $file = $post->image;

        $path = storage_path('app/'.$file);
        

        $exists = file_exists($path) ? 1 : 0;
        
       
        if($file !== null && $exists === 1){
        	unlink($path);        	
        }    		

    	$post->delete();
         
         return redirect()->back()->with(["success" => "Record deleted successfully!"]);
    }
    
    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('images'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('/public/images/'.$fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
    
}
