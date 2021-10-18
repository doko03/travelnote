<?php

use App\Destination;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationController extends Controller
{
        public function index(Destination $destination)
    {
        return $destination->get();
    }
}
