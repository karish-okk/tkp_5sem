<div class="menu__intro">
    <div class="intro-menu">
        <div class="container">
            <div class="menu__intro__content">
                <div class="intro__logo">
                    <img class="logo__logo" src="/assets/img/full-logo.png">
                </div>
                <div class="intro__title">
                    <h1>меню</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="delucious" id="menu">
    <div class="container">
        <div class="delucious__list">
            <ul class="list">
                <?php 
                    include 'admin/db_connect.php';
                    $qry = mysqli_query($conn, "SELECT * FROM `category_list`");
                    while($row = mysqli_fetch_assoc($qry)) {
                ?>

                <li class="<?php if ($row['id'] == 1) echo 'one';
                elseif ($row['id'] == 2) echo 'two';
                elseif ($row['id'] == 3) echo 'three';
                elseif ($row['id'] == 4) echo 'four';
                elseif ($row['id'] == 5) echo 'five';
                ?>  list__item" data-id="<?php if ($row['id'] == 1) echo 'one';
                elseif ($row['id'] == 2) echo 'two';
                elseif ($row['id'] == 3) echo 'three';
                elseif ($row['id'] == 4) echo 'four';
                elseif ($row['id'] == 5) echo 'five';
                ?>" > <?php echo $row['name'] ?> </li>
                        
                <?php } ?>
            </ul>
            <div class="card-deck">
                <?php 
                    $qry = mysqli_query($conn, "SELECT * FROM  product_list");
                    while($row = mysqli_fetch_assoc($qry)) {
                ?>
                <div class="card-desk__element block__item <?php if($row['category_id']==1) echo 'one'; 
                        else if($row['category_id']==2) echo 'two';
                        else if($row['category_id']== 3) echo 'three';
                        else if($row['category_id']== 4) echo 'four';
                        else if($row['category_id']== 5) echo 'five';
                    ?>">
                    <div class="card-desk__content">
                        <div class="card-desk__img">
                            <img src="assets/img/<?php echo $row['img_path'] ?>" class="card-img-top" alt="">
                        </div>
                        <div class="card-desk__body">
                            <h2 class="card-title"><?php echo $row['name'] ?></h2>
                            <p class="card-text truncate"><?php echo $row['description'] ?></p>
                            <div class="card-price">
                                <h2><?php echo $row['price'] . ' &#8381'?></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            
        </div>

    </div>
</section>