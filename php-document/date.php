<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php
	date_default_timezone_set("Asia/Taipei");
	$d = strtotime("tomorrow");
	echo date("Y-m-d h:i:sa", $d) . "<br>";

	$d = strtotime("next Saturday");
	echo date("Y-m-d h:i:sa", $d) . "<br>";

	$d = strtotime("+3 Months");
	echo date("Y-m-d h:i:sa", $d) . "<br>";

	$d = mktime(11, 14, 54, 8, 12, 2014);
	echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

	$d = strtotime("10:30pm April 15 2014");
	echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

	$startdate = strtotime("Saturday");
	$enddate = strtotime("+6 weeks", $startdate);

	while ($startdate < $enddate) {
		echo date("M d", $startdate) . "<br>";
		$startdate = strtotime("+1 week", $startdate);
	}
	$d1 = strtotime("November 14");
	$d2 = ceil(($d1 - time()) / 60 / 60 / 24);
	echo "There are " . $d2 . " days until 14th of November." . "<br>";

	echo date("l");
	?>
</body>

</html>