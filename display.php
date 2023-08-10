
<?php

require_once "dbconnect.php";

$query = "SELECT*FROM registration";
       
  $result = mysqli_query($dbconnect, $query);
  while($data=mysqli_fetch_assoc(result))
  {
    echo "This is the firstname" .$data['fistname']. "<br />";
}

?>