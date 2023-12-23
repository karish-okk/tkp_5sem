<?php 
//ПОДКЛЮЧЕНИЕ К БАЗЕ ДАННЫХ
$conn= new mysqli('localhost','root','','chicko')or die("Could not connect to mysql".mysqli_error($con));

// $driver = 'mysql';
// $host = 'localhost';
// $db_name = 'chicko';
// $db_user = 'root';
// $db_pass = '';
// $charset = 'utf8';
// $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

// try {
//     $pdo = new PDO($driver:host=$host;db_name=$db_name;charset=$charset, $db_user, $db_pass, $options);
// }catch(PDOException $e) {
//     die("Ошибка подключения к базе данных");
// }
?>