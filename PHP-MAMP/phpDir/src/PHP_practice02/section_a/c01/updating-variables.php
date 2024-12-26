<?php

/* 
  Write you php code here

   */
$name = "Toni";
$candy_per_pakage = 2;

if ($name == "Toni") {
  $candy_per_pakage = $candy_per_pakage * 0.8;
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Variables</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
<h2>Hello <?php echo "$name. For you this candy pakage costs $candy_per_pakage euro" ?></h2>
</body>

</html>