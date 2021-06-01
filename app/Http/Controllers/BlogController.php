<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Tag;
use App\Post;
use Helper;
class BlogController extends Controller
{



	public function index(Request $request){

		$blogs                  = Post::with('tags','categories')->where('status','=','1')->orderBy('updated_at', 'desc')->paginate(9);
		//blog page h1 title
		$blog_title             = "Read Our Blogs";

		if(Helper::page_number()==''){
		    $param = Helper::seo('blog_pg');
		}
		else{
		    $param = Helper::seo('blog_pagination_pg',Helper::page_number());
		}


		return view('pages.frontend.blog.bloglist')->with('blogdata',$blogs)->with('page_title',$blog_title)->with('meta',$param);
	}

	public function details(Request $request,$slug){

			$blogs                 = Post::with('tags','categories')->where('slug','=',$slug)->where('status','=','1')->first();

        	if(empty($blogs)){
        	    return response()->view('errors.404');
        	}
        	else{
			$categories            = $blogs->categories->modelKeys();
			$relatedPosts = Post::with('tags','categories')->whereHas('categories', function ($q) use ($categories) {
    				$q->whereIn('categories.id', $categories);
			})->where('id', '<>', $blogs->id)->take(5)->get();
			$blog_title = $blogs->title . " | TV And Internet Guides and Pricing";
			//excerpt blog body
// 			$content_remove_html   = strip_tags($blogs->body);
// 			$max_content           = substr($content_remove_html , 0, 155);

			$meta_desc             = $blogs->subtitle;
			$meta_keyword          = $blogs->keyword;


        	$param = Helper::seo('blog_details_pg',$blog_title, $meta_desc, $meta_keyword);
			return view('pages.frontend.blog.blogdetails')
			->with('blogdata',$blogs)
			->with('blog_title',$blog_title)
			->with('meta_desc', $meta_desc)
			->with('relatedPosts',$relatedPosts)->with('meta',$param);
        	}

	}

	public function tag(Request $request,$tagslug){


		$blogs = Post::with('tags','categories')->whereHas('tags', function ($query) use ($tagslug) {
        			$query->where('slug', $tagslug);
    			})->where('status','=','1')->orderBy('created_at', 'desc')->paginate(9);

        if($blogs->count()==0){
        	    return response()->view('errors.404');
        }
        else{

//         if(Helper::page_number()==''){
// 		    $tag                    = Tag::where('slug',$tagslug)->first();
// 		    $blog_title             = $tag->meta_title;
// 		    $meta_desc              = $tag->meta_desc;
// 		    $meta_keyword           = $tag->meta_keyword;
// 		    $page_number            = '';
// 		}
// 		else{
// 		    $tag                    = Tag::where('slug',$tagslug)->first();
// 		    $blog_title             = $tag->meta_title2;
// 		    $meta_desc              = $tag->meta_desc2;
// 		    $meta_keyword           = $tag->meta_keyword;
// 		    $page_number            = Helper::page_number();
// 		}

        $tag                    = Tag::where('slug',$tagslug)->first();
		$blog_title             = $tag->meta_title;
		$meta_desc              = $tag->meta_desc;
		$meta_keyword           = $tag->meta_keyword;
		$page_number            = '';

        $param = Helper::seo('blog_tag_pg',$blog_title, $meta_desc, $meta_keyword,$page_number);

    	return view('pages.frontend.blog.bloglist')->with('blogdata',$blogs)->with('page_title',$tag->name)->with('meta',$param);

        }
	}


	public function category(Request $request,$catslug){

		$blogs = Post::with('tags','categories')->whereHas('categories', function ($query) use ($catslug) {
        			$query->where('slug', $catslug);
				})->where('status','=','1')->orderBy('created_at', 'desc')->paginate(9);

		if($blogs->count()==0){
        	    return response()->view('errors.404');
        }
        else{

// 		$cat                    = Category::where('slug',$catslug)->first();
// 		$blog_title             = $cat->meta_title;
// 		$meta_desc              = $cat->meta_desc;
// 		$meta_keyword           = $cat->meta_keyword;

//         if(Helper::page_number()==''){
// 		    $cat                    = Category::where('slug',$catslug)->first();
// 		    $blog_title             = $cat->meta_title;
// 		    $meta_desc              = $cat->meta_desc;
// 		    $meta_keyword           = $cat->meta_keyword;
// 		    $page_number            = '';
//         }
// 		else{
// 		    $cat                    = Category::where('slug',$catslug)->first();
// 		    $blog_title             = $cat->meta_title2;
// 		    $meta_desc              = $cat->meta_desc2;
// 		    $meta_keyword           = $cat->meta_keyword;
// 		    $page_number            = Helper::page_number();


// 		}


        $cat                    = Category::where('slug',$catslug)->first();
		$blog_title             = $cat->meta_title;
		$meta_desc              = $cat->meta_desc;
		$meta_keyword           = $cat->meta_keyword;
		$page_number            = '';


		$param = Helper::seo('blog_cat_pg',$blog_title, $meta_desc, $meta_keyword,$page_number);
    	return view('pages.frontend.blog.bloglist')->with('blogdata',$blogs)->with('page_title',$cat->name)->with('meta',$param);

        }
	}

}
