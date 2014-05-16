<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Básico</title>
    </head>
    <body>
        <?php
            echo var_dump(true & true) . '<br />';
            
            echo var_dump(true && true) . '<br />';
            
            echo var_dump(false OR false) . '<br />';
            
            echo var_dump(false AND false) . '<br />';
            
            echo var_dump(10>8 XOR 7>9 AND 67<8 AND 8>7) . '<br />';
            
            echo var_dump(!8<7) . '<br />';
            
            echo var_dump(12 ^ 9) . '<br />';
        ?>
    </body>
</html>