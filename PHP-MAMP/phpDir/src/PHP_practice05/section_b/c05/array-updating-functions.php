<?php
// Write your code here. phpWrite PHP Code to -  create array of items (items could be e.g. “notebook”, “pencil”, “eraser”) being ordered-add a new item (i.e. “scissors”) to start of an array-remove the last item from array
$order = array("notebook", "pencil", "eraser");
array_unshift($order, "sissors");
array_pop($order);
?>
<?php include 'includes/header.php'; ?>

<h1>Order</h1>
<p>
    <?php foreach ($order as $item => $value) : ?>
        <?= $value ?>
</p>
<?php endforeach ?>
<?php include 'includes/footer.php'; ?>