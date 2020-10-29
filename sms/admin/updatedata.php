<?php

include('../databasecon.php');
		$rolno=$_POST['rollno'];
		$name=$_POST['name'];
		$city=$_POST['city'];
		$pcn=$_POST['pcon'];
		$std=$_POST['std'];
		$id=$_POST['sid'];
		$imagename=$_FILES['simg']['name'];
		$tempname=$_FILES['simg']['tmp_name'];
		move_uploaded_file($tempname,"../dataimg/$imagename");
		
		
		
		$query = "UPDATE `student` SET `rollno` = '$rolno', `name` = '$name', `city` = '$city', `pcont` = '$pcn', `standard` = '$std', `image` = '$imagename' WHERE `id` = $id;";
		
		$runn = mysqli_query($con,$query);
		
		if($runn == true)
		{
			?>
			<script>
			alert('Data Updated Successfully.');
			window.open('updateform.php?sid=<?php echo $id; ?>','_self');
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



?>