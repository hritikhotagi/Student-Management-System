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
include('../databasecon.php');

$sid = $_GET['sid'];

$sql = "SELECT * FROM `student` WHERE `id`= '$sid'";
$run = mysqli_query($con,$sql);
$data = mysqli_fetch_assoc($run);

?>
<form method="post" action="updatedata.php" enctype="multipart/form-data">
<table border="1" align="center" style="font-size:22px; line-height:30px; color:darkorange; margin-top:40px; width:58%;">
	<tr>
		<td>RollNo. </td>
		<td><input type="text" name="rollno" value="<?php echo $data['rollno']; ?>" required>  </td>
	</tr>
	<tr>
		<td>Full Name</td>
		<td><input type="text" name="name" value="<?php echo $data['name']; ?>" required>  </td>
	</tr>
	<tr>
		<td>City</td>
		<td><input type="text" name="city" value="<?php echo $data['city']; ?>" required>  </td>
	</tr>
	<tr>
		<td>Parent Contact No.</td>
		<td><input type="text" name="pcon" value="<?php echo $data['pcont']; ?>" required>  </td>
	</tr>
	<tr>
		<td>Standard</td>
		<td><input type="number" name="std" value="<?php echo $data['standard']; ?>" required>  </td>
	</tr>
	<tr>
		<td>Images</td>
		<td><input type="file" name="simg" required>  </td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="hidden" name="sid" value="<?php echo $data['id'];?>" />
			<input type="submit" name="submit" value="Submit">
		</td>
</table>
</form>