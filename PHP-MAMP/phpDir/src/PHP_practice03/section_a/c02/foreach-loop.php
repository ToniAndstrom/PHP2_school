<?php
/* 
    Write your code here. Create a simple foreach loop for candy products, e.g. Toffee costs 2.99, Mints costs 1.99, and Fudge costs 3.49 and show it in the web page table.
     */

$candies = ["Toffee" => 2.99, "Mints" => 1.99, "Fudge" => 3.49]

?>
<!DOCTYPE html>
<html>

<head>
  <title>foreach Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Price List</h2>
  <table>
    <tr>
      <th>Item</th>
      <th>Price</th>
    </tr>
    <!-- Write your code here -->
    <?php foreach ($candies as $key => $value) : ?>
      <tr>
        <td> <?= $key?> </td>
        <td> <?= $value?></td>
      </tr>

    <?php endforeach ?>



  </table>
</body>

</html>