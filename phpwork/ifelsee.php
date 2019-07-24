

<!DOCTYPE html>
<html>
<body>

		<?php

		$t = date("l");

		$days = array("Monday", "Tuesday", "wednesday","Thursday", "Friday", "Saturday", "Sunday" );

		  

			if ($t==$days[0]) {
			    echo "Pizza!";
			} 

			elseif ($t==$days[1]) {
			    echo "patise !";
			}

			elseif ($t==$days[2]) {
			    echo "Burger !";
			}

			elseif ($t==$days[3]) {
			    echo "patise !";
			}

			elseif ($t==$days[4]) {
			    echo "pasta !";
			}

			elseif ($t==$days[5]) {
			    echo "chany !";
			}

			else {
			    echo "Chickn";
			}
		?>
 
</body>
</html>