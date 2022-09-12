
<body>

<?php
  
 	// require "configs/dbconnect.php";
	include "configs/dbconfig.php";
 	
//------------------------------------------

   require("partials/header.php");


   // $sql = "DELETE FROM users WHERE id = 7";



 ?>
  
<!-- ------------------------------------------

	 $str = "test";

	 for($i = 0; $i <=10; $i++) {
	 	if ($i%2) {
	 		echo "<h3>" . $str . " - " . $i . "<br>" . "</h3>";
	 	}
		
	 }

	 function sum ( $a, $b)
	 {
	 	return $a + $b;
	 }

	 $name = "Greg";
	 echo "<script>alert('" . $name . "')</script>";
	
	 echo "<h3>" . sum (5, 3) . "<br>" . "</h4>"; -->

<form action="/add_user.php" method="POST" class="php_form1">
	<label>Name:<input type="text" name="name"></label><br/>
	<label>email:<input type="text" name="email"></label><br/>
	<button>Save</button><br/>

</form>


<?php

// $db_host=''; // ваш хост
// $db_name=''; // ваша бд
// $db_user=''; // пользователь бд
// $db_pass=''; // пароль к бд
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// включаем сообщения об ошибках
// $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name); // коннект с сервером бд
// $mysqli->set_charset("utf8mb4"); // задаем кодировку

// $result = $mysqli->query('SELECT * FROM `table_name`'); // запрос на выборку
// while($row = $result->fetch_assoc())// получаем все строки в цикле по одной
// {
//     echo '<p>Запись id='.$row['id'].'. Текст: '.$row['text'].'</p>';// выводим данные
// }

	$sql = "SELECT * FROM `users`";
	$result = $conn->query($sql);

	// var_dump($result);



	// foreach ($result as $row) 
	// {
	// 	var_dump($row);

	// 	echo '<p>Запись id='.$row['id'].'. Name: '.$row['username'].' email: '.$row['email'].'</p>';// выводим данные
	// }

	// while($row = $result->fetch_assoc())// получаем все строки в цикле по одной
	// {
	//     echo '<p>Запись id='.$row['id'].'. Name: '.$row['username'].' email: '.$row['email'].'</p>';// выводим данные
	// }

?>

<h1>A Fancy Table</h1>

<table id="customers">
  <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Email</th>
    <th>Option</th>
  </tr>

<?php

	while($row = $result->fetch_assoc())// получаем все строки в цикле по одной
	{
?>
  <tr>
    <td><?php echo $row['id'];       ?></td>
    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['email'];    ?></td>
    <td>
    	<a href="/edit_user.php?id=<?php echo $row['id'];?>">Edit</a>
    	<button class="btnDelete" data-id="<?php echo $row['id'];  ?>">Delete</button>
    </td>
  </tr> 

	    
<?php	    
	}
?>


</table>

<?php	
   	require("partials/footer.php");
?>

