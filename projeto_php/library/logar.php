<?php 
	session_start();

	if ($_POST['email'] != null && $_POST['password'] != null) {
		include "conexao.php";
		$result = login($_POST['email'], $_POST['password']);
		$_SESSION['dados'] = $result;


		// header("Location: http://projeto-php.herokuapp.com/");
		header("Location: http://localhost/~armandocouto/projeto_php/");
	} else {
		header("Location: http://localhost/~armandocouto/projeto_php?msg='Erro'");
	}
 ?>