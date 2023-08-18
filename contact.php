<!DOCTYPE html>
<html>
    <head>
        <title> contact page</title>
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
        <div class="col-lg-6">
           <?php
                include "sliderz3.php";
                ?>
        </div> 
        <div class="col-lg-6"></br>
            <h1> Register Here</h1>  
            <form action="registerform.php" method="post">
                <div class="col-md-5">
                    
                    <div class="row justify-content-center"> 
                        <div class="mb-3">
                            <label>userName:</label>       
                            <input type="text" class="form-control" id="name" placeholder="Enter your name"
                            name="name">
                        </div>

                        <div class="mb-3">
                            <label>Email:</label>
                            <input type="text" class="form-control"  placeholder="Enter your email"
                            name="email">
                        </div> 

                        <div class="mb-3">
                            <label>Messages:</label>
                            <textarea class="form-control" rows="5" placeholder="Type your message here"
                            name="message"></textarea>
                        </div>
                    </div>
                    <button type="Register" class="btn btn-success">Register</button>
                
                </div>
            </form>
        </div>

        <!-- copyrit row -->
        <div class="row" style="border: 4px solid red;">
        <?php
          include "footer.php";
        ?>
        </div>

    </div>
    </body>
</html>


