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
        public function show(Post $post)
    {
        return view('post/show')->with(['post' => $post]);
    }
        public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/post/' . $post->id);
    }
}
