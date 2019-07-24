<?php

/**
oop main variable ko property kahty han class k ander.... 
*/
class Name
{
	
	public $str = "welcome property";

	public $int = 5;

	public $fo = 1.56;
}

	$ob = new Name();

	//get values
	echo $ob->str;
	echo "<br>";

	echo $ob->int;
	echo "<br>";
	
	echo $ob->fo;
	echo "<br>";

	//set values
	echo $ob->str='goodbay property';
	echo "<br>";

	echo $ob->int = '100';
	echo "<br>";
	
	echo $ob->fo='5.56';
?>