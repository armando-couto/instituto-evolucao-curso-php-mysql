<?php
    require_once 'library/util.inc';
	include_once 'template/head.inc';
	$homeMenuSelected = CLASSSELECTED;
    include_once 'template/menu.inc';
    $titlePage = "Página Pricipal";
    $SubtitlePage = "Essa página é a home do sistema.";
    include_once 'template/ini_content.inc';
?> 

<h2 class="content-subhead">How to use this layout</h2>
<p>
    To use this layout, you can just copy paste the HTML, along with the CSS in 
    <a href="/css/layouts/side-menu.css" alt="Side Menu CSS">side-menu.css</a>, 
    and the JavaScript in <a href="/js/ui.js">ui.js</a>. The JS file uses vanilla 
    JavaScript to simply toggle an <code>active</code> class that makes the menu responsive.
</p>

<?php include_once 'template/fin_content.inc'; ?>