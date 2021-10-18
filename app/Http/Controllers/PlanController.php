<?php

use App\Plan;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanController extends Controller
{
        public function index(Plan $plan)
    {
        return $plan->get();
    }
}
