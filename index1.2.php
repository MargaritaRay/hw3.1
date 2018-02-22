<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

/*
if (isset($_GET['x'])){
	$x = $_GET['x'];
}else{
	$x = null;
}

if (isset($_GET['y'])){
	$y = $_GET['y'];
}else{
	$y = null;
}

if (isset($_GET['arithmetic'])){
	$oper = $_GET['arithmetic'];
}else{
	$oper = null;
}*/

//если переменная была установленна, передаем ее, если не была установленна, передаем null

if (isset($_GET['x']) || isset($_GET['y']) || isset($_GET['arithmetic'])){
	$x = $_GET['x'];
	$y = $_GET['y'];
	$oper = $_GET['arithmetic'];
}else{
	$x = null;
	$y = null;
	$oper = null;
};

//пришлось это все записать в функцию поскольку на $z тоже нотик жаловался 


function calc($x, $y, $oper){
	if($oper == '+'){
		if($x == null || $y == null || $oper == null){
			return 'Заполните все поля формы';
		}else{
			return  $x + $y;
		}
	}elseif ($oper == '-'){
		if($x == null || $y == null || $oper == null){
			return 'Заполните все поля формы';
		}else{
			return  $x - $y;
		}
	} elseif ($oper == '*'){
		if($x == null || $y == null || $oper == null){
			return 'Заполните все поля формы';
		}else{
			return  $x * $y;
		}
	} elseif ($oper == '/'){
		if($x == null || $y == null || $oper == null){
			return 'Заполните все поля формы';
		}else{
			return  $x / $y;
		}
	}
}

$z = cal($x, $y, $oper);
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
