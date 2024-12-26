<?php

/* Write your code here */
?>
<!DOCTYPE html>
<html>

<head>
  <title>switch Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <p>Todays deal: <?php switch($todays_message = "Sunday"){
case "Monday";
echo "20% off chocolates" ;
break;

case"Tuesday";
echo "20% off mints";
break;

case "Wednesday";
echo  "Buy three packs, get one free.";
break;

case "Thursday";
echo  "Buy three packs, get one free.";
break;

case "Friday";
echo  "Buy three packs, get one free.";
break;

case "Saturday";
echo  "Buy three packs, get one free.";
break;

case "Sunday";
echo  "Buy three packs, get one free.";
break;
}
  /* Write your code here */
  ?></p>
</body>

</html>