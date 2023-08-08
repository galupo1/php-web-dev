<?php

$hostname = "localhost";
$password = "";
$username ="root";
$dbname ="users";

$dbconnect = mysqli_connect($hostname, $username, $password, $dbname);

if ($dbconnect->connect_error){
 die("connection failed". $dbconnect->connect_error);
echo "Connected to MySQL";
}
else 
echo "connection successful";


?>