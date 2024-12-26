<?php
$candy_price = 1.99;
$how_many_packs = 1;


/* Write your code here */
?>
<!DOCTYPE html>
<html>

<head>
  <title>while Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
  <ol>
    <?php while ($how_many_packs <= 5) : ?>
      <p><?= $how_many_packs . " pack = " . $candy_price * $how_many_packs++; ?></p>
    <?php endwhile; ?>
    </p>

  </ol>
</body>

</html>