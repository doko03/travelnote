<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use SoftDeletes;
    protected $fillable = [
    'subject',
    'date_time',
    'diary_id'
    ];
    public $timestamps = false;
}
