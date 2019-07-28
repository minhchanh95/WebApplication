<!DOCTYPE html>
<html lang="en">
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

</head>
<body>

<div class="banner-bg">
    <div class="container">
        <div class="header-main">
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" alt=""/></a>
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
<br><br>

@yield('content')
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
<!--footer start here-->
<div class="footer">
    <div class="footer-main">
        <div class="container">
            <div class="footer-top">
                <div class="ftr-img"> <img src="images/ftr-contact.png" alt=""/> </div>
                <div class="sub">
                    <input type="text" value="Enter email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter email';}"/>
                    <input type="submit" value="Submit">
                </div>
                <div class="clearfix"> </div>
                <div class="para">
                    <p>Subscribe for New Letter</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="col-md-4 ftr-bottom bgimg-top">
                <h3>Follow Us Here</h3>
                <ul class="imagesprite">
                    <li><a class="g" href="#"> </a></li>
                    <li><a class="fa" href="#"> </a></li>
                    <li><a class="tw" href="#"> </a></li>
                    <li><a class="p" href="#"> </a></li>
                    <li><a class="y" href="#"> </a></li>
                </ul>
                <h4>Mail us On : <a href="mailto:example@email.com">123example@email.com</a> </h4>
            </div>
            <div class="col-md-4 ftr-bottom">
                <p>Lipsum Street, Cape town, New york.</p>
                <ul class="ftr-navg">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="service.html">Services</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4 ftr-bottom">
                <p>Call Us:-  10 000 00 0000</p>
                <p>Design By <a href="http://w3layouts.com/">W3 layouts</a></p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"> </div>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
</html>
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
