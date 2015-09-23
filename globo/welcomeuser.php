<?php
//This is a global PHP INclude section
include 'db/dbConfig.php';
include '/libs/haswatches.lib.php';
$msg = array();
session_start(); // Starting Session - Picks up session variables if set
$title = 'Watch of the day';
include 'header.php';
?>
<div class="sample-page-heading">
  <span></span> <!-- for dark-overlay on the bg -->
  <div class="container">
    <h1>WELCOME BACK <span><?php echo $_SESSION['login_user']; ?></span></h1>
    </div> <!-- END .container-->
    </div> <!-- END .about-us-heading -->
    <div class="container">
      <div class="header-nav-bar home-slide">
        <nav>
          <button><i class="fa fa-bars"></i></button>
          <ul class="primary-nav list-unstyled">
            <li class="bg-color"><a href="index.php"><i class="fa fa-home"></i>Home</a>
          </li>
          <li><a href="watchoftheday.php"><i class="fa fa-thumbs-o-up"></i>Watch of the day</a></li>
          <li class="">
          </li>
          <li><a href="cart.php">My Cart</a></li>
          <li><a href="price-listing.php">My Wishlist</a></li>
          <!--<li><a href="about-us.html">About Us<ML/a></li>-->
          <li><a href="contact-us.php">Contact Us</a></li>
        </ul>
      </nav>
      </div>
      </div> <!-- end .container -->
      <div id="page-content">
        <div class="container">
          <div class="page-content">
            <div class="sample-page">
              <div class="row">
                <div class="col-md-8">
                  <h3>We've got a couple of new picks just for you!</h3>
                  <div class="featured-listing" id= "featured-list">
                    <div class="container">
                      <div class="row clearfix">
                        <h2 style="float:left"><strong>Your Picks!</strong></h2>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                          <div class="single-product">
                            <figure>
                              <img src="img/content/dw.wristwatch.categoriesicon.png" alt="">
                              <div class="rating">
                                <ul class="list-inline">
                                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                                  <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <p>Featured</p>
                                </div> <!-- end .rating -->
                                <figcaption>
                                <div class="bookmark">
                                  <a href="javascript:;" class="simplecart_checkout" ><i class="fa fa-bookmark-o"></i> Add to Cart</a>
                                </div>
                                <div class="read-more">
                                  <a href="#"><i class="fa fa-angle-right"></i> See more</a>
                                </div>
                                </figcaption>
                              </figure>
                              <h4><a href="#">Daniel Wellington</a></h4>
                              <h5><a href="#">Fashion</a>Grail <a href="#"></a></h5>
                              </div> <!-- end .single-product -->
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-6">
                              <div class="single-product">
                                <figure>
                                  <img src="img/content/dw.wristwatch.categoriesicon.png" alt="">
                                  <div class="rating">
                                    <ul class="list-inline">
                                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                                      <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                      <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <p>Featured</p>
                                    </div> <!-- end .rating -->
                                    <figcaption>
                                    <div class="bookmark">
                                      <a href="#"><i class="fa fa-bookmark-o"></i> Add to Cart</a>
                                    </div>
                                    <div class="read-more">
                                      <a href="#"><i class="fa fa-angle-right"></i> See More</a>
                                    </div>
                                    </figcaption>
                                  </figure>
                                  <h4><a href="#">Daniel Wellington</a></h4>
                                  <h5><a href="#">Fashion</a>, <a href="#">Heirloom</a></h5>
                                  </div> <!-- end .single-product -->
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                </div>
                                </div>  <!-- end .row -->
                                <div class="discover-more">
                                  <a class="btn btn-default text-center" style= "float:left"href="index.html"><i class="fa fa-plus-square-o"></i>Discover More</a>
                                </div>
                                </div>  <!-- end .container -->
                              </div>
                              </div> <!-- end .grid-layout -->
                              <div class="col-md-4">
                                <div class="post-sidebar">
                                  <div class="featured">
                                    <h2>Featured Watches</h2>
                                    <div class="single-product">
                                      <figure>
                                        <img src="img/content/dw.wristwatch.categoriesicon.png" alt="">
                                        <div class="rating">
                                          <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                          </ul>
                                          <p>Featured</p>
                                          </div> <!-- end .rating -->
                                        </figure>
                                        <h4><a href="#">DW 2014 Fall Collection</a></h4>
                                        <p>The amazing Daniel Washington released on 12...</p>
                                        <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>
                                        </div> <!-- end .single-product -->
                                        <div class="single-product">
                                          <figure>
                                            <img src="img/content/bluedw.jpg" alt="">
                                            <div class="rating">
                                              <ul class="list-inline">
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                              </ul>
                                              <p>Featured</p>
                                              </div> <!-- end .rating -->
                                            </figure>
                                            <h4><a href="#">DW Stripped 2013 Winter Collection</a></h4>
                                            <p>A new look for the winter blues by Dan...</p>
                                            <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>
                                            </div> <!-- end .single-product -->
                                            </div> <!-- end .featured -->
                                            <div class="recently-added">
                                              <h2>Recently Added</h2>
                                              <div class="single-product">
                                                <figure>
                                                  <img src="img/content/bluedw.jpg" alt="">
                                                  <div class="rating">
                                                    <ul class="list-inline">
                                                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                      <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                                      <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                    </ul>
                                                    </div> <!-- end .rating -->
                                                  </figure>
                                                  <h4><a href="#">Old Bookman's</a></h4>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit..</p>
                                                  <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>
                                                </div>
                                                </div> <!-- end .recently-added -->
                                                </div> <!-- end .latest-post-content -->
                                                </div> <!-- end .medium-rectangle -->
                                                </div> <!-- end .post-sidebar -->
                                                </div> <!-- end .grid-layout -->
                                                </div> <!-- end .row -->
                                                </div> <!-- end .sample-page -->
                                                </div> <!-- end .page-content -->
                                                </div> <!-- end .container -->
                                                </div> <!-- end #page-content -->
                                                <?php include 'footer.php';?>