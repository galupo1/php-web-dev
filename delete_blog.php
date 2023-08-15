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
$query = "DELETE FROM blog_system WHERE id =?";
$stmt = mysqli_prepare($dbconnect, $query);
mysqli_stmt_bind_param($stmt, "i", $id);

if(mysqli_stmt_execute($stmt)){
    mysqli_stmt_close($stmt);
    mysqli_close($dbconnect);
    header("Location: ./retrieve.php");
    exit();
} else {
    die("Delete query failed.");
}

}   
        ?>
    </body>
    </html>   
