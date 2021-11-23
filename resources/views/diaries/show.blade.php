@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
        <h1 class="destination">
            {{ $diary->place }}
        </h1>
        <h2 class="date">
             {{ $diary->date }}
        </h2>
        <div class="photo">
            
        </div>
        
        <div class="plan">
            @foreach ($plans as $plan)
                {{ $plan->subject }} 
                {{ $plan->date_time }} 
            @endforeach
        </div>
        <div class="diary">
            {{ $diary->title }}<br>
            {{ $diary->body }}
         
        </div>
        <div class="footer">
            <a href="/">[back]</a>
        </div>
            <button type="submit"><a href="/diaries/{{ $diary->id }}/edit">edit</a></button> 
        <form action="/diaries/{{ $diary->id }}" id="form_{{ $diary->id }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button> 
        </form>
@endsection
         