<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login do Sistema</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">

	<!--[if lte IE 8]>	  
	    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-old-ie-min.css">
	<![endif]-->
	<!--[if gt IE 8]><!-->
	    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
	<!--<![endif]-->

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/blog-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/blog.css">
    <!--<![endif]-->
</head>
<body>
	<fieldset>
        <legend>Projeto em PHP</legend>

		<form action="main.php" method="post" class="pure-form">
	  		<input type="text" id="user" placeholder="Usuário" />
	  		<input type="password" id="password" placeholder="Senha" />

	  		<label for="remember">
	            <input id="remember" type="checkbox"> Remember me
	        </label>
	  		<button type="submit" class="pure-button pure-button-primary">Sign in</button>
		</form>		
	</fieldset>
</body>
</html>