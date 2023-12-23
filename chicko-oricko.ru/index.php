<!DOCTYPE html>
<html>

    <?php
    session_start();
    ?>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>CHICKO O'RIKO - главная</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/adresses.css">
        <link rel="stylesheet" href="css/about.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/lk.css">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;700&family=Montserrat:wght@500&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php require_once "blocks/header.php"; ?>

        <?php 
            $page = isset($_GET['page']) ?$_GET['page'] : "home";
            include $page.'.php';
        ?>
        
       <?php require_once "blocks/footer.php"; ?>

       <script src="scripts/filter.js" ></script>

    </body>

    <?php //$conn->close() ?>
</html>