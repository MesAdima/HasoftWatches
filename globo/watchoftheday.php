<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Sample-Page</title>

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
            <form action="#">
              <input type="text" class="form-control" placeholder="Username">
              <input type="password" class="form-control" placeholder="Password">
              <input type="submit" class="btn btn-default" value="Login">
              <a href="#" class="btn btn-link">Forgot Password?</a>
            </form>
          </div>

        </div> <!-- END .HEADER-LOGIN -->

        <!-- HEADER REGISTER -->
        <div class="header-register">
          <a href="#" class=""><i class="fa fa-plus-square"></i> Register</a>

          <div>
            <form action="#">
              <input type="text" class="form-control" placeholder="Username">
              <input type="email" class="form-control" placeholder="Email">
              <input type="password" class="form-control" placeholder="Password">
              <input type="submit" class="btn btn-default" value="Register">
            </form>
          </div>

        </div> <!-- END .HEADER-REGISTER -->

        <!-- HEADER-LOG0 -->
        <div class="header-logo text-center">
          <h2><a href="index-2.html">GL<i class="fa fa-globe"></i>BO</a></h2>
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
          <a href="#" class="btn btn-default"><i class="fa fa-plus"></i> Add Listing</a>
        </div><!-- END .HEADER-CALL-TO-ACTION -->

      </div><!-- END .CONTAINER -->
    </div>
    <!-- END .HEADER-TOP-BAR -->

    <!-- HEADER SEARCH SECTION -->
    <div class="header-search price-header-height">
      <div class="header-search-bar">
        <form action="#">

          <div class="search-toggle">
            <div class="container">
              <div class="distance-range">
                <p>
                  <label for="amount-search">Distance:</label>
                  <input type="text" id="amount-search">
                </p>

                <div id="slider-range-search"></div>
              </div>  <!-- end #distance-range -->

              <div class="distance-range">
                <p>
                  <label for="amount-search">Days published:</label>
                  <input type="text" id="amount-search-day">
                </p>

                <div id="slider-range-search-day"></div>
              </div>  <!-- end #distance-range -->

              <p>Location:</p>
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
              </div>

              <div class="category-search">
                <select class="" data-placeholder="-Select category-">
                  <option value="option1">option 1</option>
                  <option value="option2">option 2</option>
                  <option value="option3">option 3</option>
                </select>
              </div>

              <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>

            </div>
          </div>  <!-- END .search-toggle -->


          <div class="container">
            <button class="toggle-btn" type="submit"><i class="fa fa-bars"></i></button>

            <div class="search-value">
              <div class="keywords">
                <input type="text" class="form-control" placeholder="Keywords">
              </div>

              <div class="select-location">
                <select class="" data-placeholder="-Select location-">
                  <option value="option1">option 1</option>
                  <option value="option2">option 2</option>
                  <option value="option3">option 3</option>
                  <option value="option4">option 4</option>
                </select>
              </div>

              <div class="category-search">
                <select class="" data-placeholder="-Select category-">
                  <option value="option1">option 1</option>
                  <option value="option2">option 2</option>
                  <option value="option3">option 3</option>
                  <option value="option4">option 4</option>
                </select>
              </div>

              <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
            </div>
          </div> <!-- END .CONTAINER -->
        </form>
      </div> <!-- END .header-search-bar -->

      <div class="sample-page-heading"><span><img src="img/content/bluedw.jpg" alt="">
        </span> <!-- for dark-overlay on the bg -->

        <div class="container">

          <h1><span>WATCH OF THE DAY</span></h1>

        </div> <!-- END .container-->
      </div> <!-- END .about-us-heading -->

    </div> <!-- END .SEARCH and slide-section -->


    <div class="header-nav-bar">
      <div class="container">
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
      </div> <!-- end .container -->
    </div> <!-- end .header-nav-bar -->


  <div id="page-content">
    <div class="container">
      <div class="page-content">
        <div class="sample-page">
          <div class="row">
            <div class="col-md-8">
              <h3>It's a Daniel Wellington Monday!</h3>

              <p><strong>We've got that summer-time sadness but we're super excited for the Daniel Washington fall release!</strong>
              </p>

              <p>The story behind Daniel Wellington begins with a trip half way around the globe where Filip Tysander, the founder of Daniel Wellington, met an intriguing gentleman from the British Isles. The man had the inspiring ability to be genteel but still relaxed and unpretentious. He had an impeccable style and loved to wear his watches on old weathered NATO straps. His name? Well, Daniel Wellington, of course.
              </p>

              <div class="post-image">
                <img src="img/content/dapper-york-rose-gold.png" alt="">
              </div>

              <p>The preppy trend is bigger than ever before but we felt that there was an empty space in the watch market. There was something missing and the Daniel Wellington team aims to fill that gap.

