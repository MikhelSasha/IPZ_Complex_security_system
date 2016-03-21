<!DOCTYPE html>
<html lang="ua">
<head>
	<meta charset="UTF-8">
	<title>Security system</title>
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
		<?php
			session_start();
			if (empty($_SESSION['login']) or empty($_SESSION['id']))
    			{
			echo	'<li><a href="registration.php">Реєстрація</a></li>';
			}
			else {
				echo	'<li><a href="sugnalization.php">Сигналізація</a></li>';
			}
		?>
				<li><a href="contacts.php">Контакти</a></li>
			</ul>
		</div>
		<div class="stats">
		<?php
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
	<?php
    	if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
    	echo '<div class="modal">
				<h2>Авторизація</h2>
				<input id="radio-adm-auth" type="radio" name="auth" value="admin" checked> Адміністратор<br>
				<input id="radio-user-auth" type="radio" name="auth" value="user"> Користувач<br>
				<form action="testreg.php" method="post" class="adm-auth" id="adm-auth">
					<input type="text" name="login" size="15" maxlength="15" placeholder="Логін"><br>
					<input type="password" name="password" size="15" maxlength="15" placeholder="Пароль"><br>
					<button class="btn-auth">Увійти</button>
				</form>
				<form action="auth_user.php" method="post" class="user-auth" id="user-auth">
					<input type="email" placeholder="Email" name="email" size="25" maxlength="25"><br>
					<input type="password" placeholder="Пароль" name="password" size="11" maxlength="11"><br>
					<button class="btn-auth">Увійти</button>
				</form>
			</div>'; }
	else
   		{
   		echo	'<div class="main">
					<img src="img/cam_1.jpg">
					<img src="img/cam_2.jpg">
					<img src="img/cam_1.jpg"><br><br>
					<img src="img/cam_2.jpg">
					<img src="img/cam_1.jpg">
					<img src="img/cam_2.jpg"><br><br>
					<img src="img/cam_1.jpg">
					<img src="img/cam_2.jpg">
					<img src="img/cam_1.jpg">
   				</div>';
    } ?>
		</div>
	</div>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">
document.getElementById('radio-adm-auth').onchange = function() {
	document.getElementById("adm-auth").style="display: block;";
	document.getElementById("user-auth").style="display: none;";
};
document.getElementById('radio-user-auth').onchange = function() {
	document.getElementById("adm-auth").style="display: none;";
	document.getElementById("user-auth").style="display: block;";
};
</script>
</body>
</html>