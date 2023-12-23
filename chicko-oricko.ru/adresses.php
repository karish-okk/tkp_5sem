<div class="menu__intro">
    <div class="intro-adreses">
        <div class="container">
            <div class="menu__intro__content">
                <div class="intro__logo">
                    <img class="logo__logo" src="/assets/img/full-logo.png">
                </div>
                <div class="intro__title">
                    <h1>Адреса</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cart-list">
	<div class="container">
		<div class="adress__content">
            <?php 
                include 'admin/db_connect.php';
                $qry = $conn -> query("SELECT * FROM  reataurant");
                while($row = $qry -> fetch_assoc()) {
            ?>

			<article class="one-adress">
				<div class="one-adress__info">
					<div>
						<img src="/assets/img/<?php echo $row['img_path']. '.jpg' ?>">
					</div>
                    <div>
                        <h2><?php echo $row['adress']; ?></h2>
                        <p><?php echo 'м. '.$row['metro']; ?></p>
                        <a href="<?php echo $row['link-adress'];?>"><button>Маршрут</button></a>
                    </div>
                </div>
                </article>
			<?php } ?>
		</div>
	</div>
</div>