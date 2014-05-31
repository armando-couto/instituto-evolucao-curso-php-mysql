<?php
	session_start();
	header('Content-Type: text/html; charset=utf-8');
	echo "Id da sessão: " . $_SESSION['id'] . "</br>";
	echo "Nome: " . $_GET['name'];
?>
<br />
<a href="index27-sessao3.php">Pagina 3</a>