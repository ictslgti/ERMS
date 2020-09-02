<?php
//setting header to json
header('Content-Type: application/json');
//database
define( 'DB_HOST', 'localhost' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', '' );
define( 'DB_NAME', 'erms' );

//get connection
$mysqli = new mysqli( 'localhost', 'root', '', 'erms' );

if(!$mysqli){
  die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = sprintf("SELECT dep_id, ict, construction, automobile, foot, mechanical, electrical FROM departments");
//execute query
$result = $mysqli->query($query);
//loop through the returned data
$data = array();
foreach ($result as $row) {
    $data[] = $row;
    }
//free memory associated with result
$result->close();
//close connection
$mysqli->close();
//now print the data
print json_encode($data);