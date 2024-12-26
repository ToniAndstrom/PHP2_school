<?php
/* Write your code here */$stock = 2;
$ordered = 3
?>
<!DOCTYPE html>
<html>

<head>
  <title>if else if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <p><?php if ($stock < 1){
    echo "Out of stock";
  }else if ($ordered > $stock){
    echo "More coming soon";
  }else {
    echo "In stock";
  }
  /* Write your code here */
  ?></p>
</body>

</html>