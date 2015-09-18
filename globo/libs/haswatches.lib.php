<?php 
/**
 * Haswatches PHP Function Library
 * @package Haswatches
 * @author Adima Mesa <adima.mesa@strathmore.edu>
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

		return $categories; //This is an array for all the rows. We will use foreach to display in menu
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
		$get = mysqli_query($conn,"SELECT * FROM products WHERE categoryID = ".$CategoryID."");

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


?>