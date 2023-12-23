<?php 
if($_COOKIE['user'] == ''):
    include('login.php')
?>

<?php else: ?>
<div class="menu__intro">
    <div class="intro-adreses">
        <div class="container">
            <div class="menu__intro__content">
                <div class="intro__logo">
                    <img class="logo__logo" src="/assets/img/full-logo.png">
                </div>
                <div class="intro__title">
                    <h1>Личный кабинет</h1>
                </div>
            </div>
        </div>
    </div>
</div>


<div>
	<div class="container">
        <div class="personal-kabinet">
            <p class="personal-kabinet__title" >Привет, <?= $_COOKIE['user']?>. Чтобы выйти, нажмите <a href="index.php?page=exit">здесь</a></p>
            <div class="card">
                <img src="assets/img/card.png" alt="" width="200px" >
                <p class="card__text" >Покажи qr-код на кассе и получи скидку 10%</p>
            </div>

            <?php 
            include 'admin/db_connect.php';
            $qry = $conn -> query("SELECT * FROM  users where `name` = '$name'");
            while($row = $qry -> fetch_assoc()) {
                echo $row['name'];
                if ($row['type'] == 1) { ?>
            
            <?php }} ?> 
            <p class="personal-kabinet__title" ><a href="admin/index.php">Настройки сайта и работа с бд</a></p>
        </div>
		
	</div>
</div>


    

<?php endif; ?> 