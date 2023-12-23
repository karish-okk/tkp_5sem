<?php include('admin/db_connect.php'); ?>

<section class="sign-in" >
	<div class="form-box">
		<div class="form-value">
			<form action="admin/validation-form/check.php" id="login-form" method="post" novalidate>
				<h2 class="form-box__title" >Регистрация</h2>

				<div class="inputbox">
					<ion-icon name="person-outline"></ion-icon>
					<input type="text" id="name" name="name" class="">
					<label for="name" class="">Имя</label>
				</div>

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
                
				<button type="submit" class="login-btn" name="button-reg">Зарегистрироваться</button>
			</form>
            <label for="" class="link-reg" >Уже есть аккаунт? <a href="index.php?page=login">Войти</a></label>
		</div>
        
	</div>
</section>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

