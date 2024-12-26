<?php

/* 
  Write you php code here

   */
$candy_price = 5;
$subtotal = $candy_price * 3;
$tax = 1.2;
$total = $subtotal * $tax;
?>
<!DOCTYPE html>
<html>

<head>
  <title>Mathematical Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <p> Your subtotal per candy is: <?=$subtotal?> <br> and your total (with tax) is: <?= $total?></p>
</body>

</html>