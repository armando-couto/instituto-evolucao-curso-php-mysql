<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Básico</title>
    </head>
    <body>
        <?php
            $str = "Seu nome é O'reilly?";
            
            echo "Mostra: Seu nome é O\'reilly?" . "<br />" ;
            echo "Addslashes " . addslashes($str) . "<br />";
            
            date_default_timezone_set('America/Fortaleza');
            $dataAtual = date("d/m/Y");
            list($dia, $mes, $ano) = explode("/", $dataAtual);
            
            echo "Explode " . "$ano-$mes-$dia" . "<br />";
            
            echo "Implode " . implode("-", array_reverse(explode("/", $dataAtual)));

            echo "<br />" . "Mostrar com SubString: 2030-05-12";
            $newDate = "12/05/2030";
            echo "<br />" . substr($newDate, 6, 9) . "-" . substr($newDate, 3, 2) . "-" . substr($newDate, 0, 2);


            $string = " Desenvolmento Web Com PHP "; 
            $dataAtual = date("d/m/Y");
            
            echo "<br />" . "TRIM - LTRIM - RTRIM" . "<br />" ;
            echo "Total de caracteres da variável \$string: " . strlen($string) . "<br />";
            $string = ltrim($string);
            echo "Total de caracteres da variável \$string: " . strlen($string) . "<br />";
            
            echo "<br />" . "md5, sha1" . "<br />" ;
            $senha = "jkhja3@o9jhonny";
            echo "MD5 de {$senha} é: ", md5($senha) , "<br /><br />";
            echo "SHA1 de {$senha} é: ", sha1($senha) , "<br />";
            
            echo "<br />" . "number_format" . "<br />";
            $preco = 0.30;
            echo "O valor do produto é: R$ " . 
            number_format($preco, 2, ",", ".");
            
            echo "<br />" . "nl2br, str_replace" . "<br />";
            $comentario = "Ola [{NOME_PESSOA}], sua matricula esta OK!";
            $pessoas = array(
                "Rodrigo",
                "Demetrio",
                "Hileo",
                "Felipe",
                "Armando"
            );
            
            foreach ($pessoas as $pessoa) {
                echo str_replace("[{NOME_PESSOA}]",$pessoa,$comentario) . "<br />";                
            }
            
            echo nl2br($comentario);
            echo $comentario;
            
            
            echo "<br />" . "str_pad" . "<br />"; 
            echo str_pad(4436, 10, 0, STR_PAD_LEFT); 
            
            echo "<br />" . "strpos, strstr" . "<br />";
            echo $dataAtual, "<br />";
            echo strpos($dataAtual, "2") . "<br />";
            
            if( strpos($dataAtual, "/") !== false )
                echo "Retorna data americana";
            else
                echo "Retorna data brasileira";
            
            echo "<br />" . "strtolower, strtoupper, ucfirst, ucwords" . "<br />";
            $mensagem = "ola brásil";
            echo strtolower($mensagem),"<br />";
            echo strtoupper($mensagem),"<br />";
            echo ucfirst($mensagem),"<br />";
            echo ucwords($mensagem),"<br />";
            
            echo "<br />" . "2030-05-12" . "<br />";
            $newDate = "12/05/2030";
            $mensagem = "Aprendendo PHP estamos aqui!";
            echo substr($mensagem, 11, 3); 
        ?>
    </body>
</html>