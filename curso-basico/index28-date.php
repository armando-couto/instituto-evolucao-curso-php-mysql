<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Curso Básico Data</title>
</head>
<body>
	<?php
		date_default_timezone_set('America/Fortaleza');
		
		// Exibir data e hora.
		$dataHotaAtual = date("d/m/Y h:i:s");
		echo "<h2>{$dataHotaAtual}</h2>";

		// Usando Timestamp.
		$meuTimestamp = mktime(13, 45, 22, 12, 2, 1988);
		echo "<h2>" . date("d/m/Y h:i:s", $meuTimestamp) . "</h2>";
	?>
</body>
</html>