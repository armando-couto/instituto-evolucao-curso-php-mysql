<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Básico</title>
    </head>
    <body>
        <?php
            $nota1 = 10;
            $nota2 = 9;
            $nota3 = 7;
            $nota4 = 5;
            
            $resultado = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
            
            if ($resultado >= 7 && $resultado < 10) {
                $mensagem = ' o Aluno foi aprovado.';
            } else if ($resultado == 0) {
                $mensagem = ' o Aluno estudou nada.';
            } else if ($resultado == 10) {
                $mensagem = ' o Aluno tirou a nota máxima.';
            } else {
                $mensagem = ' o Aluno reprovado.';
            }
            
            echo $resultado . $mensagem;
        ?>
    </body>
</html>