<link rel="stylesheet" href="assets/css/topbar.css">

<nav class="navbar fixed-top my-navbar">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
      <div class="col-md-4 float-left text-white">
        <large class="topbar__title" >CHICKO - панель администратора<?php //echo $_SESSION['setting_name']; ?></large>
      </div>
	  	<div class="col-md-2 float-right text-white">
	  		<a href="./index.php?page=exit" class="topbar__title"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>