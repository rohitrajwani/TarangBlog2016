
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
        
        <link rel="stylesheet" href="/css/admin_style.css">

        <title>Admin Portal | Blog-Tarang 2016</title>
    </head>
    
    <body>
        
        <nav class="row">
            <h4 class="brand-logo col s12 m3">Tarang 2016</h4>
        </nav>
        
        <div class="container row" style="margin-top:55px;padding:50px;">
            <h4 class="col s12 m6 offset-m3">Admin Login</h4>
            <form class="col s12" method="post" action="/admin/login">
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="input-field col s12 m4 offset-m4" style="margin-top:50px;margin-bottom:0px;">
                    <input id="name" name="name" type="text" required style="padding:5px;border:1px solid rgba(0,0,0,0.2);border-radius:2px">
                    <label for="name" style="padding:8px">Username</label>
                </div>
                <div class="input-field col s12 m4 offset-m4"  style="margin-top:20px;margin-bottom:50px;">
                    <input id="password" name="password" type="password" required  style="padding:5px;border:1px solid rgba(0,0,0,0.2);border-radius:2px">
                    <label for="password" style="padding:8px">Password</label>
                </div>
                <div class="submit_post col s12 m4 offset-m4">
                    <button class="col s10 offset-s1  btn waves-effect waves-light modal-trigger" type="submit">Login</button>
                </div>
            
            </form>
        </div>
        
        @if ($alert = Session::get('alert-failure'))
                    <div class="alert alert-warning">
                        <script>alert("{{$alert}}")</script>
                    </div>
        @endif
        
        <script src="/js/jquery-2.1.4.js"></script>
        <script src="/js/materialize.min.js"></script>
        
    </body>
    
</html>