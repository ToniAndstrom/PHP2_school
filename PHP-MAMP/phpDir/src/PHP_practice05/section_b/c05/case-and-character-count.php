<?php
$text = 'Home sweet home';
?>
<?php include 'includes/header.php'; ?>
<!--Write PHP Code to convert case in lowercase, uppercase, count number of characters and word count-->
<p><?=strtolower("THIS TO LOWERCASE")?></p>
<p><?=strtoupper("this to uppercase")?></p>
<p><?=strlen("Back to feeling stupid")?></p>
<p><?=str_word_count("How much wood can a woodchuck chuck?")?></p>

<?php include 'includes/footer.php'; ?>