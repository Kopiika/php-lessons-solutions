<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP*/
$love = "PHP";
if ($love == "JavaScript") {
	 echo "I love JavaScript";
} elseif ($love == "Python") {
	 echo "I love Python";
} elseif ($love == "PHP") {
	 echo "I love PHP";
} else {
	 echo "I love coding";
}
	/*Step 2: Make a forloop  that displays 10 numbers*/
	for ($i = 1; $i <= 10; $i++) {
		echo "<br> Number: " . $i;
	}

	/*Step 3 : Make a switch Statement that test againts one condition with 5 cases*/
	$day = 3;
	switch ($day) {
		case 1:
			echo "<br>Monday";
			break;
		case 2:
			echo "<br>Tuesday";
			break;
		case 3:
			echo "<br>Wednesday";
			break;
		case 4:
			echo "<br>Thursday";
			break;
		case 5:
			echo "<br>Friday";
			break;
		default:
			echo "<br>Weekend";
	}

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>