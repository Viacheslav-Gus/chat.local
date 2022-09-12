<?php
  include "configs/dbconfig.php";

  if(!empty($_POST)) 
 	{ 
 		echo $_POST['name'] . " - " . $_POST['email'];
 		echo "<br>";

 		$sql = "INSERT INTO users (username, email) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "');";
 		
 		// echo "INSERT INTO `users` (`username`, `email`) VALUES ('demon', 'demon@ukr.net');";

 		// echo "<br>";

 	if (mysqli_query($conn, $sql)) 
 		{
      		echo "INSERT" . "<br>";
      		header("Location: /");

		} 
	else 
		{
      		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

	  // mysqli_close($conn); 

 	}

 	?>

