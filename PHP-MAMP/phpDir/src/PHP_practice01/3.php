<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
$name = "Toni";

if ($name = "Toni"){
	echo "I love PHP";
} elseif ($name = "Sam") {
	echo "I dislike PHP";
} else {
echo "Can't make up your mind";
}

echo "<br>";

$numbers="";

for($numbers=0; $numbers<= 10; $numbers ++){
	echo "$numbers <br>";
};

echo "<br>";

switch($Country="South-Korea") {
	
	case "Japan";
	echo "Tokyo";
	break;

	case "Norway";
	echo "Oslo";
	break;

	case "France";
	echo "Paris";
	break;

	case "Thailand";
	echo "Bangkok";
	break;

	case"South-Korea";
	echo "Seoul";
	break;

}
	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>