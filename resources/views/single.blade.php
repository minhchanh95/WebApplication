<!DOCTYPE HTML>
<html>
<head>
    <title>Coffee House A Cafe category Flat bootstrap Responsive Website Template|Home:: w3layouts</title>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="../css/dropdown.css" rel="stylesheet" type="text/css" media="all">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Custom Theme files -->
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    {{--<link href="{{asset('css/libs.css')}}" rel="stylesheet">--}}

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <meta name="keywords"
          content="Coffee-House Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic'
          rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="../js/move-top.js"></script>
    <script type="text/javascript" src="../js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!-- //end-smoth-scrolling -->
</head>
<body>
<script src="../js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!--banner start here-->

<div class="banner-bg">
    <div class="container">
        <div class="header-main">
            <div class="logo">
                <a href="{{url('/')}}"><img src="../images/logo.png" alt=""/></a>
            </div>
            <span class="menu"> <img src="../images/icon.png" alt=""/></span>
            <div class="clear"></div>
            <div class="navg">
                <ul class="res">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/about')}}">About</a></li>
                    <li><a href="{{url('/service')}}">Services</a></li>
                    <li><a href="{{url('/blog')}}">Blog</a></li>
                    <li><a href="{{url('/contact')}}">Contact</a></li>


                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/registerUser') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" onclick="myFunction()"  class="dropbtn" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-content" id="myDropdown"  role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>

                    @endif

                </ul>
                <script>
                    $("span.menu").click(function () {
                        $("ul.res").slideToggle("slow", function () {
                            // Animation complete.
                        });
                    });
                </script>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>


<div class="blog">

    <div class="container">
        <div class="blog-main">
            <div class="blog-top">
                <h3>BLOG</h3>
            </div>

            <div class="blog-bottom">
                <div class="col-md-8 blog-bottom-left">

                    <div class="blog-section">
                        <a href="single.html"><h3>{{$post->title}}</h3></a>
                        <h4>Posted by <a class="sup" href="#">{{$post->user->name}} </a>
                            on {{$post->created_at->diffForHumans()}}</h4>
                        <a href="single.html"><img height="500" src="{{$post->photo->file}}" alt=""/></a>
                        <p>{{$post->body}} </p>
                    </div>
                    <div class="blog-contact">
                        <div class="well">
                            <h4>Leave a Comment:</h4>

                            {!! Form::open(['method'=>'POST', 'action'=>'PostCommentsController@store']) !!}
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <input type="hidden" name="is_active" value="1">
                            <div class="form-group">
                                {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Submit comment', ['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div>
                        <!--banner Slider Ends Here -->
                        @if (Session::has('comment_message'))
                            <p class="bg-info">{{session('comment_message')}}</p>
                        @endif
                        @if (Session::has('reply_message'))
                            <p class="bg-info">{{session('reply_message')}}</p>
                        @endif
                    </div>
                    @if(count($comments) > 0)
                        @foreach ($comments as $comment)
                            {{--@if($comment->is_active == 1 && $comment->post_id == $post->id)--}}
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img width="64" class="media-object" src="{{$comment->photo}}" alt="">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">{{$comment->author}}
                                        <small>Posted {{$comment->created_at->diffForHumans()}}</small>
                                    </h4>
                                    {{$comment->body}}
                                    <div class="comment-reply-container">
                                        <button class="button toggle-reply btn btn-primary pull-right">Reply</button>
                                        <div class="comment-reply col-sm-9">
                                            {!! Form::open(['method'=>'POST', 'action'=>'CommentRepliesController@createReply']) !!}
                                            <input type="hidden" name="comment_id" value="{{$comment->id}}">
                                            <input type="hidden" name="is_active" value="1">
                                            <div class="form-group">
                                                {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3]) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::submit('Submit comment', ['class'=>'btn btn-primary']) !!}
                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>

                                    {{--<!-- Nested Comment -->--}}
                                    @if(count($comment->replies) > 0)
                                        @foreach ($comment->replies as $reply)
                                            @if($reply->is_active == 1)
                                                <div id="nested-comment" class="media">
                                                    <a class="pull-left" href="#">
                                                        <img width="64" class="media-object" src="{{$reply->photo}}"
                                                             alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">{{$reply->author}}
                                                            <small>
                                                                Posted {{$reply->created_at->diffForHumans()}}</small>
                                                        </h4>
                                                        {{$reply->body}}
                                                    </div>
                                                </div>
                                                <div class="comment-reply-container">
                                                    <button class="button toggle-reply btn btn-primary pull-right">
                                                        Reply
                                                    </button>
                                                    <div class="comment-reply col-sm-9">
                                                        {!! Form::open(['method'=>'POST', 'action'=>'CommentRepliesController@createReply']) !!}
                                                        <input type="hidden" name="comment_id" value="{{$comment->id}}">
                                                        <input type="hidden" name="is_active" value="1">
                                                        <div class="form-group">
                                                            {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3]) !!}
                                                        </div>
                                                        <div class="form-group">
                                                            {!! Form::submit('Submit comment', ['class'=>'btn btn-primary']) !!}
                                                        </div>
                                                        {!! Form::close() !!}
                                                    </div>
                                                </div>

                                        @endif

                                    @endforeach

                                @endif
                                <!-- End Nested Comment -->
                                </div>

                            </div>
                            {{--@endif--}}
                        @endforeach

                    @endif

                    <div class="clearfix"></div>

                </div>
                <div class="col-md-4 blog-bootom-right">
                    <h3> CATEGORIES</h3>
                    <ul class="blog-rig-list">
                        <li><a href="#">COFFEE</a></li>
                        <li><a href="#">COLD COFFEE</a></li>
                        <li><a href="#">HOT COFFEE</a></li>
                        <li><a href="#">BLACK COFFEE</a></li>
                        <li><a href="#">GREEN TEA</a></li>
                    </ul>
                    <h3>Archives</h3>
                    <ul class="popular-tag">
                        <li><a href="#">June 2014</a></li>
                        <li><a href="#">May 2014</a></li>
                        <li><a href="#">April 2014</a></li>
                        <li><a href="#">January 2014</a></li>
                        <li><a href="#">December 2013</a></li>
                    </ul>

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--single page end here-->
<!--footer start here-->
@include('layouts.footer')

</body>
<script>
    $(".comment-reply-container .toggle-reply").click(function () {

        $(this).next().slideToggle("slow");
    });
</script>
<script>
    /* When the user clicks on the button,
     toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>

</html>
