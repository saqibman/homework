<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>menu</title>
</head>
<body>

	<?php

	// 	$a =date("l");

// $days = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","sunday");

// if ($a==$days[0]) {
	
// 	echo "biryani";
// }
// elseif ($a==$days[1]) {
	
// 	echo "burger";
// }
// elseif ($a==$days[2]) {
	
// 	echo "shwarma";
// }
// elseif ($a==$days[3]) {
	
// 	echo "tikka botti";
// }
// elseif ($a==$days[4]) {
	
// 	echo "chicken jalfraizi";
// }
// elseif ($a==$days[5]) {
	
// 	echo "egg fried rice";
// }
// else{

// 	echo "mutton karahi";
// }


$d= date("l");

$m ="Monday";
$t ="Tuesday";
$w ="Wednesday";
$th ="Thursday";
$f="Friday";
$s="Saturday";
$ss="Sunday";

if ($d==$m) {
	echo "biryani";
} 
elseif ($d==$t) {
	echo "shawarma";
}
elseif ($d==$w) {
	echo "burger";
}
elseif ($d==$th) {
	echo "quorma";
}
elseif ($d==$f) {
	echo "mutton karahi";
}
elseif ($d==$s) {
	echo "chinese rice";
}
else {
	
	echo "bhook maar";
}
	?>
	
</body>
</html>