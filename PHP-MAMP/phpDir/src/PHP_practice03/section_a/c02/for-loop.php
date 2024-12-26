<?php
/* Write your code here phpCreate a simple for loop to find the prices of multiple candy packs. Let us assume one pack of candy costs $1.99. How much did ten packs cost? Display each pack's costs on the web page. */

$candy_price = 1.99;
$stock = 10;

?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <ol>
    <?php for ($pack = 1; $pack <= $stock; $pack++) : ?>
      <li> <?= $pack *$candy_price ?> </li>
    <?php endfor; ?>
  </ol>
</body>

</html>