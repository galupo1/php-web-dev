<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student registration details</title>
</head>
<body>
              <!--geting data from data base  -->
<?php

require_once "dbconnect.php";

$query = "SELECT*FROM registration";
       
  $result = mysqli_query($dbconnect, $query);
  while($data=mysqli_fetch_assoc($result)){
    echo "This is the firstname" .$data['firstname']. '<a href="updatedata.php?id=' . $data['id'] .'"
   class="btn btn-sm btn"> edit</a>' . '<br />';
}

?>
</body>
</html>