<?php include('admin/db_connect.php'); ?>

<!-- Интро  -->
<div class="intro__video">
    <div class="video">
        <video class="video__media" src="/assets/video/intro.mp4" autoplay muted loop></video>
    </div>
    <div class="intro">
        <div class="container">
            <div class="intro__content">
                <div class="intro__logo">
                    <img class="logo__logo" src="/assets/img/full-logo.png">
                </div>
                <div class="intro__title">
                    <h1>Любовь —<br>главный ингредиент</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Блок О нас кратко  -->
<section class="section">
    <div class="container">
        <div class="contant1">
            <div class="contant1__column">
                <div class="contant1__title">
                    <h3>Чико Рико —</h3>
                    <p>это самое популярное место <span>с корейским стритфудом в Москве.</span> 
А сейчас ещё появляются точки в разных городах России.</p>
                    <p><span>Миссия CHICKO создать в Москве маленькую Корею.</span> Дать возможность побывать в стране мечты тем, кто не может это сделать.</p>
                    <button type="button" class="contant1__button"><a href="index.php?page=about">Читать еще ></a></button>
                </div>
            </div>
            <div class="contant1__column">
                <img src="/assets/img/photo1.jpg" id="photo1">
                <img src="/assets/img/photo2.jpg" id="photo2">
            </div>
        </div>
    </div>
</section>

<section class="delucious" id="menu">
    <div class="container">
        <div class="delucious__title">
            <p>Популярное из меню</p>
        </div>
        <div id="menu-field" class="card-deck">
            <?php 
                include 'admin/db_connect.php';
                $count = 0;
                $qry = $conn->query("SELECT * FROM  product_list order by rand() ");
                while(($row = $qry->fetch_assoc()) && ($count < 3)) {
                    if ($row['demand'] == "Популярное") {
            ?>
            <div class="card-desk__element">
                <div class="card-desk__content">
                    <div class="card-desk__img">
                        <img src="assets/img/<?php echo $row['img_path'] ?>" class="" alt="">
                    </div>
                    <div class="card-desk__body">
                        <h2 class="card-title"><?php echo $row['name'] ?></h5>
                        <p class="card-text truncate"><?php echo $row['description'] ?></p>
                        <div class="card-price">
                            <h2><?php echo $row['price'] . ' &#8381'?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <?php $count++; }} ?>
        </div>
        <div class="k-menu">
            <a href="index.php?page=menu"><button type="button">К меню ></button></a>
        </div>
    </div>
</section>