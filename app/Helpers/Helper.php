<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

use App\User as user;
use App\Cms as cms;
use App\Areaprovider;
use App\State;
use App\Provider;
// use App\Technolgy;
use App\Cmstext;


use App\Post;
// use App\Deal;
use App\Popularprovider;
use App\SeoMaster;
use SEO;

class Helper
{
    
    public static function page_number(){

        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        $url_components = parse_url($actual_link );

        if(array_key_exists('query', $url_components)){
            parse_str($url_components['query'], $params);

            return $params['page'];
        }
        return '';
    }

    public static function providers_phone_number(int $provider_id){
        $providers_number = Provider::select('phone')->where("id",$provider_id)->first();
        return $providers_number->phone;
    }
    
    
    public static function providers_phone_type(int $provider_id,$phone_type){
        // dd($provider_id.' ' .$phone_type);
        $providers_number = Provider::select($phone_type)->where("id",$provider_id)->first();
        return $providers_number->$phone_type;
    }
    
    public static function siteconfig(string $key)
    {
    	$sitearr = user::select($key)->where('id','=','1')->first();
        return $sitearr->$key;
    }

    public static function cmscontent(string $key)
    {
    	$cmsarr = cms::select('content')->where('page_name','=',$key)->first();
        return $cmsarr->content;
    }

    public static function cmstext(string $pagename, string $pagekey)
    {
        $cmsarr = Cmstext::select('page_text')->where('page_name','=',$pagename)->where('page_text_key','=',$pagekey)->first();

        return $cmsarr->page_text;
    }

    public static function splittext(string $str, int $no = 50) {

        $str = trim($str);

        $str_length = strlen($str);

        if ($str_length > $no) {
            $val = substr($str, 0, $no) . "...";
        } else {
            $val = $str;
        }

        // return str_limit($str,$no);
        return  $val;
    }

    public static function dashboard_count($type){

        // dd(Post::count());
            switch ($type) {
                // case 'technology':
                //     $data = Technolgy::count();
                //     break;
                case 'provider':
                    $data = Provider::where('status','Active')->count();
                    break;
                case 'blog':
                    $data = Post::count();
                    break;
                // case 'deal':
                //     $data = Deal::count();
                //     break;

            }

            return $data;
    }



    /* ----- used for seo ------- */



    public static function seo($page = null, $page_content1 = null, $page_content2=null,$page_content3=null){
        $seo = SeoMaster::select('title','metadesc','keyword')->where('page_name',$page)->first();
        $title_page;

        $meta_title =  $seo->title;
        $meta_desc = $seo->metadesc;
        $meta_keyword = $seo->keyword;

        if($page == 'search_result_pg'){
            $meta_title = $seo->title;
            $meta_desc = $seo->metadesc;
            $meta_keyword = $seo->keyword;
            $meta_title = str_replace("[cityname]",$page_content1 , $meta_title);
            $meta_title = str_replace("[statename]", $page_content2, $meta_title);
            $meta_title = str_replace("[zip_code]",$page_content3 , $meta_title);

            $meta_desc =  str_replace("[cityname]",$page_content1 , $meta_desc);
            $meta_desc =  str_replace("[statename]",$page_content2 , $meta_desc);
            $meta_desc =  str_replace("[zip_code]",$page_content3 , $meta_desc);

            $meta_keyword =  str_replace("[cityname]",$page_content1 , $meta_keyword);
            $meta_keyword =  str_replace("[statename]",$page_content2 , $meta_keyword);
            $meta_keyword =  str_replace("[zip_code]",$page_content3 , $meta_keyword);

        }
        
        if($page == 'state_city_pg'){
            $meta_title = $seo->title;
            $meta_desc = $seo->metadesc;
            $meta_keyword = $seo->keyword;
            $meta_title = str_replace("[statename]",$page_content1 , $meta_title);
            $meta_desc =  str_replace("[statename]",$page_content1 , $meta_desc);
            $meta_keyword =  str_replace("[statename]",$page_content1 , $meta_keyword);


        }

        if($page == 'blog_details_pg'){
            $meta_title =$page_content1;
            $meta_desc = $page_content2;
            $meta_keyword = $page_content3;
        }

        if($page == "blog_cat_pg" || $page == "blog_tag_pg"){
            $meta_title =$page_content1;
            $meta_desc = $page_content2;
            $meta_keyword = $page_content3;
        }
        
        if($page == "blog_pagination_pg"){
            $meta_title = str_replace("[page_number]",$page_content1 , $meta_title);
            $meta_desc =  str_replace("[page_number]",$page_content1 , $meta_desc);
        }
        
        $param = [
            'meta_title' => $meta_title,
            'meta_desc' => $meta_desc,
            'meta_keyword' => $meta_keyword
        ];


        return $param;

            // SEO::addMeta('title',$meta_title);
            // SEO::setDescription($meta_desc);
            // SEO::setKeywords($meta_keyword);
            // SEO::setPage_title($meta_title);
    }


}
