<?php

/* 
  Write you php code here

   */
$wanted = 7;
$stock = 5;

  $can_buy= $stock >= $wanted;
?>
<!DOCTYPE html>
<html>

<head>
  <title>Comparison Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
<p>Can you buy the product? <br>
1 means yes. Nothing means no. <br>
 <?= $can_buy?></p>
</body>

</html>