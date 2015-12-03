<?php
error_reporting(-1);
header('Content-Type: text/html; charset= utf-8');

session_start();

print_r ($_SESSION);

echo '<br>';

if (isset($_POST) && !empty($_POST)) {
	$login = $_POST['login'];
	$pass = hash('ripemd160', $_POST['password']);
}

echo $login;
echo '<br>'.$pass.'<br>';

$_SESSION['login'] = $login;
$_SESSION['pass'] = $pass;


echo '<a href="continue.php">Дальше</a>';


?>