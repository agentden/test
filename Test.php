<?php
error_reporting(-1);
header('Content-Type: text/html; charset= utf-8');

session_start();

print_r ($_SESSION);

echo '<br>';
echo $_POST['password'].'<br>';
if (isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])) {
	$login = $_POST['login'];
	$pass = hash('sha512', $_POST['password']);
} else {
	die ('Вы не заполнили необходимые поля <a href="index.php">Вернуться на главную</a>');
}


echo $login;
echo '<br>'.$pass.'<br>';

$_SESSION['login'] = $login;
$_SESSION['pass'] = $pass;


echo '<a href="continue.php">Дальше</a>';


?>