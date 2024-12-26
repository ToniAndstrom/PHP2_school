<?php include 'includes/header.php' ?>
<?php
/* Write your code here 
Overall idea here is to use query string to select content

Step 1: Store the value of city in some variable, 
what happens let us say if a key called "city" and its value is not null
Hint: try using nullishing coalescing operator: ??
https://www.php.net/manual/en/migration70.new-features.php

Step 2: You can check the condition with an if statement. If the value
is a string that is not empty, the PHP interpreter treats that value as true
and runs the code block

Step 3: Store the value of address of the branch in the city 
that was named in the query string

Step 4:  If the value in the city is a blank string it should display
"Please select a city"

*/
$cities = [
    "Reykjavik" => "Iceland", "Auckland" => "New Zealand", "Melbourne" => "Australia", "Rome" => "Italy", "Toronto" => "Canada", "Hanoi" => "Vietnam", "Taipei" => "Taiwan"
];

$city = $_GET["city"] ?? "";
$country = $cities[$city] ?? "";
?>



<?php foreach ($cities as $key => $value) { ?>
    <a href="get-2.php?city=<?= $key ?>">
        <?= $key ?></a><br>
<?php } ?>

<?php if ($city !== "" && $country !== "") : ?>
    <p><?= $city ?> is the capital of <?= $country ?></p>
<?php else : ?>
    <p>Please select a city</p>
<?php endif; ?>


<?php include 'includes/footer.php' ?>