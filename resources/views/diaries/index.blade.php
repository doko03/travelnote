    <!DOCTYPE html>
       <meta charset="utf-8">
        <title>Travelnote</title>
        <!-- Fonts -->
        <link href="https:/ /fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

     
        
    </head>
    <body>
        <h1>Travelnote</h1>
        
        <div class="header">
            <h3>Login</h3>
            <h3>Sign up</h3>
            <img src="">
        </div>
        <div class="serach">
            <form action="user_list.php" method="post">
                <input type="text" name="user_name">
                <input type="submit">
            </form>
        </div>
        <h2 class='destination'>
        <a href="/posts/{{ $post->id }}">{{ $post->place }}</a>
        </h2>
        <a href='/diaries/create'>create</a>
    </body>

</html>