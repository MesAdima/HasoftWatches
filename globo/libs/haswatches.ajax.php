<?php

//Enabling CORS
header("Access-Control-Allo-Origin:*");

include 'db/dbConfig.php';

include '/libs/haswatches.lib.php';


if(isset($_GET['prodid']))
{
	  //product ID is set, now calling add to cart function
      $cartData = addtocart($_GET['prodid']);
      $arr = array('msg' => "Product added to cart");
	  $jsn = json_encode($arr);

}else{

	echo "Parameters Error";
}
	echo $jsn;
?>