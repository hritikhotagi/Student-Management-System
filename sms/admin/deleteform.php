<?php

include('../databasecon.php');
		
		$id=$_REQUEST['sid'];
		
		$query = "DELETE FROM `student` WHERE `id`='$id';";
		
		$runn = mysqli_query($con,$query);
		
		if($runn == true)
		{
			?>
			<script>
			alert('Data Deleted Successfully.');
			window.open('deletestudent.php','_self');
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