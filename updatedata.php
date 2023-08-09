<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
require_once "dbconnect.php";
$query = "SELECT * FROM registration WHERE id =?";
$stmt = mysqli_prepare($dbconnect, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result =mysqli_stmt_get_result($stmt);
$data = mysqli_fetch_assoc($result);

?>
<form action="process_update_form.php" method="post">
          <input type="hidden" name= "id" value="<?php echo $data['id']; ?>">
                <div class="col-md-5">
                    <div class="row justify-content-center"> 
                        <div class="form-group mb-3">
                            <label>firstname:</label>       
                            <input type="text" class="form-control" id="name" placeholder="Enter your firstname"
                            name="firstname" value="<?php echo $data['firstname']; ?>">
                        </div>

                        <div class="mb-3">
                            <label>secondname:</label>
                            <input type="text" class="form-control"  placeholder="Enter your secondname"
                            name="secondname" value="<?php echo $data['secondname']; ?>">
                        </div> 

                        <div class="mb-3">
                            <label>course:</label>
                            <input class="form-control" rows="5" placeholder="Type your course here"
                            name="course" value="<?php echo $data['course']; ?>">
                        </div>
                        <div class="mb-3">
                            <label>email:</label>
                            <input class="form-control" rows="5" placeholder="Enter your email"
                            name="email" value="<?php echo $data['email']; ?>">
                        </div>
                        <div class="mb-3">
                            <label>telephone:</label>
                            <input class="form-control" rows="5" placeholder="Enter telephone"
                            name="telephone"value="<?php echo $data['telephone']; ?>">
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

            