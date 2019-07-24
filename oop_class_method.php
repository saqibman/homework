<?php

/*
oop main function ko method kahty han class k ander.... 
*/
class CarsShowRoom
{
	
	

	public function car1()
	{
		echo $name = "Name: Mehran";
		echo "<br>";
		echo $model = "Model: 2019";
		echo "<br>";
		echo $color = "Color: white";
		echo "<br>";
		echo $price = "Price: 1300,000 Rs..";
		echo "<br>";

	}



	public function car2()
	{
		echo $name = "Name: Wagon-R";
		echo "<br>";
		echo $model = "Model: 2019";
		echo "<br>";
		echo $color = "Color: Black";
		echo "<br>";
		echo $price = "Price: 1600,000 Rs..";
		echo "<br>";

	}


	public function car3()
	{
		echo $name = "Name: BMW";
		echo "<br>";
		echo $model = "Model: 2019";
		echo "<br>";
		echo $color = "Color: Black";
		echo "<br>";
		echo $price = "Price: 125000000 Rs..";
		echo "<br>";

	}


	// public function car4($all = array($modelName, $modelYear, $modelColor, $modelPrice);)
	// {

	// 	echo $name = "Name: ";
	// 	return ($modelName);
	// 	echo "<br>";

	// 	echo $model = "Model: ";
	// 	return ($modelYear);
	// 	echo "<br>";

	// 	echo $color = "Color: ";
	// 	return ($modelColor)
	// 	echo "<br>";

	// 	echo $price = "Price: ";
	// 	return ($modelPrice)
	// 	echo "<br>";

	// }
	
}


	$carsDetails = new CarsShowRoom();

	

	// get value in Method
	echo $carsDetails->car1();
	echo "<br>";

	echo $carsDetails->car2();
	echo "<br>";

	echo $carsDetails->car3();
	echo "<br>";

	//set value in Method
	// echo $carsDetails->car4($all);
	// echo "<br>";	
	
	


?>