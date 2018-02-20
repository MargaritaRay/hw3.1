<?php
//собираем значение из полей ввода ($x = <input name="x">, $y = <input name="y">)
$x = $_GET['x'];
$y = $_GET['y'];

//Собираем значение полученное из <select name="arithmetic"> (option)
$oper = $_GET['arithmetic'];

//создаем уравнение которое будет иметь разные знаки, в зависимости от выбранного пользователем значения select
if($oper == '+'){
	$z = $x + $y;
} elseif ($oper == '-'){
	$z = $x - $y;
} elseif ($oper == '*'){
	$z = $x * $y;
} elseif ($oper == '/'){
	$z = $x / $y;
};

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

<form action="index1.2.php" method="get">
	<label for="">
		<!--Выводим в значение input x введенные ранее пользователем данные-->
		<input type="number" name="x" value="<?php echo $x; ?>">
	</label>
	<select name="arithmetic" id="">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select>
	<label for="">
		<!--Выводим в значение input y введенные ранее пользователем данные-->
		<input type="number" name="y" value="<?php echo $y; ?>">
	</label>
	<label for="">
		<input type="submit" value="=">
	</label>
	<!--Выводим результат-->
	<span>  <?php echo $z; ?> </span>
</form>
</body>
</html>