<?php

use App\Diary;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiaryController extends Controller
{
        public function index(Diary $diary)
    {
        return $diary->get();
    }
}
