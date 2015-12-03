<?php
	error_reporting(-1);
	header('Content-Type: text/html; charset= utf-8');
?>

<!DOCTYPE html>
<html lang="ru">
<head>	
	<link rel="stylesheet" href="css/style.css">
	<meta charset="utf-8">

	<title>Новый сайт</title>
</head>
<body>
	<div class="main">
		<header>
			<nav>
				<ul>
					<li><a href="Test.php">Тесты</a></li>
					<li><a href="#">о нас</a></li>
					<li><a href="#">услуги</a></li>
					<li><a href="#">новости</a></li>
					<li><a href="#">контакты</a></li>
				</ul>
			</nav>
		</header>
		<section>
			<form action="test.php" method="post">
			<label><p>Введите желаемый логин: 
				<input type="text" name="login" value="Ваш логин">
				</p>
			</label>
			<label><p>Придумайте пароль: 
					<input type="password" name="password" value="">
				</p>
			</label>
			<input type="submit" value="Отправить">
			</form>
		</section>
		<footer>
			
		</footer>
	</div>
</body>
</html>