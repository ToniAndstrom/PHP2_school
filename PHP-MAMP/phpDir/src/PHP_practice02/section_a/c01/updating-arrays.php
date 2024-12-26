<?php

/* 
  Write you php code here

   */
  $nutrition =["fat"=>"25%", "sugar"=>"35%", "salt"=>"5%"];
  $nutrition["fat"] = "30%";
  $nutrition["fiber"] = "30%";
  

?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <?php
  foreach ($nutrition as $candyname => $value){
    echo "$candyname : $value <br>"; 
  } ?> 

</body>

</html>