<!doctype html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <link href="/font/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link rel="shortcut icon" href="/img/favicon.ico">

        <link href="/css/materialize.min.css" rel="stylesheet">
        <link href="/css/materialNote.css" rel="stylesheet">
        
        <link rel="stylesheet" href="/css/admin_style.css">

        <title>Edit Post | Blog-Tarang 2016</title>
    </head>
    
    <body>
        
        <nav class="row">
            <h4 class="brand-logo col s12 m3">Tarang 2016</h4>
            <ul class="right col s12 m3">
                <li class="col s6"><a href="/admin/add">Add New Post</a></li>
                <li class="col s6"><a href="/admin/edit">Edit Post</a></li>
            </ul>
        </nav>
        
        <div class="container row">
            <h4 class="col s12 m6 offset-m3">Edit Post</h4>
            <p class="col s12 m10 offset-m1" style="margin-bottom:20px;">Click on post heading to edit.</p>
            <div class="post-container col s12 m10 offset-m1">
                @foreach($posts as $post)
                <div class="post col s12">
                    <a href="../edit/{{$post->heading}}" class="col s12"><h3 class="col s12">{{$post->heading}}</h3></a>
                    <i class="fa fa-calendar col s12 m6"><span> {{$post->created_at}}</span></i>
                </div>
                @endforeach
            </div>
        </div>
        
        <script src="/js/jquery-2.1.4.js"></script>
        <script src="/js/materialize.min.js"></script>
    </body>
    
</html>