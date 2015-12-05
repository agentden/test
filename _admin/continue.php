<?php
error_reporting(-1);
header('Content-Type: text/html; charset= utf-8');

session_start();

print_r ($_SESSION);

echo '<br>';

if ($_SESSION['pass'] === hash('sha512', '123')) {
	echo "Ohuitelno";
} else {
	echo 'WTF';
}

session_destroy();



?>