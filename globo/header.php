
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php echo $title;?> :: Hasoft Watches</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/style.css">
  <style>
  .error_response{
    width:100%; height:auto; background:red;color:#fff; padding: 10px;
    <?php if(empty($msg)):?>display: none;<?php endif;?>
  }
  </style>
  <!-- GOOGLE FONTS -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,800%7COpen+Sans:400italic,400,600,700' rel='stylesheet' type='text/css'>


  <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
  <![endif]-->

</head>

<body>
<div class="error_response">
  <?php if(!empty($msg)){
    foreach($msg as $m){
      echo $m;
    }
  }?>
</div>
<div id="main-wrapper">
  <header id="header">
    <div class="header-top-bar">
      <div class="container">
        

        <?php if (isset($_SESSION['login_user'])):?> 

          <!-- HEADER-LOGOUT -->
          <div >

            Welcome, <?php echo $_SESSION['userArray']['username'];?> | <a href="logout.php" class=""><i class="fa fa-power-off"></i> Logout</a>
          </div>

          <!-- END HEADER-LOGOUT -->
        <?php else: //Session not set?>
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
               
                <form method="POST"  action="index.php">
                  <input type="text" class="form-control" placeholder="Username" required="required" name="username">
                  <input type="password" class="form-control" placeholder="Password" name="pass" required="required" name="pass">
                  <input type="submit" name="login" class="btn btn-default" value="Login">
                  
                  <!--a href="welcomeuser.html" class="btn btn-o-default">Login</a--!>
                  <a href="" class="btn btn-link">Forgot Password?</a>
                </form>
              </div>

            </div> <!-- END .HEADER-LOGIN -->
        

        <!-- HEADER REGISTER -->
        
        <div class="header-register">
          <a href="#" class=""><i class="fa fa-plus-square"></i> Register</a>

          <div>
            <form method="POST" action="index.php" name="registerform" id="registerform">
              <input type="text" class="form-control" placeholder="Username" name="username" id="username">
              <input type="email" class="form-control" placeholder="Email" name="email" id="email">
              <input type="password" class="form-control" placeholder="Password" name="password" id="password">
              <input type="submit" class="btn btn-default" value="Register" name="register" id="register">
            </form>
          </div>

        </div>
        
        <!-- END .HEADER-REGISTER -->
      <?php endif; //End Session check?>


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
                <select class="" data-placeholder="-Select designer-" name="designer">
                        <?php foreach(getDesigners() as $designer):?>

                                 <option value="<?php echo $designer['_id'];?>"><?php echo $designer['name'];?></option>
                        <?php endforeach;?>

                  
                </select>
              </div>
              
               <div class="category-search">
                <select class="" data-placeholder="-Select category-" name="category">
                    <?php //We display the categories from DB

                      foreach(getCategories() as $category):?>
                            <option value="<?php echo $category['_id'];?>"><?php echo $category['category_name'];?></option>
                    <?php endforeach;?>
                  <?php include 'getProducts.php';?>
                </select>

                

              </div>
              <div class="select-location">
                <select class="" data-placeholder="-Select subcategory-" name="subcategory">
                        <?php foreach(getSubcategories() as $sub):?>

                                 <option value="<?php echo $sub['_id'];?>"><?php echo $sub['sub_category_name'];?></option>
                        <?php endforeach;?>

                  
                </select>
              </div>

             

              <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
            </div>
          </div> <!-- END .CONTAINER -->
        </form>
      </div> <!-- END .header-search-bar -->
      </div>