<?php 
	$host = "us-mm-auto-dca-06-b.cleardb.net";
	$base = "heroku_a28bc3b3e548eb2";
	$user = "bc2ad44aedc9d6";
	$password = "6beded56";

	$conexao = mysql_connect($host, $user, $password) or die('Erro ao conectar ao banco de dados!');

	mysql_select_db($base, $conexao);

	function login($email, $password) {
		$email = mysql_real_escape_string($email);
		$password = mysql_real_escape_string($password);

		return mysql_query("SELECT id, nome, email  FROM User WHERE email = '{$email}' AND senha = MD5('{$password}') AND status <> 0 ");
	}
 ?>