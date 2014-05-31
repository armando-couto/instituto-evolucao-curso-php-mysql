<?php
	if (isset($_GET['msg'])) {
		echo "<h1>" . $_GET['msg'] . "</h1>";
	}
	session_start();
	$_SESSION['id'] = 1;
?>
<br />
<a href="index27-sessao2.php?name=Armando">Pagina 2</a>