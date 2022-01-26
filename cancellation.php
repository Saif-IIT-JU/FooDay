<!DOCTYPE html>
<html>
<head>
	<title>Cancellation</title>
</head>
<body>

	<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$id = $_POST['id'];
	$date = $_POST['date'];

	//echo $date;

	$conn = mysqli_connect('localhost', 'root', '', 'fooday');
	if(!$conn)
	{
		echo '<script> alert("Connection error. please try again.")</script>';
	}
	else
	{
		$q0 = "SELECT * FROM reserve WHERE id='".$id."' AND name='".$name."' AND email='".$email."' AND date='".$date."' ";
		$r0 = mysqli_query($conn, $q0);
		if(!$r0)
		{
			echo '<script> alert("Wrong Information. Fill up the box carefully.")</script>';
		}
		else
		{
			$q1 = "DELETE FROM reserve WHERE id='".$id."' AND name='".$name."' AND email='".$email."' AND date='".$date."' ";
			$r1 = mysqli_query($conn, $q1);	
			if(!$r1)
			{
				echo '<script> alert("Failed. Try again")</script>';
			}
			else
			{
				echo '<script> alert("Cancellation successfully done!")</script>';
			}

		}
	}

	?>

<meta http-equiv="refresh" content="0; URL='cancelreserve.php'"/> 

</body>
</html>