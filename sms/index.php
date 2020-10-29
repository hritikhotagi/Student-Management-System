<!DOCTYPE HTML>
<html lang="en_US">
<head>
	<meta charset="UTF-8">
	<title>Student Management System</title>
	<link href = "css/abc.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#87CEFA">
<h3 id ="side" > <a href="login.php"> Admin Login </a></h3>
<h1 id ="title"  > Welcome to Student Management System </h1>
<hr>
<img src="images/aaa.svg" style="width:500px; float:right; margin-top:70px;" />
<form method="post" action="index.php">
<table style="width:30%; margin-top:50px;" align="center" >
	<tr>
		<th id="t" colspan="2" > Student Information <br></th>
	</tr>
	<tr>
		<td> Choose Standard</td>
		<td> 
			<select name="std" required>
				<option value="1">1st</option>
				<option value="2">2nd</option>
				<option value="3">3rd</option>
				<option value="4">4th</option>
				<option value="5">5th</option>
				<option value="6">6th</option>
				<option value="7">7th</option>
				<option value="8">8th</option>
				<option value="9">9th</option>
				<option value="10">10th</option>
				<option value="11">11th</option>
				<option value="12">12th</option>
			</select>
		</td>
	</tr>
	
	
	<tr>
		<td>Enter Rollno</td>
		<td> <input type="text" name="rollno" required> </td>
	</tr>
	
	<tr>
		<td id="s" colspan="2" align="center"> <input type="submit" name="submit" value="Show Info"></td>
	</td>

</table>
  
</body>
</html>

<?php
	if(isset($_POST['submit']))
	{
		$standard = $_POST['std'];
		$rollno = $_POST['rollno'];
		include('databasecon.php');
		include('functionshow.php');
		
		showdetails($standard,$rollno);
	
	}
?>


