<?php

include 'db/dbConfig.php';

include '/libs/haswatches.lib.php';

$msg = array();

session_start(); // Starting Session - Picks up session variables if set

?>


<?php
$title = 'Contact Us';
 include 'header.php';
 ?>

         <!-- HEADER SEARCH SECTION -->
    <div class="header-search fixed-height">
    

      <div class="page-heading contact-us-heading">
        <span></span> <!-- for dark-overlay on the bg -->

        <div class="container">
          <h1>Contact <span>Us</span></h1>

          <div class="heading-link">
            <a href="index.php">Home</a>

            <i>/</i>

            <a href="#">Contact Us</a>
          </div>

        </div> <!-- END .container-->
      </div> <!-- END .about-us-heading -->

    </div> <!-- END .SEARCH and slide-section -->


    <div class="header-nav-bar">
      <div class="container">
        <nav>

          <button><i class="fa fa-bars"></i></button>

          <ul class="primary-nav list-unstyled">
            <li><a href="index.php">Home</a>
            </li>
            <li class=""><a href="watchoftheday.php">Watch of the day<i class="fa fa-thumbs-o-up"></i></a>
            </li>
            <li><a href="about-us.php">About Us</a></li>
            <li class="bg-color"><a href="contact-us.php">Contact Us</a></li>
          </ul>
        </nav>
      </div> <!-- end .container -->
    </div> <!-- end .header-nav-bar -->
  </header> <!-- end #header -->

  <div id="page-content">
    <div class="container">
      <div class="page-content">
        <div class="contact-us">
          <div class="row">
            <div class="col-md-6">
              <h3><strong>Our</strong> Hq</h3>

              <div class="contacy-us-map-section">
                <div id="contact_map_canvas">

                </div>
              </div> <!-- end .map-section -->

              <div class="row">
                <div class="col-sm-6">
                  <h5>Address Details</h5>

                  <div class="address-details clearfix">
                    <i class="fa fa-map-marker"></i>

                    <p>
                      <span>Strathmore University</span>
                      <span>Ole Sangale Road</span>
                      <span>Madaraka</span>
                    </p>
                  </div>

                  <div class="address-details clearfix">
                    <i class="fa fa-phone"></i>

                    <p>
                      <span><strong>Phone:</strong> +254 295-924-52</span>
                    </p>
                  </div>

                  <div class="address-details clearfix">
                    <i class="fa fa-envelope-o"></i>

                    <p>
                      <span><strong>E-mail:</strong> info@haswatches.com</span>
                      <span><span><strong>Website:</strong> www.haswatches.com</span></span>
                    </p>
                  </div>

                </div>

                <div class="col-sm-6">
                  <h5>Opening Hours</h5>

                  <div class="address-details clearfix">
                    <i class="fa fa-clock-o"></i>

                    <p>
                      <span><strong>Mo-Fri:</strong> 8AM - 5PM</span>
                      <span><span><strong>Saturday:</strong> 10AM - 2PM</span></span>
                      <span><strong>Sunday:</strong> Closed</span>
                    </p>
                  </div>

                </div>
              </div> <!-- end .nasted row -->

            </div> <!-- end main grid layout -->

            <div class="col-md-6">
              <h3><strong>Message</strong> Us</h3>

              <div class="contact-form">
              <?php var base_url = "l";?>
                <form action="#" class="comment-form">

                  <input type="text" placeholder="Name" required>

                  <input type="email" placeholder="Email" required>

                  <textarea placeholder="How Can We Help You?" required></textarea>

                  <a class="btn btn-default" href="#"><i class="fa fa-envelope-o"></i>Send Message</a>

                </form>

              </div> <!-- end .contact-form -->

            </div> <!-- end main grid layout -->
          </div> <!-- end .row -->

        </div> <!-- end .about-us -->
      </div> <!-- end .page-content -->
    </div> <!-- end .container -->

  </div> <!-- end #page-content -->


<?php include 'footer.php';?>