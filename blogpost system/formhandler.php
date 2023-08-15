<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
   
    $title= $_POST["title"];
    $content= $_POST["content"];
    $author= $_POST["author"];
    $p_date= $_POST["publication_date"];
    

    try{
        require_once "dbconnect.php";
        $query = "INSERT INTO blog_system(title, content, author, publication_date)
        VALUES(:title, :content, :author, :publication_date);";
        $stmt = $dbconnect->prepare($query);
        $stmt->bindParam("title", "content", "author", "publication_date", $title, $content, $author, $p_date,);

        $stmt->execute();

        header("Location: ../blog.php");
        exit(); 
    }
        catch (PDOException $e){
            die ("Query failed: " . $e->getmessage());
        }
    }
else{
    echo "error";
    exit();
}