<?php

 include ('../db/dbConfig.php');


$query = "SELECT _id, name FROM designers WHERE isActive = 1 ORDER BY _id";

// Now execute the query and store results in a varible called $results
$resultdesigners = mysqli_query($conn, $query);

?>