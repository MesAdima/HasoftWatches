<?php

 include ('../api/dbConfig.php');


$query = "SELECT t._id AS orderno, c.fname, c.sname, c.address, p.name, td.quantity, td.subtotal
FROM transaction t, customers c, products p, transaction_details td
WHERE 
t.custID = c._id AND
td.productID = p._id AND
t._id = td.transactionID";

// Now execute the query and store results in a varible called $results
$result = $conn->query($query) or die ($conn->error.__LINE__);

/*
 Use var_dump when debugging as it will give more details;
 Also remember to comment out any php debugging output
 (eg lines echo,print_r)when done
 Otherwise angular will not work as it expects output to be json
*/
// var_dump($result);

// We create a blank array to store our records
$arr = array();

if ($result->num_rows > 0) {
    /*
     Now Loop through our mysqli results
     and populate our $arr array
    */
    while ($row = $result->fetch_assoc()){
        $arr[] = $row;
    }
}

/* JSON encode
 Creates a json type object string using
 php's inbuild function json_encode($arr)
*/
$json_response = json_encode($arr);

/*
Now that everything is working
Lets output our json formatted response
*/
// Enable Cross origin ajax requests
echo $json_response;

?>