<!DOCTYPE html>
<html>
    <head>
        <title> Student details</title>
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
            <h1> contact </h1>

<form action="connect.php" method="post">
                <div class="col-md-5">
                    <div class="row justify-content-center"> 
                        <div class="mb-3">
                            <label>firstname:</label>       
                            <input type="text" class="form-control" id="name" placeholder="Enter your firstname"
                            name="firstname">
                        </div>

                        <div class="mb-3">
                            <label>secondname:</label>
                            <input type="text" class="form-control"  placeholder="Enter your secondname"
                            name="secondname">
                        </div> 

                        <div class="mb-3">
                            <label>course:</label>
                            <input class="form-control" rows="5" placeholder="Type your course here"
                            name="course">
                        </div>
                        <div class="mb-3">
                            <label>email:</label>
                            <input class="form-control" rows="5" placeholder="Enter your email"
                            name="email">
                        </div>
                        <div class="mb-3">
                            <label>telephone:</label>
                            <input class="form-control" rows="5" placeholder="Enter telephone"
                            name="telephone">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">submit</button>
                
                </div>
            </form>
            </div>

        <!-- copyrit row -->
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
?>