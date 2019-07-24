<!DOCTYPE html>
<html>
<head>
	<title> Form </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php $nameErr = $lnameErr = $emailErr = $conErr = $genderErr = $courseErr = $websiteErr = "";?>
	<div class="counter">

		<h1>
			ADMISSION FORM
		</h1>
	<form method="post" action="form.php">
	<table cellpadding="10">
		<tr>
			<td>First Name:</td>
			<td><input type="text" name="First_name" placeholder="Enter First name..." maxlength="23">
				<span class="error">* <?php echo $nameErr;?> </span> (Max lenghth 23 Char) </td>
		</tr>
		<tr>
			<td>Last Name:</td>
			<td><input type="text" name="Last_name" placeholder="Enter Last name..." maxlength="23"> 
				<span class="error">* <?php echo $lnameErr;?>(Max lenghth 23 Char) </td>
		</tr>
		<tr>
			<td>
				Date of Birth
			</td>
			<td>
				<select>
					<option value="Day" selected="select" name="date_of_birth_day"> Day </option>
					<option value="1" > 1 </option>
					<option value="2" > 2 </option>
					<option value="3" > 3 </option>
					<option value="4" > 4 </option>
					<option value="5" > 5 </option>
					<option value="6" > 6 </option>
					<option value="7" > 7 </option>
					<option value="8" > 8 </option>
					<option value="9" > 9 </option>
					<option value="10" > 10 </option>
					<option value="11" > 11 </option>
					<option value="12" > 12 </option>
					<option value="13" > 13 </option>
					<option value="14" > 14 </option>
					<option value="15" > 15 </option>
					<option value="16" > 16 </option>
					<option value="17" > 17 </option>
					<option value="18" > 18 </option>
					<option value="19" > 19 </option>
					<option value="20" > 20 </option>
					<option value="22" > 22 </option>
					<option value="23" > 23 </option>
					<option value="21" > 21 </option>
					<option value="24" > 24 </option>
					<option value="25" > 25 </option>
					<option value="26" > 26 </option>
					<option value="27" > 27 </option>
					<option value="28" > 28 </option>
					<option value="29" > 29 </option>
					<option value="30" > 30 </option>
					<option value="31" > 31 </option>
				</select>
				<select>
					<option value="Month" selected="select" name="date_of_birth_month"> Month </option>
					<option value="Jan"> Jan </option>
					<option value="Jan"> Feb </option>
					<option value="Jan"> Mar </option>
					<option value="Jan"> Apr </option>
					<option value="Jan"> May </option>
					<option value="Jan"> Jun </option>
					<option value="Jan"> Jul </option>
					<option value="Jan"> Aug </option>
					<option value="Jan"> Sep </option>
					<option value="Jan"> Oct </option>
					<option value="Jan"> Nov </option>
					<option value="Jan"> Dec </option>
				</select>
				<select>
					<option value="Years" name="date_of_birth_year"> Years </option>
					<option value=""> 1994 </option>
					<option value=""> 1995 </option>
					<option value=""> 1996 </option>
					<option value=""> 1997 </option>
					<option value=""> 1998 </option>
					<option value=""> 1999 </option>
					<option value=""> 2000 </option>
					<option value=""> 2001 </option>
					<option value=""> 2002 </option>
					<option value=""> 2003 </option>
					<option value=""> 2004 </option>
					<option value=""> 2005 </option>
					<option value=""> 2006 </option>
					<option value=""> 2007 </option>
					<option value=""> 2008 </option>
					<option value=""> 2009 </option>
					<option value=""> 2010 </option>
					<option value=""> 2011 </option>
					<option value=""> 2012 </option>
					<option value=""> 2013 </option>
					<option value=""> 2014 </option>
					<option value=""> 2015 </option>
					<option value=""> 2016 </option>
					<option value=""> 2017 </option>
					<option value=""> 2018 </option>
					<option value=""> 2019 </option>
					<option value=""> 2020 </option>
					<option value=""> 2021 </option>
					<option value=""> 2022 </option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				E-mail:
			</td>
			<td>
				<input type="text" name="email" maxlength="45" placeholder="123434@gmail.com"><span class="error">* <?php echo $emailErr;?></span>
			</td>
		</tr>
		<tr>
			<td>
				Contect No:
			</td>
			<td>
				<input type="Char" name="contect_number" placeholder="03084185338"><span class="error">* <?php echo $conErr;?> </span>
			</td>
		</tr>
		<tr>
			<td>
				Gender:
			</td>
			<td>
				Male <input type="radio" name="gender" value="Male">
				Female <input type="radio" name="gender" value="Femail">
				Other <input type="radio" name="gender" value="Other">
				<span class="error">* <?php echo $genderErr;?></span>
			</td>
		</tr>
		<tr>
			<td valign="top">
				Address:
			</td>
			<td>
				<textarea name="textarea" rows="4" cols="22" placeholder="Enter Address..."></textarea>
			</td>
		</tr>
		<tr>
			<td>
				City Name:
			</td>
			<td>
				<input type="text" name="City_name" placeholder="City Name">
			</td>
		<tr>
			<td>
				Country Name:
			</td>
			<td>
				<input type="text" name="Country_name" placeholder="Country Name">
			</td>
		</tr>
		</tr>
		<tr>
			<td>
				Pin Code:
			</td>
			<td>
				<input type="char" name="pin_code" placeholder="Enter pin code">
			</td>
		</tr>
		<tr>
			<td>
				Hobbies:
			</td>
			<td>
				Cricket <input type="checkbox" name="Hobbies[]" value="Cricket"> 
				Foot ball <input type="checkbox" name="Hobbies[]" value="Foot ball">
				Other <input type="text" name="Hobbies[]" value="">
			</td>
		</tr>
		<tr>
			<td valign="top">Qualificatio:</td>
			<td>
				<table border="1" style="border-collapse: collapse; text-align: center;">
					<tr>
						<td>
							sr#
						</td>
						<td>
							Degree
						</td>
						<td>
							Board
						</td>
						<td>
							Obtaining Marks
						</td>
						<td>
							Total Marks
						</td>
					</tr>
					<tr>
						<td>1</td>
						<td><input type="text" name="degree_name_1"></td>
						<td><input type="text" name="board_name_1"></td>
						<td><input type="char" name="obtaining_Marks_1"></td>
						<td><input type="char" name="total_marks_1"></td>
					</tr>
					<tr>
						<td>2</td>
						<td><input type="text" name="degree_name_2"></td>
						<td><input type="text" name="board_name_2"></td>
						<td><input type="char" name="obtaining_Marks_2"></td>
						<td><input type="char" name="total_marks_2"></td>
					</tr>

					<tr>
						<td>3</td>
						<td><input type="text" name="degree_name_3"></td>
						<td><input type="text" name="board_name_3"></td>
						<td><input type="char" name="obtaining_Marks_3"></td>
						<td><input type="char" name="total_marks_3"></td>
					</tr>
					<tr>
						<td>4</td>
						<td><input type="text" name="degree_name_4"></td>
						<td><input type="text" name="board_name_4"></td>
						<td><input type="char" name="obtaining_Marks_4"></td>
						<td><input type="char" name="total_marks_4"></td>
					</tr>
					<tr>
						<td>5</td>
						<td><input type="text" name="degree_name_5"></td>
						<td><input type="text" name="board_name_5"></td>
						<td><input type="char" name="obtaining_Marks_5"></td>
						<td><input type="char" name="total_marks_5"></td>
					</tr>

				</table>
			</td>
		</tr>
		<tr>
			<td>Select only <br> 1 Course</td>
			<td>
				BSCS <input type="radio" name="course" value="BSCS">
				BSSE <input type="radio" name="course" value="BSSE">
				BSIT <input type="radio" name="course" value="BSIT">
				BSC <input type="radio" name="course" value="BSC">
				<span class="error">* <?php echo $courseErr;?></span>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="reset" name="reset" value="reset">
				<input type="submit" name="submit" value="Submit">
			</td>
		</tr>
	</table>
	</form>
	</div>

</body>
</html>
