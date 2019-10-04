<?php
$servername="localhost";
$username="root";
$password="learning1108";
$database="mensajes_ajax";

$conn =  mysqli_connect($servername,$username,$password,$database);

mysqli_set_charset($conn, "utf8");

if(!$conn)
	echo "Connection Failed: " . mysqli_connect_error();

?>