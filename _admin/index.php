<?php
error_reporting(-1);
header('Content-Type: text/html; charset= utf-8');

session_start();

?>

<!DOCTYPE html>
<html lang="ru">
<head>	
	<link rel="stylesheet" href="../css/admin.css">
	<meta charset="utf-8">

	<title>Вход в систему</title>
</head>
<body>
	<section>
	<H1>Вход в систему</H1>
	<p><b>Для доступа к панели управления сайтом, введите:</b></p>
		<form action="test.php" method="post">
			<table>				
				<tr>
					<label>	
					<td>Логин:</td>
					<td><input type="text" name="login" value=""></td>	
					</label>				
				</tr>			
				<tr>
					<label>
					<td>Пароль:</td>
					<td><input type="password" name="password" value=""></td>
					</label>					
				</tr>
				<tr>
					<td id="button" colspan="2"><input type="submit" value="Войти в систему" class="inp_but"></td>										
				</tr>			
			</table>
		</form>
		<hr>
		<p>CMS &copy; Liberty</p>
	</section>
		<footer>			
		</footer>
	</div>
</body>
</html>