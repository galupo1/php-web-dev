<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogpost System</title>
    <link rel="stylesheet" href="CSS/#.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
</head>
<body>
              <!--geting data from data base  -->
<div class="container-fluid">
  <div class="row"  style="border: 3px solid red;">
    <?php
      include "include/nav.html";
    ?>
  </div>
<div class="row"  style="border: 3px solid blue;">
 <div class="col-lg-6"></br>
 <?php
                include "sliderz3.php";
                ?>
   </div> 
   <div class="col-lg-6">           
  <div class="col-lg-12">        
              <table class="table table-border table-striped">
                <thead class= "thead-light">
                <tr>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Author</th>
                  <th>Publication_date</th>
                  <th>Action</th>
                </tr>
                    </thead>
                  
  <tbody>
  <?php
  require_once "dbconnect.php";

    $query = "SELECT * FROM blog_system";
        
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
    class="btn btn-sm btn-success">Edit</a>';

    echo '<a href="deletedata.php?id=' . $data['id'] . '"
    class="btn btn-sm btn-danger"
    onclick="return confirm(\'Are you sure you want to delete this record?\')">
        <i class="fas fa-trash-alt">delete</i></a>';

  echo '</td>';
  echo '</tr>';
  }
  }
  ?>
  </div>
</div>  
</div>

</body>

</html>
