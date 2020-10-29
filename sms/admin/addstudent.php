<?php
	session_start();
	
	if(isset($_SESSION['uid']))
	{
		echo "";
	}
	else
	{
		header('location: ../login.php');
	}

?>

<?php
include('header.php');
include('titlehead.php');
?>

<h1 align="center" style="color:darkorange;">INSERT STUDENT DETAILS </h1>
<form method="post" action="addstudent.php" enctype="multipart/form-data">
<table border="1" align="center" style="font-size:22px; line-height:30px; color:darkorange; margin-top:40px; width:58%;">
	<tr>
		<td>RollNo. </td>
		<td><input type="text" name="rollno" placeholder="Enter RollNo" required>  </td>
	</tr>
	<tr>
		<td>Full Name</td>
		<td><input type="text" name="name" placeholder="Enter Full Name" required>  </td>
	</tr>
	<tr>
		<td>City</td>
		<td><input type="text" name="city" placeholder="Enter City" required>  </td>
	</tr>
	<tr>
		<td>Parent Contact No.</td>
		<td><input type="text" name="pcon" placeholder="Enter parent contact no." required>  </td>
	</tr>
	<tr>
		<td>Standard</td>
		<td><input type="number" name="std" placeholder="Enter Standard" required>  </td>
	</tr>
	<tr>
		<td>Images</td>
		<td><input type="file" name="simg" required>  </td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
</table>
</form>
</body>
</html>

<?php

	if(isset($_POST['submit']))
	{	
		include('../databasecon.php');
		$rolno=$_POST['rollno'];
		$name=$_POST['name'];
		$city=$_POST['city'];
		$pcn=$_POST['pcon'];
		$std=$_POST['std'];
		$imagename=$_FILES['simg']['name'];
		$tempname=$_FILES['simg']['tmp_name'];
		move_uploaded_file($tempname,"../dataimg/$imagename");
		
		
		$query = "INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standard`,image) VALUES ('$rolno','$name','$city','$pcn','$std','$imagename')";
		
		$runn = mysqli_query($con,$query);
		
		if($runn == true)
		{
			?>
			<script>
			alert('Data Inserted Successfully.');
			</script>
			<?php
		}
		else
		{
			?>
			<script>
			alert('Failed to insert data!');
			</script>
			<?php
		}
	}
?>