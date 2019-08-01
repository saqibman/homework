<?php 

// /**
// * 
// */
// class bus
// {
	
// 	public $str1 ="feMaleBox";

// 	public function maleBox()
// 	{
// 		return $str = "maleBox";
// 	}
// }



// class miniBus extends bus
// {
	
	
// }




// $obj = new miniBus();

// echo $obj->str1;
// echo "<br>";

// echo $obj->maleBox();




class bus
{
	
	private $str1 ="feMaleBox";

	// public function setGender($gender)
	// {
	// 	$this->str1=$gender;
	// }

	public function getGender()
	{

		return $this->str1;
	}

}

class miniBus extends bus
{
	
	
}




$obj = new miniBus();

// $obj->setGender();
echo "<br>";

echo $obj->getGender();


 ?>