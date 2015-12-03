<?php
	error_reporting(-1);
	header('Content-Type: text/html; charset= utf-8');

	if (!empty($_GET)) {
		exit('Что-то пошло не так, попробуйте вернуться на <a href="/">главную</a> и повторить то что вы делали.');
	}



	if (!empty($_POST)) {
			echo 'Goood!!!';
		
		} else {
			exit ('Вы не заполнили необходимые поля <a href="/">Вернуться на главную</a>');
		}
?>