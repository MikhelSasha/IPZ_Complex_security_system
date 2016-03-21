<!DOCTYPE html>
<html lang="ua">
<head>
	<meta charset="UTF-8">
	<title>Security system | Реєстрація</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid.min.css" />
</head>
<body>
	<header class="shadow">
		<div class="logo">
			<img src="img/security.png">
		</div>
		<div class="menu">
			<ul>
				<li><a href="index.php">Головна</a></li>
				<li><a href="registration.php">Реєстрація</a></li>
				<li><a href="contacts.php">Контакти</a></li>
			</ul>
		</div>
		<div class="stats">
		<?php
			session_start();
    		if (empty($_SESSION['login']) or empty($_SESSION['id']))
    			{
    			echo "Ви ввійшли на сайт, як гість";
    			}
    		else
    			{
    			echo "Ви ввійшли на сайт, як <span class='user-name'>".$_SESSION['login']."</span>";
    			?>
    			<form method="post" action="index.php">
	       			<input class="logout" type="submit" name="logout" value="Вийти">
             	</form>
    			<?php
    			}
			if(isset($_POST['logout'])){
			  unset($_SESSION['login']);
			  session_destroy();
			  echo "<script>javascript:window.location='http://site.local'</script>";
			}
		?>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<div class="modal">
				<h2>Реєстрація</h2>
				<input id="radio-adm-reg" type="radio" name="auth" value="admin" checked> Адміністратор<br>
				<input id="radio-user-reg" type="radio" name="auth" value="user"> Користувач<br>
				<form action="reg_admin.php" class="adm-reg" id="adm-reg">
					<input type="text" name="login" placeholder="Логін"><br>
					<input type="email" name="email" placeholder="Email"><br>
					<input type="password" name="password" placeholder="Пароль"><br>
					<img class="captcha" src="captcha.php" /><br>
					<input type="text" name="captcha_code" placeholder="Captcha"><br>
					<button class="btn-reg">Зареєструватись</button>
				</form>
				<form action="reg_user.php" class="user-reg" id="user-reg">
					<input type="text" name="login" placeholder="Ім'я"><br>
					<input type="text" name="login" placeholder="Прізвище"><br>
					<input type="email" name="email" placeholder="Email"><br>
					<input type="password" name="password" placeholder="Пароль"><br>
					<img class="captcha" src="captcha.php" /><br>
					<input type="text" name="captcha_code" placeholder="Captcha"><br>
					<button class="btn-reg">Зареєструватись</button>
				</form>
			</div>
		</div>
	</div>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>