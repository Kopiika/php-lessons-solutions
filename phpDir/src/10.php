<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->

  <article class="main-content col-xs-8">


    <?php

		/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

Step 6: Call the method ShowAll
	*/

    class Dog {
      // Step 2: Set some properties for Dog
      public $eyeColor;
      public $noseColor;
      public $furColor;

      // Constructor to initialize properties
      public function __construct($eyeColor, $noseColor, $furColor) {
        $this->eyeColor = $eyeColor;
        $this->noseColor = $noseColor;
        $this->furColor = $furColor;
      }

      // Step 4: Make a method named ShowAll that echos all the properties
      public function ShowAll() {
        echo "Eye Color: " . $this->eyeColor . "<br>";
        echo "Nose Color: " . $this->noseColor . "<br>";
        echo "Fur Color: " . $this->furColor . "<br>";
      }
    }

    // Step 5: Instantiate the class / create object and call it pitbull
    $pitbull = new Dog("Brown", "Black", "Tan");
    echo "<h3>Pitbull Properties:</h3>";
    // Step 6: Call the method ShowAll
    $pitbull->ShowAll();

		?>





  </article>
  <!--MAIN CONTENT-->

  <?php include "includes/footer.php"; ?>