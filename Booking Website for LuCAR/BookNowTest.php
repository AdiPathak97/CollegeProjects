<?php include('BookNowTestDB.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Robot booking details</title>
	<link rel="stylesheet" type="text/css" href="test.css">
</head>


<body>

<div class="container">  
<form id="contact" action="" method="post">
<h2>Thank you for choosing us.</h2><br>
<h3>Order Details are as follows: <br></h3>
<br>
<?php 
	//session_start();

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
ini_set('memory_limit', '256M');

$sql = "SELECT robot, pickup, dropLoc, date, time FROM bookingDetails ORDER BY id DESC LIMIT 1;";
$result = mysqli_query($db, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	echo "Your robot for the trip is : " . $row["robot"]. 
	"<br>Your pick up point is : " . $row["pickup"].
	"<br> Your destination is : " . $row["dropLoc"]. 
	"<br> Scheduled Date is : ". $row["date"].
	"<br> Scheduled Time is : ". $row["time"].
	"<br>";
	break;
	}
	echo "Cost of robot is :";
	$robot = $row["robot"];
	switch ($robot) {
		case "Piki-30 Kgs":
			echo "Rs. 50 <br>";
			break;
		case "Pika-50 Kgs":
			echo "Rs. 75 <br>";
			break;
		case "Mongie-100 Kgs":
			echo "Rs. 120 <br>";
			break;
			case "Mongo-150 Kgs":
			echo "Rs. 150 <br>";
			break;
		default:
			echo "Invalid Choice:";
	}
}
else {
	echo "0 results";
}
?>


</form>  
</div>
<center>
<button class="button" style="vertical-align:middle"><a href="booknow.html"><span>Reorder</span></a></button>
<button class="button" style="vertical-align:middle"><a href="pay.html"><span>Proceed to Payment</span></a></button>

</center>
</body>
</html>