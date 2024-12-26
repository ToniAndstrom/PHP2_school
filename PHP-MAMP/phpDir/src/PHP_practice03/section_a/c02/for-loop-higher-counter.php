<?php
/* Write your code here. Create a simple for loop to find prices of multiple higher packs of candy. Let us assume the customer wants 10 packs to 100 packs of candies. How much do 10 to 100 packs cost? Display from 10 packs to 100 packs cost on the web page.*/
$single_pack_candy = 1.99;
$amount = "";

?>

<!DOCTYPE html>
<html>

<head>
  <title>for Loop - Higher Counter</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Large Orders</h2>


  <?php
  /* Write your code here */
  for ($amount = 10; $amount <= 100; $amount++) : ?>
    <p><?= $amount . " packs = " . $single_pack_candy * $amount ?></p>
  <?php endfor; ?>


</body>

</html>