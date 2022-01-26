<!DOCTYPE html>
<html>
<head>
	<title>searching...</title>
</head>
<body>

	<?php

	$keyword=$_POST['keyword'];
	//echo $keyword;

	$tmp="";
	for($i=0; $i<strlen($keyword); $i++)
	{
		if($keyword[$i]!=' ')
			$tmp.=$keyword[$i];
	}

	$tmp2 = strtolower($tmp);

	?>
	<meta http-equiv="refresh" content="0; URL='dailymenu.php#<?php echo $tmp2; ?>'"/>

	<?php

	?>

</body>
</html>