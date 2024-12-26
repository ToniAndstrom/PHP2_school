<?php

/* 
  Write you php code here

   */
$most_popular = ["Snickers", "Kinder", "Sour Patch Kids", "Warheadz", "Twixx"]

?>
<!DOCTYPE html>
<html>

<head>
  <title>Indexed Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Best Sellers</h2>
  <ol>
    <?php
    for ($i = 0; $i < 3; $i++) {

      echo "<li>$most_popular[$i]</li>";
    };
    ?>
  </ol>


</body>

</html>