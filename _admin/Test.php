<?php
error_reporting(-1);
header('Content-Type: text/html; charset= utf-8');

session_start();

require_once '../control/login.php';

$connection  =  new  mysqli($db_hostname,  $db_username,  $db_password,  $db_database);
if ($connection->connect_error) die($connection->connect_error);

$query = "SELECT * FROM access";
$result = $connection->query($query);

if (!$result) die($connection->error);
$rows = $result->num_rows;

for ($j = 0 ; $j < $rows ; ++$j)
{
$result->data_seek($j);
$row = $result->fetch_array(MYSQLI_ASSOC);
}

if ($result->fetch_assoc()['login'] = $_POST['login'] && $result->fetch_assoc()['password'] = hash('sha512', $_POST['password'])) {
	echo "Какой красавчик, смог таки)))";
} else {
	die ('Где-то косяк, надо искать <a href="index.php">Вернуться на главную</a>');
}

//$_SESSION['login'] = $login;
//$_SESSION['pass'] = $pass;
//echo '<a href="continue.php">Дальше</a>';

$result->close();
$connection->close();

?>