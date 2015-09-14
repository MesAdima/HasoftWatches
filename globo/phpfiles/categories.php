<?php

 include ('../db/dbConfig.php');


$query = "SELECT _id, category_name FROM categories WHERE isActive = 1 ORDER BY _id";

// Now execute the query and store results in a varible called $results
$resultcategories = mysqli_query($conn, $query);

?>