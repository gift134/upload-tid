<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zip extends Model
{
    //
    protected $table = 'zip_codes';

    public function state()
    {
    	return $this->belongsTo('App\State','state_abbr','abbr');
    }
}
