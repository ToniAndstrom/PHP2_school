<?php
$inStock = 0;

/*Write your code here*/
?>
<!DOCTYPE html>
<html>

<head>
  <title>Ternary Operator</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <p> <?php
  /* Write your code here */
  echo ($inStock > 1) ? "In stock" : "Sold out";
 
  ?> </p>
</body>

</html>