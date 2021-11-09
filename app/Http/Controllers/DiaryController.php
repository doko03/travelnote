<?php


namespace App\Http\Controllers;

use App\Diary;
use App\Plan;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function index(Diary $diary)
    {
        return view('diaries/index')->with(['diaries' => $diary->get()]);
    }
    public function create()
    {
        return view('diaries/create');
    }
    public function show(Diary $diary, Plan $plan)
    {
        $plans = $plan->where('diary_id', $diary->id)->get();
        return view('diaries/show')->with(['diary' => $diary, 'plans' => $plans]);
    }
    public function store(Request $request, Diary $diary, Plan $plan)
    {
        $input_diary = $request['diary'];
        $input_plan = $request['plan'];
        //dd($input_plan);
        $diary->fill($input_diary)->save();
        $input_plan["diary_id"] = $diary->id;
        $plan->fill($input_plan)->save();
        return redirect('/diaries/' . $diary->id);
    }
    /*public function edit()
    {
        
    }*/
}
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
class PrefectureController extends Controller
{
    public function index(Prefecture $prefecture)
    {
        return $prefecture->get();
    }
}
class DateController extends Controller
{
    public function index(Date $date)
    {
        return $date->get();
    }
}
