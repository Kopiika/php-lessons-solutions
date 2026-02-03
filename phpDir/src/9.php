<?php
// Step 2: Start session
session_start();

// Step 3: Set cookie (expires in 7 days)
setcookie("myCookie", "HelloCookie", time() + 7*24*60*60);

// Step 4: Set session value
$_SESSION['mySession'] = "ThisIsMySessionValue";
?>
<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>



<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>

  </aside>
  <!--SIDEBAR-->

  <article class="main-content col-xs-8">

      <!-- Step 1: Link with GET parameters -->
      <a href="?name=Anna&age=25">Click Here</a>

      <?php
      // Display GET parameters
      if (isset($_GET['name']) && isset($_GET['age'])) {
          echo "<p>Name: " . htmlspecialchars($_GET['name']) . "</p>";
          echo "<p>Age: " . htmlspecialchars($_GET['age']) . "</p>";
      }

      // Display cookie
      if (isset($_COOKIE['myCookie'])) {
          echo "<p>Cookie value: " . htmlspecialchars($_COOKIE['myCookie']) . "</p>";
      }

      // Display session
      if (isset($_SESSION['mySession'])) {
          echo "<p>Session value: " . htmlspecialchars($_SESSION['mySession']) . "</p>";
      }
      ?>
  </article>
  
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>