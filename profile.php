<!DOCTYPE html>
<html>
      <head>
        <title>profile page</title>
        <link rel="stylesheet" href="CSS/new.css">
        <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
      </head>

<body>
       <div class="container-fluid">
                             <!-- nav start -->
              <div class="row"  style="border: 3px solid darkgoldenrod;">
                    <?php
                    include "include/nav.html"
                    ?>
               </div>
         </div>
      <style>
        h1 {
          color: darkgreen;
        }
      </style>
       <div class="row" style="border: 3px solid darkred;">
                 <h1>My profile page</h1>
                 <div class="col-md-10">
                  <div class="row justify-content-center"> 
                    <div class="mb-5">
                          <table>
                                  <tr>
                                    <th>School</th>
                                    <th>Year</th>
                                    <th>Awards</th>
                                  </tr>
                                  <tr>
                                    <td>Kampala ss</td>
                                    <td>2021</td>
                                    <td>1st place</td>
                                  </tr>
                                  <tr>
                                    <td>Mukono ss</td>
                                    <td>2019</td>
                                    <td>2nd place</td>
                                  </tr>
                                  <tr>
                                    <td>Ejakait Mixed college</td>
                                    <td>2018</td>
                                    <td>3rd place</td>
                                  </tr>
                          </table>
                            <table style="border-collapse: collapse; width: 30%; color: goldenrod;">
                              
                      <table style="border: 1px solid red;">
                        <tr>
                          <th>School</th>
                          <th>Year</th>
                          <th>Awards</th>
                        </tr>
                        <tr>
                          <td>Kololo ss</td>
                          <td>2013</td>
                          <td>5th place</td>
                        </tr>
                        <tr>
                          <td>Jinja ss</td>
                          <td>2012</td>
                          <td>10th place</td>
                        </tr>
                        <tr>
                          <td>Viena Mixed college</td>
                          <td>2011</td>
                          <td>4th place</td>
                        </tr>
                      </table>

                  </table>
                    </div>
                  </div> 
                 </div>
       </div>     
    <div class="row" style="border: 4px solid darkgreen;">
      <footer class="bg-dark text-light py-3">
        <div class="container text align-centre" >
               <p>&copy; Copy right Reserved 2023</p>
        </div>
      </footer>
  </div>

  </body>

</html>