Our vision is that when someone thinks of a preppy dressed person, he or she is wearing a Daniel Wellington watch.
              </p>

              <!--<p>Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor,
                et mollis pede metus eget nisi. Praesent sodales velit quis augue.
                Cras suscipit, urna at aliquam rhoncus, urna quam viverra nisi, in interdum massa nibh nec erat.
              </p>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.
                Cras vel lorem. Etiam pellentesque aliquet tellus.
                Phasellus pharetra nulla ac diam. Quisque semper justo at risus.
                Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus,
                sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet,
                elit magna vulputate arcu, vel tempus metus leo non est.
                Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque.
                Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor,
                et mollis pede metus eget nisi. Praesent sodales velit quis augue. Cras suscipit,
                urna at aliquam rhoncus, urna quam viverra nisi, in interdum massa nibh nec erat.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
                Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Donec venenatis,
                turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci.
                Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est.
                Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare,
                ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget nisi.
                Praesent sodales velit quis augue. Cras suscipit, urna at aliquam rhoncus, urna quam viverra nisi,
                in interdum massa nibh nec erat.
              </p>-->

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

                  </div> <!-- end .single-product -->

                  <!--<div class="single-product">
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

                      </div> <!-- end .rating -->
                    <!--</figure>

                    <h4><a href="#">Old Bookman's</a></h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit..</p>

                    <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                  </div>--> <!-- end .single-product -->

                </div> <!-- end .recently-added -->

                <!--<div class="square-button">
                  <button><img src="img/content/square-button.png" alt=""></button>

                  <button><img src="img/content/square-button.png" alt=""></button>
                </div> <!-- end .sqare-button -->

                <!--<div class="latest-post-content">
                  <h2>Latest Stock Updates</h2>

                  <div class="latest-post clearfix">

                    <div class="post-image">
                      <img src="img/content/bluedw.jpg" alt="">

                      <p><span>12</span>Sep</p>
                    </div>

                    <h4><a href="#">Post Title Goes Here</a></h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                    <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>
                  </div> <!-- end .latest-post -->

                  <!--<div class="latest-post clearfix">
                    <div class="post-image">
                      <img src="img/content/latest_post_2.jpg" alt="">

                      <p><span>09</span>Sep</p>
                    </div>

                    <h4><a href="#">Post Title Goes Here</a></h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                    <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>
                  </div> <!-- end .latest-post -->
                </div> <!-- end .latest-post-content -->

                <!--<div class="medium-rectangle">
                  <img src="img/content/medium-rectangle.jpg" alt="">
                </div> <!-- end .medium-rectangle -->

              </div> <!-- end .post-sidebar -->
            </div> <!-- end .grid-layout -->

          </div> <!-- end .row -->
        </div> <!-- end .sample-page -->
      </div> <!-- end .page-content -->
    </div> <!-- end .container -->

  </div> <!-- end #page-content -->


  <footer id="footer">
    <div class="main-footer">

      <div class="container">
        <div class="row">

          <div class="col-md-3 col-sm-6">
            <div class="about-globo">
              <h3>About Globo</h3>

              <div class="footer-logo">
                <a href="#"><img src="img/footer_logo.png" alt=""></a>
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

              <h4><a href="#">Post Title Goes Here</a></h4>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>

            <div class="latest-post clearfix">
              <div class="post-image">
                <img src="img/content/latest_post_2.jpg" alt="">

                <p><span>09</span>Sep</p>
              </div>

              <h4><a href="#">Post Title Goes Here</a></h4>

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
