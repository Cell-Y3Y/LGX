<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    //
    public function menuclass(){
        return $this->hasMany('App\Menuclass');
    }
}
