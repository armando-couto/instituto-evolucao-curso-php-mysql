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
	<h3><?php echo $_GET['msg']; ?></h3>

	<form action="../library/logar.php" method="post" class="pure-form">
  		<input type="text" name="email" placeholder="Email" />
  		<input type="password" name="password" placeholder="Senha" />
  		
  		<button type="submit" class="pure-button pure-button-primary">Logar</button>
	</form>		
	
</body>
</html>