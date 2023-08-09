<!-- updating data into database -->
<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $id = $_POST["id"];
    $fn=$_POST["firstname"];
    $sn= $_POST["secondname"];
    $course= $_POST["course"];
    $email= $_POST["email"];
    $telephone= $_POST["telephone"];

    try{
        require_once "dbconnect.php";
        $query = "UPDATE registration SET firstname= ?, secondname= ?, course= ?, email=? ,telephone=? WHERE id=?";
    
        $stmt = mysqli_prepare($dbconnect, $query);
        mysqli_stmt_bind_param($stmt, "sssssi",$fn, $sn, $course, $email, $telephone, $id);
        mysqli_stmt_execute($stmt);

       echo "submit success";
        exit(); 
    }
        catch (Exception $e){
            die ("Query failed: " . $e->getmessage());
        }
    }

?>