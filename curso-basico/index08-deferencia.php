<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Básico</title>
    </head>
    <body>
        <?php
            // Criamos a variável $b
            $b = 'Estamos aprendendo sobre';
            
            // Atribuimos por referência o valor de $b a $a,
            // ou seja, ambas agora possuem o mesmo valor
            $a = &$b;
            
            // Altero o valor de $a concatenando o com uma string caos não
            // tenha entendido a concatenação volte a operadores de string
            $a .= ' Atribuição por referência nop PHP';
            
            // Exibo $a e $b pulando linhas para melhor visualização
            echo $a;
            
            echo '<br />' . PHP_EOL;
            
            echo $b;
            
            echo '<br />' . PHP_EOL;
            
            // Alterei o valor de $b e como $b foi atribuido por refereência a 
            // $a agora quando altero $b o valor de $a muda também
            $b = 'Alterei o valor de $b e sabia que o de $a muda também?';
            
            echo $a;
            
            echo '<br />' . PHP_EOL;
            
            echo $b;
        ?>
    </body>
</html>