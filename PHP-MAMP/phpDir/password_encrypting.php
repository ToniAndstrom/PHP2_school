<?php
//$text = "Hello World!?!?";
//trimmed_text = trim($text, "?!?");

//$str =) "This is a string with backslashes \\ and quotes\"";
//echo stripcslashes($str;)

//$string = "This string has <b>bold</b> tags";
//echo htmlspecialchars(($string));

//$password ="mypassword";
//$encrypted_password = md5($password);
//echo $encrypted_password;

//$password ="mypassword";
//$encrypted_password = sha1($password);
//echo $encrypted_password;

$password ="mypassword";
$encrypted_password = crypt($password, "$2y$05asdfghjklöäåpoiuytrewq$");
echo $encrypted_password;
echo "<br>";
//echo $password;



?>