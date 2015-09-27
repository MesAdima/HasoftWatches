<?php

include 'db/dbConfig.php';

include '/libs/haswatches.lib.php';

$msg = array();

session_start(); // Starting Session - Picks up session variables if set
?>

<?php
/**Account Activation

*/

if(isset($_GET['action']) && $_GET['action'] == 'activate'){

  include 'activation.php';
}


/**Login Code:

*/

if (isset($_POST['login'])) {
    if (empty($_POST['username']) || empty($_POST['pass'])) {
           $msg[] = "Username or Password is invalid";
    }
    else
    {
              // Define $username and $password
              $username=$_POST['username'];
              $password=md5($_POST['pass']);

              // To protect MySQL injection for Security purpose
              $username = stripslashes($username);
              $password = stripslashes($password);
              $username = mysqli_real_escape_string($conn, $username);
              $password = mysqli_real_escape_string($conn, $password);

              // SQL query to fetch information of registerd users and finds user match.
              $query = "SELECT * from users where username='$username' AND password='$password'";
              $result = mysqli_query($conn,$query);
              $rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
              //echo "<pre>";print_r($rows);exit;
              if (mysqli_num_rows($result) == 1) {

              $_SESSION['userArray'] = $rows;

              $_SESSION['login_user']=$username; // Initializing Session

              header("location: index.php"); // Redirecting To Other Page

              } else {
                //echo "false login string";
              $msg[] = "Username or Password is invalid";

              
              }
    mysqli_close($conn); // Closing Connection
    }
}
/**
Register Code

*/
if(!empty($_POST['username']) && !empty($_POST['password'])){

        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        
        $username = mysqli_real_escape_string($conn, $username);
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);
        
        // regular expression for email check
        $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';

        if(preg_match($regex, $email)){
            $qry = "SELECT * FROM users WHERE email = '".$email."'";
            $result = mysqli_query($conn,$qry);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

            if(mysqli_num_rows($result) == 1){
                $msg[] = 'The email is already taken, please try new.';
            }
            else {
            $password = md5($password);
            $activation = md5(uniqid(rand(), true));

            $registerquery = mysqli_query($conn, "INSERT INTO users (username, password, email,activationkey) VALUES('".$username."', '".$password."', '".$email."', '".$activation."')")
            or die(mysqli_error($conn)); 

            /*** Script for send email start here ***/
                $to = $email;
                $subject = 'Haswatches :: Email verification';
                $body = '
 
                    Thanks for signing up!<br><br>
                    Your account has been created, you can login with the following credentials after you have activated your account by clicking the url below.
                     
                    <br>------------------------<br><br>
                    Username: '.$username.' <br><br>
                    ------------------------<br><br>
                     
                    Please click this link to activate your account:<br><br>
                    http://localhost:81/haswatches/globo/index.php?action=activate&key='.$activation.'
                     
                    '; 
                    $headers = 'From:noreply@haswatches.com' . "\r\n"; // Set from headers
                    mail($to, $subject, $body, $headers); // Send our email
                
                
                     require_once('libs/mail/class.smtp.php');
                    require_once('libs/mail/class.phpmailer.php');
                      include 'libs/mail/sendmail.php';
            }
        }
     }
?>


