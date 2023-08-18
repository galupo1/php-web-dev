
<!-- updating data in the database //editing -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG</title>

    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
require_once "dbconnect.php";
$query = "SELECT * FROM blog_system WHERE id =?";
$stmt = mysqli_prepare($dbconnect, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result =mysqli_stmt_get_result($stmt);
$data = mysqli_fetch_assoc($result);

?>
<form action="process_update_form.php" method="post">
<?php
      include "../include/nav.html";
    ?>
  </div>
          <input type="hidden" name= "id" value="<?php echo $data['id']; ?>">
                <div class="col-md-5">
                    <div class="row justify-content-center"> 
                        <div class="form-group mb-3">
                            <label>title:</label>       
                            <input type="text" class="form-control" id="name" placeholder="Enter your title"
                            name="title" value="<?php echo $data['title']; ?>">
                        </div> 

                        <div class="mb-3">
                            <label>content:</label>
                            <input class="form-control" rows="5" placeholder="Type your content here"
                            name="content" value="<?php echo $data['content']; ?>">
                        </div>
                        <div class="mb-3">
                            <label>author:</label>
                            <input class="form-control" rows="5" placeholder="Enter author(s)"
                            name="author" value="<?php echo $data['author']; ?>">
                        </div>
                        <div class="mb-3">
                            <label>publication_date:</label>
                            <input class="form-control" rows="5" placeholder="Enter date"
                            name="publication_date"value="<?php echo $data['publication_date']; ?>">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">submit</button>
                
                </div>
            </form>
            <?php
         }
        ?>
    </body>
    </html>   

            