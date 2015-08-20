<?php 

include ('../api/dbConfig.php');

// echo "I WORK";exit;

switch($_GET['action']) {
	case 'add_user' :
	add_user($conn);
	break;
}
function add_user($conn) {
	$data = json_decode(file_get_contents("php://input"));
	//print_r($data);return;
	$first = $data->fname;
    $surname = $data->sname;
    $email = $data->email;
    $phne = $data->phone_number;


	//print_r($data->description);return;
	$qry = 'INSERT INTO admin (fname, sname, email, phone_number) VALUES 
	("' . $first . '",
	"' . $surname . '",
	"' . $email . '",
	'.$phne.')';
	//print_r($qry);return;
	// Now execute the query using the connection object found in '../api/dbConfig.php'
    $qry_res = $conn->query($qry);

	if ($qry_res) {
		$arr = array('msg' => "User Added Successfully");
		$jsn = json_encode($arr);
// print_r($jsn);
	} 
	else {
		$arr = array('msg' => "", 'error' => 'Error In inserting user( '.$conn->error. ')');
		$jsn = json_encode($arr);
// print_r($jsn);
	}
	echo $jsn;
}

?>