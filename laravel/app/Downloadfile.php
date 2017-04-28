<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Downloadfile extends Model
{
    //
    public function article(){
        return $this->belongsTo('App\Article');
    }

}
