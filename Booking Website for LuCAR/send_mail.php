<?php

 
	//session_start();

	// variable declaration
	$mailto="";
	$username="";
	//$mailcost="";
		
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect("localhost", "root", "", "lucar_booking_database");
ini_set('memory_limit', '256M');

$sql = "SELECT * FROM users ORDER BY uid DESC LIMIT 1;";
$result = mysqli_query($db, $sql);


if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
	echo "email id of current user is : ". $row["email"];
	break;
	}
}
else {
	echo "0 results";
}

/*$sql2 = "SELECT * FROM bookingdatabase ORDER BY id DESC LIMIT 1;";
$result2 = mysqli_query($db, $sql2);
if (mysqli_num_rows($result2) > 0) {
    
    while($row = mysqli_fetch_assoc($result2)) {
	echo "Robot used by current user : ". $row["robot"];
	break;
	}
	echo "Cost of robot is :";
	$robot = $row["robot"];
	switch ($robot) {
		case "Piki-30 Kgs":
			$mailCost = "<br>Cost incurred is Rs. 50 <br>";
			break;
		case "Pika-50 Kgs":
			$mailCost =  "<br>Cost incurred is Rs. 75 <br>";
			break;
		case "Mongie-100 Kgs":
			$mailCost =  "<br>Cost incurred is Rs. 120 <br>";
			break;
			case "Mongo-150 Kgs":
			$mailCost =  "<br>Cost incurred is Rs. 150 <br>";
			break;
		default:
			$mailCost =  "Invalid Choice:";
	}
}
else {
	echo "0 results";
}*/


	$mailto = $row["email"];
    //$mailto = $_POST['mail_to'];
    $mailSub = "Receipt for LuCAR Booking";
    $mailMsg = "Dear Customer, Your booking has been received. Kindly, be present at the pick up point on time. Happy Luggaging :)";
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "wt.test1857@gmail.com";
   $mail ->Password = "timepass123";
   $mail ->SetFrom("wt.test1857@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "<br>Mail Not Sent";
   }
   else
   {
       echo "<br>Mail Sent";
   }





   

