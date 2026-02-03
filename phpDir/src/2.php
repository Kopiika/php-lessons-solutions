<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php

		

		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:*/
		  $number1 = 10;
		  $number2 = 20;

		  /*Step 2: Add the two variables and display the sum with echo: */
		  $sum = $number1 + $number2;
		  echo "The sum of " . $number1 . " and " . $number2 . " is: " . $sum . "<br>";

		  /* Step3: Make 2 Arrays with the same values, one regular and the other associative */
		  $regularArray = array("Apple", "Banana", "Cherry");
		  $associativeArray = array("first" => "Apple", "second" => "Banana", "third" => "Cherry");
		  echo "<b>" . "Regular Array: " . "</b>";
		  foreach ($regularArray as $item) {
		      echo $item . ", ";	
		  }
		  echo "<b>" . "<br>Associative Array: " . "</b>";
		  foreach ($associativeArray as $key => $value) {
		      echo $key . "=>" . $value . ", ";
		  }

		  // make a regular array with the values 10, 20, 30, 40. 50
		  $numbersArray = array(10, 20, 30, 40, 50);
		  print "<br>"."The array is" .implode(", ", $numbersArray) . "<br>";



		  




		?>



	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>