<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Básico</title>
    </head>
    <body>
        <?php
            $mensagem = "Brasil";
            $mensagem2 = "Campeão";
            $pontos = 99;
            
            echo $mensagem . " " . $mensagem2 . "<br />";
            print $mensagem . " " . $mensagem2 . "<br />";
            printf("O %s será %s com total de %d <br/>", $mensagem, $mensagem2, $pontos);
            
            echo "<pre>";
            $frutas = array(
              "Laranja",  
              "Manga",
              "Uva"
            );
            print_r($frutas);
            echo "</pre>";
        ?>
    </body>
</html>