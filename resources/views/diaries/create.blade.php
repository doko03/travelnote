@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
        <form action="/diaries" method="POST">
            @csrf
            <div class="destination">
                <h1>Destination</h1>
                <input type="text" name="diary[place]" placeholder="" value="{{ old('diary.place') }}"/>
                <p class="place__error" style="color:red">{{ $errors->first('diary.place') }}</p>
            </div>
            <div class="date">
                <input type="date" name="diary[date]">
            </div>
            <div class="photo">
                <h2>Photo</h2>
                <input type="file" name="image">
            </div>
            <div class="plan">
                <h2>Plan</h2>
                <textarea name="plan[subject]" placeholder="">{{ old('plan.subject') }}</textarea><br>
                <input type="datetime-local" name="plan[date_time]">
                <p class="subject__error" style="color:red">{{ $errors->first('plan.subject') }}</p>
            </div>
            <div class="diary">
                <h2>Diary</h2>
                <input type="text" name="diary[title]" placeholder="" value="{{ old('diary.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('diary.title') }}</p>
                <textarea name="diary[body]" placeholder="">{{ old('diary.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('diary.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">[back]</a>]</div>
@endsection