@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
    <div class="content">
        <form action="/diaries/{{ $diary->id }}" method="POST">
          @csrf
          @method('PUT')
            <div class="content__destination">
              <h1>Destination</h1>
              <input type="text" name="diary[place]" value="{{ $diary->place}}"/>
            </div>
            <div class="content__date">
              <h2>Date</h2>
              <input type="date" name="diary[date]" value="{{ $diary->date }}"/>
            </div>
            <div class="content__photo">
              <h2>Photo</h2>
            </div>
            <div class="content__plan">
              <h2>Plan</h2>
              @foreach ($plans as $key => $plan)
                <input name="plan[{{$key}}][id]" value="{{ $plan->id }}" type="hidden"/>
                <textarea name="plan[{{$key}}][subject]">{{ $plan->subject }}</textarea>
                <input type="datetime-local" name="plan[{{$key}}][date_time]" value="{{ $plan->date_time }}"/>
              @endforeach
            </div>
            <div class="content__diary">
              <h2>Diary</h2>
              <input type="text" name="diary[title]" value="{{ $diary->title }}"/><br>
              <textarea name="diary[body]">{{ $diary->body }}</textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
    </div>
    <div class="footer">
            <a href="/">[back]</a>
  @endsection