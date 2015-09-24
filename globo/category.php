<?php
//This is a global PHP INclude section
include 'db/dbConfig.php';

include '/libs/haswatches.lib.php';

$msg = array();

session_start(); // Starting Session - Picks up session variables if set
?>

<?php


/**Check for category referenced by URL and get All products in this category

*/

if(isset($_GET['id'])){

  //Category ID is set, now get category Data
      $getData = getCategory($_GET['id']);

    if($getData){

      $category = $getData;

      $title = $category['category_name'];
    }


    //Now get products in this category   ---To be done down in html



}else{

  header("Location : index.php"); 
}

?>


<?php

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

            <!--<li class="">
              <a href="#">Blog<i class="fa fa-angle-down"></i></a>

              <!--<ul>
                <li><a href="blog-list.html">Blog list</a></li>
                <li><a href="blog-post.html">Blog-post</a></li>
              </ul>-->

            </li>

            <li><a href="price-listing.php"><i class="fa fa-truck"></i>We deliver</a></li>
            <!--<li><a href="about-us.html">About Us</a></li>-->
            <li><a href="contact-us.php"><i class="fa fa-phone"></i>Contact Us</a></li>
          </ul>
        </nav>
      </div> <!-- end .header-nav-bar -->
    </div> <!-- end .container -->
  </header> <!-- end #header -->




  <div class="featured-listing" id= "featured-list">
    <div class="container">
      <div class="row clearfix">
      <?php $getData = getCategory($_GET['id']);?>
        <h2><strong><?php echo $getData['category_name'];?></strong></h2>
            <p style="color:#fff"><i><?php echo $getData['description'];?></i></p>
              <?php //We display the categories from DB

                      foreach(getCategoryProds($_GET['id']) as $product):?>
                <!--   
                <div class="col-md-3 col-sm-4 col-xs-6">

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

                        </div> <!-- end .rating --

                        <figcaption>
                          <div class="bookmark">
                            <a href="cart.html"  ><i class="fa fa-bookmark-o"></i> Add to Cart</a>
                          </div>
                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> See more</a>
                          </div>

                        </figcaption>
                      </figure>
                      <h4><a href="#"><?php echo $product['name'];?></a></h4>

                      <h5><a href="#"><?php echo $category['category_name'];?></a>, <a href="#"></a></h5>

                    </div>--> <!-- end .single-product --

                  </div>-->
        
             <?php endforeach;?>
       

        


      </div>  <!-- end .row -->

      <div class="discover-more">

        <a class="btn btn-default text-center" href="#"><i class="fa fa-plus-square-o"></i>Discover More</a>
      </div>
    </div>  <!-- end .container -->
  </div>  <!-- end .featured-listing -->


  

        </div> <!-- End grid layout -->
      </div> <!-- End .row -->
    </div> <!-- END .container-->
  </div> <!-- classifieds-content -->


    </div>
    <!-- END .REGISTRATION-DETAILS -->
  </div>
  <!-- END REGISTER-CONTENT -->

 <?php include 'footer.php';?>