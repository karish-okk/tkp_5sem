<?php
if (empty($_POST['name'])) {
    die('Введите имя');
}
$name = filter_var(trim($_POST['name']), FILTER_DEFAULT);


if(!filter_var($_POST['username'], FILTER_VALIDATE_EMAIL)) {
    die('некорректный адрес e-mail почты');
}
$username = filter_var(trim($_POST['username']), FILTER_VALIDATE_EMAIL);

$password = filter_var(trim($_POST['password']), PASSWORD_DEFAULT);




if(mb_strlen($name) < 1 || mb_strlen($name) > 40) {
    echo'Недопустимая длина имени';
    exit;
}
else if(mb_strlen($username) < 6 || mb_strlen($username) > 100) {
    echo'Недопустимая длина почты';
    exit;
}

$password = md5($password."fdwkmr43krew");


// Подготовка и выполнение SQL-запроса
include '../db_connect.php';
$sql = "INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES (NULL, '$name', '$username', '$password')";
$conn->query("INSERT INTO `users` (`name`, `username`, `password`) VALUES ('$name', '$username', '$password')");

$conn->close();

header('Location: /')
?>