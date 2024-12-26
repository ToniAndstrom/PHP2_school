<?php

/* 
  Write you php code here

   */
$candy1 = ["name" => "Snickers", "price" => "1 euro", "stock" => 12];
$candy2 = ["name" => "Warheadz", "price" => "2 euro", "stock" => 7];
$candy3 = ["name" => "Twixx", "price" => "1,5 euro", "stock" => 4];
$offers = [$candy1, $candy2, $candy3];

?>
<!DOCTYPE html>
<html>

<head>
  <title>Multidimensional Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Offers</h2>
  <?php foreach ($offers as $value) {
    echo "<p>{$value["name"]}, {$value["price"]}, {$value["stock"]}</p>";
  } ?>
</body>

</html>