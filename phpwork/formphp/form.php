<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data of Student!</title>
</head>
<body>

	<h1>Requird Information!</h1>

	<?php
		echo "Name: ";
		echo $_POST["First_name"];
		echo $_POST["Last_name"];
		echo "<br>";

		echo $_POST["date_of_birth_day"];
		echo ":";
		echo $_POST["date_of_birth_year_month"];
		echo ":";
		echo $_POST["date_of_birth_year"];
		echo "<br>";

		echo "Email: ";
		echo $_POST["email"];
		echo "<br>";

		echo "Contect: ";
		echo $_POST["contect_number"];
		echo "<br>";

		echo "Message: <br>";
		echo $_POST["textarea"];
		echo "<br>";

		echo "City Name: ";
		echo $_POST["City_name"];
		echo "<br>";

		echo "Country Name: ";
		echo $_POST["Country_name"];
		echo "<br>";

		echo "Postal Code: ";
		echo $_POST["pin_code"];
		echo "<br>";

		echo "Hobbies: ";
		echo $_POST["Hobbies"];
		echo "<br>";

		echo "Qualification: ";
		echo "<br>";
		echo "First Degree Data: ";
		echo "<br>";
		echo "Degree name: ";
		echo $_POST["degree_name_1"];
		echo "<br>";
		echo "Board name: ";
		echo $_POST["board_name_1"];
		echo "<br>";
		echo "Obtaind Marks: ";
		echo $_POST["obtaining_Marks_1"];
		echo "<br>";
		echo "Total Marks: ";
		echo $_POST["total_marks_1"];
		echo "<br>"; echo "<br>";

		echo "Second Degree Data: ";
		echo "<br>";
		echo "Degree name: ";
		echo $_POST["degree_name_2"];
		echo "<br>";
		echo "Board name: ";
		echo $_POST["board_name_2"];
		echo "<br>";
		echo "Obtaind Marks: ";
		echo $_POST["obtaining_Marks_2"];
		echo "<br>";
		echo "Total Marks: ";
		echo $_POST["total_marks_2"];
		echo "<br>"; echo "<br>";

		echo "Third Degree Data: ";
		echo "<br>";
		echo "Degree name: ";
		echo $_POST["degree_name_3"];
		echo "<br>";
		echo "Board name: ";
		echo $_POST["board_name_3"];
		echo "<br>";
		echo "Obtaind Marks: ";
		echo $_POST["obtaining_Marks_3"];
		echo "<br>";
		echo "Total Marks: ";
		echo $_POST["total_marks_3"];
		echo "<br>";echo "<br>";

		echo "forth Degree Data: ";
		echo "<br>";
		echo "Degree name: ";
		echo $_POST["degree_name_4"];
		echo "<br>";
		echo "Board name: ";
		echo $_POST["board_name_4"];
		echo "<br>";
		echo "Obtaind Marks: ";
		echo $_POST["obtaining_Marks_4"];
		echo "<br>";
		echo "Total Marks: ";
		echo $_POST["total_marks_4"];
		echo "<br>";echo "<br>";

		echo "Fifth Degree Data: ";
		echo "<br>";
		echo "Degree name: ";
		echo $_POST["degree_name_5"];
		echo "<br>";
		echo "Board name: ";
		echo $_POST["board_name_5"];
		echo "<br>";
		echo "Obtaind Marks: ";
		echo $_POST["obtaining_Marks_5"];
		echo "<br>";
		echo "Total Marks: ";
		echo $_POST["total_marks_5"];
		echo "<br>";


		echo $_POST["radio"];





	?>
	
</body>
</html>
