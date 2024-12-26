<?php
/* Write your code here. Write a PHP Code to include header.php and footer.php and check the candy stock. Let us assume you have 25 stock of candy, so check if you have “Good availability”, you have “low stock”, or you are running “Out of stock.”Recap Practice / Classroom Coding
*/ include("includes/header.php");
    include("includes/footer.php");
    $stock = 25;

?>


<h2>Chocolate</h2>
<?php
/* Write your code here */
if ($stock == 0) {
    echo "Out of stock";
}elseif ($stock <= 5){
    echo "Low stock";
}else{
    echo "Good availability";
}
?>