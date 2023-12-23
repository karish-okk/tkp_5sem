<?php 
    setcookie('user', $user['name'], time() - 300, "/");
    header('Location: /');
?>

