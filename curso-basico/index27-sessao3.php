<?php
	session_start();
	if (isset($_SESSION['id'])) {
		echo "Id da sessao: " . $_SESSION['id'] . "</br>";
		session_destroy();
	} else {
		header("location: index27-sessao1.php?msg=Teste");
	}
?>