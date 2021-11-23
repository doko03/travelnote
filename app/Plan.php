<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use SoftDeletes;
    protected $fillable = [
    'id',
    'subject',
    'date_time',
    'diary_id'
    ];
    public $timestamps = false;
    
    public function diary()
    {
        return $this->belongsTo('App\Diary');
    }
}
