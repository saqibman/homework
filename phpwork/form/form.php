<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data of Student!</title>
</head>
<body>

	<h1>Requird Information!</h1>

	<?php
	
	$fname = $lname = $email = $contect = $gender = $selected = $course = $comment = $website = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
		echo "Name: ";
		if (empty($_POST["First_name"])) {
    			$nameErr = "Name is required";
 				 } else {
    			$fname = test_input($_POST["First_name"]);
  				}
		echo $fname;


		if (empty($_POST["Last_name"])) {
    			$lnameErr = "Name is required";
 				 } else {
    			$lname = test_input($_POST["Last_name"]);
  				}
		echo $lname;
		echo "<br>";



		echo $_POST["date_of_birth_day"];
		echo ":";
		echo $_POST["date_of_birth_year_month"];
		echo ":";
		echo $_POST["date_of_birth_year"];
		echo "<br>";

		echo "Email: ";
		if (empty($_POST["email"])) {
    			$emailErr = "Name is required";
 				 } else {
    			$email = test_input($_POST["email"]);
  				}

		echo $email;
		echo "<br>";


		echo "Contect: ";
		if (empty($_POST["contect_number"])) {
    			$conErr = "Name is required";
 				 } else {
    			$contect = test_input($_POST["contect_number"]);
  				}

		echo $contect;
		echo "<br>";


		echo "Gender: ";
		if (empty($_POST["gender"])) {
   			 $genderErr = "Gender is required";
  			} else {
   			 $gender = test_input($_POST["gender"]);
  			}
  		echo $gender;
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

		// echo "Hobbies: ";
		// foreach ($_POST["hobbies[]"] as $value) {
		// 	echo $value;
		// }

		echo "Hobbies: ";
		// if(!empty($_POST['hobbies'])){
		// foreach($_POST['hobbies'] as $hobbies){
		// echo $hobbies."</br>";
		// }
		// }
		
		if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['hobbies'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['hobbies'] as $selected){
echo $selected."</br>";
}
}
}
		
		// echo $_POST["Hobbies"];
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



		echo "Course: ";
		if (empty($_POST["course"])) {
   			 $courseErr = "Gender is required";
  			} else {
   			 $course = test_input($_POST["course"]);
  			}
  		echo $course;
		echo "<br>";

}













		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}




	
	?>
	
</body>
</html>
