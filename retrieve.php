<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student registration details</title>
</head>
<body>
              <!--geting data from data base  -->
              
<            <table style ="table table-border table-striped">
              <thead class= "thead-light">
               <tr>
                 <th>Title</th>
                 <th>Content</th>
                 <th>Author</th>
                 <th>Publication_date</th>
               </tr>
                  </thead>
                 
 <tbody>
 <?php
 require_once "dbconnect.php";

  $query = "SELECT * FROM registration";
       
  $result = mysqli_query($dbconnect, $query);
if(mysqli_num_rows($result)>0){
while($data=mysqli_fetch_assoc($result)){
echo '<tr>';
echo '<td>' .$data['title']. '</td>';
echo '<td>' .$data['content']. '</td>';
echo '<td>' .$data['author']. '</td>';
echo '<td>' .$data['publication_date']. '</td>';

echo'<td>';
  echo '<a href="updatedata.php?id=' .$data['id'] .'"
  class="btn btn-sm btn">Edit</a>';

  echo '<a href="deletedata.php?id=' . $row['id'] . '"
  class="btn btn-sm btn-danger"
  onclick="return confirm(\'Are you sure you want to delete this record?\')">
      <i class="fas fa-trash-alt"></i></a>';

echo '</td>';
echo '</tr>';
}
}
?>
</body>
</html>