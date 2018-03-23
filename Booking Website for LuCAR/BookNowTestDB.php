


<?php 
	session_start();

	// variable declaration
	$robot = "";
	$pickUp = "";
	$drop = "";
	$date = "";
	$time = "";
		
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect("localhost", "root", "", "lucar_booking_database");
	// REGISTER USER
	if (isset($_POST['submit'])) {
		// receive all input values from the form
		$robot = mysqli_real_escape_string($db, $_POST['robot']);
		$pickUp = mysqli_real_escape_string($db, $_POST['pickup']);
		$drop = mysqli_real_escape_string($db, $_POST['drop']);
		$date = mysqli_real_escape_string($db, $_POST['date']);
		$time = mysqli_real_escape_string($db, $_POST['time']);

		
			$query = "INSERT INTO bookingDetails (robot, pickUp, dropLoc,date,time) 
					  VALUES('$robot', '$pickUp', '$drop','$date','$time')";
			mysqli_query($db, $query);

			//$_SESSION['username'] = $username;
			//$_SESSION['success'] = "You are now logged in";
			header('location: BookNowTest.php');
		

	}


?>