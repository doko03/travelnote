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
    </body>
</html>
         