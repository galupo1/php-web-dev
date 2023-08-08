

$hostname = "localhost";
$password = "";
$username ="root";
$dbname ="users";

$connect = mysqli_connect($hostname, $password, $username, $dbname);

if ($connect){
    die("connection failed:" .msqli_connect_error());
}




$query = "INSERT INTO registration(firstname, secondname, course, email ,telephone)
        VALUES(:firstname, :secondname, :course, :email, :telephone);";
        $stmt = $dbconnect->prepare($query);
        $stmt->bindParam(":firstname",$fn);
        $stmt->bindParam(":secondname", $sn);
        $stmt->bindParam(":telephone", $telephone);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":course", $course);
        $stmt->execute();


        header("Location: ../contact.php");
        exit(); 