<?php
$title = 'Home';
 include 'header.php';?>

      <div class="slider-content">

        <div id="home-slider" class="owl-carousel owl-theme">

          <div class="item"><img src="img/content/hanging_watch.jpg" alt="">
            <div class="slide-content">
              <a href="#"><!--<img src="img/slider-logo.png" alt="">--></a>
              <h3><a href="index-2.html">HAS<i class="fa fa-globe"></i>FT</a></h3>
              <h1>The <span>Right</span> Place</h1>
              <h2>For Legit Watches</h2>

            </div>


          </div>

          <div class="item"><img src="img/content/watch_macro.jpg" alt="">
            <div class="slide-content">
              <a href="#"><!--<img src="img/slider-logo.png" alt="">--></a>
              <h3><a href="index-2.html">HAS<i class="fa fa-globe"></i>FT</a></h3>

              <h1>IN <span>THE</span> NICK</h1>
              <h2>OF TIME</h2>

            </div>

          </div>

          <div class="item"><img src="img/content/timex-wallpaper.jpg" alt="">
            <div class="slide-content">
              <a href="#"><!--<img src="img/slider-logo.png" alt="">--></a>
              <h3><a href="index-2.html">HAS<i class="fa fa-globe"></i>FT</a></h3>

              <h1>MAN <span>CRUSH</span> MONDAY</h1>
              <h2>DISCOUNTS</h2>

            </div>

          </div>

          <div class="item"><img src="img/content/old_pocket_watch.jpg" alt="">
            <div class="slide-content">
              <a href="#"><!--<img src="img/slider-logo.png" alt="">--></a>
              <h3><a href="index-2.html">HAS<i class="fa fa-globe"></i>FT</a></h3>

              <h1>TICKING <span>AND</span> TOCKING </h1>
              <h2>SINCE 1905</h2>

            </div>
          </div>
        </div>

        <div class="customNavigation">
          <a class="btn prev"><i class="fa fa-angle-left"></i></a>
          <a class="btn next"><i class="fa fa-angle-right"></i></a>
        </div>

      </div> <!-- END .slider-content -->
    </div> <!-- END .SEARCH and slide-section -->

    <div class="container">
      <div class="header-nav-bar home-slide">
        <nav>

          <button><i class="fa fa-bars"></i></button>

          <ul class="primary-nav list-unstyled">
            <li class="bg-color"><a href="index.html"><i class="fa fa-home"></i>Home</a>

            </li>


            <li><a href="watchoftheday.html"><i class="fa fa-thumbs-o-up"></i>Watch of the day</a></li>
            <li><a href="shortcodes.html"><i class="fa fa-star"></i>Designer Highlight</a></li>

            </li>

            <li><a href="price-listing.html"><i class="fa fa-truck"></i>We deliver</a></li>
            <!--<li><a href="about-us.html">About Us</a></li>-->
            <li><a href="contact-us.html"><i class="fa fa-phone"></i>Contact Us</a></li>
          </ul>
        </nav>
      </div> <!-- end .header-nav-bar -->
    </div> <!-- end .container -->
  </header> <!-- end #header -->

  <div id="page-content" class="home-slider-content">
    <div class="container">
      <div class="home-with-slide">
        <div class="row">

          <div class="col-md-9 col-md-push-3">
            <div class="page-content">

              <div class="change-view">
                <div class="filter-input">
                  <input type="text" placeholder="Filter by Keywords">
                </div>
              </div> <!-- end .change-view -->


              <div class="product-details">
                <div class="tab-content">

                  <div class="tab-pane active" id="all-categories">
                    <h3>Hasoft Watches<span>Categories</span></h3>

                    <div class="row clearfix">

                        <?php //We display the categories from DB

                          foreach(getCategories() as $category):?>

                              <div class="col-md-3 col-sm-4 col-xs-6">
                                <div class="category-item">

                                  <a href="category.php?id=<?php echo $category['_id'];?>"><i class="fa fa-<?php echo $category['icon'];?>"></i><?php echo $category['category_name'];?></a>
                                </div>
                              </div>
                        <?php endforeach;?>


                    </div> <!-- end .row -->
                  </div> <!-- end .tabe-pane -->


                  <div class="tab-pane" id="advertisemnet">
                    <h3>New Arrivals<span class="comments">59</span></h3>

                    <div class="row clearfix">

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class=""></i></a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class=""></i></a>
                        </div>
                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class=""></i></a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class=""></i></a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class=""></i></a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class=""></i></a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class=""></i></a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class=""></i></a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class=""></i></a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class=""></i></a>
                        </div>

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
              <div class="custom-search">

                <div class="location-details">
                  <form action="#">
                    <div class="select-country">
                      <label>Categories</label>

                      <select class="" data-placeholder="-Select-">
                      <?php //We display the categories from DB

                      foreach(getCategories() as $category):?>
                            <option value="<?php echo $category['_id'];?>"><?php echo $category['category_name'];?></option>
                    <?php endforeach;?>
                      </select>

                    </div> <!-- end .select-country -->

                    <div class="select-state">
                      <label>Designers</label>

                      <select class="" data-placeholder="-Select-">
                        <?php foreach(getDesigners() as $designer):?>

                                 <option value="<?php echo $designer['_id'];?>"><?php echo $designer['name'];?></option>
                        <?php endforeach;?>
                      </select>

                    </div> <!-- end .select-state -->

                  </form>

                </div> <!-- end .location-details -->

              </div> <!-- end .custom-search -->

              <!-- Category accordion -->
              <div id="categories">
                <div class="accordion">
                  <ul class="nav nav-tabs home-tab" role="tablist">
                    <li class="active">
                      <a href="#all-categories"  role="tab" data-toggle="tab">All Categories
                        <span>Display all categories</span>
                      </a>
                    </li>

                  </ul>
                </div> <!-- end .accordion -->
              </div> <!-- end #categories -->

            </div> <!-- end .page-sidebar -->
          </div> <!-- end grid layout-->
        </div> <!-- end .row -->
      </div> <!-- end .home-with-slide -->
    </div> <!-- end .container -->
  </div>  <!-- end #page-content -->


  <div class="featured-listing" id= "featured-list">
    <div class="container">
      <div class="row clearfix">
        <h2><strong>Featured</strong></h2>


        <?php      foreach(getProducts() as $product): //Looping through each of the products?>

        <div class="col-md-3 col-sm-4 col-xs-6">

          <div class="single-product">
            <figure>
              <img src="uploads/<?php echo $product['image'];?>" alt="">
              <div class="rating">
                

                <p>Ksh.<?php echo number_format($product['price']);?> </p>

              </div>
              

              <figcaption>
                <div  class="bookmark" <?php if(!isset($_SESSION['login_user'])):?>onclick="javascript:alert('You must login first. Check top of the page.');"<?php else:?>
              onclick="javascript: addToCart(<?php echo $product['_id'];?>,<?php echo $_SESSION['userArray']['_id'];?>);"<?php endif;?>>
                  <a href="#"  id="addButton_<?php echo $product['_id'];?>"><i class="fa fa-check"></i> Add to Cart </a>
                </div>
                <div class="read-more">
                  <a href="product.php?id=<?php echo $product['_id'];?>"><i class="fa fa-angle-right"></i> See more</a>
                </div>

              </figcaption>
            </figure>
            <h4><a href="#"><?php echo $product['category_name'];?></a></h4>

            <h5><a href="#"><?php echo $product['sub_category_name'];?></a><a href="#"></a></h5>

          </div>--> <!-- end .single-product -->

        </div>

        <?php endforeach;?>

      </div>  <!-- end .row -->

    </div>  <!-- end .container -->
  </div>  <!-- end .featured-listing -->


        </div> <!-- End grid layout -->
      </div> <!-- End .row -->
    </div> <!-- END .container-->
  </div> <!-- classifieds-content -->

      <!-- END .CONTAINER -->
    </div>
    <!-- END .REGISTRATION-DETAILS -->
  </div>
  <!-- END REGISTER-CONTENT -->

 <?php include 'footer.php';?>