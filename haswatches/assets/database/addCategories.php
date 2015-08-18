<?php 

include ('../api/dbConfig.php');

// echo "I WORK";exit;

switch($_GET['action']) {
	case 'add_category' :
	add_category($conn);
	break;
}
function add_category($conn) {
	$data = json_decode(file_get_contents("php://input"));
	$cat_name = $data->category_name;
    $cat_desc = $data->description;


	//print_r($data->description);return;
	$qry = 'INSERT INTO categories (category_name,description) values ("' . $cat_name . '","' . $cat_desc . '")';

	// Now execute the query using the connection object found in '../api/dbConfig.php'
    $qry_res = $conn->query($qry);

	if ($qry_res) {
		$arr = array('msg' => "Category Added Successfully");
		$jsn = json_encode($arr);
// print_r($jsn);
	} 
	else {
		$arr = array('msg' => "", 'error' => 'Error In inserting category( '.$conn->error. ')');
		$jsn = json_encode($arr);
// print_r($jsn);
	}
	echo $jsn;
}

?>