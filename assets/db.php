<?php

/*
  $host = "localhost";
	$user = "pemilusm_fadhli";
	$pass = "pemilu2015";
	$db = "pemilusm_daftar";
$connection = mysql_connect($host,$user,$pass);
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db($db);
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
*/


/*
 * Database Connection
*/
$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "databasebaru";

$conn = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
}

?>
