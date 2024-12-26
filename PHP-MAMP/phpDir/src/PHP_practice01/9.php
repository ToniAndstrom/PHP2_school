<?php session_start();
//setcookie("9.php", "will this show", time() + 86400 * 7);
$_SESSION["something"]= "hello";
?>

<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>



<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">



    <?php

    /*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
    $code = "";
    $game = "";


    if (isset($_GET["code"]))
      $code = $_GET["code"];

    if (isset($_GET["game"]))
      $game = $_GET["game"];

    if (isset($_COOKIE))
      $cookie = implode($_COOKIE);

      if (isset($_SESSION))
      $session = implode($_SESSION);
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
    </head>

    <body>

      <a href="9.php?code=IDDQD&game=Doom">click here</a>
    </body>
    <?= $code . " is a code for immortality in a game called " . $game ?><br>
    <?= "cookie: " . $cookie ?><br>
    <?= "session: " . $session ?>
    
    </html>



  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>