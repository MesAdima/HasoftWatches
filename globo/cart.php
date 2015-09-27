<?php

include 'db/dbConfig.php';

include '/libs/haswatches.lib.php';

session_start(); 

pageProtect();

$msg = array();

//session_start(); // Starting Session - Picks up session variables if set
?>

<?php


/**Check for category referenced by URL and get All products in this category

*/


?>

<?php

$title = 'My Shopping Cart';

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

            
            </li>

            <li><a href="price-listing.php"><i class="fa fa-truck"></i>We deliver</a></li>
            <!--<li><a href="about-us.html">About Us</a></li>-->
            <li><a href="contact-us.php"><i class="fa fa-phone"></i>Contact Us</a></li>
          </ul>
        </nav>
      </div> <!-- end .header-nav-bar -->
    </div> <!-- end .container -->



  <div class="featured-listing" id= "featured-list">
    <div class="container">
      <div class="row clearfix">
      
        <h2><strong>My Shopping Cart</strong></h2>
            <p style="color:#fff"><i>You can edit cart contents or checkout</i></p>
              

      </div>  <!-- end .row -->
      <div class="row">
        <table class="table cart" width="80%" style="color: #fff; border:1px #fff solid;">
            <thead>
            <tr>
                      <th> Product ID</th>
                      <th> Name </th>
                      <th> Qty </th>
                      <th> Sub Total</th>
                  </tr>
            </thead>
            <tbody>
              <?php foreach(getCart() as $item):?>
                  <tr id="item_<?php echo $item['productID'];?>">
                        <td><?php echo $item['productID'];?></td>
                        <td><?php echo $item['name'];?></td>
                        <td>
                          <button onclick="subQty(<?php echo $item['productID'];?>,<?php echo $_SESSION['userArray']['_id'];?>)" class="btn btn-default" style="padding: 3px">-</button>

                            <span id="qty_<?php echo $item['productID'];?>"><?php echo $item['quantity'];?></span>

                         <button onclick="javascript:addQty(<?php echo $item['productID'];?>,<?php echo $_SESSION['userArray']['_id'];?>)" style="padding: 3px" class="btn btn-default">+</button>

                        </td>

                        <td><span id="total_<?php echo $item['productID'];?>"><?php echo number_format($item['total']);?></span>&nbsp;<i onclick="javascript:removeCartItem(<?php echo $item['productID'];?>,<?php echo $_SESSION['userArray']['_id'];?>)" style="cursor: pointer;" class="fa fa-close"></i>
                        </td>

                        
                  </tr>
              <?php endforeach;?>
              <tr>
                    <td colspan="3"><p>Total</p></td>
                    
                    <td><span id="cartTotal"><?php echo number_format(sumCart($_SESSION['userArray']['_id']));?></span></td>
              </tr>
            </tbody>
        </table>
      </div>
      <div id="checkoutResponse" class="row checkoutResponse">
        
      </div>
      <div class="row" id="codeInput" style="display:none;">
            
            <label style="color:#fff">Input M-PESA Transaction Code:</label><br><br>
            <input id="mpesa" type="text" placeholder="M-PESA Transaction Code" required><br><br>
            <button onclick="javascript: checkout(this,$('#mpesa').val(),<?php echo $_SESSION['userArray']['_id'];?>);" class="btn btn-success pull-left">Submit Code</button>
        <br><br>
      </div>
      <div class="discover-more">
       <a onclick="javascript: openCodeInput();" class="btn btn-default text-center pull-right" href="#"><i class="fa fa-shopping-cart"></i>Checkout</a>

             </div>
    </div>  <!-- end .container -->
  </div>  <!-- end .featured-listing -->

    


 <?php include 'footer.php';?>