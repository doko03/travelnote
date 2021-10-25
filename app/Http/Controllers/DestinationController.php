<?php

use App\Destination;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*class DestinationController extends Controller
{
    public function index(Destination $destination)
    {
        return $destination->get();
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

