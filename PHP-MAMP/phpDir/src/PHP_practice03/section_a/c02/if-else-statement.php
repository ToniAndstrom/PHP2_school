<?php
/*
Write your code here
*/ $stock = 0;


?>
<!DOCTYPE html>
<html>

<head>
  <title>if else Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <p><?php if ($stock < 1) {
    echo "Sold out";
  } else {
    echo "In stock";
  }
  /* Write your code here */
  ?></p>
</body>

</html>