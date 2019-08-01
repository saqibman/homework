<?php 


		trait Price 
		{
			public function sumValue($value1, $value2)
			{
			return $value1 + $value2;
			}
		} 


		class sum1 
		{
			use Price;
		}

		class sum2 
		{
			use Price;
		} 


		$firstSum1 = new sum1();

		echo $firstSum1 ->sumValue (30,10);
		
		$firstSum2 = new sum2();
		
		echo $firstSum2 ->sumValue (30,10);




 ?>