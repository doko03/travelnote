<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Plan extends Model
{
    protected $fillable = [
    'subject',
    'date_time',
    'diary_id'
    ];
    public $timestamps = false;
}
