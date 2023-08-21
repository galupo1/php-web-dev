<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
   
    $uName= $_POST["userName"];
    $Email= $_POST["email"];
    $Message= $_POST["messages"];
    
    

    try{
        require_once "dbconnect.php";
        $query = "INSERT INTO registration_form(userName, email, messages)
        VALUES(:userName, :email, :messages);";
        $stmt = $dbconnect->prepare($query);
        $stmt->bindParam("userName", "email", "messages", $uName, $email, $messages,);

        $stmt->execute();

        header("Location: ../contact.php");
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