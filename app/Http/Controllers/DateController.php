<?php

use App\Date;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DateController extends Controller
{
        public function index(Date $date)
    {
        return $date->get();
    }
}
