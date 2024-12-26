<?php

/* 
  Write you php code here

   */
$part1 = "Thank";
$part2 = "you";
$greeting = $part1 ." " . $part2;
$customer_name = "Toni Andström";
?>
<!DOCTYPE html>
<html>

<head>
  <title>String Operator</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
<p><?= $customer_name?>'s order</p>
<p><?=$greeting?>, <?=$customer_name?></p>
</body>

</html>