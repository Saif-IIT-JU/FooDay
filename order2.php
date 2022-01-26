<!DOCTYPE html>
<html>
<head>
	<title>Online order making</title>
</head>
<body>

<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

//echo $name . " ". $email. " ". $phone. " ". $address. "<br>";

if(!empty($_POST['list'])){
$list = $_POST['list'];
$q = array();
foreach ($_POST['q'] as $k) {
	# code...
	if($k!="") array_push($q, (int)$k);
}

$l1 = count($list); $l2 = count($q);
if($l1!=$l2){
	echo '<script>alert("Please select item and respective quantity.")</script>';
}else{

	$conn = mysqli_connect('localhost', 'root', '', 'fooday');
	if(!$conn){
		echo '<script>alert("Connection failed. Try again.")</script>';
	}else{
		$items=""; $tot = 0;
		for($i=0; $i<$l1; $i++){
			$items.=$list[$i]; $items.=" - ";
			$items.=$q[$i]; $items.=" , ";

			$sql1 = "SELECT * FROM foods WHERE food_Id='".$list[$i]."'";
			$res1 = mysqli_query($conn, $sql1);
			$row1 = mysqli_fetch_assoc($res1);
			$tot += $q[$i] * (int)$row1["price"];
		}

		$sql0 = "INSERT INTO online_order(name, email, phone, address, items, total_amount)VALUES('".$name."', '".$email."', '".$phone."', '".$address."', '".$items."', '".$tot."') ";
		$res0 = mysqli_query($conn, $sql0);
		if(!$res0){
			echo '<script>alert("Connection Failed. Try again.")</script>';
		}else{
			echo '<script>alert("Your Order has been confirmed. We have sent a receipt via your email.")</script>';


			$to = $email;
			$subj = "Confirmation Message";
			$body = "Your online food order on FOODAY has been confirmed."; $body.=". You have to pay the amount of "; $body.= $tot; $body.=" $ on delivary.\n\n\n";
			$body.="Food Id          Quantity        Unit Price           Price\n";
			$body.="__________________________________________________________\n\n";

			for($i=0; $i<$l1; $i++){
				$iid = $list[$i]; $cntt = $q[$i]; 

				$sql1 = "SELECT * FROM foods WHERE food_Id='".$list[$i]."'";
				$res1 = mysqli_query($conn, $sql1);
				$row1 = mysqli_fetch_assoc($res1);
				$unit_price=(int)$row1["price"];
				$tot_price = $cntt * $unit_price;

			$body.=" "; $body.=$iid; $body.="              "; $body.=$cntt;
			$body.="                     "; $body.=$unit_price;
			$body.="                   "; $body.=$tot_price; $body.="\n";

			}

			$body.="__________________________________________________________\n";
			$body.="               Total Amount of Money      =      "; $body.=$tot; $body.=" $\n\n";


			$header =  "This mail has been created automatically by FOODAY WEBSITE.";

			if(mail($to, $subj, $body, $header)){
				//echo "mailed success";
			}else{
				//echo "Mail failed";
			}

		}
	}
}

}
else{
	echo '<script>alert("Please select at least one food item and respective quantities.")</script>';
}

?>

<meta http-equiv="refresh" content="0; URL='reservation.php'"/> 

</body>
</html>