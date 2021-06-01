<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    //

    protected $table = 'providers1';

    function providerstate(){
    	return $this->belongsTo('App\State','states');
    }

    public function availablestate()
    {
        return $this->hasMany('App\State','states');
    }

     public function plan()
    {
        return $this->hasMany('App\Providerplan');
    }

    public function area()
    {
        return $this->hasMany('App\Areaprovider');
    }

    public function details()
    {
        return $this->hasMany('App\Provider_details');
    }


}
