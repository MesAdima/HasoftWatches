<?php 
/**
 * Haswatches PHP Function Library
 * @package Haswatches
 * @author Adima Mesa <adima.nyodero@strathmore.edu>
 * @note This file contains functions used by the files in the entire software.
 * Database Connection file already declared in each required action file.
 */

/**Function to get All categories - 
*/
function getCategories(){

	global $conn; //We instantiate the global connection virable
	$get = mysqli_query($conn,"SELECT * FROM categories") or die(mysqli_error($conn));

	if(mysqli_num_rows($get) > 0){ //Check if any rows exist

		while($category = mysqli_fetch_assoc($get)){ //Loop through all available rows

			$categories[] = $category;
		}

		return $categories; 
	}
}

/**Function to get Category Data - This gets the details of a single category
*/

function getCategory($CategoryID){
	global $conn;
	$get = mysqli_query($conn,"SELECT * FROM categories WHERE _id = ".$CategoryID."");

	if(mysqli_num_rows($get) > 0){//Category exists

			$data = mysqli_fetch_assoc($get);

			return $data;

	}else{//Category doesnt exist
		return false;
	}
}

/**Get all products in a certain category
*/

function getCategoryProds($CategoryID){
		global $conn;
		$get = mysqli_query($conn,"SELECT p.*, c.category_name,sub.sub_category_name FROM products p INNER JOIN categories c on p.categoryID = c._id INNER JOIN subcategories sub ON sub._id = p.subcategoryID WHERE p.categoryID = ".$CategoryID." ORDER BY _id DESC");

		if(mysqli_num_rows($get) > 0){//Category exists

			$data = mysqli_fetch_assoc($get);

			return $data;

	}else{//Category doesnt exist
		return false;
	}
}

/**Function to get designers

*/


function getDesigners(){
	global $conn;

	$get = mysqli_query($conn,"SELECT * FROM designers WHERE isActive = 1");

if(mysqli_num_rows($get) > 0){

	while ($designer = mysqli_fetch_assoc($get)){
		$designers[] = $designer;
	}

	return $designers;

}else{
	return false;
}	
}

/**Function to get Subcategories
*/

function getSubcategories(){
	global $conn;

	$get = mysqli_query($conn,"SELECT * FROM subcategories WHERE isActive = 1");

if(mysqli_num_rows($get) > 0){

	while ($sub = mysqli_fetch_assoc($get)){ //For each row, we update the array $subs
		$subs[] = $sub;
	}

	return $subs;

}else{
	return false;
}	
}


/**Function to get products*/
	function getProducts(){ //gets all products
	global $conn;

	
	$get = mysqli_query($conn,"SELECT p.*, c.category_name,sub.sub_category_name FROM products p INNER JOIN categories c on p.categoryID = c._id INNER JOIN subcategories sub ON sub._id = p.subcategoryID ORDER BY _id DESC LIMIT 4") or die (mysqli_error($conn));

	if(mysqli_num_rows($get) > 0){//Category exists
			while($product = mysqli_fetch_assoc($get)){

				$products[] = $product;
			}
			
			return $products;
	}else{//Category doesnt exist
		return false;
	}
}


/**Function to get one product Data*/
	function getProduct($productID){ //gets 1 product
	global $conn;

	
	$get = mysqli_query($conn,"SELECT * FROM products WHERE _id = ".$productID."") or die (mysqli_error($conn));

	$product = mysqli_fetch_assoc($get);

	return $product;
}


/**Add to cart function**/
	function addtocart($productID){ 
			global $conn;		


			$data = getProduct($productID);//Done

			$total = $data['price'] * $data['quantity'] ;

		
		$add = mysqli_query($conn, "INSERT INTO cart(userID, productID, quantity, price, total) VALUES ('".$_SESSION['userArray']['_id']."','".$data['productID']."','".$data['quantity']."','".$data['price']."','".$total."')");

		if($add){
			return true; 
		}else{
			return false;
		}
	}


/**
* Remove product from cart
* @param undefined $productID
* 
* @return
*/
function removeFromCart($productID){ //Removes a given product from the current users' cart
	
	global $conn;
	
	$delete = mysqli_query($conn,"DELETE FROM cart WHERE userID = ".$_SESSION['userArray']['_id']." AND productID = ".$productID."");
	
	if($delete){
		return true;
	}else{
		return false;
	}
}

/**
* Update Cart Quantity details
* @param undefined $productID
* @param undefined $qty
* 
* @return
*/
function updateCart($productID,$qty){
	global $conn;
	
	$update = mysqli_query($conn,"UPDATE table cart SET `quantity` = ".$qty." WHERE `productID` = ".$productID."");
	
	if($update){
		return true;
	}
	
}

/**
* Update cart product totals
* 
* @return
*/
function updateCartTotals(){
	
	global $conn;
	
	$update = mysqli_query($conn,"UPDATE table cart SET total = quantity * price WHERE userID = ".$_SESSION['userArray']['_id']."");
	
	if($update){
		return true;
	}
}

/**
* Protect Private pages from logged out users
* 
* @return
*/
function pageProtect(){
	
	if(!isset($_SESSION['login_user'])){
		
		header('Location: index.php?logged=out');
	}
	
	
}

/**Get number of all products in a certain category
*/

function getProductNumber($CategoryID){
		global $conn;
		$get = mysqli_query($conn,"SELECT COUNT(_id) as number FROM products WHERE categoryID = ".$CategoryID."");

		if(mysqli_num_rows($get) > 0){//Category exists

			$data = mysqli_fetch_assoc($get);

			return $data;

	}else{//Category doesnt exist
		return false;
	}
}
?>