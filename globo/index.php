
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Hasoft Watches</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/style.css">

  <!-- GOOGLE FONTS -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,800%7COpen+Sans:400italic,400,600,700' rel='stylesheet' type='text/css'>

  <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
  <![endif]-->

</head>

<body>

<div id="main-wrapper">
  <header id="header">
    <div class="header-top-bar">
      <div class="container">
        <!-- HEADER-LOGIN -->
        <div class="header-login">

          <a href="#" class=""><i class="fa fa-power-off"></i> Login</a>

          <div>

          <!--<script type="text/javascript"> 
          function validateLogin() {
    var username = document.forms["LoginForm"]["Username"].value;
    if (username == null || username == "") {
        alert("Username must be filled out");
        return false;
    }
}</script>-->
           
            <form method="POST"  action="phpfiles/login.php">
              <input type="text" class="form-control" placeholder="Username" required="required" name="username">
              <input type="password" class="form-control" placeholder="Password" name="pass" required="required" name="pass">
              <input type="submit" name="login" class="btn btn-default" value="Login">
              <span><?php echo $error; ?></span>
              <!--a href="welcomeuser.html" class="btn btn-o-default">Login</a--!>
              <a href="" class="btn btn-link">Forgot Password?</a>
            </form>
          </div>

        </div> <!-- END .HEADER-LOGIN -->

        <!-- HEADER REGISTER -->
        
        <div class="header-register">
          <a href="#" class=""><i class="fa fa-plus-square"></i> Register</a>

          <div>
            <form method="POST" action="phpfiles/register.php" name="registerform" id="registerform">
              <input type="text" class="form-control" placeholder="Username" name="username" id="username">
              <input type="email" class="form-control" placeholder="Email" name="email" id="email">
              <input type="password" class="form-control" placeholder="Password" name="password" id="password">
              <input type="submit" class="btn btn-default" value="Register" name="register" id="register">
            </form>
          </div>

        </div>
        
        <!-- END .HEADER-REGISTER -->

        <!-- HEADER-LOG0 -->
        <div class="header-logo text-center">
          <h2><a href="index-2.html">HAS<i class="fa fa-globe"></i>FT</a></h2>
          <h2>WATCHES</h2>
        </div>
        <!-- END HEADER LOGO -->

        <!-- HEADER-SOCIAL -->
        <div class="header-social">
          <a href="#">
            <span><i class="fa fa-share-alt"></i></span>
            <i class="fa fa-chevron-down social-arrow"></i>
          </a>

          <ul class="list-inline">
            <li class="active"><a href="#"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
          </ul>
        </div>
        <!-- END HEADER-SOCIAL -->

        <!-- HEADER-LANGUAGE -->
        <div class="header-language">
          <a href="#">
            <span>EN</span>
            <i class="fa fa-chevron-down"></i>
          </a>

          <ul class="list-unstyled">
            <li class="active"><a href="#">EN</a></li>
            <li><a href="#">FR</a></li>
            <li><a href="#">PT</a></li>
            <li><a href="#">IT</a></li>
          </ul>
        </div> <!-- END HEADER-LANGUAGE -->

        <!-- CALL TO ACTION -->
        <div class="header-call-to-action">
          <a href="#" class="btn btn-default"><i class="fa fa-plus"></i> Intl Orders</a>
        </div><!-- END .HEADER-CALL-TO-ACTION -->

      </div><!-- END .CONTAINER -->
    </div>
    <!-- END .HEADER-TOP-BAR -->

    <!-- HEADER SEARCH SECTION -->
    <div class="header-search slider-home">
      <div class="header-search-bar">
        <form action="#">

          <div class="search-toggle">
            <div class="container">
              <div class="distance-range">
                <p>
                  <label for="amount-search">Price range:</label>
                  <input type="text" id="amount-search">
                </p>

                <div id="slider-range-search"></div>
              </div>  <!-- end #distance-range -->

              <!--<div class="distance-range">
                <p>
                  <label for="amount-search">Days published:</label>
                  <input type="text" id="amount-search-day">
                </p>

                <div id="slider-range-search-day"></div>
              </div>  <!-- end #distance-range -->

              <!--<p>Location:</p>
              <div class="select-country">
                <select class="" data-placeholder="-Select Country-">
                  <option value="option1">option 1</option>
                  <option value="option2">option 2</option>
                  <option value="option3">option 3</option>
                </select>
              </div>

              <div class="region">
                <input type="text" placeholder="-Region-">
              </div>

              <div class="address">
                <input type="text" placeholder="-Address-">
              </div>-->

              <div class="category-search">
                <select class="" data-placeholder="-Search by collection-">
                  <!--<option value="option1">option 1</option>
                  <option value="option2">option 2</option>
                  <option value="option3">option 3</option>-->
                </select>
              </div>

               <div class="category-search">
                <select class="" data-placeholder="-Search by release year-">
                  <!--<option value="option1">option 1</option>
                  <option value="option2">option 2</option>
                  <option value="option3">option 3</option>-->
                </select>
              </div>

              <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>

            </div>
          </div> <!-- END .search-toggle -->

          <div class="container">
            <button class="toggle-btn" type="submit"><i class="fa fa-bars"></i></button>

            <div class="search-value">
              <div class="keywords">
                <input type="text" class="form-control" placeholder="Designer">
              </div>

              <div class="select-location">
                <select class="" data-placeholder="Select Gender">
                  <option value="option1">Male</option>
                  <option value="option2">Female</option>
                  <option value="option3">Unisex</option>
                  <!--<option value="option4">option 4</option>-->
                </select>
              </div>

              <div class="category-search">
                <select class="" data-placeholder="-Select category-">
                  <!--<option value="option1">Grail</option>
                  <option value="option2">Sport</option>
                  <option value="option3">Digital</option>
                  <option value="option4">Dress</option>
                  <option value="option4">Pilot/Flieger</option>
                  <option value="option4">Fashion</option>
                  <option value="option4">Heirloom/Family</option>-->
                  <?php include 'getProducts.php';?>
                </select>

                

              </div>

              <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
            </div>
          </div> <!-- END .CONTAINER -->
        </form>
      </div> <!-- END .header-search-bar -->

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
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-clock-o"></i>Wristwatches</a>
                        </div>
                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-futbol-o"></i>Sport Watches</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-play"></i>Digital Watches</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-male"></i>Dress Watches</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-plane"></i>Pleiger &amp; Pilot Watches</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-text-height"></i>Fashion</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><i class="fa fa-apple"></i>Smart Watches</a>
                        </div>

                      </div>

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

  <!-- OUR PARTNER SLIDER BEGIN -->
    <div class="our-partners">
      <div class="container">
        <h4>Our Partners</h4>

        <div id="partners-slider" class="owl-carousel owl-theme">
          <div class="item"><a href="#"><img src="img/content/partner1.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner2.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner3.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner4.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner5.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner6.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner1.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner2.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner3.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner4.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner5.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner6.png" alt=""></a></div>
        </div>
      </div>
    </div>
    <!-- END OUR PARTNER SLIDER -->

  <footer id="footer">
    <div class="main-footer">

      <div class="container">
        <div class="row">

          <div class="col-md-3 col-sm-6">
            <div class="about-globo">
              <h3>About Hasoft</h3>

              <div class="footer-logo">
                <!--<a href="#"><img src="img/footer_logo.png" alt=""></a>
                <span></span> <!-- This content for overlay effect -->
              </div>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
                suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

            </div> <!-- End .about-globo -->
          </div> <!-- end Grid layout-->

          <div class="col-md-3 col-sm-6">
            <h3>Latest From Blog</h3>

            <div class="latest-post clearfix">
              <div class="post-image">
                <img src="img/content/latest_post_1.jpg" alt="">

                <p><span>12</span>Sep</p>
              </div>

              <h4><a href="#">Bloom in Style!</a></h4>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>

            <div class="latest-post clearfix">
              <div class="post-image">
                <img src="img/content/latest_post_2.jpg" alt="">

                <p><span>09</span>Sep</p>
              </div>

              <h4><a href="#">Hey Hey Mr DJ</a></h4>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
          </div> <!-- end Grid layout-->

          <div class="col-md-3 col-sm-6 clearfix">
            <div class="popular-categories">
              <h3>Popular Categories</h3>

              <ul>
                <li><a href="#"><i class="fa fa-shopping-cart"></i>E-commerce</a></li>
                <li><a href="#"><i class="fa fa-paper-plane-o"></i>Entertainment</a></li>
                <li><a href="#"><i class="fa fa-cogs"></i>Industry</a></li>
                <li><a href="#"><i class="fa fa-book"></i>Libraries &amp; Public Office</a></li>
                <li><a href="#"><i class="fa fa-building-o"></i>Real Estate</a></li>
              </ul>
            </div> <!-- end .popular-categories-->
          </div> <!-- end Grid layout-->

          <div class="col-md-3 col-sm-6">
            <div class="newsletter">
              <h3>Newsletter</h3>

              <form action="#">
                <input type="Email" placeholder="Email address">
                <button><i class="fa fa-plus"></i></button>
              </form>

              <h3>Keep In Touch</h3>

              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div> <!-- end .newsletter-->

          </div> <!-- end Grid layout-->
        </div> <!-- end .row -->
      </div> <!-- end .container -->
    </div> <!-- end .main-footer -->

    <div class="copyright">
      <div class="container">
        <p>Copyright 2014 &copy; globo. All rights reserved. Powered by  <a href="#">Uouapps</a></p>

        <ul class="list-inline">
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Shortcodes</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Pricing</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div> <!-- END .container -->
    </div> <!-- end .copyright-->
  </footer> <!-- end #footer -->



</div> <!-- end #main-wrapper -->

<!-- Scripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<script src="js/jquery.ba-outside-events.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="js/gomap.js"></script>
<script type="text/javascript" src="js/gmaps.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>