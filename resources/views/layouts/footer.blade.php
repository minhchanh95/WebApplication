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
                <h4>Mail us On : <a href="mailto:example@email.com">minhchanhdo95@gmail.com</a> </h4>
            </div>
            <div class="col-md-4 ftr-bottom">
                <p>東京都北区堀船３丁目１６番２４号</p>
                <ul class="ftr-navg">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="service.html">Services</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4 ftr-bottom">
                <p>Call Us:-  070-1065-9288</p>
                <p>Design By <a href="http://w3layouts.com/">minhchanhdo95</a></p>
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
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
<!--footer end  here-->
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