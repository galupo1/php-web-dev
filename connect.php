<!-- creating where to submit data -->
<?php
require_once "blogpost system/dbconnect.php";

$query = "INSERT INTO blog_system(title, content, author, publication_date) 
VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($dbconnect, $query);
mysqli_stmt_bind_param($stmt, "ssss", $title, $content, $author, $p_date);
$title= $_POST["title"];
$content= $_POST["content"];
$author= $_POST["author"];
$p_date= $_POST["publication_date"];


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
