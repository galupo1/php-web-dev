<!DOCTYPE html>
<html>
    <head>
      <title>Hobbies page</title>
      <link rel="stylesheet" href="CSS/main.css">
      <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    </head>
  <body> 
    <div class="container-fluid">
      <!-- nav start -->
      <div class="row"  style="border: 3px solid darkgoldenrod;">
      <?php
         include "include/nav.html";
        ?>   
      </div>
                    
      <div class="row" style="border: 3px solid yellow;">
                  <h1>My Hobbies</h1>
                  <div class="col-md-10">
                  <table class="table">
                  <tr>
                  <th>List of Hobbies</th>
                  <th>place</th>
                  <th>time</th>
                  </tr>
                  <tbody>
                    <tr>
                      <td>Jogging</td>
                      <td>Muk-grounds</td>
                      <td>6am - 7:30am</td>
                    </tr>

                  <tr>
                    <td>Cooking</td>
                    <td>kitchen</td>
                    <td>6pm - 8pm</td>
                  </tr>
                  
                  <tr>
                    <td>Bicycle riding</td>
                    <td>kampala street</td>
                    <td>2pm - 5pm</td>
                  </tr>

                    </tbody>
                  </table>
                    </div>
                    <div class="col-md-3">
                      This is MD column 2
              </div>
      </div>
            <!-- copyrite -->
      <div class="row" style="border: 4px solid blue;">
        <footer class="bg-dark text-light py-3">
              <div class="container text align-centre" >
                    <p>&copy;copy right Reserved 2022</p>
              </div>
        </footer>
      </div>    
    </div>   
  </body>  
</html>