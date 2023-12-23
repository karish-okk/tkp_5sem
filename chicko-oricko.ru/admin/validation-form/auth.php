<?php

include '../db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = filter_var(trim($_POST['username']), FILTER_DEFAULT);
    $password = filter_var(trim($_POST['password']), PASSWORD_DEFAULT);

    $password = md5($password . "fdwkmr43krew");

    // Подготовка и выполнение SQL-запроса
    $result = $conn->query("SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'");
    $user = $result->fetch_assoc();

    if (count($user) == 0) {
        // Пользователь не найден, установка сообщения об ошибке
        $error_message = "Неверное имя пользователя или пароль";
    } else {
        // Пользователь найден, установка куки и перенаправление
        setcookie('user', $user['name'], time() + 3600, "/");
        $conn->close();
        header('Location: /index.php?page=lk');
        exit();
    }
}

// $name = filter_var(trim($_POST['name']), FILTER_DEFAULT);

// $username = filter_var(trim($_POST['username']), FILTER_DEFAULT);

// $password = filter_var(trim($_POST['password']), PASSWORD_DEFAULT);



// $password = md5($password."fdwkmr43krew");


// // Подготовка и выполнение SQL-запроса
// include '../db_connect.php';
// $result = $conn -> query("SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'");
// $user = $result -> fetch_assoc();

// if (count($user) == 0) {
//     echo "Пользователь не найден";
//     exit();
// }

// setcookie('user', $user['name'], time()+ 6300, "/");



// $conn->close();

// header('Location: /lk.php');
?>