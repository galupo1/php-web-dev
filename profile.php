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
                color: purple;
              }
            </style>
  <div class="row" style="border: 3px solid black;">
       <div class="col-lg-6">
                <?php
                include "sliderz2.php";
                ?>
        </div>
        <div class="col-lg-6"></br>
            <div class="image-overlay">
                    <h1>Promotion plans</h1>
                  <div class="col-md-30">
                    <div class="row justify-content-center"> 
                      <div class="mb-5">
                        <table class="blurry-table">
                           <table>
                                  <tr>
                                    <th>Plans</th>
                                    <th>Enterprise</th>
                                    <th>Advance</th>
                                  </tr>
                                  <tr>
                                    <td>Follow up</td>
                                    <td>Ever month</td>
                                    <td>$450</td>
                                  </tr>
                                  <tr>
                                    <td>Timeframe</td>
                                    <td>Quarterly</td>
                                    <td>$900</td>
                                  </tr>
                                  <tr>
                                    <td>Certificate</td>
                                    <td>After completion</td>
                                    <td>$76</td>
                                  </tr>
                            </table>
                            <table style="border-collapse: collapse; width: 30%; color: goldenrod;"> 
                                <table style="border: 1px solid red;">
                                    <tr>
                                      <th>Plans</th>
                                      <th>Enterprise</th>
                                      <th>Advance</th>
                                    </tr>
                                    <tr>
                                      <td>Delivery</td>
                                      <td>every 3 months</td>
                                      <td>$800</td>
                                    </tr>
                                    <tr>
                                      <td>Ranking</td>
                                      <td>Forbs</td>
                                      <td>$320</td>
                                    </tr>
                                    <tr>
                                      <td>Terms&Conditions</td>
                                      <td>---</td>
                                      <td>$200</td>
                                    </tr>
                                  </table>
                              </div>
                          </table>
                        </table>
                      </div>
                    </div> 
                </div>
            </div>        
  
            <div class="row" style="border: 4px solid darkgreen;">
                <?php
                      include "footer.php";
                    ?>
            </div>
  </div>
  </body>
</html>