
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>


<?php


/*  connected to coookie      */

$host = "localhost";
 $username = "root";
 $password = "";
 $dbname = "cookie";
 $conn = mysqli_connect($host, $username, $password, $dbname);
 
 if (!$conn) {
  echo "fail coonection";
 }
 else{
  echo "connected to data successfully"."<br>";
 }    
 

 
   
   if(isset($_POST['more'])){

  $input=$_POST['havename'];
  echo $input;
?>


 
    <div class="row row-cols-1 row-cols-md-3  row-cols-lg-4 g-4">

<?php

/*  show products */

$result = mysqli_query($conn, "SELECT * FROM products where `name`='$input'");
      while($row = mysqli_fetch_assoc($result)) { 
        
        ?>



       <div class="col">
        <div class="card h-60">
      <div class="card-body">


      <img src="<?php echo $row["image"]; ?> " class="w-50">
        <h5 class="card-title"> id:<?php echo $row["id"];?>  </h5>
        <div class="card-text"> name :<?php echo $row["name"]; ?> </div>
        <div class="card-text"> price :<?php echo $row["price"]; ?>  </div>
        <div class="card-text"> des :<?php echo $row["description"]; ?>  </div>
        <div class="card-text"> category :<?php echo $row["category"]; ?>  </div>
        <div class="card-text"> stock :<?php echo $row["stock"]; ?>  </div>
        
        
             

              <?php
               } 
               ?> 
            


    </div>
  </div>
  </div>

        <?php
      }
        ?> 


</div>





    
    </body>
    </html>


