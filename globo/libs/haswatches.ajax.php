<?php

//Enabling CORS
header("Access-Control-Allo-Origin:*");

include 'db/dbConfig.php';

include '/libs/haswatches.lib.php';


if(isset($_GET))
{

}else{

	echo "Parameters Error";
}
?>