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

        $texto  = 'Curso de PHP';

        echo 'String Original: ' .$texto;
        echo "<br />";
        echo "<br />";
        //Transforma os dados para minusculo
        echo strtolower($texto);
        echo "<hr>";
        // transforma os dados para maiuscula
        echo strtoupper($texto);
        echo "<hr>";
        //transforma o primeiro caracter em maiuscula
        echo ucfirst($texto) ;
        echo "<hr>";
        //Conta quantidade de caracter
        echo strlen($texto);
        echo "<hr>";;
        //substitui uma cadeia de caracter por outra
        echo str_replace('PHP', 'JavaScript',$texto);
        echo "<hr>";
        //retorna parte de uma string
        echo substr($texto, 1, 4);
    ?>
</body>
</html>