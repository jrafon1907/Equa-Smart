<?php
$servername="localhost";
$username="admin";
$password="123";
$dbase="db_equasmart";

$conn = new mysqli($servername,$username,$password,$dbase);

if($conn->connect_error){
	echo "Error Connecting!";
}

?>