<?php 

// The parent class
class Car {
// Private property inside the class
private $model;
// Public setter method
public function setModel($model)
{
$this -> model = $model;
}
public function hello()
{
return "beep! I am a <i>" . $this -> model . "</i><br />";
}
}


class SportsCar extends Car {

}


$sportsCar1 = new SportsCar();

$sportsCar1 -> setModel('Mercedes Benz');

echo $sportsCar1 -> hello();


 ?>