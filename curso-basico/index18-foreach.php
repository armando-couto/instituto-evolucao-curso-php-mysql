<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Básico</title>
    </head>
    <body>
        <?php
            $arrayCarro = array();
            $arrayCarro[0] = "Ferari";
            $arrayCarro["carro"] = "Fusca";
            
            foreach ($arrayCarro as $carro):
                echo $carro . "<br />";
            endforeach;
            
            foreach ($arrayCarro as $key => $carro):
                echo "Chave ". $key . ", " . $carro . "<br />";
            endforeach;
        ?>
    </body>
</html>