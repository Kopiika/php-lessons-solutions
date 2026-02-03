<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  
	// Step 1 - Create a database in PHPmyadmin
	// Step 2 - Create a table like the one from the lecture
	// Step 3 - Insert some Data
	// Step 4 - Connect to Database and read data


	// Connect to the MySQL database
	// Parameters: hostname, username, password, database (from docker-compose)
	$connection = mysqli_connect('db', 'lionUser', 'lionPass', 'lionDB');
	
	// Check connection
	if (!$connection) {
		// If connection fails, display the error message
		die("Database connection failed: " . mysqli_connect_error());
	}

	// Perform a query to retrieve data from the 'users' table
	$query = "SELECT * FROM users";
	// Execute the query
	$result = mysqli_query($connection, $query);
	// Check if there are results and display them
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			// Display each row's data
			echo "ID: " . $row['id'] . " - Name: " . $row['name'] . " - Email: " . $row['email'] . "<br>";
		}
	} else {
		// If no results, display a message
		echo "0 results";
	}
	// Close the database connection
	mysqli_close($connection);
	?>

</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
