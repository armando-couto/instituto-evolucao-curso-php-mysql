<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Básico</title>
    </head>
    <body>
        <?php
            // Declaro a variável $titulo
            $titulo = 'Operadores de string no PHP ';
            
            // Concateno $titulo a $texto
            $texto = 'Estou aprendendo sobre ' . $titulo;
            
            echo $texto;
            
            echo '<br />' . PHP_EOL;
            
            // Mesmo exemplo anterior porém utilizando atribuição e concatenação
            $texto = 'Estou apresentando sobre ';
            $texto .= $titulo;
            
            echo $texto;
        ?>
    </body>
</html>