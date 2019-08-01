<?php 

		abstract class Car 

		{
			
			protected $tankVolume;
			
			public function setTankVolume($volume)
			
			{

				$this->tankVolume = $volume;
			}
			

			abstract public function getTankVolume();
			
		} 

		class hona extends car
		{

			public function getTankVolume()

			{
				return $this->tankVolume;

			}
		}


		$obj_child = new hona();

		$obj_child->setTankVolume("saqibman");

		echo $obj_child->getTankVolume();




////////////////////////////////////////////////////////



		// abstract class Car 

		// {
			
		// 	protected $tankVolume="Saqibman";
			
			

		// 	abstract public function getTankVolume();
			
		// } 

		// class hona extends car
		// {

		// 	public function getTankVolume()

		// 	{
		// 		return $this->tankVolume;

		// 	}
		// }


		// $obj_child = new hona();

		// echo $obj_child->getTankVolume();

		

 ?>


