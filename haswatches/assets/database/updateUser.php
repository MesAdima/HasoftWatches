<?php 

include ('../api/dbConfig.php');

// echo "I WORK";exit;

switch($_GET['action']) {
	case 'update_user' :
	update_user($conn);
	break;
}
function update_user($conn) {
	$data = json_decode(file_get_contents("php://input"));
	//print_r($data);return;
	$id =$data->id;
	$first = $data->fname;
    $surname = $data->sname;
    $email = $data->email;
    $phne = $data->phone_number;


	//print_r($data->description);return;
	$qry = 'UPDATE admin set fname="' . $first . '", sname= "' . $surname . '", 
	email="' . $email . '", phone_number='.$phne.' WHERE _id=".$id';

	//print_r($qry);return;
	// Now execute the query using the connection object found in '../api/dbConfig.php'
    $qry_res = $conn->query($qry);

	if ($qry_res) {
		$arr = array('msg' => "User Updated Successfully");
		$jsn = json_encode($arr);
// print_r($jsn);
	} 
	else {
		$arr = array('msg' => "", 'error' => 'Error In updating user( '.$conn->error. ')');
		$jsn = json_encode($arr);
// print_r($jsn);
	}
	echo $jsn;
}

?>