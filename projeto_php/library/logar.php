<?php 
	session_start();

	$errors = array();

	if (!isset($_POST['email'], $_POST['password']))
		$errors[] = "Acesso Negado!";

	if (empty($_POST['email']) || empty($_POST['password']))
		$errors[] = "Dados de acesso não informados!";

	if (empty($errors)) {
		include "conexao.php";
		$result = login($_POST['email'], $_POST['password']);

		if (mysql_num_rows($result) == 1) {
			$_SESSION['dados'] = mysql_fetch_assoc($result);
		} else {
			$errors[] = "Dados incorretos.";
		}
	}

	echo "<pre>"; print_r($errors); die();

	if ( !empty($errors)) {
		$qr = http_build_query(array('errors' => $errors));
		// header("Location: http://projeto-php.herokuapp.com/modules/login.php?" . http_build_query(array('errors' => $erros)));
		header("Location: http://localhost/~armandocouto/projeto_php/modules/login.php?{$qr}");
	} else {
		// header("Location: http://projeto-php.herokuapp.com/");
		header("Location: http://localhost/~armandocouto/projeto_php/");
	}
 ?>	