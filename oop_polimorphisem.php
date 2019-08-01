<?php 

// interface Shape 
// {
// public function calcArea();
// } 

class Circle 
{
	private $radius;

	public function __construct($radius)
	{
	$this -> radius = $radius;
	}
// The method calcArea calculates the area of circles
	public function calcArea()
	{
	return $this -> radius * $this -> radius * pi();
	}
}

//////////////////////////////////////////////////////////////////////////

class Rectangle 
{

	private $width;

	private $height;

	public function __construct($width, $height)
	{
	$this -> width = $width;
	$this -> height = $height;
	}
// calcArea calculates the area of rectangles
	public function calcArea()
	{
	return $this -> width * $this -> height;
	}

}
// Now, we can create objects from the concrete classes:
$circ = new Circle(3);
$rect = new Rectangle(3,4);
echo $circ -> calcArea();
echo $rect -> calcArea();



 ?>