<?php

//Enabling CORS
header("Access-Control-Allo-Origin:*");

include '../db/dbConfig.php';

include 'haswatches.lib.php';


if(!empty($_GET)){


	if(isset($_GET['action'])){

	$a =  $_GET['action'];

	switch($a){


		case 'addToCart':   //Add code to add to cart here

			  //product ID is set, now calling add to cart function
		      $cartData = addtocart($_GET['product'],$_GET['user']);
		      
		      if($cartData){
		      	$arr = array('msg' => "Product added to cart",
		      				 'status' => 200);

	
	
		      }

			break;
		case 'checkout':
						//Checkout user
				if(checkoutUser($_GET['code'], $_GET['user'])){

					$arr = array( 'status' => 200,
								  'msg' => 'Checked Out successfully');
				}else{
					$arr = array('status' => 504);
				}
			break;
		case 'addQty':
						$newQty = addQty($_GET['product'],$_GET['user']);

						updateCartTotals($_GET['user']);

						$itemData= getCartItemData($_GET['product'],$_GET['user']);

						$newTotal = number_format($itemData['total']);

						$newCartTotal = number_format(sumCart($_GET['user']));

					$arr = array( 'status' => 200,
								   'newValue' => $newQty,
								   'newTotal' => $newTotal,
								   'newCartTotal' => $newCartTotal,
								  'msg' => 'Quantity ADDED');

			break;
		case 'removeFromCart':
							if(removeFromCart($_GET['product'],$_GET['user'])){
								updateCartTotals($_GET['user']);

								$newCartTotal = number_format(sumCart($_GET['user']));

							$arr = array( 'status' => 200,
										   'newCartTotal' => $newCartTotal,
										  'msg' => 'Item Removed');
							}

	}






	}

	header("Content-type: application/json");	      
	$jsn = json_encode($arr);
	echo $jsn;
}
	
?>