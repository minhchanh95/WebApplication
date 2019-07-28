<!DOCTYPE HTML>
<html>
<head>
    <title>Coffee House A Cafe category Flat bootstrap Responsive Website Template|Home:: w3layouts</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/dropdown.css" rel="stylesheet" type="text/css" media="all">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Custom Theme files -->
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
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>


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
<div class="banner">
    <div class="banner-bg">
        <div class="container">
            <div class="header-main">
                <div class="logo">
                    <a href="{{url('/')}}"><img src="images/logo.png" alt=""/></a>
                </div>
                <span class="menu"> <img src="images/icon.png" alt=""/></span>
                <div class="clear"></div>
                <div class="navg">
                    <ul class="res">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/about')}}">About</a></li>
                        <li><a href="{{url('/service')}}">Services</a></li>
                        <li><a href="{{url('/blog')}}">Blog</a></li>
                        <li><a href="{{url('/contact')}}">Contact</a></li>

                        <!-- Authentication Links -->
                    {{--@if (Auth::guest())--}}
                    {{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
                    {{--<li><a href="{{ url('/registerUser') }}">Register</a></li>--}}
                    {{--@else--}}
                    {{--<li >--}}
                    {{--<a>--}}
                    {{--{{ Auth::user()->name }} </span>--}}
                    {{--</a>--}}

                    {{--</li>--}}
                    {{--<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>--}}


                    {{--@endif--}}
                    <!-- Right Side Of Navbar -->

                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/registerUser') }}">Register</a></li>

                        @else
                            <li class="dropdown">
                                <a href="#" onclick="myFunction()" class="dropbtn" data-toggle="dropdown" role="button"
                                   aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-content" id="myDropdown" role="menu">
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
                                    </li>
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
    <!-- Slideshow 4 -->
    <div id="top" class="callbacks_container">
        <ul class="rslides" id="slider4">
            <li>
                <div class="banner-main">
                    <div class="banner-contant">
                        <h3>Coffee Makes Good Day</h3>
                        <P>Aliquam erat volutpat. Suspendisse congue massa quisenim lectus tempor.<br> Duis sit amet
                            efficitur and web page editors now use Lorem </P>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-main-two">
                    <div class="banner-contant">
                        <h3>Day With Start Good Coffee</h3>
                        <P>as opposed to using 'Content here, content here', making it look like readable English.<br>
                            Many desktop publishing packages and web page editors now use Lorem </P>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-main-three">
                    <div class="banner-contant">
                        <h3>Coffee House</h3>
                        <P>as opposed to using 'Content here, content here', making it look like readable English.<br>
                            Many desktop publishing packages and web page editors now use Lorem </P>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="clearfix"></div>
    <!--banner Slider Ends Here -->
</div>
<!--banner end here-->
<!--cafe start here-->
<div class="coff">
    <div class="container">
        <div class="coff-main">
            <div class="col-md-4 coff-top-grid1">
                <div class="coff-top-gridmater">
                    <p>01</p>
                    <h3>Cream Coffee</h3>
                </div>
            </div>
            <div class="col-md-4 coff-top-grid2">
                <div class="coff-top-gridmater">
                    <p>02</p>
                    <h3>Cappuccino</h3>
                </div>
            </div>
            <div class="col-md-4 coff-top-grid3 black">
                <div class="coff-top-gridmater">
                    <p>03</p>
                    <h3>Black Coffee</h3>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--cafe end here-->
<!--cafe info start here-->
<div class="cafe-info">
    <div class="container">
        <div class="cafeinfo-main">
            <div class="col-md-4 coff-middle-left">
                <img src="images/lv-cup.jpg" alt=""/>
                <div class="coff-mdleft-matter">
                    <h3>randomised words<br> which don't look<br>even slightly</h3>
                    <div class="coff-bwn">
                        <a href="#"> GO-ON</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-8 coff-middle-right">
                <div class="coff-middle-top">
                    <h3>Our Specials</h3>
                </div>
                <div class="coff-middle-grids-main">
                    <div class="coff-middle-grid">
                        <div class="coff-icons"><img src="images/cafe-machion.png" alt=""/></div>
                        <div class="middle-right-text">
                            <h4>Many desktop publishing packages</h4>
                            <p>Aliquam erat volutpat. Suspendisse congue massa quisenim sollicitudin, in pharetra lectus
                                tempor. Duis sit amet efficitur mi. </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="coff-middle-grid">
                        <div class="coff-icons"><img src="images/dram.png" alt=""/></div>
                        <div class="middle-right-text">
                            <h4>Paper desktop publishing packages</h4>
                            <p>Aliquam erat volutpat. Suspendisse congue massa quisenim sollicitudin, in pharetra lectus
                                tempor.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="coff-middle-grid">
                        <div class="coff-icons"><img src="images/coff-key.png" alt=""/></div>
                        <div class="middle-right-text">
                            <h4>Nthing desktop publishing packages</h4>
                            <p>Aliquam erat volutpat. Suspendisse congue massa quis</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--cafe info end here-->
<!--grines start here-->
<div class="grines">
    <div class="container">
        <div class="grines-main">
            <div class="grines-grid1 bg-one">
                <div class="grines-text">
                    <div class="coffee"><img src="images/food.png" alt=""/></div>
                    <h3>Tasty Food</h3>
                </div>
            </div>
            <div class="grines-grid1 bg-two">
                <div class="grines-text">
                    <div class="coffee cof-smal"><img src="images/gd2.png" alt=""/></div>
                    <h3>Coffee</h3>
                </div>
            </div>
            <div class="grines-grid1 bg-three">
                <div class="grines-tetx">
                    <div class="coffee"><img src="images/gam.png" alt=""/></div>
                    <h3>Games</h3>
                </div>
            </div>
            <div class="grines-grid1 bg-four">
                <div class="grines-text">
                    <div class="coffee"><img src="images/mus.png" alt=""/></div>
                    <h3>Music</h3>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--grines end here-->
<!--chief grid start here-->
<div class="chief-banner">
    <div class="container">
        <div class="chief-banner-main">
            <h3>Our Team</h3>
            <div class="chief-grid">
                <div class="col-md-4 chies">
                    <img src="images/cf1.png" alt=""/>
                    <h4>John Spall</h4>
                </div>
                <div class="col-md-4 chies">
                    <img src="images/cf2.png" alt=""/>
                    <h4>Olievia smi</h4>
                </div>
                <div class="col-md-4 chies">
                    <img src="images/cf3.png" alt=""/>
                    <h4>Emma laha</h4>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--chief grid end here-->
<!--map start here-->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387144.007583421!2d-73.97800349999999!3d40.7056308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1415253431785"
            frameborder="0" style="border:0"></iframe>
</div>
<!--map end here-->
<!--footer start here-->
@include('layouts.footer')
</body>
<script>
    /* When the user clicks on the button,
     toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (event) {
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