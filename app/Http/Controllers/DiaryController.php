<?php


namespace App\Http\Controllers;

use App\Diary;
use App\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DiaryController extends Controller
{
    public function index(Request $request, Diary $diary)
    {
        //クエリビルダによる検索機能の実装
        $keyword = $request->input('keyword');
        //dd($keyword);
        //クエリを組み立て
        $query = Diary::query();
 
        if (!empty($keyword)) {
            $query->where('place', 'LIKE', "%{$keyword}%");
            //dd($query->where('place', 'LIKE', "%{$keyword}%")->get());
        }
 
        $diaries = $query->get();
        //dd($diaries);
        return view('diaries/index', compact('keyword'))->with(['diaries' => $diaries]);
    }
    
    public function create()
    {
        return view('diaries/create');
    }
    
    public function show(Diary $diary, Plan $plans)
    {
        $plans = $diary->plans;
        return view('diaries/show')->with(['diary' => $diary, 'plans' => $plans]);
    }
    
    public function store(Request $request, Diary $diary, Plan $plans)
    {
        $input_diary = $request['diary'];
        $input_plan = $request['plan'];
        //dd($input_plan);
        $diary->fill($input_diary)->save();
        $input_plan["diary_id"] = $diary->id;
        $plans->fill($input_plan)->save();
        return redirect('/diaries/' . $diary->id);
    }
    
    public function edit(Diary $diary, Plan $plans)
    {
        $plans = $diary->plans;
        
        foreach($plans as $plan){ 
            $plan->date_time = Carbon::parse($plan->date_time)->format('Y-m-d\TH:i');
        }
        return view('diaries/edit')->with(['diary' => $diary, 'plans' => $plans]);
        
    }
    
    public function update(Request $request, Diary $diary, Plan $plans)
    {
        $input_diary = $request['diary'];
        $input_plans = $request->plan;
        
        $diary->fill($input_diary)->save();
        
        foreach($input_plans as $input) {
            
            $plan = $plans->find($input['id']);
            $plan->fill($input)->save();
            
        }
        
        return redirect('/diaries/' . $diary->id);
    }
    
    public function delete(Diary $diary, Plan $plans)
    {
        $diary->delete();
        $plans = $plans->where('diary_id', $diary->id);
        
        $plans->delete();
         
        return redirect('/');
    }
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