<?php

 include ('../db/dbConfig.php');


$query = "SELECT _id, sub_category_name FROM subcategories WHERE isActive = 1 ORDER BY _id";

// Now execute the query and store results in a varible called $results
$resultsubcategories = mysqli_query($conn, $query);
//
?>