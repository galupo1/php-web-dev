<!-- viewing from the database -->
<?php

require_once "dbconnect.php";

$query = "SELECT*FROM blog_system";
       
  $result = mysqli_query($dbconnect, $query);
  while($data=mysqli_fetch_assoc($result))
  {
    echo "title: " . $data['title'] . "<br>";
    echo "content: " . $data['content'] . "<br>";
    echo "author: " . $data['author'] . "<br>";
  
}

?>