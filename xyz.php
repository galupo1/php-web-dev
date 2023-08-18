<!-- junk codes -->

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

        echo "This is the firstname" .$data['firstname']. '<a href="updatedata.php?id=' . $data['id'] .'"
        while($data=mysqli_fetch_assoc($result)) {


            <footer class="bg-dark text-light py-3">
                <div class="container text align-centre" >
                      <p>&copy;B </p>
                </div>
          </footer>

          <!-- to blog.php -->
          <!DOCTYPE html>
<html>
    <head>
        <title> blog page</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
        
    </head>

<body>
<div class="container-fluid">
        <!-- nav row -->
        <div class="row"  style="border: 3px solid blue;">
        <?php
         include "include/nav.html";
        ?>
        </div>
        <!-- contact row -->
        <div class="row" style="border: 3px solid darkgreen;">
           
            <h1> blog Here</h1>

<form action="connect.php" method="post">
                <div class="col-md-5">
                    <div class="row justify-content-center"> 
                        <div class="mb-3">
                            <label>title:</label>       
                            <input type="text" class="form-control" id="name" placeholder="Enter blog title"
                            name="title">
                        </div>

                        <div class="mb-3">
                            <label>content:</label>
                            <input type="text" class="form-control"  placeholder="Enter content here"
                            name="content">
                        </div> 

                        <div class="mb-3">
                            <label>author:</label>
                            <input class="form-control" rows="5" placeholder="Type author(s) here"
                            name="author">
                        </div>
                        <div class="mb-3">
                            <label>publication_date:</label>
                            <input class="form-control" rows="5" placeholder="Enter date"
                            name="publication_date">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">submit</button>
                
                </div>
            </form>
            </div>

            <div class="row" style="border: 4px solid red;">
            <footer class="bg-dark text-light py-3">
              <div class="container text align-centre" >
                     <p>&copy;2023 Freecopy right</p>
              </div>
            </footer>
        </div>
    </div>
    </body>
</html>



<!-- blurry image -->
<style>
            .blurry-image {
                position: relative;
                display: inline-block;
            }
            .blurry-image img{
                filter: blur(4px);
            }
            .blurry-image .image-overlay {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
                color: darkorange;
                font-size: 30px;
                font-weight: bold;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            }
        </style>
        <div class="blurry-image">
            <img src="images/2.jpg" alt="Blurred image">
            <div class="image-overlay">
                welcome to our website!
            </div>
        </div>


        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
                <div class="container">
                    <a class="navbar-brand" href="#">My Website</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="home.html">home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="profile.html">profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
<!-- services -->
            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServicePage</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
        <!-- nav start -->
           <div class="row"  style="border: 3px solid black;">
           <?php
         include "include/nav.html"
        ?>
          </div>
        </div>
<div class="service-container">
    <h1>Services</h1>
    
  </div>
  <div class="row" style="border: 4px solid black;">
  <?php
          include "footer.php";
        ?>
        </div> 
                
      </div>
  </body>
</html>
  

</body>
</html>
<!-- calculate -->
<?php
function calculateSumFromUserInput(){
    $numbers= array();
    $count = readline();
    for ($i=0; $i<$count; $i++){
        $value = readline (). ($i=+1);
        $numbers[] = (int) $value;
    }
    $sum = array_sum($numbers);
    echo "Sum of the entered values:" .$sum;
}
calculateSumFromUserInput();  
?>