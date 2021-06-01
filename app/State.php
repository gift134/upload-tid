<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //

    public function statedata()
    {
        return $this->hasMany('App\StatePageData','state_abbr','abbr');
    }

     public function statecities()
    {
        return $this->hasMany('App\StateCity','state_abbr','abbr');
    }
}
