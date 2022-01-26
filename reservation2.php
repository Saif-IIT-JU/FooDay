
<html>
<head>
<title>Reservation Request</title>
</head>
<body>
<?php


$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];
$time2 = $_POST['time2'];
$people = $_POST['people'];

$currdate=date('Y-m-d');
//echo $name. " ". $email. " ". $date. " ". $time. " ". $people. " ". $currdate. "<br>" ;

if($date<=$currdate){
	echo '<script>alert("Please select a future date.")</script>';
}else{
if($time>$time2 || $time<"10:00" || $time2>"22:00"){
	echo '<script>alert("Please select correct time duration(10AM to 10PM).")</script>';
}else{

  $conn = mysqli_connect('localhost', 'root', '', 'fooday');

  if(!$conn){
  	echo '<script>alert("Connection failed! Please try again.")</script>';
  }
  else{
  	//echo "connect successfully<br>";

  	$flag = 1;
  	$q1 = "SELECT * FROM reserve WHERE date='".$date."' ";
  	$r1 = mysqli_query($conn, $q1);

  	$flag = 1;
  	while($row1=mysqli_fetch_assoc($r1)){
  		$date2 = $row1["date"];
  		$l = $row1["time"];
  		$r = $row1["time2"];
  		if($date==$date2){
  			if(!($time2<$l || $time>$r))
  				$flag = 0;
  		}
  	}

  	if($flag==0){
  		echo '<script>alert("Already booked this time span. Please choose another time.")</script>';
  	}
  	else{
      $q100 = "SELECT * FROM reserve";
      $r100 = mysqli_query($conn, $q100);
      $cnt100 = mysqli_num_rows($r100);
      $id = ""; $id.=(string)$cnt100; $id.=(string)(rand());
  		$q2 = "INSERT INTO reserve(name, email, date, time, time2, people, id) VALUES('".$name."', '".$email."', '".$date."', '".$time."', '".$time2."', '".$people."', '".$id."')";
  		$r2 = mysqli_query($conn, $q2);
  		if($r2){
  			$to = $email;
			$subj = "Confirmation Message";
			$body = "Your reservation request has been confirmed on the date "; $body.=$date; $body.=" at time "; $body.=$time; $body.=" to "; $body.=$time2; $body.=". You have to pay the amount of 150$."; $body .=" Your reservation id is "; $body.=$id; $body.=" . Keep it in mind for further use.";
			$header =  "This mail has been created automatically by FOODAY WEBSITE.";

			if(mail($to, $subj, $body, $header)){
				//echo "mailed success";
			}else{
				//echo "Mail failed";
			}
  			echo '<script>alert("Your reservation request has been recieved by us.")</script>';
  		}
  		else{
  			echo '<script>alert("Failed to reserve. Please try again.")</script>';
  		}
  	}

  }
}

}

?>

<meta http-equiv="refresh" content="0; URL='reservation.php'"/> 

</body>
</html>