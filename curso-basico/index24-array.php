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

            echo "Removendo o Flamengo do Array";
            unset($times['rj'][1]);

            foreach($times as $keyTimes => $estados):
                echo "<ul>" . strtoupper($keyTimes);
                foreach($estados as $key => $time):
                    echo "<li>" . $time . "</li>";
                endforeach;
                echo "</ul>";
            endforeach;   
        ?>
    </body>
</html>