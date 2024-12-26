<!-- Write PHP Code to show file informations of “logo.png” e.g.   - file name-file size-MIME type and -Folder-If no such file exits display “There is no such file”Note: You can use PHP in-built function e.g. pathinfo, filesize, mime_content_typeRecap Practice / Classroom Coding -->

<?php
$path = 'img/logo.png';
?>
<?php include 'includes/header.php'; ?>

// Write you PHP code here
<p>pathinfo: <?= implode(pathinfo($path))?></p>
<p>filesize: <?= filesize($path)?></p>
<p>type: <?= mime_content_type($path)?></p>

<?php include 'includes/footer.php'; ?>