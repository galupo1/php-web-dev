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
