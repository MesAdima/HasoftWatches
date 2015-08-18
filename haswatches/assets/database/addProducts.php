<?php 

include ('../api/dbConfig.php');

// echo "I WORK";exit;

switch($_GET['action']) {
	case 'add_product' :
	add_products($conn);
	break;
}
function add_products($conn) {
	$data = json_decode(file_get_contents("php://input"));
	print_r($data);return;
	$pname = $data->name;
    $cat = $data->category;
    $subcat = $data->subcategory;
    $prc = $data->price;


	//print_r($data->description);return;
	$qry = 'INSERT INTO products (name, categoryID, subcategoryID, price) values 
	("' . $pname . '",' . $cat . ',' . $subcat . ',' . $prc . ')';

	// Now execute the query using the connection object found in '../api/dbConfig.php'
    $qry_res = $conn->query($qry);

	if ($qry_res) {
		$arr = array('msg' => "Product Added Successfully");
		$jsn = json_encode($arr);
// print_r($jsn);
	} 
	else {
		$arr = array('msg' => "", 'error' => 'Error In inserting product( '.$conn->error. ')');
		$jsn = json_encode($arr);
// print_r($jsn);
	}
	echo $jsn;
}

?>