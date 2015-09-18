<?php
//This is a global PHP INclude section
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

              // $qry = "SELECT * FROM users WHERE email = '".$email."'";
              //      $result = mysqli_query($conn,$qry);
              //      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

              // SQL query to fetch information of registerd users and finds user match.
              $query = "SELECT * from users where username='$username' AND password='$password'";
              $result = mysqli_query($conn,$query);
              $rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
              //echo "<pre>";print_r($rows);exit;
              if (mysqli_num_rows($result) == 1) {
                //echo "true login string"; --> Set sessions

              $_SESSION['userArray'] = $rows;

              $_SESSION['login_user']=$username; // Initializing Session

              header("location: index.php"); // Redirecting To Other Page

              } else {
                //echo "false login string";
              $msg[] = "Username or Password is invalid";

              //header("location: http://localhost:81/haswatches/globo/index.php"); // Redirecting To Other Page
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
            or die(mysqli_error($conn)); //The die is for error detection
            //Initially showed: Column count doesn't match value count at row 1 -> No Insertion

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
                     
                    '; // Our message above including the link
                    $headers = 'From:noreply@haswatches.com' . "\r\n"; // Set from headers
                    mail($to, $subject, $body, $headers); // Send our email
                
                //This is the new mailer - PHP Mailer Still
                     require_once('libs/mail/class.smtp.php');
                    require_once('libs/mail/class.phpmailer.php');
                      include 'libs/mail/sendmail.php';
               /**if(Send_Mail($to, $subject, $body, $headers)){ //Remember to give success messages when you're certain the action has been accomplished

                //This is what you intend the user to see, but you havent echoed it
                $msg[] = 'Registration successful, please check your email for a link to activate your account.';

                //echo $subject."<hr>".$body."<hr>";

               }else{
                $msg[] ='Adima, you are fucked';
               }*/

                /*** Script for send email end here ***/
 

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
              <!--<ul>
                <li><a href="index.html">Home-map(grid)</a></li>
                <!--<li><a href="home-map-list.html">Home-map(list)</a></li>
                <li><a href="index-2.html">Home slider(view-1)</a></li>
                <li><a href="home-category.html">Home slider(view-2)</a></li>
              </ul>-->

            </li>

            <!--<li class=""><a href="#">Company<i class="fa fa-angle-down"></i></a>

              <ul>
                <li><a href="company-profile.html">Company(Profile)</a></li>
                <li><a href="company-product.html">Company(Product)</a></li>
                <li><a href="company-portfolio.html">Company(Portfolio)</a></li>
                <li><a href="company-events.html">Company(Events)</a></li>
                <li><a href="company-blog.html">Company(Blog)</a></li>
                <li><a href="company-contact.html">Company(contact)</a></li>
              </ul>

            </li>-->

            <li><a href="watchoftheday.html"><i class="fa fa-thumbs-o-up"></i>Watch of the day</a></li>
            <li><a href="shortcodes.html"><i class="fa fa-star"></i>Designer Highlight</a></li>

            <!--<li class="">
              <a href="#">Blog<i class="fa fa-angle-down"></i></a>

              <!--<ul>
                <li><a href="blog-list.html">Blog list</a></li>
                <li><a href="blog-post.html">Blog-post</a></li>
              </ul>-->

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
                      

                      

                      <!--<div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-archive"></i>Furnishing</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-eye"></i>Health &amp; beauty</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-paper-plane-o"></i>Hobbies</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-empire"></i>Jewelry</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-cutlery"></i>Kitchen</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-sun-o"></i>Leisure</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-music"></i>Music</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-money"></i>Tickets</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-rocket"></i>Video Games &amp; Consoles</a>
                        </div>

                      </div>

                      <div class="view-more">
                        <a class="btn btn-default text-center" href="#"><i class="fa fa-plus-square-o"></i>View More</a>
                      </div>-->

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

                      <!--<div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-empire"></i>Jewelry</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-cutlery"></i>Kitchen</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-sun-o"></i>Leisure</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-music"></i>Music</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-money"></i>Tickets</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-rocket"></i>Video Games &amp; Consoles</a>
                        </div>

                      </div>

                      <div class="view-more">
                        <a class="btn btn-default text-center" href="#"><i class="fa fa-plus-square-o"></i>View More</a>
                      </div>-->

                    </div> <!-- end .row -->
                  </div> <!-- end .tabe-pane -->

                  <div class="tab-pane" id="e-commerce">
                    <h3>Discounts <span class="comments">99</span></h3>

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

                      <!--<div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-empire"></i>Jewelry</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-cutlery"></i>Kitchen</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-sun-o"></i>Leisure</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-music"></i>Music</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-money"></i>Tickets</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-rocket"></i>Video Games &amp; Consoles</a>
                        </div>

                      </div>

                      <div class="view-more">
                        <a class="btn btn-default text-center" href="#"><i class="fa fa-plus-square-o"></i>View More</a>
                      </div>-->

                    </div>  <!-- end .row -->
                  </div> <!-- end .tabe-pane -->

                  <div class="tab-pane" id="education">
                    <h3>Customize Watch <span class="comments">79</span></h3>

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

                      <!--<div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-empire"></i>Jewelry</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-cutlery"></i>Kitchen</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-sun-o"></i>Leisure</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-music"></i>Music</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-money"></i>Tickets</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-rocket"></i>Video Games &amp; Consoles</a>
                        </div>

                      </div>

                      <div class="view-more">
                        <a class="btn btn-default text-center" href="#"><i class="fa fa-plus-square-o"></i>View More</a>
                      </div>-->

                    </div>  <!-- end .row -->
                  </div> <!-- end .tabe-pane -->

                  <div class="tab-pane" id="entertainment">
                    <h3>Entertainment <span class="comments">45</span></h3>

                    <div class="row clearfix">


                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-paint-brush"></i>Creative &amp; Digital</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-female"></i>Fashion</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-bicycle"></i>Fashion</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-archive"></i>Furnishing</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-eye"></i>Health &amp; beauty</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-paper-plane-o"></i>Hobbies</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-empire"></i>Jewelry</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-cutlery"></i>Kitchen</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-sun-o"></i>Leisure</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-music"></i>Music</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-money"></i>Tickets</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-rocket"></i>Video Games &amp; Consoles</a>
                        </div>

                      </div>

                      <div class="view-more">
                        <a class="btn btn-default text-center" href="#"><i class="fa fa-plus-square-o"></i>View More</a>
                      </div>

                    </div> <!-- end .row -->
                  </div> <!-- end .tabe-pane -->

                  <div class="tab-pane" id="home-garder">
                    <h3>Get our location<span class="comments"></span></h3>

                    <div class="map-section">

        <div id="map_canvas"></div>

      </div>
     <!-- end .row -->
                  </div> <!-- end .tabe-pane -->

                  <div class="tab-pane" id="industry">
                    <h3>Industry <span class="comments">33</span></h3>

                    <div class="row clearfix">

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-paint-brush"></i>Creative &amp; Digital</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-female"></i>Fashion</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-bicycle"></i>Fashion</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-archive"></i>Furnishing</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-eye"></i>Health &amp; beauty</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="#"><i class="fa fa-paper-plane-o"></i>Hobbies</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-empire"></i>Jewelry</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-cutlery"></i>Kitchen</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-sun-o"></i>Leisure</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-music"></i>Music</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-money"></i>Tickets</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-rocket"></i>Video Games &amp; Consoles</a>
                        </div>

                      </div>

                      <div class="view-more">
                        <a class="btn btn-default text-center" href="#"><i class="fa fa-plus-square-o"></i>View More</a>
                      </div>

                    </div> <!-- end .row -->
                  </div> <!-- end .tabe-pane -->

                  <div class="tab-pane" id="libraries-public">
                    <h3>Libraries &amp; Public <span class="comments">66</span></h3>

                    <div class="row clearfix">


                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-book"></i>Book</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-car"></i>Cars &amp; Motorcycles</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-laptop"></i>Computers &amp; Tablets</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-paint-brush"></i>Creative &amp; Digital</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-female"></i>Fashion</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-bicycle"></i>Fashion</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="#"><i class="fa fa-archive"></i>Furnishing</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-eye"></i>Health &amp; beauty</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-paper-plane-o"></i>Hobbies</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-empire"></i>Jewelry</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-cutlery"></i>Kitchen</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-sun-o"></i>Leisure</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-music"></i>Music</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-money"></i>Tickets</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-rocket"></i>Video Games &amp; Consoles</a>
                        </div>

                      </div>

                      <div class="view-more">
                        <a class="btn btn-default text-center" href="#"><i class="fa fa-plus-square-o"></i>View More</a>
                      </div>

                    </div> <!-- end .row -->
                  </div> <!-- end .tabe-pane -->

                  <div class="tab-pane" id="real-estate">
                    <h3>Real Estate <span class="comments">55</span></h3>

                    <div class="row clearfix">
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-university"></i>Antiques</a>
                        </div>
                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-book"></i>Book</a>
                        </div>

                      </div>


                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-paint-brush"></i>Creative &amp; Digital</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-female"></i>Fashion</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-bicycle"></i>Fashion</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-archive"></i>Furnishing</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-eye"></i>Health &amp; beauty</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-paper-plane-o"></i>Hobbies</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-empire"></i>Jewelry</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-cutlery"></i>Kitchen</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-sun-o"></i>Leisure</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-music"></i>Music</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-money"></i>Tickets</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-rocket"></i>Video Games &amp; Consoles</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-money"></i>Tickets</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-rocket"></i>Video Games &amp; Consoles</a>
                        </div>

                      </div>

                      <div class="view-more">
                        <a class="btn btn-default text-center" href="#"><i class="fa fa-plus-square-o"></i>View More</a>
                      </div>

                    </div> <!-- end .row -->
                  </div> <!-- end .tabe-pane -->

                  <div class="tab-pane" id="resturants">
                    <h3>Reasturants &amp; Pubs <span class="comments">66</span></h3>

                    <div class="row clearfix">
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-university"></i>Antiques</a>
                        </div>
                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-book"></i>Book</a>
                        </div>

                      </div>


                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-paint-brush"></i>Creative &amp; Digital</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-female"></i>Fashion</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-bicycle"></i>Fashion</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-archive"></i>Furnishing</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-eye"></i>Health &amp; beauty</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-paper-plane-o"></i>Hobbies</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-empire"></i>Jewelry</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-cutlery"></i>Kitchen</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-sun-o"></i>Leisure</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-music"></i>Music</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-money"></i>Tickets</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-rocket"></i>Video Games &amp; Consoles</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-money"></i>Tickets</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-rocket"></i>Video Games &amp; Consoles</a>
                        </div>

                      </div>

                      <div class="view-more">
                        <a class="btn btn-default text-center" href="#"><i class="fa fa-plus-square-o"></i>View More</a>
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
                      <?php include 'getProducts.php';?>
                        <!--<option value="option1">option 1</option>
                        <option value="option2">option 2</option>
                        <option value="option3">option 3</option>
                        <option value="option4">option 4</option>-->
                      </select>

                    </div> <!-- end .select-country -->

                    <div class="select-state">
                      <label>Designers</label>

                      <select class="" data-placeholder="-Select-">
                        <option value="option1">option 1</option>
                        <option value="option2">option 2</option>
                        <option value="option3">option 3</option>
                        <option value="option4">option 4</option>
                      </select>

                    </div> <!-- end .select-state -->

                    <!--<div class="zip-code">
                      <label>ZIP Code</label>

                      <input type="text" placeholder="Enter">

                    </div> <!-- end .zip-code -->
                  </form>

                </div> <!-- end .location-details -->

                <div class="distance-range">
                  <p>
                    <label for="amount">Price Range</label>
                    <input type="text" id="amount">
                  </p>

                  <div id="slider-range-min"></div>
                </div>  <!-- end #distance-range -->
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

                    <li>
                      <a href="#advertisemnet" role="tab" data-toggle="tab">New Arrivals
                        <span>See our latest stock update</span>
                      </a>
                    </li>

                    <li>
                      <a href="#e-commerce"  role="tab" data-toggle="tab">Discounts
                        <span>Best buys we've chosen for you</span>
                      </a>
                    </li>

                    <li>
                      <a href="#education" role="tab" data-toggle="tab">Customize your watch
                        <span>Add nice details to your accessories</span>
                      </a>
                    </li>

                    <li>
                      <!--<a href="#entertainment" role="tab" data-toggle="tab">Entertainment
                        <span>Sport, Toys, Travels</span>
                      </a>
                    </li>-->

                    <li>
                      <a href="#home-garder" role="tab" data-toggle="tab">Find us
                        <span>Contact details</span>
                      </a>

                    </li>

                    <!--<li>
                      <a href="#industry" role="tab" data-toggle="tab">Industry
                        <span>Accessories, Products, Services</span>
                      </a>
                    </li>-->

                    <!--<li>
                      <a href="#libraries-public" role="tab" data-toggle="tab">Libraries &amp; Public
                        <span>Libraries, Postal, Public Offices</span>
                      </a>
                    </li>-->

                    <!--<li>
                      <a href="#real-estate" role="tab" data-toggle="tab">Real Estate
                        <span>Apartments, Commercial, House</span>
                      </a>
                    </li>-->

                    <!--<li>
                      <a href="#resturants" role="tab" data-toggle="tab">Resturants &amp; Pubs
                        <span>Bars, Fast Food, Resturants</span>
                      </a>
                    </li>-->

                    <!--<li>
                      <a href="#" role="tab" data-toggle="tab"><i class="fa fa-angle-right"></i>See More</a>

                    </li>-->

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

        <!--<div class="col-md-3 col-sm-4 col-xs-6">
          <div class="single-product">
            <figure>
              <img src="img/content/post-img-1.jpg" alt="">

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

             <!-- <figcaption>
                <div class="bookmark">
                  <a href="#"><i class="fa fa-bookmark-o"></i>Add to Cart
                </div>
                <div class="read-more">
                  <a href="#"><i class="fa fa-angle-right"></i> See More</a>
                </div>

              </figcaption>
            </figure>
            <h4><a href="#">Old Bookman's</a></h4>

            <h5><a href="#">Category</a>, <a href="#"></a></h5>

          </div> <!-- end .single-product -->

        <!--</div>-->

        <div class="col-md-3 col-sm-4 col-xs-6">

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

              <figcaption>
                <div class="bookmark">
                  <a href="cart.html"  ><i class="fa fa-bookmark-o"></i> Add to Cart</a>
                </div>
                <div class="read-more">
                  <a href="#"><i class="fa fa-angle-right"></i> See more</a>
                </div>

              </figcaption>
            </figure>
            <h4><a href="#">Old Bookman's</a></h4>

            <h5><a href="#">Grail</a>, <a href="#"></a></h5>

          </div>--> <!-- end .single-product -->

        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">

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

              <figcaption>
                <div class="bookmark">
                  <a href="cart.html"><i class="fa fa-bookmark-o"></i> Add to Cart</a>
                </div>
                <div class="read-more">
                  <a href="cart.html"><i class="fa fa-angle-right"></i> See More</a>
                </div>

              </figcaption>
            </figure>
            <h4><a href="#">Old Bookman's</a></h4>

            <h5><a href="#">Fashion</a>, <a href="#"></a></h5>

          </div> <!-- end .single-product -->

        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">

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

              <figcaption>
                <div class="bookmark">
                  <a href="cart.html"><i class="fa fa-bookmark-o"></i> Add to Cart</a>
                </div>
                <div class="read-more">
                  <a href="#"><i class="fa fa-angle-right"></i> See More</a>
                </div>

              </figcaption>
            </figure>
            <h4><a href="#">DW Winter Collection</a></h4>

            <h5><a href="#">Fashion</a> <a href="#"></a></h5>

          </div> <!-- end .single-product -->

        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">

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

              <figcaption>
                <div class="bookmark">
                  <a href="#"><i class="fa fa-bookmark-o"></i> Add to Cart</a>
                </div>
                <div class="read-more">
                  <a href="#"><i class="fa fa-angle-right"></i> See More</a>
                </div>

              </figcaption>
            </figure>
            <h4><a href="#">DW Fall Collection</a></h4>

            <h5><a href="#">Fashion</a> <a href="#"></a></h5>

          </div> <!-- end .single-product -->

        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">

          <!--<div class="single-product">
            <figure>
              <img src="img/content/post-img-6.jpg" alt="">

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

              <!--<figcaption>
                <div class="bookmark">
                  <a href="#"><i class="fa fa-bookmark-o"></i> Add to Cart</a>
                </div>
                <div class="read-more">
                  <a href="#"><i class="fa fa-angle-right"></i> See More</a>
                </div>

              </figcaption>
            </figure>
            <h4><a href="#">Old Bookman's</a></h4>

            <h5><a href="#">Category</a>, <a href="#"></a></h5>

          </div> --><!-- end .single-product -->

        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">

          <!--<div class="single-product">
            <figure>
              <img src="img/content/post-img-7.jpg" alt="">

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

              <!--<figcaption>
                <div class="bookmark">
                  <a href="#"><i class="fa fa-bookmark-o"></i> Add to Cart</a>
                </div>
                <div class="read-more">
                  <a href="#"><i class="fa fa-angle-right"></i> See More</a>
                </div>

              </figcaption>
            </figure>
            <h4><a href="#">Old Bookman's</a></h4>

            <h5><a href="#">Category</a>, <a href="#"></a></h5>

          </div> --><!-- end .single-product -->

        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">

          <!--<div class="single-product">
            <figure>
              <img src="img/content/post-img-8.jpg" alt="">

              <div class="rating">
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                </ul>-->

                <!--<p>Featured</p>

              </div> <!-- end .rating -->

              <!--<figcaption>
                <div class="bookmark">
                  <a href="#"><i class="fa fa-bookmark-o"></i> Add to Cart</a>
                </div>
                <div class="read-more">
                  <a href="#"><i class="fa fa-angle-right"></i> See More</a>
                </div>

              </figcaption>
            </figure>
            <h4><a href="#">Old Bookman's</a></h4>

            <h5><a href="#">Category</a>, <a href="#"></a></h5>

          </div> --><!-- end .single-product -->

        </div>

      </div>  <!-- end .row -->

      <div class="discover-more">

        <a class="btn btn-default text-center" href="#"><i class="fa fa-plus-square-o"></i>Discover More</a>
      </div>
    </div>  <!-- end .container -->
  </div>  <!-- end .featured-listing -->


  <!--<div class="classifieds-content">
    <div class="container">
      <div class="heading-section clearfix">
        <h1>Classifieds</h1>

        <a href="#" class="btn btn-default"><i class="fa fa-plus"></i> Post Your Ad</a>

        <form action="#">
          <input type="text" placeholder="Search by keywords">

          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div> <!-- END .heading-section -->

      <!-- CLSSIFIEDS-CATEGROY BEGIN -->
      <!--<div class="row">
        <div class="col-md-3 col-sm-6">
          <ul class="classifieds-category">
            <li><a href="#"><i class="fa fa-bullhorn"></i>Advartising <span>(1786)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
              </ul>

            </li>

            <li><a href="#"><i class="fa fa-home"></i>Home &amp; Garden <span>(754)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
              </ul>

            </li>
          </ul> <!-- END MAIN UL -->
          <!-- END .CLASSIFIES-CATEGORY -->

         <!-- End grid layout -->

        <!--<div class="col-md-3 col-sm-6">
          <ul class="classifieds-category">
            <li><a href="#"><i class="fa fa-shopping-cart"></i>E-commerce <span>(1987)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
                <li><a href="#">Furnishing <span>(13)</span></a></li>
                <li><a href="#">Health &amp; Beauty <span>(99)</span></a></li>
              </ul>

            </li>

            <li><a href="#"><i class="fa fa-cogs"></i>Industry <span>(1405)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
                <li><a href="#">Furnishing <span>(13)</span></a></li>
              </ul>

            </li>
          </ul>
          <!-- END .CLASSIFIES-CATEGORY -->
         <!-- End grid layout -->

        <!--<div class="col-md-3 col-sm-6">
          <ul class="classifieds-category">
            <li><a href="#"><i class="fa fa-graduation-cap"></i>Education <span>(996)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
              </ul>

            </li>

            <li><a href="#"><i class="fa fa-book"></i>Libraries &amp; Public <span>(1256)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
                <li><a href="#">Furnishing <span>(13)</span></a></li>
              </ul>

            </li>
          </ul>
          <!-- END .CLASSIFIES-CATEGORY -->
         <!-- End grid layout -->

        <!--<div class="col-md-3 col-sm-6">
          <ul class="classifieds-category">
            <li><a href="#"><i class="fa fa-paper-plane-o"></i>Entertainment <span>(2726)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
              </ul>

            </li>

            <li><a href="#"><i class="fa fa-building-o"></i>Real Estate <span>(1131)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
                <li><a href="#">Furnishing <span>(13)</span></a></li>
                <li><a href="#">Health &amp; Beauty <span>(99)</span></a></li>
              </ul>

            </li>
          </ul>
          <!-- END .CLASSIFIES-CATEGORY -->

        </div> <!-- End grid layout -->
      </div> <!-- End .row -->
    </div> <!-- END .container-->
  </div> <!-- classifieds-content -->


 <!-- <div class="register-content">
    <div class="reg-heading">
      <h1><strong>Register</strong> now</h1>
    </div>

    <div class="registration-details">
      <div class="container">
        <div class="box regular-member">
          <h2><strong>Regular</strong> Member</h2>

          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>
          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>
          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>

          <a href="#" class="btn btn-default-inverse"><i class="fa fa-plus"></i> Register Now</a>
        </div>

        <div class="alternate">
          <h2>OR</h2>
        </div>

        <div class="box business-member">
          <h2><strong>Business</strong> Member</h2>

          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>
          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>
          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>

          <a href="#" class="btn btn-default-inverse"><i class="fa fa-plus"></i> Register Now</a>
        </div>

      </div>
      <!-- END .CONTAINER -->
    </div>
    <!-- END .REGISTRATION-DETAILS -->
  </div>
  <!-- END REGISTER-CONTENT -->

 <?php include 'footer.php';?>