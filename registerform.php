
<?php
require_once "dbconnect.php";

$query = "INSERT INTO registration_form(userName, Email ,Messages)
        VALUES(?, ?, ?)";
$stmt = mysqli_prepare($dbconnect, $query);
mysqli_stmt_bind_param($stmt,"userName","Email","Messages", $uName, $email, $message);
$uName=$_POST["userName"];
$email= $_POST["Email"];
$message = $_POST["Messages"];

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

      
