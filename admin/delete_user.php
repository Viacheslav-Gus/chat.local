<?php
  include "configs/dbconfig.php";

  if(!empty($_GET)) 
 	{ 
 		// echo $_GET['user_id'];
 		// DELETE FROM `users` WHERE `users`.`id` = 38
 		$sql = "DELETE FROM `users` WHERE `users`.`id` =" . $_GET['user_id']; 

 		
 	if (mysqli_query($conn, $sql)) 
 		{
      		echo "DELETE" . "<br>";
      		header("Location: /");

		} 
	else 
		{
      		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

	  // mysqli_close($conn); 

 	}

 	?>

