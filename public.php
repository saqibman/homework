<?php 

class danger
{

	public $item;


	public function method()
	{
		return $this->item;

	}
 }

$dd = new danger();

$dd->item='Red Color';
echo $dd->method();



 ?>
