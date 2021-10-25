<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Travelnote</title>
    </head>
    <body>
        
        <form action="/posts" method="POST">
            @csrf
            <div class="destination">
                <h1>Destination</h1>
                <input type="text" name="post[place]" placeholder="" value="{{ old('post.place') }}"/>
                <p class="place__error" style="color:red">{{ $errors->first('post.place') }}</p>
            </div>
            <div class="photo">
                <h2>Photo</h2>
                <input type="file" name="image">
            </div>
            <div class="plan">
                <h2>Plan</h2>
                <textarea name="post[subject]" placeholder="">{{ old('post.subject') }}</textarea>
                <p class="subject__error" style="color:red">{{ $errors->first('post.subject') }}</p>
            </div>
            <div class="diary">
                <h2>Diary</h2>
                <input type="text" name="post[title]" placeholder="" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                <textarea name="post[body]" placeholder="">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>