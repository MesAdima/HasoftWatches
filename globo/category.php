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
        
             <?php endforeach;?>
       

        


      </div>  <!-- end .row -->

    </div>  <!-- end .container -->
  </div>  <!-- end .featured-listing -->


  

        </div> <!-- End grid layout -->
      </div> <!-- End .row -->
    </div> <!-- END .container-->
  </div> <!-- classifieds-content -->

  <div id="page-content">
    <div class="container">
      <div class="row">

        <div class="col-md-9 col-md-push-3">
          <div class="page-content">

            <div class="product-details view-switch">
              <div class="tab-content">
              <?php $getData = getCategory($_GET['id']);?>
              <?php $productnumber = getProductNumber($_GET['id'])?>

                  <div class="tab-pane active" id="<?php echo $getData['category_name'];?>">
                  <h2><?php echo $getData['category_name'];?><span class="category-name"><b>\</b>Category</span><span class="comments"><?php echo ' '.$productnumber['number'].' products'?></span></h2>

                  <div class="change-view">

                    <div class="filter-input">
                      <input type="text" placeholder="Filter by Keywords">
                    </div>
                    <button class="grid-view active"><i class="fa fa-th"></i></button>
                    <button class="list-view"><i class="fa fa-bars"></i></button>

                      <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                      </ul>

                  </div> <!-- end .change-view -->

                  <div class="row clearfix">
                  <?php
                  if(isset($_GET['id'])){
                  //Category ID is set, now get category Data
                  $getProdData = getCategoryProds($_GET['id']);
                  } ?>
                  <?php $getData = getCategoryProds($_GET['id']);?>
                  <?php //We display the categories from DB

                      foreach($getProdData as $getProd):?>
                      <?php //echo "<pre>";print_r($getProd); ?>
                      <div class="col-sm-4 col-xs-6">

                      <div class="single-product">
                        <figure>
                          <img src="uploads/<?php echo $getProd[6];?>" alt="">

                          <div class="rating">
                

                <p>Ksh.<?php echo number_format($getProd[5]);//price?> </p>

              </div> <!-- end .rating -->

              <figcaption>
                <div  class="bookmark" <?php if(!isset($_SESSION['login_user'])):?>onclick="javascript:alert('You must login first. Check top of the page.');"<?php else:?>
              onclick="javascript: addToCart(<?php echo $getProd[0];?>,<?php echo $_SESSION['userArray']['_id'];?>);"<?php endif;?>>
                  <a href="#"  id="addButton_<?php echo $getProd[0];?>"><i class="fa fa-check"></i> Add to Cart </a>
                </div>
                <div class="read-more">
                  <a href="product.php?id=<?php echo $getProd[0];?>"><i class="fa fa-angle-right"></i> See more</a>
                </div>

              </figcaption>
                        </figure>

                        <h4><a href="#"><?php echo $getProd[7];//main category name?></a></h4>
                              <!-- the above index is for product id -->

            <h5><a href="#"><?php echo $getProd[8];//sub category name?></a><a href="#"></a></h5>



                      </div> <!-- end .single-product -->
                    </div> <!-- end .col-sm-4 grid layout -->
        
             <?php endforeach;?>
             
                    <div class="pagination-center">

                      <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                      </ul>

                    </div>

                  </div> <!-- end .row -->
                </div> <!-- end .tabe-pane -->
                        

                

              </div> <!-- end .tabe-content -->


            </div> <!-- end .product-details -->
          </div> <!-- end .page-content -->
        </div>

        <div class="col-md-3 col-md-pull-9 category-toggle">
          <button><i class="fa fa-briefcase"></i></button>

          <div class="page-sidebar">

            <!-- Category accordion -->
            <div id="categories">
              <div class="accordion">
                <ul class="nav nav-tabs accordion-tab" role="tablist">

                  <li class="active">
                    <a href="#" role="tab" data-toggle="tab"><i class="fa fa-star-o"></i>All Categories</a>
                    <?php //We display the categories from DB

                          foreach(getCategories() as $category):?>

                              <div >
                                  <a href="#<?php echo $category['category_name'];?>"role="tab" data-toggle="tab"><?php echo $category['category_name'];?></a>
                               
                              </div>
                        <?php endforeach;?>
                    
                  </li>
                </ul>
              </div> <!-- end .accordion -->
            </div> <!-- end #categories -->


          </div> <!-- end .page-sidebar -->
        </div> <!-- end grid layout-->
      </div> <!-- end .row -->
    </div> <!-- end .container -->
  </div>  <!-- end #page-content -->

    </div>
    <!-- END .REGISTRATION-DETAILS -->
  </div>
  <!-- END REGISTER-CONTENT -->

 <?php include 'footer.php';?>