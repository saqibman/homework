<?php

/*
oop main function ko method kahty han class k ander.... 
*/
class name
{
	
	

	public function meth()
	{
		echo $str = " I am Student of Sir Tahir Shafi";
	}

	public function pera_val($value='45')
	{
		return($value);
	}

	public function pera_val_pass($value='45')
	{
		return($value);
	}
}


	$ob = new name();

	

	echo $ob->meth();

	echo "<br>";
	echo $ob->pera_val();

	echo "<br>";
	echo $ob->pera_val_pass(100);

	echo "<br>";
	var_dump($ob)


?>