<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider_details extends Model
{
    protected $table = 'provider_technology_information';

    public function providerdetails()
    {
    	return $this->belongsTo('App\Provider','provider_id');
    }
}
