<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

  <aside class="col-xs-4">
    <?php Navigation();?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <?php 


// Step1: Use a pre-built math function here and echo it
echo "The square root of 16 is: " . sqrt(16) . "<br>";

// Step 2:  Use a pre-built string function here and echo it
$originalString = "hello world";
$upperString = strtoupper($originalString);
echo "The uppercase version of '" . $originalString . "' is: " . $upperString . "<br>";

//Step 3:  Use a pre-built Array function here and echo it
$numbers = array(5, 2, 9, 1, 5, 6);
sort($numbers);
echo "The sorted array is: ";
foreach ($numbers as $number) {
    echo $number . " ";
}
echo "The sum of the array elements is: " . array_sum($numbers) . "<br>";



	
?>





  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>