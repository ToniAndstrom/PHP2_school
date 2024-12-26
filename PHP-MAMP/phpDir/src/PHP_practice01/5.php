<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

  <aside class="col-xs-4">
    <?php Navigation();?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <?php 


/* Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	$shorterNumber = 56.0980977;
  echo floor($shorterNumber);

  echo "<br>";

  $string ="I feel stupid";
  echo  strtoupper($string);

  echo "<br>";

  $array1 = ["Singapore", "Malta", "Neatherlands", "Sweden"];
  $array2 = ["Japan", "Italy", "Singapore", "New Zealand", "Sweden"];
  $diff = array_diff($array1,$array2);
 $string = implode($diff);
 
 echo $string;

?>





  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>
 