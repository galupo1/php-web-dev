

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $fn=$_POST["firstname"];
    $sn= $_POST["secondname"];
    $course= $_POST["course"];
    $email= $_POST["email"];
    $telephone= $_POST["telephone"];

    try{
        require_once "dbconnect.php";
        $query = "INSERT INTO registration(firstname, secondname, course, email ,telephone)
        VALUES(:firstname, :secondname, :course, :email, :telephone);";
        $stmt = $dbconnect->prepare($query);
        $stmt->bindParam("sssss", $fname, $sname, $course, $email, $telephone,);

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