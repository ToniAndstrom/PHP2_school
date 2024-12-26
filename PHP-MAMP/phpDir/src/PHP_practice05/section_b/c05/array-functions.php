<?php
// Write PHP code here.Write PHP Code to create -array of greetings (i.e. “Hi”, “Howdy”, “Hello”, “Hola”, “Cia”, “Moi”, “Namaste”, “Welcome”) -then display random greeting-find array of best sellers of items (i.e. “notebook”, “pencil”, “ink”) -count items and display top items-create an array holding customer details (e.g firstname, lastname, email). -and if you have customer first name add it to greeting0

$random_greeting = ["Konnichiwa", "Wassup", "Hola", "Howdydoodie", "Moro", "Heijssan", "Hello", ];
$customer =["first_name" =>"Toni", "last_name" => "Andström", "e-mail" => "toni@gmail.com"];
$items = ["notebook" => 2, "pencil" => 6, "ink"=> 15];
$bestseller = implode(array_keys($items, min($items)))


?>
<?php include 'includes/header.php'; ?>

<h1>Best Sellers</h1>
<p><?= $bestseller?>
</p>
<p>
<?= array_rand(array_flip($random_greeting))?> <?= $customer["first_name"] ?>
</p>

<?php include 'includes/footer.php'; ?>