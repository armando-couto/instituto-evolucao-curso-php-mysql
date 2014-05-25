<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Básico</title>
    </head>
    <body>
        <?php
            $times = array(
               'ce' => array(
                    'Fortaleza',
                    'Ceará',
                    'Ferroviário'
                ),
               'rj' => array(
                    'Botafogo',
                    'Flamengo',
                    'Vasco'
                ),
               'ac' => array(
                    'Rio Branco'
                )
            );

            if ( isset($times) && !empty($times) && is_array($times))
                echo "É um array!";
            else
                echo "Não é um array!";
        ?>
    </body>
</html>