<?php 
require_once '../includes/dbConfig.php';
$query = "select * from categories where isActive = 1";

$result = $mysqli->query($query) or die ($mysqli->error.__LINE__);
//echo $result;
$arr = array();

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()){
		$arr[] = $row;
	}

}



//JSON ecode

echo $json_response = json_encode($arr);


?>