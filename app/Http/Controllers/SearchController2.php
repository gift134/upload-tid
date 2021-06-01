<?php

namespace App\Http\Controllers;

ini_set('max_execution_time', 100);

use Illuminate\Http\Request;

use App\Provider_details;
use App\Areaprovider;
use App\Zip;
use App\State;
use App\StatePageData;
use App\StateCity;
use App\Provider;
use Helper;
use DB;


class SearchController extends Controller{



    public function search(Request $request){

		$states = State::select('abbr')->distinct()->orderBy('abbr','desc')->get();

		$zipinfo = Zip::with('state')->where('zip_code',$request->zip)->whereIn('state_abbr',$states)->first();

		if(!is_null($zipinfo)){

			$statename = str_replace(" ","-",$zipinfo->state->name);

			$cityname = str_replace(" ","-",$zipinfo->city);

			$param = [
                'state'=> $statename,
                'city' => $cityname,
                'zip_code'=> $request->zip
            ];

		return redirect()->route('search_result', $param);
        }
		else{
		    return view('pages.frontend.home.home');
        }
	}

    public function search_result(Request $request, $state= null,$city=null,$zip_code = null){

        $provider_list_by_zip = Areaprovider::select('provider_id')->where('zip_code',$zip_code)->get();

        $providers_list = Provider::select('id','name','logo_file_name','slug','phone')->wherein('id',$provider_list_by_zip)->where("status","Pending")->get();

        $providers_list_id = Provider::select('id')->wherein('id',$provider_list_by_zip)->where("status","Pending")->get();

        $provider_tech_info = Provider_details::select('provider_id','basic_information', 'type','rating','feature_list','url');

        $provider_tech_info2 = $provider_tech_info->with('providerdetails')->whereIn('provider_id',$providers_list_id)->get();

        $type = Provider_details::select('type')->with('providerdetails')->whereIn('provider_id',$providers_list_id);

        $type1 = Provider_details::select('type')->with('providerdetails')->whereIn('provider_id',$providers_list_id);

        $type2 = Provider_details::select('type')->with('providerdetails')->whereIn('provider_id',$providers_list_id);

        $type_tv = $type->where('type','0')->first();

        $type_internet = $type1->where('type','1')->first();

        $type_bundle = $type2->where('type','2')->first();

        return view('pages.frontend.home.search-result')
        ->with('state_name', $state)
        ->with('city_name', $city)
        ->with('zip_code', $zip_code)
        ->with("providers_list", $provider_tech_info2)
        ->with("type_tv",$type_tv)
        ->with("type_internet", $type_internet)
        ->with("type_bundle", $type_bundle);

    }


    public function state_city(Request $request, $state){

        $statename = str_replace('-', ' ', $state);



        $stateinfo = State::select('abbr')->where('name',$statename)->first();

        $stateabbr = $stateinfo->abbr;

        $zipinfo = Zip::select('zip_code')->where('state_abbr',$stateabbr)->first();

        $state_cities = Zip::select('zip_code', 'city','state_abbr')->where('state_abbr',$stateabbr)->orderBy('city','asc')->paginate(100);

        return view('pages.frontend.home.state-city')
        ->with('state_name', $statename)
        ->with("state_cities", $state_cities);
    }

}
