<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areaprovider extends Model
{
    //
    protected $table = 'area_providers1';

    public function areaproviders()
    {
    	return $this->belongsTo('App\Provider','provider_id')->select(array('id', 'name', 'slug','logo_file_name','phone_residential','phone_business','phone_mobile','priority'));
    }

}
