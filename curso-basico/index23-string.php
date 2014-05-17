<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Básico</title>
    </head>
    <body>
        <?php
            $str = "Seu nome é O'reilly?";
            
            // Mostra: Seu nome é O\'reilly?
            echo "Addslashes " . addslashes($str) . "<br />";
            
            date_default_timezone_set('America/Fortaleza');
            $dataAtual = date("d/m/Y");
            list($dia, $mes, $ano) = explode("/", $dataAtual);
            
            echo "Explode " . "$ano-$mes-$dia" . "<br />";
            
            echo "Implode " . implode("-", array_reverse(explode("/", $dataAtual)));
        ?>
    </body>
</html>