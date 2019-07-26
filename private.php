<?php 

class danger
{

	private $item;
	

	public function setmethod($item)
	{
		$this->item=$item;

	}

	public function getmethod()
	{
		return $this->item;
	}
 }

$dd = new danger();

$dd->setmethod('Red Color');
echo $dd->getmethod();



 ?>
