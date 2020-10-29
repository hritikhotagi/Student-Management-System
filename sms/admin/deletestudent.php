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
<h1 align="center" style="color:darkorange;">DELETE STUDENT DETAILS </h1>
<br>
<form action="deletestudent.php" method="post">
	<table align="center">
		<tr>
			<td>Enter Standard</td>
			<td> <input type="number" name="standard" placeholder="Enter Standard" required="required" /></td>		
		
			<td>Enter Student Name</td>
			<td> <input type="text" name="stuname" placeholder="Enter Student Name" required="required" /></td>
			
			<td><input type="submit" name="submit" value="Search"/></td>
		</tr>
	</table>
</form>
<br>

<table align="center" width="80%" border="1" >
	<tr>
		<th>No </th>
		<th>Image </th>
		<th>Name </th>
		<th>Rollno </th>
		<th>Edit </th>
	</tr>
	<?php
	if(isset($_POST['submit']))
	{
		include('../databasecon.php');
		$standard=$_POST['standard'];
		$name=$_POST['stuname'];
		
		$qry="SELECT * FROM `student` WHERE `standard`='$standard' AND `name` LIKE '%$name%'";
		$run=mysqli_query($con,$qry);
		
		if(mysqli_num_rows($run)<1)
		{
			echo"<tr><td colspan='5'> No Record Found </td></tr>";
		}
		else
		{
			$count=1;
			while($data=mysqli_fetch_assoc($run))
			{
				?>
				<tr>
					<td><?php echo $count;?></td>
					<td><img src="../dataimg/<?php echo $data['image'];?>" style="max-width:100px;" </td>
					<td><?php echo $data['name']; ?> </td>
					<td><?php echo $data['rollno']; ?> </td>
					<td><a href="deleteform.php?sid=<?php echo $data['id']; ?>">Delete</a> </td>
				</tr>
				
				
				
				<?php
			}
				
		}
		
	}
	?>
	
	

</table>

