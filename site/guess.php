<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Личный сайт Михаила Скомарцева</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">
		
		var answer = parseInt(Math.random() * 100);
		var tryCount = 0;
		var maxTryCount = 3;

		function readInt(){
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
			// return +document.getElementById("userAnswer").value;
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function guess(){
			tryCount++;

			var userAnswer = readInt();
			if(userAnswer == answer){
				write("<b>Поздравляю, вы угадали!</b>");
				hide("button");
				hide("userAnswer");
			} else if(tryCount >= maxTryCount){
				write("Вы проиграли<br>Правильный ответ: " + answer);
				hide("button");
				hide("userAnswer");
			} else if(userAnswer > answer){
				write("Вы ввели слишком большое число<br>Попробуйте еще раз. Введите число от 1 до 100");
			} else if(userAnswer < answer){
				write("Вы ввели слишком маленькое число<br>Попробуйте еще раз. Введите число от 1 до 100");				
			}
		}

	</script>
</head>
<body>
<?php
	include "menu.php";
?>

<h1> Игра угадайка </h1>
	<p id="info">Угадайте число от 0 до 100</p>
	<input type="text" id="userAnswer">
	<br>
	<p></p>
	<a href="#" onClick="guess();" id="button">Начать</a>



<p></p>

<div class="footer">
Copyrigt &copy;2022 Mikhail Skomartsev
</div>
</body>
</html>