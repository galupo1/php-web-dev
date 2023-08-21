<!DOCTYPE html>
<html>
    <head>
      <title>home page</title>
      <link rel="stylesheet" href="CSS/skill.css">
      <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
      
      
    </head>
 <boby>
    <div class="container-fluid">
      <!-- nav start -->
      <div class="row"  style="border: 3px solid black;">
        <?php
            include "include/nav.html";
        ?>
      </div>
          
      <div class="row" style="border:5px solid black;">
        <div class="col-lg-6">
                <?php
                include "sliders.php";
                ?>
        </div> 
        <style>
          h1 {
            color: purple;
          }
          p {
            color: blue ;
            font-size:30px;
            font-style: inherit; 
            font-family: "Lobster", "Comic Sans", cursive;
          }
          </style>
        <div class="col-lg-6"></br>
            </br>
          <div class = "section-container">  
            <div class ="text"> 
              <h1> B. o. R .a .H </h1> </br>
              <P>
                <em>"Moving into a new home always gets exciting and creates more 
                  options for infinite ideas".</br> 
                  <strong>B o R a H</strong> offers a wide variety of home decor bringing your ideas into reality.</em> 
        </p> 
           </div>
          </div> 
        </div>       
      </div>
      
         <!-- footer section -->
      <div class="row" style="border: 4px solid black;">
        <?php
          include "footer.php";
        ?>
      </div>
                
    </div>
       
  </body>
</html>