<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function menuclass(){
        return $this->belongsTo('App\Menuclass');
    }

    public function articletype(){
        return $this->belongsTo('App\Articletype');
    }
}
