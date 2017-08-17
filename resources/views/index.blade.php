


<!doctype html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
        
        <link href="font/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link rel="shortcut icon" href="img/favicon.ico">

        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/style.css">
        

        <title>Blog | Tarang 2016</title>
    </head>
    
    <body>
        <div class="mask" style="margin:0">
            <header class="row">
                <nav class="col s12">
                    <ul class="col s12">
                        <li class="col s2 offset-m1"><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"><span> Facebook</span></i></a></li>
                        <li class="col s2"><a href="#"><i class="fa fa-youtube-square" aria-hidden="true"><span> Youtube</span></i></a></li>
                        <div class="logo-container col s4 m2"><a href="#"><div class="logo col s12"><img src="img/Tarang-logo-final.png"></div></a></div>
                        <li class="col s2"><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"><span> Twitter</span></i></a></li>
                        <li class="col s2"><a href="#"><i class="fa fa-instagram" aria-hidden="true"> <span> Instagram</span></i></a></li>
                    </ul>
                </nav>
                <h2 class="col s12 m8 offset-m2">Welcome to the official blog of</h2>
                <h1 class="col s12 m8 offset-m2">Tarang 2016</h1>
                <div class="col s4 offset-s4 m2 offset-m5 arrow"><a href="#link" class="col s12"><img src="img/Arrow-Down-icon.png"></a></div>
                <div class="col s12 m5 offset-m1"><a class="col s12"><i class="fa fa-copyright"> Copyright Tarang 2016</i></a></div>
                <div class="col s12 m5">Designed and Developed by<a href="https://www.facebook.com/rohit.rajwani.9" class="col s12"> Rohit Rajwani</a></div>

            </header>
        </div>
        <div style="background-color:rgba(255,255,255,0.4);margin-top:-20px;margin:bottom:-20px;padding-top:20px;padding-bottom:20px" id="link">
            <div class="container" id="container">
                <div class="container" style="width:90%">
                    @foreach($posts as $post)
                        <div class="article-container row">
                            <h2 class="col s12 m10 offset-m1"><a href="/post/{{$post->url}}">{{$post->heading}}</a></h2>
                            <div class="date col s12 m10 offset-m1"><i class="fa fa-calendar"> <span>{{date('d-m-Y',strtotime($post->created_at))}}</span></i></div>
                            <div class="col s12 m10 offset-m1">{!!html_entity_decode($post->body)!!}</div>
                            <footer class="col s12 m10 offset-m1"><i class="fa fa-comments"> <a href="{{$post->heading}}">Comments</a></i></footer>

                        </div>
                    @endforeach
                
                </div>
            </div>
        </div>
        
        <script src="js/jquery-2.1.4.js"></script>
        <script>
            /*Smooth Scroll*/
			$(function() {
				$('a[href*=#]:not([href=#])').click(function() {
					if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
						var target = $(this.hash);
						target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
						if (target.length) {
							$('html,body').animate({
								scrollTop: target.offset().top
							}, 1000);
							return false;
						}
					}
				});
			});
        
        </script>
    </body>
    
</html>