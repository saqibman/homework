<!DOCTYPE html>
<html>
<body>

<?php  //global scope

	$x = 9;

	function rollno(){

		echo "<p>My roll no is $x</p>"; //varibale delaring the outside to genrating the error
	}

	rollno();

		echo "My roll no is $x";

?>


<?php  //local scope

	

	function rolln(){

		$y = 9;

		echo "<p>My roll no is $y</p>"; //varibale delaring the inside to not genrating the error
	}

	rolln();

		echo "<p>My roll no is $y</p>"; //varibale delaring the inside to genrating the error

?>


<?php

	$x = 10;
	$y = 15;

	function myTest() {
   		 $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
	} 

	myTest();
	echo "result =";
	echo $y; 
	echo "<br>";
?>



<?php  //static var

function myTest1() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest1();
echo "<br>";
myTest1();
echo "<br>";
myTest1();
echo "<br>";
?>

<?php  //notstatic var

function myTest2() {
    $x = 0;
    echo $x;
    $x++;
}

myTest2();
echo "<br>";
myTest2();
echo "<br>";
myTest2();
?>


</body>
</html>