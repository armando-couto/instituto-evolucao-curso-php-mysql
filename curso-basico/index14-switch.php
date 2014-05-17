<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Básico</title>
    </head>
    <body>
        <?php
            $nota = 1;
            
            switch ($nota) {
                case 2:
                    echo "Você tirou dois.";
                    break;
                case 4:
                    echo "Você tirou quatro.";
                    break;
                case 7:
                case 8:
                    echo "Boa nota.";
                    break;
                case 9:
                case 10:
                    echo "Parabéns.";
                    break;
                default:
                    echo "Você está reprovado.";
                    break;
            }
        ?>
    </body>
</html>