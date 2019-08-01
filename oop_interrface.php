<?php 

		
		interface Car 

		{
			
			public function setName($volume);
			
			public function getName();
			
		} 


		interface bus
		{
			public function bus_setName($bvolume);
			public function bus_getName();

		}

// its compalusery to declair the mathod in child class 
		class hona implements car,bus
		{

			private $carName;
			private $busName;

			public function setName($volume)
			
			{

				$this->carName = $volume;
			}


			public function getName()

			{
				return $this->carName;

			}



			public function bus_setName($bvolume)
			
			{

				$this->busName = $bvolume;
			}


			public function bus_getName()

			{
				return $this->busName;

			}



		}


		$obj_child = new hona();

		$obj_child->setName("corola");

		echo $obj_child->getName();
		echo "<br>";

		$obj_child->bus_setName("school bus");

		echo $obj_child->bus_getName();


// interface Car
// {
// public function setModel($name);
// public function getModel();
// } 


// class miniCar implements Car {
// private $model;
// public function setModel($name)
// {
// $this -> model = $name;
// }
// public function getModel()
// {
// return $this -> model;
// }
// }

// $cc =new miniCar();
// $cc->setModel("saqibman");
// echo $cc->getModel();


 ?>