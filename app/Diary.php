<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diary extends Model
{
    use SoftDeletes;
    protected $fillable = [
    'title',
    'body',
    'place',
    'date'
    ];
    
    public function plans()   
    {
        return $this->hasMany('App\Plan');  
    }
    
}
