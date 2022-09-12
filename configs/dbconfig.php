<?php
$host = "localhost";
$dbname = "blog_php";
$username = "root";
$password = "";


//Создаем соединение
$conn = mysqli_connect($host, $username, $password, $dbname);
$conn->set_charset("utf8");

//Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}
// echo "Connected successfully" . "<br>";
// mysqli_close($conn);
