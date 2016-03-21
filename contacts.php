<!DOCTYPE html>
<html lang="ua">
<head>
	<meta charset="UTF-8">
	<title>Security system | Контакти</title>
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
			};
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
		<div class="col-md-6">
			
		</div>
		<div class="col-md-6">
			<form action="http://formspree.io/sasha16200@gmail.com" class="main_form" novalidate target="_blank" method="post">
					<label class="form-group">
						<span class="color_element">*</span> Ваше ім'я:
						<input type="text" name="name" placeholder="Ваше ім'я" data-validation-required-message="Ви не ввели ім'я" required />
						<span class="help-block text-danger"></span>
					</label>
					<label class="form-group">
						<span class="color_element">*</span> Ваш E-mail:
						<input type="email" name="email" placeholder="Ваш E-mail" data-validation-required-message="Не корректно введено E-mail" required />
						<span class="help-block text-danger"></span>
					</label>
					<label class="form-group">
						<span class="color_element">*</span> Ваше повідомлення:
						<textarea name="message" placeholder="Ваше повідомлення" data-validation-required-message="Ви не ввели повідомлення" required></textarea>
						<span class="help-block text-danger"></span>
					</label>
					<button>Відправити</button>
				</form>
		</div>
	</div>
<script type="text/javascript" src="libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="libs/jqBootstrapValidation/jqBootstrapValidation.js"></script>
</body>
</html>