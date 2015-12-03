<?php
error_reporting(-1);
header('Content-Type: text/html; charset= utf-8');

session_start();

?>

<!DOCTYPE html>
<html lang="ru">
<head>	
	<link rel="stylesheet" href="css/admin.css">
	<meta charset="utf-8">

	<title>Админка</title>
</head>
<body>
	<section>
		<form action="test.php" method="post">
			<label><p>Логин: 
				<input type="text" name="login" value="Ваш логин">
				</p>
			</label>
			<label><p>Пароль: 
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