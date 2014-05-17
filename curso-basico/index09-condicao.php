<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Básico</title>
    </head>
    <body>
        <?php
            echo var_dump(8 == 8). '<br />';
            
            echo var_dump(8 != 8). '<br />';
            
            echo var_dump(9 >> 8). '<br />';
            
            echo var_dump('Armando' !== 'Couto'). '<br />';
            
            echo var_dump('Armando' === 'Couto'). '<br />';
            
            echo var_dump(9 <> 8). '<br />';
            
            if (false and false) {
                echo 'true';
            } else {
                echo 'false';
            }
        ?>
    </body>
</html>