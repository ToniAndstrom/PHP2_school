<?php

/* 
  Write you php code here

   */
  $nutrition = ["fat"=>"60%", "sugar"=>"35%", "salt"=>"5%"];


?>
<!DOCTYPE html>
<html>

<head>
  <title>Associative Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <!-- <p>Fat: <?php $nutrition[0] ?></p> -->
  <?php foreach($nutrition as $candyname => $value){
    echo "<p>  $candyname : $value </p>";
  }  
  ?>
  

</body>

</html>
