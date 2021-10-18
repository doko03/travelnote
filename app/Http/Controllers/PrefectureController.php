<?php

use App\Prefecture;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrefectureController extends Controller
{
        public function index(Prefecture $prefecture)
    {
        return $prefecture->get();
    }
}
