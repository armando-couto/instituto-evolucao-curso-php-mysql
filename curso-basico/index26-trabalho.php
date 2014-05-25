<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Básico</title>
    </head>
    <body>
        <?php
            include "library/arrays.php";

            echo "<h1>Cidades Sedes:</h1>";
            foreach ($cidadesSedes as $cidade) {
                echo $cidade . "<br/>";
            }

            foreach ($grupos as $key => $grupo) {
                echo "<h1> Grupo {$key}</h1> <ul>";
                foreach ($grupo as $selecao) {
                    echo "<li>{$selecao}</li>";
                }
                echo "</ul>";
            }
        ?>
    </body>
</html>