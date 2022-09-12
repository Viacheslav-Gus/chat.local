<?php
  include "configs/dbconfig.php";
  require("partials/header.php");

  if(!empty($_POST)) 
 	{ 

		// UPDATE `users` SET `username` = 'ddd', `email` = 'zzz@5.ua' WHERE `users`.`id` = 42;
		// $sql = "UPDATE `users` SET `username` = \'ddd\', `email` = \'zzz@5.ua\' WHERE `users`.`id` = 42;";

 		$sql = "UPDATE `users` SET `username` = '" . $_POST['name'] . "', `email` = '" . $_POST['email'] . "' WHERE `users`.`id` = '" . $_GET['id'] . "'";

 		
 	if (mysqli_query($conn, $sql)) 
 		{
      		echo "UPDATE" . "<br>";
      		header("Location: /");

		} 
	else 
		{
      		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

	  // mysqli_close($conn); 

 	}

 		$sql = "SELECT * FROM `users` WHERE `users`.`id` =" . $_GET['id']; 
 		$result = mysqli_query($conn, $sql);
 		// var_dump($result);
 		$row = $result->fetch_assoc();

 	?>

 	<form action="/edit_user.php?id=<?php echo $_GET['id'] ; ?>" method="POST" class="php_form1">
 		<!-- <input type="hidden" name=""> -->
 		
		<label>Name:<input type="text" name="name" value="
			<?php echo $row['username']?>"></label><br/>
		<label>email:<input type="text" name="email" value="
			<?php echo $row['email']?>"></label><br/>
		<button>Save</button><br/>
	</form>


<?php
   require("partials/footer.php");

?>