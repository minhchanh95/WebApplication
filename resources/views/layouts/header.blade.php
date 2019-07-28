
<!DOCTYPE HTML>
<html>
<head>
    <title>Coffee House A Cafe category Flat bootstrap Responsive  Website Template|Home:: w3layouts</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/dropdown.css" rel="stylesheet" type="text/css" media="all">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
    </script>
    <meta name="keywords" content="Coffee-House Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- //end-smoth-scrolling -->
</head>
<body>
<script src="js/responsiveslides.min.js"></script>
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
                    <a href="{{url('/')}}"><img src="images/logo.png" alt=""/></a>
                </div>
                <span class="menu"> <img src="images/icon.png" alt=""/></span>
                <div class="clear"> </div>
                <div class="navg">
                    <ul class="res">
                        <li><a class="active" href="{{url('/')}}">Home</a></li>
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
                        $( "span.menu").click(function() {
                            $(  "ul.res" ).slideToggle("slow", function() {
                                // Animation complete.
                            });
                        });
                    </script>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <!--banner Slider Ends Here -->
