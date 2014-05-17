<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Básico</title>
    </head>
    <body>
        <?php
            $mensagem = "Estou aprendendo loopings";
            
            $i = 1;
            while($i <= 100) {
                echo $i . ' = ' . $mensagem . '<br />' . PHP_EOL;
                $i++;
            }
        ?>
    </body>
</html>