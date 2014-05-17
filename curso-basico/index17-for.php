<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Básico</title>
    </head>
    <body>
        <?php
            for ($i = 0; $i <= 10; $i++):
                echo "\$i = $i";
                echo "<br />";
            endfor;
               
            for ($i = 1; $i <= 6; $i++):
                echo "<h$i> Olá Mundo </h$i>";
            endfor;
        ?>
    </body>
</html>