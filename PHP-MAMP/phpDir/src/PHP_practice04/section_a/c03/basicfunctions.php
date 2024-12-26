<?php

/*
Create three functions to generate the values as shown in this table. Price for Toffee is 3, Mints is 2 and Fudge is 8. -The first function should look at stock levels and create a message indicating whether or not more stock should be ordered. If the stock is less than 10 no Re-Order necessary. -The second function should find the total value of stock for each item that is sold. -And finally the third function should calculate how much tax will be due when all of the remaining stock has been sold. 

 */
$candy = [
  "toffee" => ["price" => 3, "stock" => 12],
  "mint" => ["price" => 2, "stock" => 26],
  "fudge" => ["price" => 8, "stock" => 8]
];
$tax = 20 / 100;

function total_value_of_stock($quantity, $price)
{
  return $quantity * $price;
}
function tax_due($quantity, $tax)
{
  return $quantity * $tax;
}

function re_order($stock): string
{
  return ($stock < 10) ? "yes" : "no";
}


?>
<!DOCTYPE html>
<html>

<head>
  <title>Basic Functions</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Stock Control</h2>
  <table>
    <tr>
      <th>Product</th>
      <th>Stock</th>
      <th>Re-order</th>
      <th>Total value</th>
      <th>Tax due</th>
    </tr>
    <?php foreach ($candy as $product => $data){ ?>
    <tr>
      <td><?= $product ?></td>
      <td><?= $data["stock"] ?></td>
      <td><?= re_order($data["stock"]) ?></td>
      <td><?= total_value_of_stock($data["price"], $data["stock"]) ?></td>
      <td><?= tax_due($data["price"], $tax) ?></td>
    </tr>
    <?php }?>
  </table>
</body>

</html>