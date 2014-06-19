<?php include("library/util.inc") ?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title>Sistema simples em PHP</title>

	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="/combo/1.16.1?/css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/side-menu.css">
    <!--<![endif]-->
    
	<!--[if lt IE 9]>
	    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
    <?php 
    	$homeMenuSelected = CLASSSELECTED;
	    include("template/menu.inc");
	    $titlePage = "Página Pricipal";
	    $SubtitlePage = "Essa página é a home do sistema.";
	    include("template/ini_content.inc");
    ?>
    <h2 class="content-subhead">How to use this layout</h2>
    <p>
        To use this layout, you can just copy paste the HTML, along with the CSS in <a href="/css/layouts/side-menu.css" alt="Side Menu CSS">side-menu.css</a>, and the JavaScript in <a href="/js/ui.js">ui.js</a>. The JS file uses vanilla JavaScript to simply toggle an <code>active</code> class that makes the menu responsive.
    </p>
    <?php include("template/fin_content.inc"); ?>
</body>
</html>