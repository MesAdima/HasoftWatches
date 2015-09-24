<?php

include 'db/dbConfig.php';

include '/libs/haswatches.lib.php';

pageProtect();

$msg = array();

session_start(); // Starting Session - Picks up session variables if set
?>

<?php


/**Check for category referenced by URL and get All products in this category

*/


?>


<?php

$title = 'My Shopping Cart';

 include 'header.php';?>

      
    <div class="container">
      <div class="header-nav-bar home-slide">
        <nav>

          <button><i class="fa fa-bars"></i></button>

          <ul class="primary-nav list-unstyled">
            <li class="bg-color"><a href="index.php"><i class="fa fa-home"></i>Home</a>
             
            </li>

           

            <li><a href="watchoftheday.php"><i class="fa fa-thumbs-o-up"></i>Watch of the day</a></li>
            <li><a href="shortcodes.php"><i class="fa fa-star"></i>Designer Highlight</a></li>

            
            </li>

            <li><a href="price-listing.php"><i class="fa fa-truck"></i>We deliver</a></li>
            <!--<li><a href="about-us.html">About Us</a></li>-->
            <li><a href="contact-us.php"><i class="fa fa-phone"></i>Contact Us</a></li>
          </ul>
        </nav>
      </div> <!-- end .header-nav-bar -->
    </div> <!-- end .container -->




  <div class="featured-listing" id= "featured-list">
    <div class="container">
      <div class="row clearfix">
      
        <h2><strong>My Shopping Cart</strong></h2>
            <p style="color:#fff"><i>You can edit cart contents or checkout</i></p>
              

      </div>  <!-- end .row -->

      <div class="discover-more">
        <a class="btn btn-default text-center pull-left" href="#"><i class="fa fa-plus-square-o"></i>Update Cart</a>
        <a class="btn btn-default text-center pull-right" href="#"><i class="fa fa-plus-square-o"></i>Checkout</a>
      </div>
    </div>  <!-- end .container -->
  </div>  <!-- end .featured-listing -->


  


 <?php include 'footer.php';?>