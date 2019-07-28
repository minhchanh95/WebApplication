@include('layouts.header')

<!--banner end here-->
<!--contact start here-->
<div class="contact">
    <div class="container">
        <div class="contact-main">
            <div class="contact-top">
                <h3>CONTACT US</h3>
                <P>Aliquam erat volutpat. Suspendisse congue massa quisenim sollicitudin, in pharetra lectus tempor. Duis sit amet efficitur and web page editors now use Lorem Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium licabo.</P>
            </div>
            <div class="contact-bottom">
                <div class="col-md-6 contact-bottom-left">
                    <h4>Get in Touch</h4>
                    <p>Name</p>
                    <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
                    <p>Email</p>
                    <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
                    <p>Telephone</p>
                    <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
                    <p>Website</p>
                    <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
                    <input type="submit" value="Send">
                </div>
                <div class="col-md-6 contact-bottom-right">
                    <p>Message</p>
                    <textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/> </textarea>
                    <div class="addre">
                        <h4>Contact</h4>
                        <p>Address : Richard McClintock</p>
                        <p>New Stree : Letraset sheets</p>
                        <p>ph : 0000-000-000</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--contact end here-->
<!--map start here -->
<div class="map">
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387144.007583421!2d-73.97800349999999!3d40.7056308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1415253431785"  frameborder="0" style="border:0"> </iframe>
    </div>
</div>
<!--map end here-->
<!--footer start here-->
@include('layouts.footer')
<!--footer end  here-->
</body>
</html>
