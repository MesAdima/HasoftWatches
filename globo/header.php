
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php echo $title;?> :: Hasoft Watches</title>

  <!-- Stylesheets -->
  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

  <!-- Haswatches JSL loaded after JQuery-->
  <script type="text/javascript" src="js/haswatches.js"></script>
  
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
<?php if(isset($_GET['logged'])):?>
  <?php $msg[] ="Please login first to access that page";?>

<?php endif;?>
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
                <form method="POST"  action="index.php">
                  <input type="text" class="form-control" placeholder="Username" required="required" name="username">
                  <input type="password" class="form-control" placeholder="Password" name="pass" required="required" name="pass">
                  <input type="submit" name="login" class="btn btn-default" value="Login">
                </form>
              </div>
            </div>
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



        <!-- CALL TO ACTION -->
        <div class="header-call-to-action">
          <a href="cart.php" class="btn btn-default"><i class="fa fa-shopping-cart"></i> My Cart</a>
        </div><!-- END .HEADER-CALL-TO-ACTION -->

      </div><!-- END .CONTAINER -->
    </div>
    <!-- END .HEADER-TOP-BAR -->

    <!-- HEADER SEARCH SECTION -->
    <div class="header-search slider-home">
      <div class="header-search-bar">
        <form action="#">

          <div class="container">

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