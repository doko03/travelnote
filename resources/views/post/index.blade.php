<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Travelnote</title>
    </head>
    <body>
        
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h1>Title</h1>
                <input type="text" name="post[title]" placeholder="" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="photo">
                <h2>Photo</h2>
                <input type="file" name="image">
            </div>
            <div class="plan">
                <h2>Plan</h2>
                <textarea name="post[body]" placeholder="">{{ old('post.body') }}</textarea>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="diary">
                <h2>Diary</h2>
                <textarea name="post[body]" placeholder="">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>