<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Zip;
use App\State;

use App\Post;

use App\Category;

use App\Tag;

use Helper;
use SEO;

class SitemapController extends Controller
{
    //
   public function index(){   
        
        $blogs = Post::select('slug','updated_at')->where('status','=','1')->orderBy('updated_at', 'desc')->get();
        
        $categories = Category::select('slug','updated_at')->orderBy('updated_at', 'desc')->get();
        
        $tags = Tag::select('slug','updated_at')->orderBy('updated_at', 'desc')->get();

    	return response()->view('pages.frontend.sitemap_generator.blog-sitemap', ['blogs' => $blogs, 'categories' => $categories, 'tags' => $tags ])->header('Content-Type', 'text/xml');
    }

}
