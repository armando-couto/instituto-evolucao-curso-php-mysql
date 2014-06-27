<?php 
    switch(dirname($_SERVER['SCRIPT_NAME'])) {
        case "/~armandocouto/curso-php-mysql/projeto_php":
        case "/~armandocouto/curso-php-mysql/projeto_php/pages/about":
        case "/~armandocouto/curso-php-mysql/projeto_php/pages/news":
        case "/~armandocouto/curso-php-mysql/projeto_php/pages/people":
           $path = 'http://localhost/~armandocouto/curso-php-mysql/projeto_php';
           break;
        case "http://projeto-php.herokuapp.com":
        case "http://projeto-php.herokuapp.com/pages/about":
        case "http://projeto-php.herokuapp.com/pages/news":
        case "http://projeto-php.herokuapp.com/pages/people":
            $path = 'http://projeto-php.herokuapp.com';
            break;
    }   
 ?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Sistema simples de php.">
	<meta name="description" content="Sistema simples de php.">

    <title>Sistema simples em PHP</title>

	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="/combo/1.16.1?/css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="<?php echo $path; ?>/resources/css/layouts/side-menu.css">
    <!--<![endif]-->
    
	<!--[if lt IE 9]>
	    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
	<![endif]-->
</head>
<body>