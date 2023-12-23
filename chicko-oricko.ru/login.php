<?php include('admin/db_connect.php'); ?>

<section class="sign-in" >
	<div class="form-box">
		<div class="form-value">
			<form action="admin/validation-form/auth.php" id="login-form" method="post">
				<h2 class="form-box__title" >Авторизация</h2>

				<div class="inputbox">
					<ion-icon name="person-outline"></ion-icon>
					<input type="email" id="username" name="username" class="">
					<label for="username" class="">Почта</label>
				</div>
				<div class="inputbox">
					<ion-icon name="lock-closed-outline"></ion-icon>
					<input type="password" id="password" name="password" class="">
					<label for="password" class="">Пароль</label>
				</div>
				<div class="forget">
					<label for=""> <input type="checkbox"> Запомнить меня</label>
                    <br>
				</div>
				<button class="login-btn" >Войти</button>
				
			</form>
            <label for="" class="link-reg" >Нет аккаунта? <a href="index.php?page=reg">Зарегистрируйтесь</a></label>
		</div>
	</div>
</section>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

