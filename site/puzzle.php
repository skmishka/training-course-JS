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

<h1> Загадки </h1>

	<?php
		if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2'])){


			$userAnswer = $_GET["userAnswer1"];
			$score = 0;
			if($userAnswer == "лампочка" || $userAnswer == "лампа"){
				$score++;
			}

			$userAnswer = $_GET["userAnswer2"];
			if($userAnswer == "лось" || $userAnswer == "олень"){
				$score++;
			}

			echo "Вы угадали " . $score . " загадок";
		}
	?>
<form method="GET">

<p>Висит груша, нельзя скушать. Что это?</p>
<input type="text" name="userAnswer1">

<p>Кто живет в лесу с рогами?</p>
<input type="text" name="userAnswer2">
<br>
<p></p>
<input type="submit" value="Ответить" name="">
</form>
<br>
<p></p>
<div class="footer">
Copyrigt &copy;2022 Mikhail Skomartsev
</div>
</body>
</html>