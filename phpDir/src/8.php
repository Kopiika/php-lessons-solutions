<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  

	/*  Step 1 -Make a variable with some text as value

		Step 2 - Use crypt() function to encrypt it

		Step 3 - Assign the crypt result to a variable

		Step 4 - echo the variable

	*/


		// Step 1: Make a variable with some text as value
		$plainText = "mySecretPassword";

		// Step 2: Use crypt() function to encrypt it
		// crypt() can take an optional salt; if you don't provide one, PHP generates a default
		$encrypted = crypt($plainText, 'salt'); // 'salt' can be any string, e.g., 'xy'

		// Step 3: Assign the crypt result to a variable
		$hashedText = $encrypted; // Store the result in another variable (optional step)

		// Step 4: echo the variable
		echo "Encrypted text: " . $hashedText;

	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>