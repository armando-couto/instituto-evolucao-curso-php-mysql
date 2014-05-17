<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Básico</title>
    </head>
    <body>
        <?php
            $a = 10;
            $b = $a++;
            
            $a++;
            
            echo '$a = ' . $a . ' | $b = ' . $b , '<br />'; 
            
            $a = 10;
            $b = ++$a;
            
            ++$a;
            
            echo '$a = ' . $a . ' | $b = ' . $b;
        ?>
    </body>
</html>