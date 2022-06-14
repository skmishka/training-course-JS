<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Личный сайт Михаила Скомарцева</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
	include "menu.php";
?>

<h1> Личный сайт Михаила Скомарцева </h1>s

<img src="img/photo.jpeg" width="300px">

<p><b>Добрый день! Меня зовут <i>Михаил Скомарцев</i>.
Я совсем недавно начал изучение языка JavaScript.
Это мой первый сайт.</b></p>

<p>На этом сайте будет несколько программ, которые я написал:</p>
<a href="index.php">Главная</a>
<a href="puzzle.php">Загадки</a>
<a href="guess.html">Угадайка</a>


<p>Ссылка на обучающий сай по JavaScript <a href="https://learn.javascript.ru">learn.javascript.ru</a></p>



<div class="footer">
Copyrigt &copy; <?php echo date("Y");?> Mikhail Skomartsev
</div>
</body>
</html>