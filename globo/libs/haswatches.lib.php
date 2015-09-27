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
		$data = mysqli_fetch_all($get);
		return $data;
	
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
	function addtocart($productID,$userID){ 
			global $conn;		


			$data = getProduct($productID);//Done

			$total = $data['price'] ; //here we assume Qty is 1

		
		$add = mysqli_query($conn, "INSERT INTO cart(userID, productID, quantity, price, total) VALUES ('".$userID."','".$productID."',1,'".$data['price']."','".$total."')");

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
function removeFromCart($productID,$user){ //Removes a given product from the current users' cart
	
	global $conn;
	
	$delete = mysqli_query($conn,"DELETE FROM cart WHERE userID = ".$user." AND productID = ".$productID."");
	
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
function updateCartTotals($user){
	
	global $conn;
	

	$update = mysqli_query($conn,"UPDATE cart SET total = (quantity * price) WHERE userID = ".$user."");
	
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

/**Get CArt Data
*/

function getCart(){
	global $conn;

	$get = mysqli_query($conn,"SELECT p.name,c.* FROM products p INNER JOIN cart C ON p._id = c.productID WHERE c.userID = ".$_SESSION['userArray']['_id'].""); //Lets try this sessions

	if(mysqli_num_rows($get) > 0){

		while($item = mysqli_fetch_assoc($get)){

			$items[] = $item;
 		}

 		return $items;

	}else{
		return false;
	}

}

/**Function to sum total of a cart
*/

function sumCart($user){

	global $conn;

	$sum = mysqli_query($conn,"SELECT SUM(total) as Total from cart WHERE userID =".$user." ");

	$sum = mysqli_fetch_assoc($sum);

	return $sum['Total'];
}


/*****CHECK OUT SECTION**
*PLATFORM SIMULATED: MPESA.
*PROCEDURE:
		*USer Adds products to cart.
		*User Edits cart as appropriate if necessary & updates cart.
		*User Clicks Check out.
		*User is prompted to pay via MPESA and insert transaction code. 
			*NB: Shipping Address is assumed already added in user profile.
		__SIMULATION_  
						*Admin ads sample transaction code to DB & Amount.
		*User enters the transaction code.
		*Verification is done to see if code exists and if the amount is equal to cart total amount
		*Relevant response shown and if success, user is redirected to home page/Thank you page.
				


**/

/**Functin Auths Checkout params
*/

function checkoutUser($transactionID,$user){

	global $conn;

	$check = mysqli_query($conn,"SELECT id FROM payments WHERE transactionID = '".$transactionID."' AND amountPaid= ".sumCart($user)."") or die(mysqli_error($conn));

	if(mysqli_num_rows($check) > 0){
		return true;
	}else{
		return false;
	}

}

function getCartItemData($productID,$userID){

	global $conn;

	$check = mysqli_query($conn,"SELECT * FROM cart WHERE productID =".$productID." AND userID =".$userID."");
	if(mysqli_num_rows($check)> 0){
		$data = mysqli_fetch_assoc($check);

		return $data;
	}else{
		return false;
	}
}


function addQty($productID,$user){
	global $conn;

	$add= mysqli_query($conn,"UPDATE cart SET quantity = quantity + 1 WHERE productID = ".$productID." AND userID = ".$user."");
	if($add){
		$itemData= getCartItemData($productID,$user);

		return $itemData['quantity'];

	}else{
		return false;
	}
}
?>