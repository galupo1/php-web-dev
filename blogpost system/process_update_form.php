<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $id = $_POST["id"];
    $title=$_POST["title"];
    $content= $_POST["content"];
    $author= $_POST["author"];
    $p_date= $_POST["publication_date"];

    try{
        require_once "dbconnect.php";
        $query = "UPDATE blog_system SET title= ?, content= ?, author=? ,publication_date=? WHERE id=?";
    
        $stmt = mysqli_prepare($dbconnect, $query);
        mysqli_stmt_bind_param($stmt, "ssssi",$title, $content, $author, $p_date, $id);
        mysqli_stmt_execute($stmt);

       echo "submit success";
        exit(); 
    }
        catch (Exception $e){
            die ("Query failed: " . $e->getmessage());
        }
    }

?>