<?php 

include ('../api/dbConfig.php');

// echo "I WORK";exit;

switch($_GET['action']) {
	case 'add_designer' :
	add_designer($conn);
	break;
}
function add_designer($conn) {
	$data = json_decode(file_get_contents("php://input"));
	$dname = $data->name;


	//print_r($data->description);return;
	$qry = 'INSERT INTO designers (name) values ("' . $dname . '")';

	// Now execute the query using the connection object found in '../api/dbConfig.php'
    $qry_res = $conn->query($qry);

	if ($qry_res) {
		$arr = array('msg' => "Designer Added Successfully");
		$jsn = json_encode($arr);
// print_r($jsn);
	} 
	else {
		$arr = array('msg' => "", 'error' => 'Error In inserting designer( '.$conn->error. ')');
		$jsn = json_encode($arr);
// print_r($jsn);
	}
	echo $jsn;
}

?>