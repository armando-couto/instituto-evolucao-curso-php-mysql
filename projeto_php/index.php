<?php include("library/util.inc") ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Projeto PHP</title>
</head>
<body>
	<h1> 
		<?php 
			date_default_timezone_set('America/Fortaleza');
			echo "Passando parâmetros: " . getDayWeek(2) . " de " . getMonth(12) . "</br>"; 
			echo "Não passando parâmetros: " . getDayWeek() . "  " . getMonth() . "</br>"; 
			echo "Padrão Brasileiro: " . dateToBr(date('Y-m-d')) . "</br>";
			echo "Padrão Americano: " . dateToEn(date('d/m/Y')) . "</br>";
		?>
	</h1>
</body>
</html>