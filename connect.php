
<?php
require_once "dbconnect.php";

$query = "INSERT INTO registration(firstname, secondname, course, email ,telephone)
        VALUES(?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($dbconnect, $query);

mysqli_stmt_bind_param($stmt, "sssss", $fname, $sname, $course, $email, $telephone);
$fname=$_POST["firstname"];
$sname= $_POST["secondname"];
$course= $_POST["course"];
$email= $_POST["email"];
$telephone= $_POST["telephone"];

if (mysqli_stmt_execute($stmt)) {
echo "data submited successfully";
}
else {
    die ('connection failed');
}

mysqli_stmt_execute($stmt);


mysqli_stmt_close($stmt);
mysqli_close($dbconnect);
?>

      
