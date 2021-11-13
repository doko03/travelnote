<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
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
                {!! nl2br(e( $plan->subject )) !!} 
                {!! nl2br(e( $plan->date_time )) !!} 
            @endforeach
        </div>
        <div class="diary">
            {{ $diary->title }}<br>
            {{ $diary->body }}
         
        </div>
        <div class="footer">
            <a href="/">[back]</a>
        </div>
        <p class="edit">[<a href="/diaries/{{ $diary->id }}/edit">edit</a>]</p>
        <form action="/diaries/{{ $diary->id }}" id="form_{{ $diary->id }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button> 
        </form>
    </body>
</html>
         