<!doctype html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
        
        <link href="/font/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link rel="shortcut icon" href="/img/favicon.ico">

        <link rel="stylesheet" href="/css/materialize.min.css">
        <link rel="stylesheet" href="/css/style_post.css">
        

        <title>Blog | Tarang 2016</title>
    </head>
    
    <body>
        <div class="row" style="background-color:rgba(255,255,255,0.4);margin-bottom:-30px;padding-bottom:30px;">
        
            <div class="post-container col s10 offset-s1 m7 offset-m1" id="container" style="margin-top:20px;">
                <div style="width:90%;margin:auto">
                    <div class="article-container row">
                        <h2 class="col s10 offset-s1"><a href="#">{{$post->heading}}</a></h2>
                        <div class="date col s10 offset-s1"><i class="fa fa-calendar"> <span>{{date('d-m-Y',strtotime($post->created_at))}}</span></i></div>
                        <div class="col s10 offset-s1">{!!html_entity_decode($post->body)!!}</div>

                        <div id="disqus_thread" class="col s10 offset-s1"></div> 
                        <script> /** * RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS. * LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables */ 
                         var disqus_config = function () { 
                             this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable 
                             this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable 
                         }; (function() { // DON'T EDIT BELOW THIS LINE 
                             var d = document, s = d.createElement('script'); 
                             s.src = '//tarang2016blog.disqus.com/embed.js'; 
                             s.setAttribute('data-timestamp', +new Date()); 
                             (d.head || d.body).appendChild(s); })(); 
                        </script> 
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
                    </div>

                </div>
            </div>
            <div class="mask post col s12 m3 offset-m9">
                <header class="row col s12">
                    <nav class="col s12">
                        <ul class="col s12">
                            <div class="logo-container col s10 offset-s1 m12"><a href="#"><div class="logo col s6 offset-s3 m12"><img src="/img/Tarang-logo-final.png"></div></a></div>
                            <h1 class="col s12">Tarang 2016</h1>
                            <li class="col s5 offset-s1 m12"><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"><span> Facebook</span></i></a></li>
                            <li class="col s5 m12"><a href="#"><i class="fa fa-youtube-square" aria-hidden="true"><span> Youtube</span></i></a></li>
                            <li class="col s5 offset-s1 m12"><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"><span> Twitter</span></i></a></li>
                            <li class="col s5 m12"><a href="#"><i class="fa fa-instagram" aria-hidden="true"> <span> Instagram</span></i></a></li>
                            <li class="col s5 m12"><a><i class="fa fa-copyright" aria-hidden="true" style="margin-top:50px;width:100%;text-align:center;font-size:0.75em"> <span style="font-size:1em"> Copyright Tarang 2016</span></i></a></li>
                        </ul>
                    </nav>

                </header>

            </div>
        </div>
    
        
        <script src="/js/jquery-2.1.4.js" type="text/javascript"></script>
        <script src="/js/materialize.min.js" type="text/javascript"></script>
        <script id="dsq-count-scr" src="//tarang2016blog.disqus.com/count.js" async></script>
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