<!-- setting up server -->
<?php

$hostname = "localhost";
$password = "";
$username ="root";
$dbname ="blog_post_system";

$dbconnect = mysqli_connect($hostname, $username, $password, $dbname);

if ($dbconnect->connect_error){
 die("connection failed". $dbconnect->connect_error);
echo "Connected to MySQL";
}
else 
echo "connection successful";
?>