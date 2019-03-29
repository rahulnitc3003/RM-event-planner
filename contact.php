<?php include('common/metaDescription.php'); ?>
<body>
    <!-- Navigation -->
    <?php include('common/navigation.php'); ?>
    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <center><h1 class="page-header">Contact Us</h1></center>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14155.733141578312!2d95.9061227!3d27.5024502!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x12475d53964e5ce0!2sJAWAHAR+NAVODAYA+VIDYALAYA!5e0!3m2!1sen!2sin!4v1540629081335"></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p><i class="fa fa-map-marker"></i>&nbsp;&nbsp;RM Event Planer<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;Durga Mandir Chowk,&nbsp;Belhwar<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;Dist: Madhubani<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;State: Bihar (847215)
                </p>
                <i class="fa fa-phone"></i>&nbsp;<span><a href="tel:+91-8507749882" style="text-decoration: none;">+91-8507749882</a></span><br>
                <i class="fa fa-envelope-o"></i>&nbsp;<span><a href="mailto:passionatebipin@gmail.com" style="text-decoration: none;">passionatebipin@gmail.com</a></span><br>
                <i class="fa fa-envelope-o"></i>&nbsp;<span><a href="mailto:customersupport@gmail.com" style="text-decoration: none;">customersupport@gmail.com</a></span><br><br>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <center><h1 class="page-header">Enquiry Form</h1></center>
            </div>
        </div>

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Send us a Message</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-danger">Send Message</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

        <hr>
        <?php include('common/footer.php'); ?>
</body>
</html>
