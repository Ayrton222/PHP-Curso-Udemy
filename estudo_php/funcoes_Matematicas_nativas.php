<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas</title>
</head>
<body>
    <?php 

        $numero = 7.3;
        echo 'Numero original: ' .$numero;
        echo '<br />';
        echo '<br />';
        //Arredonda o valor para cima
        echo ceil($numero);
        echo '<hr>';
        //Arredonda o valor para baixo
        echo floor($numero);
        echo '<hr>';
        //Arredonda o valor com base nas casas decimais
        echo round($numero);
        echo '<hr>';
        //gera um inteiro aleatorio
        echo rand(10,20);
        echo '<hr>';

         // Retonra o valor maximo da função rand
        //  echo getrandmax();
        //  echo '<hr>';

        //Retorna a raiz quadrada
        echo  sqrt($numero);



        
    ?>
</body>
</html>