<?php

include ('/phpfiles/session.php');
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Watch of the Day</title>

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

          <a href="index.php" class=""><i class="fa fa-power-off"></i> Logout</a>

          <div>

            <!--<form action="#">
              <input type="text" class="form-control" placeholder="Username">
              <input type="password" class="form-control" placeholder="Password">
              <input type="submit" class="btn btn-default" value="Login">
              <a href="#" class="btn btn-link">Forgot Password?</a>
            </form>
          </div>-->

        </div> <!-- END .HEADER-LOGIN -->

        <!-- HEADER REGISTER -->
        <!--div class="header-register">
          <a href="#" class=""><i class="fa fa-plus-square"></i> Register</a>

          <div>
            <form action="#">
              <input type="text" class="form-control" placeholder="Username">
              <input type="email" class="form-control" placeholder="Email">
              <input type="password" class="form-control" placeholder="Password">
              <input type="submit" class="btn btn-default" value="Register">
            </form>
          </div -->

        </div> <!-- END .HEADER-REGISTER -->

        <!-- HEADER-LOG0 -->
        <div class="header-logo text-center">
          <h2><a href="index-2.html">HAS<i class="fa fa-globe"></i>FT</a></h2>
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
          <a href="#" class="btn btn-default"><i class="fa fa-plus"></i> Intl. Orders</a>
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

            <div class="">
              <select class="" data-placeholder="-Select designer-">
                  <?php
                  include('/phpfiles/designers.php');
                  while ($design = mysqli_fetch_assoc($resultdesigners)) {
                  echo "<option value='{".$design['_id']."}'>".$design['name']."</option>";
                  }
                ?>
                </select>
              </div>

              <div class="category-search">
                <select class="" data-placeholder="-Select category-">
                  <?php
                  include('/phpfiles/categories.php');
                  while ($cat = mysqli_fetch_assoc($resultcategories)) {
                  echo "<option value='{".$cat['_id']."}'>".$cat['category_name']."</option>";
                  }
                ?>
                </select>
              </div>

              <div class="select-location">
                <select class="" data-placeholder="-Select Subcategory-">
                  <?php
                  include('/phpfiles/subcategories.php');
                  while ($subcat = mysqli_fetch_assoc($resultsubcategories)) {
                  echo "<option value='{".$subcat['_id']."}'>".$subcat['sub_category_name']."</option>";
                  }
                ?>
                </select>
              </div>

              <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
            </div>
          </div> <!-- END .CONTAINER -->
        </form>
      </div> <!-- END .header-search-bar --> <!-- END .header-search-bar -->

      <div class="sample-page-heading">
        <span></span> <!-- for dark-overlay on the bg -->

        <div class="container">

          <h1>WELCOME BACK <span><?php echo $login_session; ?></span></h1>

        </div> <!-- END .container-->
      </div> <!-- END .about-us-heading -->

    </div> <!-- END .SEARCH and slide-section -->



    <div class="container">
      <div class="header-nav-bar home-slide">
        <nav>

          <button><i class="fa fa-bars"></i></button>

          <ul class="primary-nav list-unstyled">
            <li class="bg-color"><a href="index.php"><i class="fa fa-home"></i>Home</a>
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
            <!--<li><a href="shortcodes.html">Shortcodes</a></li>-->

            <li class="">
              <!--<a href="#">Blog<i class="fa fa-angle-down"></i></a>-->

              <!--<ul>
                <li><a href="blog-list.html">Blog list</a></li>
                <li><a href="blog-post.html">Blog-post</a></li>
              </ul>-->

            </li>

            <li><a href="cart.html">My Cart</a></li>
            <li><a href="price-listing.html">My Wishlist</a></li>
            <!--<li><a href="about-us.html">About Us<ML/a></li>-->
            <li><a href="contact-us.html">Contact Us</a></li>
          </ul>
        </nav>
      </div> <!-- end .header-nav-bar -->
    </div> <!-- end .container -->
  </header> <!-- end #header -->

  <div id="page-content">
    <div class="container">
      <div class="page-content">
        <div class="sample-page">
          <div class="row">
            <div class="col-md-8">
              <h3>We've got a couple of new picks just for you!</h3>

              <!--<p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.
                Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
                Quisque semper justo at risus.</strong>
              </p>

              <p>Donec venenatis, turpis vel hendrerit interdum,
                dui ligula ultricies purus, sed posuere libero dui id orci.
                Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu,
                vel tempus metus leo non est. Etiam sit amet lectus quis est congue mollis.
                Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat,
                purus sapien ultricies dolor, et mollis pede metus eget nisi. Praesent sodales velit quis augue.
                Cras suscipit, urna at aliquam rhoncus, urna quam viverra nisi, in interdum massa nibh nec erat.
              </p>-->

              <!--<div class="post-image" >
              <div class="slide-content">
                <img src="img/content/watch_macro.jpg" alt="">
                </div>
              </div>-->

              <div class="featured-listing" id= "featured-list">
    <div class="container">
      <div class="row clearfix">
        <h2 style="float:left"><strong>Your Picks!</strong></h2>

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

          <!--<div class="single-product">
            <figure>
              <img src="img/content/post-img-4.jpg" alt="">

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
              <img src="img/content/post-img-5.jpg" alt="">

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

          </div>--> <!-- end .single-product -->

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

          </div> <!-- end .single-product -->

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

          </div>--> <!-- end .single-product -->

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

          </div>--> <!-- end .single-product -->

        </div>

      </div>  <!-- end .row -->

      <div class="discover-more">

        <a class="btn btn-default text-center" style= "float:left"href="index.html"><i class="fa fa-plus-square-o"></i>Discover More</a>
      </div>
    </div>  <!-- end .container -->
  </div>
              <!--<div class="item"><img src="img/content/watch_macro.jpg" alt="">
            <div class="slide-content">
              <a href="#"><!--<img src="img/slider-logo.png" alt="">--></a>
              <!--<h3><a href="index-2.html">HAS<i class="fa fa-globe"></i>FT</a></h3>

              <h1>IN <span>THE</span> NICK</h1>
              <h2>OF TIME</h2>

            </div>

          </div>-->

              <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
                Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Donec venenatis,
                turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci.
                Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est.
                Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque.
              </p>

              <p>Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor,
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